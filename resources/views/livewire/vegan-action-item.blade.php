<div wire:poll="refreshComponent" class="grid justify-items-center text-center border-2 border-slate-700 p-2 bg-green-300">
    <h1 class="text-8xl m-4">{{ $item->icon }}</h1>
    <h2 class="font-bold">{{ $item->title }}: {{ $item->xp_amount }} XP</h2>
    <p>{{ $item->description }}</p>
    @if (in_array($item->id, $completedVeganActions))
    <button class="m-2 p-4 border-2 rounded-lg text-white bg-yellow-400">{{ __('Completed!') }}</button>
    @else
    <button wire:click="processCompletedVeganActionData({{ $item->id }})" class="m-2 p-4 border-2 rounded-lg bg-green-600 text-white hover:bg-yellow-400">{{ __('Complete!') }}</button>
    @endif
</div>
