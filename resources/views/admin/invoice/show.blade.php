@extends('layouts.admin')

@section('content')

<h2 class="mb-4 text-warning">Invoice #{{ $viewData['invoice']->getId() }}</h2>

<div class="card bg-dark border-secondary text-light mb-4">
    <div class="card-body">

        <div class="row">

            <div class="col-md-4">
                <p><span class="text-secondary">Date:</span> {{ $viewData['invoice']->getDate() }}</p>
            </div>

            <div class="col-md-4">
                <p><span class="text-secondary">User:</span> {{ $viewData['invoice']->user->getName() }}</p>
            </div>

            <div class="col-md-4">
                <p><span class="text-secondary">Office:</span> {{ $viewData['invoice']->office->getName() }}</p>
            </div>

        </div>

    </div>
</div>

<!-- Invoice Lines -->
<div class="card bg-dark border-secondary text-light">
    <div class="card-body">

        <h5 class="mb-3 text-warning">Invoice Lines</h5>

        <div class="table-responsive">
            <table class="table table-dark table-hover align-middle">

                <thead>
                    <tr class="text-warning">
                        <th>Phone</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Discount</th>
                        <th>Total</th>
                    </tr>
                </thead>

                <tbody>
                    @php $total = 0; @endphp

                    @foreach($viewData['invoice']->invoiceLines as $invoiceLine)

                        @php
                            $lineTotal = ($invoiceLine->getUnitPrice() * $invoiceLine->getQuantity()) - $invoiceLine->getDiscount();
                            $total += $lineTotal;
                        @endphp 
                        <!-- This is temporal -->
                         
                        <tr>
                            <td>{{ $invoiceLine->phone->getName() }}</td>
                            <td>{{ $invoiceLine->getQuantity() }}</td>
                            <td>${{ $invoiceLine->getUnitPrice() }}</td>
                            <td>${{ $invoiceLine->getDiscount() }}</td>
                            <td>${{ $lineTotal }}</td>
                        </tr>

                    @endforeach
                </tbody>

            </table>
        </div>

        <!-- Total -->
        <div class="text-end mt-3">
            <h4 class="text-warning">Total: ${{ $total }}</h4>
        </div>

    </div>
</div>

<!-- Actions -->
<div class="mt-4 d-flex gap-2">

    <a href="{{ route('admin.invoice.edit', $viewData['invoice']->getId()) }}" 
       class="btn btn-outline-warning">
        Edit
    </a>

    <form action="{{ route('admin.invoice.destroy', $viewData['invoice']->getId()) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">
            Delete
        </button>
    </form>

    <a href="{{ route('admin.invoice.index') }}" 
       class="btn btn-outline-light">
        Back
    </a>

</div>

@endsection