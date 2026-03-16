@extends('layouts.app')
@section('content')

<div class="container">
  <h1>User Details</h1>
  <ul class="list-group">

    <li class="list-group-item">
      <strong>ID:</strong> {{ $viewData["user"]->getId() }}
    </li>

    <li class="list-group-item">
       <strong>National ID:</strong> {{ $viewData["user"]->getNationalId() }}
    </li>

    <li class="list-group-item">
       <strong>First Name:</strong> {{ $viewData["user"]->getFirstName() }}
    </li>

    <li class="list-group-item">
       <strong>Last Name:</strong> {{ $viewData["user"]->getLastName() }}
    </li>

    <li class="list-group-item">
      <strong>Role:</strong> {{ $viewData["user"]->getRole() }}
    </li>

    <li class="list-group-item">
       <strong>Phone:</strong> {{ $viewData["user"]->getPhoneNumber() }}
    </li>

    <li class="list-group-item">
      <strong>Birthday:</strong> {{ $viewData["user"]->getBirthday() }}
    </li>

    <li class="list-group-item">
      <strong>Address:</strong> {{ $viewData["user"]->getAddress() }}
    </li>

  </ul>
  <a href="{{ route('user.list') }}" class="btn btn-secondary mt-3">
    Back
  </a>

</div>

@endsection