@extends('layouts.app')
@section('content')

<div class="container">
  <h1>Savings Account List</h1>

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

    @foreach ($viewData["accounts"] as $account)

      <tr>
        <td>{{ $account->getId() }}</td>
        <td>{{ $account->getNumber() }}</td>
        <td>
          <a href="{{ route('savingsAccount.show', ['id' => $account->getId()]) }}" class="btn btn-info">
            View
          </a>
          <a href="{{ route('savingsAccount.delete', ['id' => $account->getId()]) }}" class="btn btn-danger">
            Delete
          </a>
        </td>
      </tr>

    @endforeach

  </table>

</div>

@endsection