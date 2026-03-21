@extends('layouts.app')
@section('content')

<div class="container">
    <h1>{{ __('messages.createUser') }}</h1>
    <form method="POST" action="{{ route('user.save') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">{{ __('messages.userName') }}</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('messages.userEmail') }}</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('messages.userPassword') }}</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('messages.userNationalId') }}</label>
            <input type="text" name="national_id" value="{{ old('national_id') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('messages.userFirstName') }}</label>
            <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('messages.userLastName') }}</label>
            <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('messages.userRole') }}</label>
            <input type="text" name="role" value="{{ old('role') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('messages.userPhoneNumber') }}</label>
            <input type="text" name="phone_number" value="{{ old('phone_number') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('messages.userBirthday') }}</label>
            <input type="date" name="birthday" value="{{ old('birthday') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('messages.userAddress') }}</label>
            <input type="text" name="address" value="{{ old('address') }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">
            {{ __('messages.saveButton') }}
        </button>
    </form>
</div>

@endsection