@extends('layouts.app')
@section('content')

<div class="container">
    <h1>{{ __('messages.createSavingsAccount') }}</h1>
    <form method="POST" action="{{ route('savingsAccounts.save') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">{{ __('messages.savingsAccountType') }}</label>
            <input type="text" name="type" value="{{ old('type') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('messages.savingsAccountNumber') }}</label>
            <input type="text" name="number" value="{{ old('number') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('messages.savingsAccountExpirationDate') }}</label>
            <input type="date" name="expiration_date" value="{{ old('expiration_date') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('messages.savingsAccountBalance') }}</label>
            <input type="number" name="balance" value="{{ old('balance') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('messages.savingsAccountUserId') }}</label>
            <input type="number" name="user_id" value="{{ old('user_id') }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">
            {{ __('messages.saveButton') }}
        </button>
    </form>
</div>

@endsection