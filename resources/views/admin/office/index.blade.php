@extends('layouts.admin')
@section('content')

<h2 class="mb-4 text-warning">Offices</h2>

<div class="mb-3">
    <a href="{{ route('admin.office.create') }}" class="btn btn-warning">
        Create Office
    </a>
</div>

<div class="table-responsive">
    <table class="table table-dark table-hover align-middle">
        <thead>
            <tr class="text-warning">
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($viewData['offices'] as $office)
            <tr>
                <td>{{ $office->getId() }}</td>
                <td>{{ $office->getName() }}</td>
                <td>{{ $office->getAddress() }}</td>

                <td class="text-end">

                    <!-- View -->
                    <a href="{{ route('admin.office.show', ['id'=> $office->getId()]) }}" 
                       class="btn btn-sm btn-outline-warning">
                        View
                    </a>

                    <!-- Edit -->
                    <a href="{{ route('admin.office.edit', ['id'=> $office->getId()]) }}" 
                       class="btn btn-sm btn-outline-light">
                        Edit
                    </a>

                    <!-- Delete -->
                    <form action="{{ route('admin.office.destroy', ['id'=> $office->getId()]) }}" 
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