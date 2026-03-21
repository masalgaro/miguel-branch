@extends('layouts.app')
@section('content')

<div class="container">
    <h1>{{ __('messages.createSavingsAccount') }}</h1>
    <form method="POST" action="{{ route('savingsAccount.update' , ['id' => $viewData['savingsAccount']->getId()]) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">{{ __('messages.savingsAccountType') }}</label>
            <input type="text" name="type" value="{{ $viewData['savingsAccount']->getType() }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('messages.savingsAccountBalance') }}</label>
            <input type="number" name="balance" value="{{ $viewData['savingsAccount']->getBalance() }}" class="form-control">
        </div>

        <label>{{ __('messages.savingsAccountUserId') }}</label>
        <select name="user_id">
            @foreach($viewData['users'] as $user)
                <option 
                    value="{{ $user->getId() }}"
                    @if($user->getId() == $viewData['savingsAccount']->getUser()->getId()) selected @endif
                >
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