<div>
    @foreach ($items as $item)
        <livewire:vegan-action-item :item="$item" :wire:key="$item->id" />
    @endforeach
</div>
