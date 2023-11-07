<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use App\Models\TaskStatus;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;

class TaskForm extends Component
{
    public $id;
    public $task;

    public $title;
    public $description;
    public $status;

    protected $listeners = ['task-selected' => 'selectTask'];

    // Initialisiere die Eigenschaften mit den Werten von $task
    public function mount($task = null)
    {
        $this->task = $task;
        
        if ($this->task) {
            $this->title = $this->task->title;
            $this->description = $this->task->description;
            $this->status = $this->task->status;
        }
    }

    // Speichere die Daten in der Datenbank
    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string|in:todo,backlog,waiting,review,done,cancelled',
        ]);

        $statusKey = $this->status;
        $status = TaskStatus::where('key', $statusKey)->firstOrFail();

        $taskData = [
            'title' => $this->title,
            'description' => $this->description,
            'status_id' => $status->id,
        ];
        
        if (!empty($this->id)) {
            $task = Task::find($this->id);
            if($task){
                $task->update($taskData);
    
                $this->dispatch('task-updated', $task);
            }
        } else {
            $task = Task::create($taskData);
            $this->id = $task->id;

            $this->dispatch('task-created', $task);
        }

        $this->reset('title', 'description');
    }

    public function selectTask(Task $task)
    {
        $this->task = $task;
        $this->id = $task->id;
        $this->title = $task->title;
        $this->description = $task->description;
        $this->status = $task->status->key ?? 'waiting';
    }

    public function render()
    {
        return view('livewire.tasks.task-form');
    }
}
