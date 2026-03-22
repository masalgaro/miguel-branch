@extends('layouts.app')
@section('content')

@if($errors->any())
    <div>
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form method="POST" action="{{ route('admin.invoiceLine.save') }}">

    @csrf

    <div>
        <label>Invoice</label>
        <select name="invoice_id">
            @foreach($viewData['invoices'] as $invoice)
                <option 
                    value="{{ $invoice->getId() }}"
                    @if(old('invoice_id') == $invoice->getId()) selected @endif
                >
                    Invoice #{{ $invoice->getId() }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label>Phone</label>
        <select name="phone_id">
            @foreach($viewData['phones'] as $phone)
                <option 
                    value="{{ $phone->getId() }}"
                    @if(old('phone_id') == $phone->getId()) selected @endif
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
            value="{{ old('quantity') }}" 
        />
    </div>

    <div>
        <label>Unit price</label>
        <input 
            type="number" 
            name="unit_price" 
            value="{{ old('unit_price') }}" 
        />
    </div>

    <div>
        <label>Discount</label>
        <input 
            type="number" 
            name="discount" 
            step="0.01"
            value="{{ old('discount') }}" 
        />
    </div>

    <div>
        <label>Reason</label>
        <input 
            type="text" 
            name="reason" 
            value="{{ old('reason') }}" 
        />
    </div>

    <button type="submit">
        Send
    </button>

</form>

@endsection