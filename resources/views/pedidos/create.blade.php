<x-layouts.main-layout> 
 
<div class="container">
    <h1>Crear Pedido</h1>
    
    <form method="POST" action="{{ url('/pedidos') }}"> <!-- Asegúrate de que la ruta 'pedidos.store' esté definida en tu archivo de rutas -->
        @csrf

        <div class="form-group">
            <label for="numero_orden">Número de Orden:</label>
            <input type="text" class="form-control" id="numero_orden" name="numero_orden" required>
        </div>

        <div class="form-group">
            <label for="fecha_registro">Fecha de Registro:</label>
            <input type="date" class="form-control" id="fecha_registro" name="fecha_registro" required>
        </div>

        <div class="form-group">
            <label for="total_precio">Total Precio:</label>
            <input type="number" step="0.01" class="form-control" id="total_precio" name="total_precio" required>
        </div>

        <div class="form-group">
            <label for="total_iva">Total IVA:</label>
            <input type="number" step="0.01" class="form-control" id="total_iva" name="total_iva" required>
        </div>

        <div class="form-group">
            <label for="departamento">Departamento:</label>
            <input type="text" class="form-control" id="departamento" name="departamento" required>
        </div>

        <div class="form-group">
            <label for="ciudad">Ciudad:</label>
            <input type="text" class="form-control" id="ciudad" name="ciudad" required>
        </div>

        <div class="form-group">
            <label for="barrio">Barrio:</label>
            <input type="text" class="form-control" id="barrio" name="barrio" required>
        </div>

        <div class="form-group">
            <label for="direccion_entrega">Dirección de Entrega:</label>
            <input type="text" class="form-control" id="direccion_entrega" name="direccion_entrega" required>
        </div>

        <div class="form-group">
            <label for="cliente">Cliente:</label>
            <select class="form-control" id="cliente" name="cliente" required>
                <!-- Aquí debes cargar dinámicamente la lista de clientes desde tu controlador -->
                <!-- Ejemplo: -->
                 @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                @endforeach 
            </select>
        </div>

        <div class="form-group">
            <label for="empleado">Empleado:</label>
            <select class="form-control" id="empleado" name="empleado" required>
                <!-- Aquí debes cargar dinámicamente la lista de empleados desde tu controlador -->
                <!-- Ejemplo: -->
                @foreach ($empleados as $empleado)
                    <option value="{{ $empleado->id }}">{{ $empleado->nombre }}</option>
                @endforeach 
            </select>
        </div>

        <div class="form-group">
            <label for="entregador">Entregador:</label>
            <select class="form-control" id="entregador" name="entregador" required>
                <!-- Aquí debes cargar dinámicamente la lista de entregadores desde tu controlador -->
                <!-- Ejemplo: -->
                 @foreach ($entregadores as $entregador)
                    <option value="{{ $entregador->id }}">{{ $entregador->nombre }}</option>
                @endforeach 
            </select>
        </div>

        <div class="form-group">
            <label for="observacion">Observación:</label>
            <textarea class="form-control" id="observacion" name="observacion"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Crear Pedido</button>
    
    </form>
</div>
     
    <script src="{{ asset('js/departamentos.js') }}"></script> 
</x-layouts.main-layout>
