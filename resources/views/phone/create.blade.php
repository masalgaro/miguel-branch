@extends('layouts.app')
@section('content')
<form method="POST" enctype="multipart/form-data" action="{{ route('phone.save') }}">
    @csrf
    <input type="text" class="form-control mb-2" placeholder="Enter name" name="name" value="{{ old('name') }}" />
    <input type="text" class="form-control mb-2" placeholder="Enter brand" name="brand" value="{{ old('brand') }}" />
    <input type="text" class="form-control mb-2" placeholder="Enter memory" name="memory" value="{{ old('memory') }}" />
    <input type="text" class="form-control mb-2" placeholder="Enter ram" name="ram" value="{{ old('ram') }}" />
    <input type="text" class="form-control mb-2" placeholder="Enter battery" name="battery" value="{{ old('battery') }}" />
    <input type="number" class="form-control mb-2" placeholder="Enter quantity" name="quantity" value="{{ old('quantity') }}" />
    <input type="file" name="image">
    <input type="submit" class="btn btn-primary" value="Send" />
</form>
@endsection 