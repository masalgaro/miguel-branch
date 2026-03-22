@extends('layouts.admin')

@section('content')

<h2 class="mb-4 text-warning">Edit Office</h2>

<div class="card bg-dark border-secondary text-light">
    <div class="card-body">

        <form action="{{ route('admin.office.update', $viewData['office']->getId()) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div class="mb-3">
                <label class="form-label text-secondary">Name</label>
                <input 
                    type="text" 
                    name="name" 
                    class="form-control bg-dark text-light border-secondary"
                    value="{{ $viewData['office']->getName() }}"
                >
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label class="form-label text-secondary">Address</label>
                <input 
                    type="text" 
                    name="address" 
                    class="form-control bg-dark text-light border-secondary"
                    value="{{ $viewData['office']->getAddress() }}"
                >
            </div>

            <!-- Manager -->
            <div class="mb-3">
                <label class="form-label text-secondary">Manager Name</label>
                <input 
                    type="text" 
                    name="manager_name" 
                    class="form-control bg-dark text-light border-secondary"
                    value="{{ $viewData['office']->getManagerName() }}"
                >
            </div>

            <!-- Actions -->
            <div class="d-flex gap-2">

                <button type="submit" class="btn btn-warning">
                    Update
                </button>

                <a href="{{ route('admin.office.index') }}" class="btn btn-outline-light">
                    Cancel
                </a>

            </div>

        </form>

    </div>
</div>

@endsection