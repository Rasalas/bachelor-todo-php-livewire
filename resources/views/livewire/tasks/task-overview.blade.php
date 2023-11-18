<div class="container">
    <div class="row">
        <div class="col-md-12">
            <header class="col-md-12 mt-4 d-flex justify-content-between align-items-center">
                <h1>Quests</h1>
                <button class="btn btn-primary" wire:click="new">
                    + New
                </button>
            </header>
        </div>
        <div class="col-md-6">
            <livewire:tasks.task-list :statuses="$statuses" />
        </div>
        <div class="col-md-6">
            <livewire:tasks.task-form :task="$selectedTask" />
        </div>
    </div>
</div>
