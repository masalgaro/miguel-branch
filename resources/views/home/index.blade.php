@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="row align-items-center gy-4">
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/logo-banana-phone.jpg') }}"
                 alt="Banana Phone Store Logo"
                 class="img-fluid rounded shadow"
                 style="max-height: 350px;">
        </div>

        <div class="col-md-6">
            <h1 class="display-4 fw-bold">Banana Phone Store</h1>
            <p class="lead text-secondary">
                Tecnología, elegancia y los mejores celulares en un solo lugar.
            </p>

            <div class="d-flex gap-2 flex-wrap">
                <a href="{{ route('phone.index') }}" class="btn btn-dark">
                    Ver catálogo
                </a>
            </div>
        </div>
    </div>

    <hr class="my-5">

    <div class="text-center mb-4">
        <h2 class="fw-bold">¿Por qué elegirnos?</h2>
        <p class="text-secondary">Una tienda moderna para encontrar el equipo ideal.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Equipos premium</h5>
                    <p class="card-text">
                        Celulares modernos, elegantes y con excelente rendimiento.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Compra segura</h5>
                    <p class="card-text">
                        Un proceso claro y confiable para tus compras.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Atención de calidad</h5>
                    <p class="card-text">
                        Te ayudamos a encontrar el producto que más te conviene.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5">

    <div class="text-center">
        <h2 class="fw-bold">Productos destacados</h2>
        <p class="text-secondary mb-4">Explora algunos de nuestros dispositivos más llamativos.</p>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">iPhone</h5>
                        <p class="card-text">Diseño premium y potencia excepcional.</p>
                        <a href="{{ route('phone.index') }}" class="btn btn-dark">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Samsung Galaxy</h5>
                        <p class="card-text">Pantalla increíble y gran rendimiento.</p>
                        <a href="{{ route('phone.index') }}" class="btn btn-dark">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Accesorios</h5>
                        <p class="card-text">Complementos ideales para tu dispositivo.</p>
                        <a href="{{ route('phone.index') }}" class="btn btn-dark">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection