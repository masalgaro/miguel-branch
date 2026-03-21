@extends('layouts.app')
@section('content')

<div class="container">
    <h1>{{ __('messages.userDetails') }}</h1>
    <ul class="list-group">

        <li class="list-group-item">
            <strong>{{ __('messages.idLabel') }}:</strong> {{ $viewData['user']->getId() }}
        </li>

        <li class="list-group-item">
            <strong>{{ __('messages.userName') }}:</strong> {{ $viewData['user']->getName() }}
        </li>

        <li class="list-group-item">
            <strong>{{ __('messages.userEmail') }}:</strong> {{ $viewData['user']->getEmail() }}
        </li>

        <li class="list-group-item">
            <strong>{{ __('messages.userPassword') }}:</strong> {{ $viewData['user']->getPassword() }}
        </li>

        <li class="list-group-item">
            <strong>{{ __('messages.userNationalId') }}:</strong> {{ $viewData['user']->getNationalId() }}
        </li>

        <li class="list-group-item">
            <strong>{{ __('messages.userFirstName') }}:</strong> {{ $viewData['user']->getFirstName() }}
        </li>

        <li class="list-group-item">
            <strong>{{ __('messages.userLastName') }}:</strong> {{ $viewData['user']->getLastName() }}
        </li>

        <li class="list-group-item">
            <strong>{{ __('messages.userRole') }}:</strong> {{ $viewData['user']->getRole() }}
        </li>

        <li class="list-group-item">
            <strong>{{ __('messages.userPhoneNumber') }}:</strong> {{ $viewData['user']->getPhoneNumber() }}
        </li>

        <li class="list-group-item">
            <strong>{{ __('messages.userBirthday') }}:</strong> {{ $viewData['user']->getBirthday() }}
        </li>

        <li class="list-group-item">
            <strong>{{ __('messages.userAddress') }}:</strong> {{ $viewData['user']->getAddress() }}
        </li>

    </ul>
    <a href="{{ route('admin.user.index') }}" class="btn btn-secondary mt-3">
        {{ __('messages.backButton') }}
    </a>
</div>

@endsection