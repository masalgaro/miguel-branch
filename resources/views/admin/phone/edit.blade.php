@extends('layouts.admin')
@section('content')

<h2 class="mb-4 text-warning">Edit Phone</h2>

<div class="card bg-dark border-secondary text-light">
    <div class="card-body">

        <form action="{{ route('admin.phone.update', $viewData['phone']->getId()) }}" 
              method="POST" 
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="row">

                <!-- Image preview -->
                <div class="col-md-4 text-center mb-3">
                    <img 
                        src="{{ asset('storage/'.$viewData['phone']->getImage()) }}" 
                        class="img-fluid rounded mb-3"
                        style="max-height: 200px;"
                    >

                    <div>
                        <label class="form-label text-secondary">Change Image</label>
                        <input type="file" name="image" 
                               class="form-control bg-dark text-light border-secondary">
                    </div>
                </div>

                <!-- Fields -->
                <div class="col-md-8">

                    <div class="row">

                        <div class="col-md-6">
                            <!-- Name -->
                            <div class="mb-3">
                                <label class="form-label text-secondary">Name</label>
                                <input type="text" name="name"
                                       class="form-control bg-dark text-light border-secondary"
                                       value="{{ $viewData['phone']->getName() }}">
                            </div>

                            <!-- Brand -->
                            <div class="mb-3">
                                <label class="form-label text-secondary">Brand</label>
                                <input type="text" name="brand"
                                       class="form-control bg-dark text-light border-secondary"
                                       value="{{ $viewData['phone']->getBrand() }}">
                            </div>

                            <!-- Memory -->
                            <div class="mb-3">
                                <label class="form-label text-secondary">Memory</label>
                                <input type="text" name="memory"
                                       class="form-control bg-dark text-light border-secondary"
                                       value="{{ $viewData['phone']->getMemory() }}">
                            </div>

                            <!-- RAM -->
                            <div class="mb-3">
                                <label class="form-label text-secondary">RAM</label>
                                <input type="text" name="ram"
                                       class="form-control bg-dark text-light border-secondary"
                                       value="{{ $viewData['phone']->getRam() }}">
                            </div>
                        </div>

                        <div class="col-md-6">

                            <!-- Battery -->
                            <div class="mb-3">
                                <label class="form-label text-secondary">Battery</label>
                                <input type="text" name="battery"
                                       class="form-control bg-dark text-light border-secondary"
                                       value="{{ $viewData['phone']->getBattery() }}">
                            </div>

                            <!-- Price -->
                            <div class="mb-3">
                                <label class="form-label text-secondary">Price</label>
                                <input type="number" name="price"
                                       class="form-control bg-dark text-light border-secondary"
                                       value="{{ $viewData['phone']->getPrice() }}">
                            </div>

                            <!-- Quantity -->
                            <div class="mb-3">
                                <label class="form-label text-secondary">Stock</label>
                                <input type="number" name="quantity"
                                       class="form-control bg-dark text-light border-secondary"
                                       value="{{ $viewData['phone']->getQuantity() }}">
                            </div>

                            <!-- Office -->
                            <div class="mb-3">
                                <label class="form-label text-secondary">Office</label>
                                <select name="office_id" 
                                        class="form-select bg-dark text-light border-secondary">
                                    @foreach($viewData['offices'] as $office)
                                        <option 
                                            value="{{ $office->getId() }}"
                                            @if($office->getId() == $viewData['phone']->office->getId()) selected @endif
                                        >
                                            {{ $office->getName() }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Actions -->
            <div class="d-flex gap-2 mt-3">
                <button type="submit" class="btn btn-warning">
                    Update
                </button>

                <a href="{{ route('admin.phone.index') }}" class="btn btn-outline-light">
                    Cancel
                </a>
            </div>

        </form>

    </div>
</div>

@endsection