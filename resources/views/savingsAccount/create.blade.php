@extends('layouts.app')
@section('content')

<div class="container">
    <h1>{{ __('messages.createSavingsAccount') }}</h1>
    <form method="POST" action="{{ route('savingsAccount.save') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">{{ __('messages.savingsAccountType') }}</label>
            <input type="text" name="type" value="{{ old('type') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('messages.savingsAccountBalance') }}</label>
            <input type="number" name="balance" value="{{ old('balance') }}" class="form-control">
        </div>

        <label>{{ __('messages.savingsAccountUserId') }}</label>
        <select name="user_id">
        @foreach($viewData['users'] as $user)
            <option value="{{ $user->getId() }}">
                {{ $user->getName() }}
            </option>
        @endforeach
        </select>

        <button type="submit" class="btn btn-primary">
            {{ __('messages.saveButton') }}
        </button>
    </form>
</div>

@endsection