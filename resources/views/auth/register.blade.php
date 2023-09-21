@extends('layouts.app')

@section('content')
<div class="grid grid-cols-2 gap-1 ">
    <div class="flex justify-center">
        <img src="https://i.seadn.io/gae/DTiD3ODv8T9HATow0QxqRncqAEHe18jwpe1cfeo42rzFiQTHdheIpvb-mPZNgsAuPUZt4NsoC4yF-USM4M0Dzjp__sHaceqieazL?auto=format&dpr=1&w=1000"/>
    </div>
            <div class="flex flex-col justify-center  text-white p-2 h-full">
                <div class="flex justify-center mb-2">
                    <h1 class="text-4xl">{{ __('Register') }}</h1> 
                </div>

                <div class="flex justify-center">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="first_name" class="col-md-4 col-form-label text-md-end">{{ __('First name') }}</label>

                            <div class="">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="last_name" class="">{{ __('Last name') }}</label>

                            <div class="">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="email" class="">{{ __('Email Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="password" class="">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror text-black" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control text-black" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-0">
                            <div class="">
                                <button type="submit" class="m-2 p-4 border-2 rounded-lg bg-green-600 text-white hover:bg-yellow-400">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
