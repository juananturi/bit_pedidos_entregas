<x-layouts.main-layout>
    <div class="container">
        <h1>Detalles del Producto</h1>

        <div class="card">
            <div class="card-body">
                <h2>{{ $producto->nombre }}</h2>
                <p><strong>Código:</strong> {{ $producto->codigo }}</p>
                <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
                <p><strong>Cantidad Disponible:</strong> {{ $producto->cantidad_disponible }}</p>
                <p><strong>Habilitado:</strong> {{ $producto->habilitado ? 'Sí' : 'No' }}</p>
                <p><strong>Cantidad de Ventas:</strong> {{ $producto->cantidad_ventas }}</p>
                <p><strong>IVA:</strong> {{ $producto->iva }}</p>
                <p><strong>Precio:</strong> {{ $producto->precio }}</p>
                <p><strong>Marca:</strong> {{ $producto->marca_id->nombre }}</p>
                <p><strong>Categoría:</strong> {{ $producto->categoria_id->nombre }}</p>
            </div>
        </div>

        <a href="{{ route('productos.index') }}" class="btn btn-primary mt-3">Volver</a>
    </div>
</x-layouts.main-layout>
