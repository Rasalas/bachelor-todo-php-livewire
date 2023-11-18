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

    public function refreshTask()
    {
        // do nothing - this refreshes the entry on its own
    }

    public function render()
    {
        return view('livewire.tasks.task-entry');
    }
}
