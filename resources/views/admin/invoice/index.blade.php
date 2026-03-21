@extends('layouts.app')

@section('content')

@foreach($viewData['invoices'] as $invoice)

    <div>

        <h1>Invoice #{{ $invoice->getId() }}</h1>

        <p>Date: {{ $invoice->getDate() }}</p>
        <p>User: {{ $invoice->user->getName() }}</p>
        <p>Office: {{ $invoice->office->getName() }}</p>

        <a href="{{ route('admin.invoice.show', ['id'=> $invoice->getId()]) }}">
            Info
        </a>

    </div>

@endforeach

@endsection