@extends('layouts.app')
@section('content')

<div class="container">
  <h1>Savings Account Details</h1>
  <ul class="list-group">

    <li class="list-group-item">
      <strong>Id:</strong> {{ $viewData["account"]->getId() }}
    </li>

    <li class="list-group-item">
      <strong>Type:</strong> {{ $viewData["account"]->getType() }}
    </li>

    <li class="list-group-item">
      <strong>Number:</strong> {{ $viewData["account"]->getNumber() }}
    </li>

    <li class="list-group-item">
      <strong>Expiration Date:</strong> {{ $viewData["account"]->getExpirationDate() }}
    </li>

  </ul>
  <a href="{{ route('savingsAccount.list') }}" class="btn btn-secondary mt-3">
    Back
  </a>

</div>

@endsection