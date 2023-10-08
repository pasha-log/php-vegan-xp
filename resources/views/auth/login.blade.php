@extends('layouts.app')

@section('content')
<div class="grid grid-cols-2 gap-1 mt-20">
    <div class="flex justify-center">
        <img src="https://i.seadn.io/gae/DTiD3ODv8T9HATow0QxqRncqAEHe18jwpe1cfeo42rzFiQTHdheIpvb-mPZNgsAuPUZt4NsoC4yF-USM4M0Dzjp__sHaceqieazL?auto=format&dpr=1&w=1000"/>
    </div>
    
            <div class="flex flex-col justify-center text-white p-2 h-full">
                
                <div class="flex justify-center mb-2">
                    <h1 class="text-4xl">{{ __('Login') }}</h1> 
                </div>
                <div class="flex justify-center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="username" class="">{{ __('Username') }}</label>

                            <div class="">
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror w-full text-black" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="password" class="">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror w-full text-black" name="password" required autocomplete="current-password">
                                
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-6">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-0">
                            <div class="">
                                <button type="submit" class="m-2 p-4 border-2 rounded-lg bg-green-600 text-white hover:bg-yellow-400">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="m-2 p-4 border-2 rounded-lg bg-green-600 text-white hover:bg-yellow-400" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
                
        
    </div>
</div>
@endsection
