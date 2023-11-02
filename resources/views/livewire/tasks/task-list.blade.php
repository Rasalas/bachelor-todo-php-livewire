<div class="task-list">
    <div>
        <h3 class="task-list__title text-secondary mb-2">
            ((status.icon|status.color)) ((status.key))
        </h3>
        <ul>
            @foreach ($tasks as $task)
                <livewire:tasks.task-entry :task="$task" :key="$task->id" />
            @endforeach
        </ul>
    </div>
</div>
