
<x-layouts.main-layout> 
 
<h1>Detalles del Cliente</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Información del Cliente</h5>
            <ul class="list-group">
                <li class="list-group-item"><strong>Nombre:</strong> {{ $cliente->nombre }}</li>
                <li class="list-group-item"><strong>Cedula:</strong> {{ $cliente->cedula }}</li>
                <li class="list-group-item"><strong>Dirección:</strong> {{ $cliente->direccion }}</li>
                <li class="list-group-item"><strong>Departamento:</strong> {{ $cliente->departamento_id }}</li>
                <li class="list-group-item"><strong>Municipio:</strong> {{ $cliente->municipio_id }}</li>
                <li class="list-group-item"><strong>Barrio:</strong> {{ $cliente->barrio }}</li>
            </ul>
        </div>
    </div>

    <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-primary mt-3">Editar Empleado</a>
    <a href="{{ route('empleados.index') }}" class="btn btn-secondary mt-3">Volver a la Lista</a>

</x-layouts.main-layout> 
