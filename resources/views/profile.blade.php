@extends('layouts.app')

@section('content')
<div class="grid grid-cols-2 shadow-xl rounded m-20 bg-emerald-600">
    <di class="grid">
        <h1 class="text-white p-4 text-center text-4xl">Update Your Profile, {{ $user->username }}.</h1>
        <h1 class="text-white p-4 text-center text-2xl">Vegan XP Total: {{ $totalVeganXP }} ⭐</h1>

        @if (session('success'))
        <div class="text-center rounded bg-emerald-300 text-white w-1/2 p-4 shadow-sm place-self-center">
            {{ session('success') }}
        </div>
        @endif

        <form class="text-center" method="POST" action="{{ route('edit') }}">

            @csrf
            @method('PATCH')

            <div class="p-4">
                <label for="username" class="text-white">{{ __('Username') }}</label>
                <div class="">
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror p-2" name="username" value="{{ $user->username }}" required autocomplete="username" autofocus>
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
                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror p-2" name="first_name" value="{{ $user->first_name }}" required autocomplete="first_name" autofocus>
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
                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror p-2" name="last_name" value="{{ $user->last_name }}" required autocomplete="last_name" autofocus>
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
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror p-2" name="email" value="{{ $user->email }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="p-4">
                
                <button type="submit" class="m-2 p-4 border-2 rounded-lg bg-emerald-300 hover:bg-yellow-400 text-white">
                    {{ __('Update Profile') }}
                </button>
                
            </div>
        </form>
    </di>
    <div class="grid">
        <img class="bg-white border-4 border-emerald-800 rounded-full h-60 w-60 m-2 justify-self-center " src="https://art.pixilart.com/f93cfd023922b67.png"/>
            <h2 class="text-center text-white text-xl font-bold mt-4">Completed Vegan Activism ✊</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-2 text-center">
                @foreach ($completedActions as $item)
                <div class="border-2 border-white rounded bg-emerald-300">
                    <div class="text-8xl m-4">
                        {{ $item->icon }}
                    </div>
                    <h2 class="font-bold text-white">{{ $item->title }}</h2>
                </div>
                @endforeach
            </div>
            <h2 class="text-center text-white text-xl font-bold mt-4">Accepted Rewards 🏆</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-2 text-center">
                @foreach ($acceptedRewards as $item)
                <div class="border-2 border-white rounded bg-emerald-300">
                    <div class="text-8xl m-4">
                        {{ $item->icon }}
                    </div>
                    <h2 class="font-bold text-white">{{ $item->title }}</h2>
                </div>
                @endforeach
            </div>
    </div>
</div>
@endsection