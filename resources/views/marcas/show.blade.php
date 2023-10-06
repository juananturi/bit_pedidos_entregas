<x-layouts.main-layout> 

<h1>Detalles del marca</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Información del la Marca</h5>
            <ul class="list-group">
                <li class="list-group-item"><strong>Nombre:</strong> {{ $marca->nombre }}</li>
                
            </ul>
        </div>
    </div>

    <a href="{{ route('marcas.index') }}" class="btn btn-primary mt-3"><i class="fa-solid fa-arrow-left"></i> Volver a la Lista</a>

</x-layouts.main-layout>