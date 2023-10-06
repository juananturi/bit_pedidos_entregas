<x-layouts.main-layout>
    <div class="container">
        <h1>Listado de Empleados</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Cédula</th>
                    <th>Dirección</th>
                    <th>Departamento</th>
                    <th>Municipio</th>
                    <th>Barrio</th>
                    <th>Tipo de Empleado</th>
                    <th>Salario</th>
                    <th>acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                <tr>

                    <td>{{$empleado->id}}</td>
                    <td>{{$empleado->nombre}}</td>
                    <td>{{$empleado->apellido}}</td>
                    <td>{{$empleado->cedula}}</td>
                    <td>{{$empleado->direccion}}</td>
                    <td>{{$empleado->departamento}}</td>
                    <td>{{$empleado->municipio}}</td>
                    <td>{{$empleado->barrio}}</td>
                    <td>{{$empleado->tipo_empleado}}</td>
                    <td>{{$empleado->salario}}</td>
                    <td class="d-flex" >
                        <a href="{{url('empleados/' . $empleado->id)}}" ><button class="btn btn-primary text-white me-1"><i class="fa-solid fa-eye"></i></button></a>
                       
                        <form action="{{'/empleados/' . $empleado->id}}" method="post" >
                        @csrf
                            @method('DELETE')
                        <button class="btn btn-danger "><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>

        </table>


        <a href="{{url('empleados/create')}}" class="btn btn-primary mt-3"><i class="fa-solid fa-plus"></i> Crear Empleado</a>



    </div>
</x-layouts.main-layout>