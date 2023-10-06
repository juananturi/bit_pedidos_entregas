<x-layouts.main-layout>

    <div class="container">
        <h1>Crear Categoría</h1>
        <br>

        <form method="POST" action="{{url('/categorias') }}">
            @csrf
            <x-input type="text" name="nombre" id="nombre" label="Nombre"></x-input>  
            <br>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

</x-layouts.main-layout>