<div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-2">
    @foreach ($items as $item)
        <livewire:vegan-action-item :item="$item" :wire:key="$item->id" />
    @endforeach
</div>
