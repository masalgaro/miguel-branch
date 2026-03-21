@extends('layouts.app')
@section('content')

<h1>InvoiceLine #{{ $viewData['invoiceLine']->getId() }}</h1>

<h3>Phone: {{ $viewData['invoiceLine']->phone->getName() }}</h3>

<p>Quantity: {{ $viewData['invoiceLine']->getQuantity() }}</p>
<p>Unit Price: {{ $viewData['invoiceLine']->getUnitPrice() }}</p>
<p>Discount: {{ $viewData['invoiceLine']->getDiscount() }}</p>
<p>Reason: {{ $viewData['invoiceLine']->getReason() }}</p>

<form action="{{ route('invoiceLine.destroy', $viewData['invoiceLine']->getId()) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete this invoice line</button>
</form>

<a href="{{ route('invoiceLine.edit', $viewData['invoiceLine']->getId()) }}">
    Edit this invoice line
</a>

@endsection