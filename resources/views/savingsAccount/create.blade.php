@extends('layouts.app')
@section('content')

<div class="container">
  <h1>Create savings account</h1>
  <form method="POST" action="{{ route('savingsAccount.save') }}">
    @csrf

    <div class="mb-3">
      <label class="form-label">Type</label>
      <input type="text" name="type" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Number</label>
      <input type="text" name="number" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Expiration Date</label>
      <input type="date" name="expirationDate" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Balance</label>
      <input type="number" step="0.01" name="balance" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">User ID</label>
      <input type="number" name="userId" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">
      Save
    </button>

  </form>
</div>

@endsection