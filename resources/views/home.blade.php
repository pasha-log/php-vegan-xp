@extends('layouts.app')

@section('content')
<div class="w-full">
    <div class="">
        <div class="">
            <div class="">
                <div class="text-center text-4xl p-4">{{__('Welcome, ')}}{{ $user->first_name }}!</div>

                <div class="text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="text-4xl p-2 font-bold">{{ __('Complete Vegan Actions Today And Help Make The Planet A Better Place') }}</div>

                    @livewire('vegan-action-item-list')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
