<?php 
 
namespace App\Http\Controllers; 
use Illuminate\Support\Facades\Storage; 
use App\Models\Empleado; 
use App\Models\User;  
use App\Models\Departamento;
use App\Models\Municipio;
 
use Illuminate\Http\Request; 
 
class EmpleadoController extends Controller 
{ 
    public function index(){ 
        $empleados = Empleado::all(); 
        return view('empleados.index', compact('empleados')); 
 
    } 
    public function create() 
    { 
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        return view('empleados.create', compact('departamentos', 'municipios')); 
    } 
    public function store(Request $request) 
    { 
        $empleado = new Empleado(); 
        $user = new User(); 
        $empleado->nombre = $request->input('nombre'); 
        $empleado->apellido = $request->input('apellido'); 
        $empleado->cedula = $request->input('cedula'); 
        $empleado->direccion = $request->input('direccion'); 
        $empleado->departamento_id = $request->input('departamento_id'); 
        $empleado->municipio_id = $request->input('municipio_id'); 
        $empleado->barrio = $request->input('barrio'); 
        $empleado->tipo_empleado = $request->input('tipo_empleado'); 
        $empleado->salario = $request->input('salario'); 
        $user->name = $request->input('nombre'); 
        $user->email = $request->input('email'); 
        $user->password = bcrypt($request->input('password')); 
        $empleado->save(); 
        $user->save();  
        return redirect('/empleados')->with('Empleado creado correctamente'); 
    } 


    public function show($id){
        $empleado = Empleado::find($id); 
        return view('empleados.show', compact('empleado')); 
    }


    public function destroy($id){
        $empleado = Empleado::find($id);

            Empleado::destroy($id);
        return redirect('empleados')->with('msg', 'El Empleado se ha borrado exitosamente' );

    }
}