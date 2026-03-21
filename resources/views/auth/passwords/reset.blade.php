@extends('layouts.app')

@section('content')

<h1>{{ __('Reset Password') }}</h1>

<form method="POST" action="{{ route('password.update') }}">

    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <div>
        <label for="email">{{ __('Email Address') }}</label>

        <input 
            id="email" 
            type="email" 
            name="email" 
            value="{{ $email ?? old('email') }}" 
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
            autocomplete="new-password"
        >

        @error('password')
            <p>{{ $message }}</p>
        @enderror
    </div>


    <div>
        <label for="password-confirm">{{ __('Confirm Password') }}</label>

        <input 
            id="password-confirm" 
            type="password" 
            name="password_confirmation" 
            required 
            autocomplete="new-password"
        >
    </div>


    <button type="submit">
        {{ __('Reset Password') }}
    </button>

</form>

@endsection