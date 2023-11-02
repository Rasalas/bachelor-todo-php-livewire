<form wire:submit.prevent="save">
    <input type="hidden" wire:model="id" />
    <div class="mb-3">
        <label class="form-label" for="title">
            Title
        </label>
        <input type="text" class="form-control" wire:model.defer="title" />
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">
            Description <small>(optional)</small>
        </label>
        <textarea class="form-control" rows="5" wire:model.defer="description"></textarea>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">
            Status
        </label>
        <select class="form-select" aria-label="Status" wire:model.defer="status">
            <option value="todo">Todo</option>
            <option value="backlog">Backlog</option>
            <option value="waiting">Waiting</option>
            <option value="review">Review</option>
            <option value="done">Done</option>
            <option value="cancelled">Cancelled</option>
        </select>
    </div>
    <button class="btn btn-primary">Save Quest</button>
</form>
