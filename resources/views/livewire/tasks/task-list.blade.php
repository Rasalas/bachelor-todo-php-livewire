<div class="task-list">
    @foreach ($statuses as $status)
    <div>
        <h3 class="task-list__title text-secondary mb-2">
            <i class="fas fa-{{$status->icon}} text-{{$status->color}}"></i>
            {{$status->name}}
        </h3>
        <ul>
            @foreach ($status->tasks as $task)
                <livewire:tasks.task-entry :task="$task" :key="$task->id" />
            @endforeach
        </ul>
    </div>
    @endforeach
</div>
