<div class="grid justify-items-center text-center border-2 border-slate-700">
    <h1 class="text-8xl">{{ $item->icon }}</h1>
    <h2 class="font-bold">{{ $item->title }}: {{ $item->xp_amount }} XP</h2>
    <p>{{ $item->description }}</p>
    <button class="p-4 border-2 rounded-lg bg-green-700 text-white hover:bg-yellow-400">{{ __('Complete!') }}</button>
</div>
