@extends('layouts.app')

@section('content')
<div class="w-full">
    <div class="">
        <div class="">
            <div class="">
                <div class="text-center">
                <div class="text-center bg-green-600 m-4 p-4 text-white">
                    <div class="text-4xl p-2 font-bold">{{ __('Receive Rewards For Your Vegan Efforts!') }}</div>
                </div>

                    @livewire('vegan-rewards-item-list')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
