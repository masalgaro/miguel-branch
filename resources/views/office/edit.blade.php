@extends('layouts.app')

@section('content')

<form action="{{ route('office.update', $viewData['office']->getId()) }}" method="POST">

    @csrf
    @method('PUT')

    

    <div>
        <label>Name</label>
        <input type="text" name="name" value="{{ $viewData['office']->getName() }}">
    </div>

    <div>
        <label>Address</label>
        <input type="text" name="address" value="{{ $viewData['office']->getAddress() }}">
    </div>

    <div>
        <label>Manager name</label>
        <input type="text" name="manager_name" value="{{ $viewData['office']->getManagerName() }}">
    </div>
    

    <button type="submit">Update office</button>

</form>

@endsection%