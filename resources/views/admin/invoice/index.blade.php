@extends('layouts.admin')
@section('content')

<h2 class="mb-4 text-warning">Invoices</h2>

<div class="mb-3">
    <a href="{{ route('admin.invoice.create') }}" class="btn btn-warning">
        Create Invoice
    </a>
</div> 

<div class="table-responsive">
    <table class="table table-dark table-hover align-middle">

        <thead>
            <tr class="text-warning">
                <th>ID</th>
                <th>Date</th>
                <th>User</th>
                <th>Office</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($viewData['invoices'] as $invoice)
            <tr>
                <td>#{{ $invoice->getId() }}</td>
                <td>{{ $invoice->getDate() }}</td>
                <td>{{ $invoice->user->getName() }}</td>
                <td>{{ $invoice->office->getName() }}</td>

                <td class="text-end">

                    <!-- View -->
                    <a href="{{ route('admin.invoice.show', ['id'=> $invoice->getId()]) }}" 
                       class="btn btn-sm btn-outline-warning">
                        View
                    </a>

                    <!-- Edit -->
                    <a href="{{ route('admin.invoice.edit', ['id'=> $invoice->getId()]) }}" 
                       class="btn btn-sm btn-outline-light">
                        Edit
                    </a>

                    <!-- Delete -->
                    <form action="{{ route('admin.invoice.destroy', ['id'=> $invoice->getId()]) }}" 
                          method="POST" 
                          class="d-inline">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-sm btn-danger">
                            Delete
                        </button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection