@extends('layouts.app')

@section('content')

<h1>{{ __('Login') }}</h1>

<form method="POST" action="{{ route('login') }}">

    @csrf

    <div>
        <label for="email">{{ __('Email Address') }}</label>

        <input 
            id="email" 
            type="email" 
            name="email" 
            value="{{ old('email') }}" 
            required 
            autocomplete="email" 
            autofocus
        >

        @error('email')
            <p>{{ $message }}</p>
        @enderror
    </div>


    <div>
        <label for="password">{{ __('Password') }}</label>

        <input 
            id="password" 
            type="password" 
            name="password" 
            required 
            autocomplete="current-password"
        >

        @error('password')
            <p>{{ $message }}</p>
        @enderror
    </div>


    <div>
        <input 
            type="checkbox" 
            name="remember" 
            id="remember" 
            {{ old('remember') ? 'checked' : '' }}
        >

        <label for="remember">
            {{ __('Remember Me') }}
        </label>
    </div>


    <button type="submit">
        {{ __('Login') }}
    </button>

</form>


@if (Route::has('password.request'))
    <a href="{{ route('password.request') }}">
        {{ __('Forgot Your Password?') }}
    </a>
@endif

@endsection