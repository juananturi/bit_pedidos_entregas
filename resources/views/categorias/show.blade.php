<x-layouts.main-layout>
    <div class="container">
        <h1>Detalles de la Categoría</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Información del la Categoria</h5>

                @if ($categoria)
                <ul class="list-group">
                    <li class="list-group-item"><strong>Nombre:</strong> {{ $categoria->nombre }}</li>
                    <li class="list-group-item"><strong>Descripción:</strong> {{ $categoria->descripcion }}</li>
                </ul>
                
                @else
                    <p>La categoría no existe o no se encontró.</p>
                @endif
            </div>
        </div>

        <h3>Productos en esta Categoría</h3>

        <ul class="list-group">
            @if ($categoria && $categoria->productos)
                @foreach ($categoria->productos as $producto)
                    <li class="list-group-item">{{ $producto->nombre }}</li>
                @endforeach
            @else
                <li class="list-group-item">No se encontraron productos en esta categoría.</li>
            @endif
        </ul>
    </div>
</x-layouts.main-layout>

