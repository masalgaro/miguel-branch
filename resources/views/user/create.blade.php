@extends('layouts.app')
@section('content')

<div class="container">
  <h1>Create User</h1>
  <form method="POST" action="{{ route('user.save') }}">
    @csrf

    <div class="mb-3">
        <label class="form-label">National ID</label>
        <input type="number" name="nationalId" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">First Name</label>
        <input type="text" name="firstName" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Last Name</label>
        <input type="text" name="lastName" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Role</label>
        <input type="text" name="role" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Phone Number</label>
        <input type="number" name="phoneNumber" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Birthday</label>
        <input type="date" name="birthday" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Address</label>
        <input type="text" name="address" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">
      Save
    </button>

  </form>
</div>

@endsection