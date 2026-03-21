@extends('layouts.app')
@section('content')

<h1>{{ __('Reset Password') }}</h1>

@if (session('status'))
    <p>{{ session('status') }}</p>
@endif

<form method="POST" action="{{ route('password.email') }}">

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

    <button type="submit">
        {{ __('Send Password Reset Link') }}
    </button>

</form>

@endsection