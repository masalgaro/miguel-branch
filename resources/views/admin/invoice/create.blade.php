@extends('layouts.admin')

@section('content')

<h2 class="mb-4 text-warning">Create Invoice</h2>

<div class="card bg-dark border-secondary text-light">
    <div class="card-body">

        <form action="{{ route('admin.invoice.save') }}" method="POST">
            @csrf

            <div class="row">

                <!-- Date -->
                <div class="col-md-4 mb-3">
                    <label class="form-label text-secondary">Date</label>
                    <input 
                        type="date" 
                        name="date" 
                        value="{{ old('date') }}"
                        class="form-control bg-dark text-light border-secondary"
                    >
                </div>

                <!-- User -->
                <div class="col-md-4 mb-3">
                    <label class="form-label text-secondary">User</label>
                    <select name="user_id" class="form-select bg-dark text-light border-secondary">
                        @foreach($viewData['users'] as $user)
                            <option 
                                value="{{ $user->getId() }}"
                                {{ old('user_id') == $user->getId() ? 'selected' : '' }}
                            >
                                {{ $user->getName() }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Office -->
                <div class="col-md-4 mb-3">
                    <label class="form-label text-secondary">Office</label>
                    <select name="office_id" class="form-select bg-dark text-light border-secondary">
                        @foreach($viewData['offices'] as $office)
                            <option 
                                value="{{ $office->getId() }}"
                                {{ old('office_id') == $office->getId() ? 'selected' : '' }}
                            >
                                {{ $office->getName() }}
                            </option>
                        @endforeach
                    </select>
                </div>

            </div>

            <!-- Actions -->
            <div class="d-flex gap-2 mt-3">
                <button type="submit" class="btn btn-warning">
                    Create
                </button>

                <a href="{{ route('admin.invoice.index') }}" 
                   class="btn btn-outline-light">
                    Cancel
                </a>
            </div>

        </form>

    </div>
</div>

@endsection