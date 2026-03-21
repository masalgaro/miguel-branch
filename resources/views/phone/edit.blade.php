@extends('layouts.app')
@section('content')

<form action="{{ route('phone.update', $viewData['phone']->getId()) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <img src="{{ asset('storage/'.$viewData['phone']->getImage()) }}" width="200">

    <div>
        <label>Name</label>
        <input 
            type="text" 
            name="name" 
            value="{{ $viewData['phone']->getName() }}"
        >
    </div>

    <div>
        <label>Memory</label>
        <input 
            type="text" 
            name="memory" 
            value="{{ $viewData['phone']->getMemory() }}"
        >
    </div>

    <div>
        <label>Ram</label>
        <input 
            type="text" 
            name="ram" 
            value="{{ $viewData['phone']->getRam() }}"
        >
    </div>

    <div>
        <label>Battery</label>
        <input 
            type="text" 
            name="battery" 
            value="{{ $viewData['phone']->getBattery() }}"
        >
    </div>

    <div>
        <label>Brand</label>
        <input 
            type="text" 
            name="brand" 
            value="{{ $viewData['phone']->getBrand() }}"
        >
    </div>

    <div>
        <label>Quantity</label>
        <input 
            type="number" 
            name="quantity" 
            value="{{ $viewData['phone']->getQuantity() }}"
        >
    </div>

    <div>
        <label>Office</label>
        <select name="office_id">
            @foreach($viewData['offices'] as $office)
                <option 
                    value="{{ $office->getId() }}"
                    @if($office->getId() == $viewData['phone']->office->getId()) selected @endif
                >
                    {{ $office->getName() }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label>Change image</label>
        <input 
            type="file" 
            name="image"
        >
    </div>

    <button type="submit">
        Update Phone
    </button>

</form>

@endsection