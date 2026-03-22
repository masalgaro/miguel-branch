@extends('layouts.app')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Errors:</strong>
        <ul class="mb-0 mt-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.invoiceLine.update', $viewData['invoiceLine']->getId()) }}" method="POST">

    @csrf
    @method('PUT')

    <div>
        <label>Phone</label>
        <select name="phone_id">
            @foreach($viewData['phones'] as $phone)
                <option 
                    value="{{ $phone->getId() }}"
                    @if($phone->getId() == $viewData['invoiceLine']->getPhoneId()) selected @endif
                >
                    {{ $phone->getName() }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label>Quantity</label>
        <input 
            type="number" 
            name="quantity" 
            value="{{ $viewData['invoiceLine']->getQuantity() }}"
        >
    </div>

    <div>
        <label>Unit price</label>
        <input 
            type="number" 
            name="unit_price" 
            value="{{ $viewData['invoiceLine']->getUnitPrice() }}"
        >
    </div>

    <div>
        <label>Discount</label>
        <input 
            type="number" 
            placeholder="Enter discount" 
            name="discount" 
            step="0.01"
            min="0"
            max="1"
            value="{{ $viewData['invoiceLine']->getDiscount() }}"
        />
    </div>

    <div>
        <label>Reason</label>
        <input 
            type="text" 
            name="reason" 
            value="{{ $viewData['invoiceLine']->getReason() }}"
        >
    </div>

    <button type="submit">
        Update invoice line
    </button>

</form>

@endsection