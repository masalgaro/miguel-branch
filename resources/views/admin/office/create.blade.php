@extends('layouts.admin')
@section('content')

<h2 class="mb-4 text-warning">Create Office</h2>

<div class="card bg-dark border-secondary text-light">
    <div class="card-body">

        <form method="POST" action="{{ route('admin.office.save') }}">
            @csrf

            <!-- Name -->
            <div class="mb-3">
                <label class="form-label text-secondary">Name</label>
                <input 
                    type="text" 
                    class="form-control bg-dark text-light border-secondary" 
                    name="name" 
                    value="{{ old('name') }}"
                    placeholder="Enter name"
                >
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label class="form-label text-secondary">Address</label>
                <input 
                    type="text" 
                    class="form-control bg-dark text-light border-secondary" 
                    name="address" 
                    value="{{ old('address') }}"
                    placeholder="Enter address"
                >
            </div>

            <!-- Manager -->
            <div class="mb-3">
                <label class="form-label text-secondary">Manager Name</label>
                <input 
                    type="text" 
                    class="form-control bg-dark text-light border-secondary" 
                    name="manager_name" 
                    value="{{ old('manager_name') }}"
                    placeholder="Enter manager name"
                >
            </div>

            <!-- Actions -->
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-warning">
                    Save
                </button>

                <a href="{{ route('admin.office.index') }}" class="btn btn-outline-light">
                    Cancel
                </a>
            </div>

        </form>

    </div>
</div>

@endsection