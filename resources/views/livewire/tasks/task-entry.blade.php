<li :key="{{$task->id}}" wire:click="setSelected({{$task}})" class="shadow-sm">
    {{ $task->title }}
    <button class="btn float-end py-0" type="button" wire:click.stop="delete({{$task->id}})">
        <i class="fas fa-trash"></i>
    </button>
</li>
