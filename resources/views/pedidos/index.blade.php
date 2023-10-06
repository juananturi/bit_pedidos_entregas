
<x-layouts.main-layout>
<h1>Filtrar Pedidos</h1>

<div class="container">

        <!-- Formulario de filtro con estilos de Bootstrap -->
        <form method="GET" class="mb-4">
            <div class="row">
                <div class="col-md-6">

                    <x-input label="Número de Orden:" name="numero_orden" id="numero_orden" type="text"> </x-input>
                    <x-input label="Fecha Desde:" name="fecha_desde" id="fecha_desde" type="date"> </x-input>
                    <x-input label="Fecha Hasta:" name="fecha_hasta" id="fecha_hasta" type="date"> </x-input>
                    <div class="form-group">
                        <label for="empleado">Empleado:</label>
                        <select name="empleado" id="empleado" class="form-control">
                            <option value="">Seleccionar Empleado</option>
                            <!-- Agrega opciones de empleados desde tu base de datos -->
                        </select>
                    </div>
                    
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cliente">Cliente:</label>
                        <select name="cliente" id="cliente" class="form-control">
                            <option value="">Seleccionar Cliente</option>
                            <!-- Agrega opciones de clientes desde tu base de datos -->
                        </select>
                    </div>
                </div>
               
            </div>
        </form>
        <br>
 
        <x-button>Filtrar </x-button>

        <br>

        <!-- Mostrar el total de pedidos -->
        <p>Total de Pedidos: </p>

        <!-- Lista de pedidos -->
        <ul>
        <!-- Agrega aquí los datos del pedido que deseas mostrar -->

        </ul>
    </div>
    <div class="container">
        <h1>Lista de Pedidos</h1>

        <a href="{{ route('pedidos.create') }}" class="btn btn-primary">Crear Pedido</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->codigo }}</td>
                    <td>{{ $pedido->descripcion }}</td>
                    <td>{{ $pedido->total }}</td>
                    <td>
                        <a href="{{ route('pedidos.show', $pedido->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 
</x-layouts.main-layout>