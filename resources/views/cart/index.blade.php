@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">{{__('messages.shoppingCartTitle')}}</h2>

    @if($viewData['cartProducts']->isEmpty())
        <div class="alert alert-info">
            {{__('messages.cartIsEmptyTitle')}}
        </div>
    @else
        <div class="row g-4">
            @foreach ($viewData['cartProducts'] as $phone)
                <div class="col-12">
                    <div class="card shadow-sm rounded-4 border-0">
                        <div class="card-body d-flex justify-content-between align-items-center flex-wrap gap-3">
                            <div>
                                <h5 class="mb-1">{{ $phone->getName() }}</h5>
                                <p class="mb-1 text-muted">{{ __('messages.brandTitle') }}: {{ $phone->getBrand() }}</p>
                                <p class="mb-1 text-muted">{{ __('messages.priceTitle')}}: ${{ $phone->getPrice() }}</p>
                                <p class="mb-0 fw-bold">
                                    {{ __('messages.subtotalTitle') }}:
                                    ${{ $phone->getPrice() * ($viewData['cartProductData'][$phone->getId()] ?? 0) }}
                                </p>
                            </div>

                            <div class="d-flex align-items-center gap-2">
                                <form action="{{ route('cart.update', ['id' => $phone->getId()]) }}" method="POST" class="d-flex align-items-center gap-2">
                                    @csrf
                                    <input
                                        type="number"
                                        name="quantity"
                                        min="1"
                                        value="{{ $viewData['cartProductData'][$phone->getId()] ?? 1 }}"
                                        class="form-control"
                                        style="width: 90px;"
                                        onchange="this.form.submit()"
                                    >
                                </form>

                                <a href="{{ route('cart.remove', ['id' => $phone->getId()]) }}" class="btn btn-outline-danger">
                                    {{ __('messages.removeButton') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4 d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Total: ${{ $viewData['total'] }}</h4>

            <a href="{{ route('cart.removeAll') }}" class="btn btn-danger">
                {{ __('messages.removeAllButton') }}
            </a>
        </div>
    @endif
</div>
@endsection