@extends('layouts.app')
@section('content')

<div class="container">
  <h1>User List</h1>

  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  <table class="table">
    <tr>
      <th>Id</th>
      <th>Number</th>
      <th>Actions</th>
    </tr>

    @foreach ($viewData["users"] as $user)

      <tr>
        <td>{{ $user->getId() }}</td>
        <td>{{ $user->getFirstName() }} {{ $user->getLastName() }}</td>
        <td>
            <a href="{{ route('user.show', ['id'=>$user->getId()]) }}" class="btn btn-info">
                View
            </a>
            <a href="{{ route('user.delete', ['id'=>$user->getId()]) }}" class="btn btn-danger">
                Delete
          </a>
        </td>
      </tr>

    @endforeach

  </table>

</div>

@endsection