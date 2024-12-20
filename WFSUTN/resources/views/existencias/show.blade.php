@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalle de la Existencia</h2>
    
    <div class="splide" id="splide-slider">
        <div class="splide__track">
            <ul class="splide__list">
                <!-- Aquí mostrarás las imágenes del producto -->
                @foreach ($existencia->imagenes as $imagen)
                    <li class="splide__slide">
                        <img src="{{ asset('storage/' . $imagen) }}" alt="Imagen del producto" class="img-fluid">
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    
    <div class="mt-4">
        <h3>{{ $existencia->nombre }}</h3>
        <p><strong>Cantidad:</strong> {{ $existencia->cantidad }}</p>
        <p><strong>Precio:</strong> ${{ number_format($existencia->precio, 2) }}</p>
        <p><strong>Fecha de Vencimiento:</strong> {{ \Carbon\Carbon::parse($existencia->fecha_vencimiento)->format('d/m/Y') }}</p>
    </div>
</div>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Splide('#splide-slider', {
            type       : 'fade',
            heightRatio: 0.5,
            pagination: false,
            arrows: true,
        }).mount();
    });
</script>
@endpush
