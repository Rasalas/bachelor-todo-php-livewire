<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class TaskEntry extends Component
{
    public $task;
    protected $listeners = ['task-updated' => 'refreshTask'];


    public function mount($task)
    {
        $this->task = $task;
    }

    public function setSelected(Task $task)
    {
        
        $this->dispatch('task-selected', $task);
    }

    public function delete()
    {
        $this->task->delete();
        $this->dispatch('task-deleted', $this->task);
    }

    public function refreshTask(Task $updatedTask)
    {
        if ($updatedTask) {
            if ($this->task->id == $updatedTask->id) {
                $this->task = $updatedTask;
            }
        }
    }

    public function render()
    {
        return view('livewire.tasks.task-entry');
    }
}
