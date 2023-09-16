@extends('layouts.app')

@section('content')
<div class="grid grid-cols-2 shadow-lg rounded m-8 bg-green-600">
    <di>
        <h1 class="text-white p-4 text-center text-4xl">Update Your Profile, {{ $user->username }}.</h1>
        <h1 class="text-white p-4 text-center text-2xl">Vegan XP Total: {{ $totalVeganXP }} ⭐</h1>
        <form class="text-center" method="POST" action="{{ route('edit') }}">

            @csrf
            @method('PATCH')

            <div class="p-4">
                <label for="username" class="text-white">{{ __('Username') }}</label>
                <div class="">
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" required autocomplete="username" autofocus>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="p-4">
                <label for="first_name" class="text-white">{{ __('First name') }}</label>
                <div class="">
                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ $user->first_name }}" required autocomplete="first_name" autofocus>
                    @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="p-4">
                <label for="last_name" class="text-white">{{ __('Last name') }}</label>
                <div class="">
                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $user->last_name }}" required autocomplete="last_name" autofocus>
                    @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="p-4">
                <label for="email" class="text-white">{{ __('Email Address') }}</label>
                <div class="">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="p-4">
                
                <button type="submit" class="m-2 p-4 border-2 rounded-lg bg-green-700 hover:bg-yellow-400 text-white">
                    {{ __('Update Profile') }}
                </button>
                
            </div>
        </form>
    </di>
    <img class="bg-white border-4 border-green-800 rounded-full h-60 w-60 m-4 right" src="https://art.pixilart.com/f93cfd023922b67.png"/>
</div>
@endsection