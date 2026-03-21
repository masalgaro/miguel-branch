@extends('layouts.app')
@section('content')

<div class="container">
    <h1>{{ __('messages.createSavingsAccount') }}</h1>
    <form method="POST" action="{{ route('savingsAccount.save') }}">
        @csrf
        
        <label>{{ __('messages.savingsAccountType') }}</label>
        <div class="mb-3">
            <select name="type">
                <option value="Ahorros">Savings</option>
                <option value="Corriente">Ordinary</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('messages.savingsAccountBalance') }}</label>
            <input type="number" name="balance" value="{{ old('balance') }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">
            {{ __('messages.saveButton') }}
        </button>
        <input type="hidden" name="user_id" value="{{ auth()->user()->getId() }}">
    </form>
</div>

@endsection