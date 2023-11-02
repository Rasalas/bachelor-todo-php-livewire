<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class TaskList extends Component
{
    public $tasks;

    protected $listeners = [
        'task-deleted' => 'onTaskDeleted',
        'task-updated' => 'refreshTasks',
        'task-created' => 'refreshTasks',
    ];

    public function mount($tasks)
    {
        $this->tasks = $tasks;
    }

    public function refreshTasks()
    {
        $this->tasks = Task::all();
    }

    public function onTaskDeleted()
    {
        $this->tasks = Task::all();
    }

    public function render()
    {
        return view('livewire.tasks.task-list');
    }
}
