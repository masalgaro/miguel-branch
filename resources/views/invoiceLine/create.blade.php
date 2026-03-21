@extends('layouts.app')
@section('content')

<form method="POST" action="{{ route('invoiceLine.save') }}">

    @csrf
    <select name="phone_id">
        @foreach($viewData['phones'] as $phone)
            <option value="{{ $phone->getId() }}">
                {{ $phone->getName() }}
            </option>
        @endforeach

    </select>

    <input 
        type="number" 
        placeholder="Enter quantity" 
        name="quantity" 
        value="{{ old('quantity') }}" 
    />

    <input 
        type="number" 
        placeholder="Enter unit price" 
        name="unit_price" 
        value="{{ old('unit_price') }}" 
    />

    <input 
        type="number" 
        placeholder="Enter discount" 
        name="discount" 
        step="0.01"
        min="0"
        max="1"
        value="{{ old('discount') }}" 
    />

    <input 
        type="text" 
        placeholder="Enter reason" 
        name="reason" 
        value="{{ old('reason') }}" 
    />

    <input 
        type="submit" 
        value="Send" 
    />

</form>

@endsection