<x-layouts.main-layout> 
 
       <section class="banner_main"> 
           <div class="container bg- p-3 rounded"> 
               <h1 class="text-center">Crear empleado</h1> 
            <form method="POST" action="{{url('/empleados') }}"> 
                @csrf 
                <div class="row">  
                        <x-input label="Nombre" name="nombre" id="nombre" type="text"> </x-input>
                        <x-input label="Apellido" name="apellido" id="apellido" type="text"> </x-input>
                        <x-input label="Cedula" name="cedula" id="cedula" type="text"></x-input>
                        <x-input label="Direccion" name="direccion" id="direccion" type="text"></x-input>
                        <x-select></x-select>
                        <x-input label="Barrio" name="barrio" id="barrio" type="text"></x-input>
                    <div class="form-group col-6 my-2"> 
                        <label for="tipo_empleado">Tipo de empleado</label>   

                        <select  class="form-control " name="tipo_empleado" id="te" > 
                            <option value="1">Administrativo</option> 
                            <option value="2">Asesor</option> 
                            <option value="3">Entregador</option> 
                            placeholder="--Seleccione una localidad"<option value="4">Gerente</option> 
                        </select> 
                    </div> 
                        <x-input label="Salario" name="salario" id="salario" type="text"></x-input>
                        <x-input label="Usuario" name="email" id="email" type="email"></x-input>
                        <x-input label="Contraseña" name="password" id="password" type="text"></x-input>
                </div> 
                <br>
                
                    <x-button type="submit" >Crear</x-button>
            </form> 
        </div> 
    </section> 
     
   
</x-layouts.main-layout>