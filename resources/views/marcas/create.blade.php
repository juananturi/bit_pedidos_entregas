<x-layouts.main-layout> 
 
       <section class="banner_main"> 
           <div class="container bg- p-3 rounded"> 
               <h1 class="text-center">Crear Marca</h1> 
            <form method="POST" action="{{url('/marcas') }}"> 
                @csrf 
                
                <x-input label="Nombre" name="nombre" id="nombre" type="text"> </x-input>
                <br>
                <x-button type="submit" >Crear</x-button>
            </form> 
        </div> 
    </section> 
     
   
</x-layouts.main-layout>