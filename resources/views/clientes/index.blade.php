<x-layouts.main-layout> 
    <div class="container">

    <a href="{{url('clientes/create')}}" class="btn btn-primary mt-3">Crear Cliente</a> 
        <hr>
            <form action="{{url('/clientes')}}" method="GET">
                
                <x-input label="Cedula:" name="cedula" id="cedula" value="{{ request('cedula') }}" type="text"> </x-input>
                <x-input label="Ciudad:" name="ciudad" id="ciudad" value="{{ request('ciudad') }}" type="text"> </x-input>
                <x-input label="Departamento:" name="departamento_id" id="departamento_id" value="{{ request('departamento_id') }}" type="text"> </x-input>

              <!-- poner el ESTADO  -->
                <br>
                    <x-button type="submit">Buscar</x-button>
                
            </form>
        <hr>

            <h1>Listado de Clientes</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cedula</th>
                        <th>Direccion</th>
                        <th>Barrio</th>                 
                        <th>Departamento</th>
                        <th>Municipio</th>
                        <th>Descripción</th>
                        <th>Activo</th>
                        <th>Fecha Nacimiento</th>
                        <th>Telefono</th>
                        <th>Codigo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->nombre }}</td>
                            <td>{{ $cliente->apellido }}</td>
                            <td>{{ $cliente->cedula }}</td>
                            <td>{{ $cliente->direccion }}</td>
                            <td>{{ $cliente->barrio }}</td>
                            <td>{{ $cliente->departamento_id }}</td>
                            <td>{{ $cliente->municipio_id }}</td>
                            <td>{{ $cliente->descripcion }}</td>
                            <td>{{ $cliente->activo }}</td>
                            <td>{{ $cliente->fecha_nacimiento }}</td>
                            <td>{{ $cliente->telefono }}</td>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->codigo }}</td>
                            <td class="d-flex" > 
                                <a href="{{url('clientes/' . $cliente->id . '/edit')}}" ><button class="btn btn-warning text-white me-1"><i class="fa-regular fa-pen-to-square"></i></button></a> 
                                <form action="/clientes/$cliente->id"> 
                                    @method('DELETE') 
                                <button class="btn btn-danger "><i class="fa-solid fa-trash"></i></button> 
        
                                </form> 
                            </td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    
    </div> 
</x-layouts.main-layout>