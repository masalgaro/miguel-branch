@extends('layouts.app')
@section('content')

@foreach($viewData['invoiceLines'] as $invoiceLine)

    <h1>InvoiceLine #{{ $invoiceLine->getId() }}</h1>

    <p>Phone: {{ $invoiceLine->phone->getName() }}</p>
    <p>Quantity: {{ $invoiceLine->getQuantity() }}</p>

    <a href="{{ route('admin.invoiceLine.show', ['id'=> $invoiceLine->getId()]) }}">
        Info
    </a>

@endforeach

@endsection