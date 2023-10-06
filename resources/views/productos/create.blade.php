<x-layouts.main-layout> 
 
<div class="container">
        <h1>Crear Producto</h1>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form  action="{{ url('/productos') }}"method="POST">
            @csrf
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" class="form-control" id="codigo" name="codigo" value="{{ old('codigo') }}" >
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" >
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion">{{ old('descripcion') }}</textarea>
            </div>
            <div class="form-group">
                <label for="cantidad_disponible">Cantidad Disponible:</label>
                <input type="number" class="form-control" id="cantidad_disponible" name="cantidad_disponible" value="{{ old('cantidad_disponible') }}" >
            </div>
            <div class="form-group">
                <label for="habilitado">Habilitado:</label>
                <select class="form-control" id="habilitado" name="habilitado">
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cantidad_ventas">Cantidad de Ventas:</label>
                <input type="number" class="form-control" id="cantidad_ventas" name="cantidad_ventas" value="{{ old('cantidad_ventas') }}" >
            </div>
            <div class="form-group d-none">
                <label for="iva">IVA:</label>
                <input type="number" class="form-control" id="iva" name="iva" value="{{  old('iva') }}" >
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="{{ old('precio') }}" >
            </div>
            <div class="form-group">
                <label for="marca_id">Marca:</label>
                <select class="form-control" id="marca_id" name="marca_id" >
                    @foreach ($marcas as $marca)
                        <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="categoria_id">Categoría:</label>
                <select class="form-control" id="categoria_id" name="categoria_id" >
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <br>    
            <!-- <button type="submit" class="btn btn-success">Crear Producto</button> -->
            <input type="submit" value="Crear" class="btn btn-success" >
        </form>
    </div>
     
   
</x-layouts.main-layout>