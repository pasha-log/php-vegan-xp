@extends('layouts.app')

@section('content')
<div class="flex justify-center flex-col ">
    <div class="text-4xl mt-40 font-bold text-white  self-center">{{ __('Vegan Activism Leaderboard') }}</div>
    @livewire('user-table')
</div>
@endsection
