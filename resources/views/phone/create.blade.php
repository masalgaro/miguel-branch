@extends('layouts.app')
@section('content')

<form method="POST" enctype="multipart/form-data" action="{{ route('phone.save') }}">

    @csrf
    <input 
        type="text" 
        placeholder="Enter name" 
        name="name" 
        value="{{ old('name') }}" 
    />

    <input 
        type="text" 
        placeholder="Enter brand" 
        name="brand" 
        value="{{ old('brand') }}" 
    />

    <input 
        type="text" 
        placeholder="Enter memory" 
        name="memory" 
        value="{{ old('memory') }}" 
    />

    <input 
        type="text" 
        placeholder="Enter ram" 
        name="ram" 
        value="{{ old('ram') }}" 
    />

    <input 
        type="text" 
        placeholder="Enter battery" 
        name="battery" 
        value="{{ old('battery') }}" 
    />

    <input 
        type="number" 
        placeholder="Enter quantity" 
        name="quantity" 
        value="{{ old('quantity') }}" 
    />

    <select name="office_id">
        @foreach($viewData['offices'] as $office)
            <option value="{{ $office->getId() }}">
                {{ $office->getName() }}
            </option>
        @endforeach
    </select>

    <input 
        type="file" 
        name="image"
    />

    <input 
        type="submit" 
        value="Send" 
    />

</form>

@endsection