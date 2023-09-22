<div wire:poll="refreshRewardComponent" class="grid justify-items-center text-center border-2 rounded border-slate-700 p-2 bg-green-300">
    <h1 class="text-8xl m-4">{{ $item->icon }}</h1>
    <h2 class="font-bold">{{ $item->title }}: {{ $item->xp_requirement }} XP</h2>
    <p>{{ $item->description }}</p>



    @if (in_array($item->id, $acceptedVeganRewards))
    <button class="m-2 p-4 border-2 rounded-lg text-white bg-yellow-400">{{ __('Claimed!') }}</button>
    @elseif ($item->xp_requirement <= $totalVeganXP)
    <button wire:click="claimReward({{ $item->id }})" class="m-2 p-4 border-2 rounded-lg bg-green-600 text-white hover:bg-yellow-400">{{ __('Claim!') }}</button>
    @else
    <button class="m-2 py-4 px-6 border-2 rounded-lg bg-green-600 text-white">{{ __('🔒') }}</button>
    @endif
</div>

