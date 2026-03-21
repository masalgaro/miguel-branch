@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('admin.office.save') }}">
    @csrf
    <input type="text" class="form-control mb-2" placeholder="Enter name" name="name" value="{{ old('name') }}" />
    <input type="text" class="form-control mb-2" placeholder="Enter address" name="address" value="{{ old('address') }}" />
    <input type="text" class="form-control mb-2" placeholder="Enter manager name" name="manager_name" value="{{ old('manager_name') }}" />
    <input type="submit" class="btn btn-primary" value="Send" />
</form>
@endsection