<x-layouts.main-layout>

    <div class="container">
        <h1>Editar Categoría</h1>
        <br>

        <form  action="{{url('/categorias/'.$categoria->id) }}" method="post">
            @method('put')
            @csrf
            <x-input type="text" value="{{$categoria->nombre}}" name="nombre" id="nombre" label="Nombre"></x-input>  
            <br>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

</x-layouts.main-layout>