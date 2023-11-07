<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class TaskOverview extends Component
{
    public $tasks;
    public $selectedTask = null;

    public function mount()
    {
        $this->tasks = Task::with('status')->get();
    }

    public function new()
    {
        $this->dispatch('task-selected');
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.tasks.task-overview');
    }
}
