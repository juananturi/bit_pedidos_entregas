<x-layouts.main-layout> 
        <div class="container">
                <h1>Crear Cliente</h1>

                <form method="POST" action="{{url('/clientes')}}">
                    @csrf
                    <x-input label="Nombre" name="nombre" id="nombre" type="text"> </x-input>
                    <x-input label="Apellido" name="apellido" id="apellido" type="text"></x-input>
                    <x-input label="Cedula" name="cedula" id="cedula" type="text"></x-input>
                    <x-input label="Direccion" name="direccion" id="direccion" type="text"></x-input>
                    <x-select></x-select>
                    <x-input label="Barrio" name="barrio" id="barrio" type="text"></x-input>
                    <x-input label="Fecha Nacimiento" name="fecha_nacimiento" id="fecha_nacimiento" type="date"></x-input>
                    <x-input label="Telefono" name="telefono" id="telefono" type="number"></x-input>
                    <label for="Activo">Activo</label>
                    <input name="activo" id="activo" type="checkbox">

                
                </div> 
                <br>
                <x-button type="submit">Guardar Cliente</x-button>     
        </div>
</x-layouts.main-layout>
