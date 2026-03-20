@extends('layouts.app')
@section('content')

<div class="container">

    <h1>{{ __('messages.purchaseHistory') }}</h1>

    <h4>
        {{ __('messages.userLabel') }}:
        {{ $viewData['user']->getFirstName() }}
        {{ $viewData['user']->getLastName() }}
    </h4>

    @if (empty($viewData['history']))
        <div class="alert alert-info">
            {{ __('messages.noPurchaseHistory') }}
        </div>
    @endif

</div>

@endsection