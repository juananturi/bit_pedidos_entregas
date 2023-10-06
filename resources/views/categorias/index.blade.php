<x-layouts.main-layout>
    <div class="container">

    <a href="{{url('categorias/create')}}" class="btn btn-primary mt-3">Crear Categoria</a> 
    <hr>

        <h1> Categorías</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($categorias as $categoria)
                <tr>

                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->nombre}}</td>
                    <td class="d-flex" >
                        <a href="{{url('categorias/' . $categoria->id)}}" ><button class="btn btn-primary text-white me-1"><i class="fa-solid fa-eye"></i></button></a>
                        <a href="{{url('categorias/' . $categoria->id . '/edit')}}" ><button class="btn btn-warning text-white me-1"><i class="fa-solid fa-pen-to-square"></i></button></a>
                       
                        <form action="{{'/categorias/' . $categoria->id}}" method="post" >
                        @csrf
                            @method('DELETE')
                        <button class="btn btn-danger "><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody> 
        
        </table>
    </div>
</x-layouts.main-layout>