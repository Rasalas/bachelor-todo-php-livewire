<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use App\Models\TaskStatus;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class TaskList extends Component
{
    public $statuses;

    protected $listeners = [
        'task-deleted' => 'onTaskDeleted',
        'task-updated' => 'refreshTasks',
        'task-created' => 'refreshTasks',
    ];

    public function mount($statuses)
    {
        $this->statuses = $statuses;
    }

    public function refreshTasks()
    {
        $this->statuses = TaskStatus::with('tasks')->get();
        dd($this->statuses);
    }

    public function onTaskDeleted()
    {
        $this->statuses = TaskStatus::with('tasks')->get();
    }

    public function render()
    {
        return view('livewire.tasks.task-list');
    }
}
