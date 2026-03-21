@extends('layouts.app')
@section('content')

<div>
    <h1>Invoice #{{ $viewData['invoice']->getId() }}</h1>
    <p>Date: {{ $viewData['invoice']->getDate() }}</p>
    <p>User: {{ $viewData['invoice']->user->getName() }}</p>
    <p>Office: {{ $viewData['invoice']->office->getName() }}</p>
</div>

<div>
    <h3>Invoice Lines</h3>
    @foreach($viewData['invoice']->invoiceLines as $invoiceLine)
        <div>
            <p>Phone: {{ $invoiceLine->phone->getName() }}</p>
            <p>Quantity: {{ $invoiceLine->getQuantity() }}</p>
            <p>Unit Price: {{ $invoiceLine->getUnitPrice() }}</p>
            <p>Discount: {{ $invoiceLine->getDiscount() }}</p>
        </div>
    @endforeach
</div>

<div>
    <form action="{{ route('invoice.destroy', $viewData['invoice']->getId()) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">
            Delete this invoice
        </button>
    </form>
    <a href="{{ route('invoice.edit', $viewData['invoice']->getId()) }}">
        Edit this invoice
    </a>
</div>

@endsection