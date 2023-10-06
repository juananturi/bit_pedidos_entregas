<x-layouts.main-layout>
<div class="container">
        <h1>Listado de Productos</h1>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>IVA</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->codigo }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->iva }}</td>

                    <td class="d-flex">
                        <a href="{{url('productos/' . $producto->id)}}" ><button class="btn btn-primary text-white me-1"><i class="fa-solid fa-eye"></i></button></a>

                        <form action="{{'/productos/' . $producto->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger "><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <a href="{{ route('productos.create') }}" class="btn btn-success">Agregar Producto</a>
    </div>
</x-layouts.main-layout>