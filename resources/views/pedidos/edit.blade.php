<x-layouts.main-layout> 
<x-layouts.main-layout> 
 
<div class="container">
        <h1>Editar Pedido</h1>
        <form method="POST" action="{{ route('pedidos.update', $pedido->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="numero_orden">Número de Orden:</label>
                <input type="text" class="form-control" id="numero_orden" name="numero_orden" value="{{ $pedido->numero_orden }}" required>
            </div>

            <div class="form-group">
                <label for="fecha_pedido">Fecha de Pedido:</label>
                <input type="date" class="form-control" id="fecha_pedido" name="fecha_pedido" value="{{ $pedido->fecha_pedido }}" required>
            </div>

            <div class="form-group">
                <label for="total_precio">Total en Pesos:</label>
                <input type="number" class="form-control" id="total_precio" name="total_precio" value="{{ $pedido->total_precio }}" required>
            </div>

            <!-- Agrega más campos del pedido aquí según tus necesidades -->

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
     
    <script src="{{ asset('js/departamentos.js') }}"></script> 
</x-layouts.main-layout>

</x-layouts.main-layout> 
