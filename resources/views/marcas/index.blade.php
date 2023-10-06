<x-layouts.main-layout>
    <div class="container">
        <h1>Listado de Marcas</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($marcas as $marca)
                <tr>

                    <td>{{$marca->id}}</td>
                    <td>{{$marca->nombre}}</td>
                    
                    <td class="d-flex" >
                        <a href="{{url('marcas/' . $marca->id)}}" ><button class="btn btn-primary text-white me-1"><i class="fa-solid fa-eye"></i></button></a>
                       
                        <form action="{{'/marcas/' . $marca->id}}" method="post" >
                        @csrf
                            @method('DELETE')
                        <button class="btn btn-danger "><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>

        </table>


        <a href="{{url('marcas/create')}}" class="btn btn-primary mt-3"><i class="fa-solid fa-plus"></i> Crear Marca</a>



    </div>
</x-layouts.main-layout>