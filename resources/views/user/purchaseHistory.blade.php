@extends('layouts.app')
@section('content')
@if (empty($viewData['history']))
    <div class="alert alert-info">
        {{ __('messages.noPurchaseHistory') }}
    </div>
@endif

@foreach ($viewData['history'] as $invoice)
 <div class="card mb-3">
    <div class="card-header">
        {{ __('messages.purchaseHistory') }} #{{ $invoice->getId() }} - {{ $invoice->getDate() }}
    </div>
    <div class="card-body">
        <h4>
            {{ __('messages.userLabel') }}:
            {{ $viewData['user']->getFirstName() }}
            {{ $viewData['user']->getLastName() }}
        </h4>
        <table class="table">
            <thead>
                <tr>
                    <th>{{ __('messages.phoneLabel') }}</th>
                    <th>{{ __('messages.quantityLabel') }}</th>
                    <th>{{ __('messages.unitPriceLabel') }}</th>
                    <th>{{ __('messages.discountLabel')}} </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoice->getInvoiceLines() as $invoiceLine)
                    <tr>
                        <td>{{ $invoiceLine->getPhone()->getName() }}</td>
                        <td>{{ $invoiceLine->getQuantity() }}</td>
                        <td>${{ number_format($invoiceLine->getUnitPrice(), 2) }}</td>
                        <td>{{ $invoiceLine->getDiscount() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endforeach
@endsection
