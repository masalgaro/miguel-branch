@extends('layouts.admin')

@section('content')

<h2 class="mb-4 text-warning">Edit Invoice</h2>

<!-- Errors -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card bg-dark border-secondary text-light">
    <div class="card-body">

        <form action="{{ route('admin.invoice.update', $viewData['invoice']->getId()) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">

                <!-- Date -->
                <div class="col-md-4 mb-3">
                    <label class="form-label text-secondary">Date</label>
                    <input 
                        type="date" 
                        name="date" 
                        value="{{ old('date', $viewData['invoice']->getDate()) }}"
                        class="form-control bg-dark text-light border-secondary @error('date') is-invalid @enderror"
                    >
                    @error('date')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <!-- User -->
                <div class="col-md-4 mb-3">
                    <label class="form-label text-secondary">User</label>
                    <select 
                        name="user_id" 
                        class="form-select bg-dark text-light border-secondary @error('user_id') is-invalid @enderror"
                    >
                        @foreach($viewData['users'] as $user)
                            <option 
                                value="{{ $user->getId() }}"
                                {{ old('user_id', $viewData['invoice']->user->getId()) == $user->getId() ? 'selected' : '' }}
                            >
                                {{ $user->getName() }}
                            </option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Office -->
                <div class="col-md-4 mb-3">
                    <label class="form-label text-secondary">Office</label>
                    <select 
                        name="office_id" 
                        class="form-select bg-dark text-light border-secondary @error('office_id') is-invalid @enderror"
                    >
                        @foreach($viewData['offices'] as $office)
                            <option 
                                value="{{ $office->getId() }}"
                                {{ old('office_id', $viewData['invoice']->office->getId()) == $office->getId() ? 'selected' : '' }}
                            >
                                {{ $office->getName() }}
                            </option>
                        @endforeach
                    </select>
                    @error('office_id')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <!-- Actions -->
            <div class="d-flex gap-2 mt-3">
                <button type="submit" class="btn btn-warning">
                    Update
                </button>

                <a href="{{ route('admin.invoice.show', $viewData['invoice']->getId()) }}" 
                   class="btn btn-outline-light">
                    Cancel
                </a>
            </div>

        </form>

    </div>
</div>

@endsection