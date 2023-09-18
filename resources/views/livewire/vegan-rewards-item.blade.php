<div class="grid justify-items-center text-center border-2 border-slate-700 p-2 bg-green-300">
    <h1 class="text-8xl m-4">{{ $item->icon }}</h1>
    <h2 class="font-bold">{{ $item->title }}: {{ $item->xp_requirement }} XP</h2>
    <p>{{ $item->description }}</p>
    @if ($item->xp_requirement <= $totalVeganXP)
    <button class="m-2 p-4 border-2 rounded-lg bg-green-600 text-white hover:bg-yellow-400">{{ __('Claim!') }}</button>
    @else
    <button class="m-2 py-4 px-6 border-2 rounded-lg bg-green-600 text-white">{{ __('🔒') }}</button>
    @endif
</div>

