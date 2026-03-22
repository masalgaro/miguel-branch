@extends('layouts.app')
@section('content')

<div class="container">
    <h1>{{ __('messages.savingsAccountDetails') }}</h1>
    <ul class="list-group">

        <li class="list-group-item">
            <strong>{{ __('messages.idLabel') }}:</strong> {{ $viewData['savingsAccount']->getId() }}
        </li>

        <li class="list-group-item">
            <strong>{{ __('messages.savingsAccountType') }}:</strong> {{ $viewData['savingsAccount']->getType() }}
        </li>

        <li class="list-group-item">
            <strong>{{ __('messages.savingsAccountBalance') }}:</strong> {{ $viewData['savingsAccount']->getBalance() }}
        </li>

    </ul>
    <a href="{{ route('user.show' , ['id' => auth()->user()->getId()]) }}" class="btn btn-secondary mt-3">
        {{ __('messages.backButton') }}
    </a>
</div>

@endsection