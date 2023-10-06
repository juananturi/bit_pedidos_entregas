<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente; 
use App\Models\Departamento;
use App\Models\Municipio;

class ClienteController extends Controller
{
    // Método para mostrar la lista de clientes
        public function index(Request $request)
        {
            $query = Cliente::query();

        if ($request->has('cedula')) {
            $query->where('cedula', 'LIKE', '%' . $request->input('cedula') . '%');
        }

        if ($request->has('ciudad')) {
            $query->where('ciudad', 'LIKE', '%' . $request->input('ciudad') . '%');
        }

        if ($request->has('departamento_id')) {
            $query->where('departamento_id', 'LIKE', '%' . $request->input('departamento_id') . '%');
        }

        if ($request->has('activo')) {
            $query->where('activo', $request->input('activo'));
        }

        $clientes = Cliente::all(); // Obtener todos los registros de la tabla cliente
        return view('clientes.index', compact('clientes'));
    }

    // Otros métodos para crear, editar y eliminar clientes
    // Puedes implementar estos métodos según tus necesidades

    public function create()
    {
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        return view('clientes.create', compact('departamentos', 'municipios')); 
    }

    public function show($id){ 
        $empleado = Cliente::find($id);  
        return view('clientes.show', compact('cliente'));  
    }

    public function edit($id)
    {
        // Lógica para mostrar el formulario de edición
    }

    public function update(Request $request, $id)
    {
        // Lógica para actualizar un cliente existente
    }

    public function destroy($id)
    {
        // Lógica para eliminar un cliente
    }
    public function store(Request $request) 
    { 
        // Validación de datos del formulario (puedes personalizar esto según tus necesidades) 
        // $request->validate([ 
        //     'nombre' => 'required|string|max:50', 
        //     'apellidos' => 'required|string|max:50', 
        //     'cedula' => 'required|string|max:50', 
        //     'direccion' => 'nullable|string|max:255', 
        //     'departamento_id' => 'required|integer', 
        //     'municipio_id' => 'required|integer', 
        //     'barrio' => 'nullable|string|max:255', 
        //     'fecha_nacimiento' => 'required|date',
        //     'telefono' => 'required|integer',
        //     'activo' => 'required|boolean',
        //     'descripcion' => 'nullable|string|max:255', 


        // ]); 
 
        // Crea un nuevo objeto Cliente y asigna los valores del formulario 
        $cliente = new Cliente(); 
         
        $cliente->nombre = $request->input('nombre'); 
        $cliente->apellido = $request->input('apellido'); 
        $cliente->cedula = $request->input('cedula'); 
        $cliente->direccion = $request->input('direccion'); 
        $cliente->departamento_id = $request->input('departamento_id'); 
        $cliente->municipio_id = $request->input('municipio'); 
        $cliente->barrio = $request->input('barrio');
        $cliente->fecha_nacimiento = $request->date('fecha_nacimiento');
        $cliente->telefono = $request->input('telefono');
        $cliente->activo = $request->input('telefono');


        // Guarda el Cliente en la base de datos 
        $cliente->save(); 
         
 
        // Redirecciona a alguna vista o acción de confirmación 
        return redirect('/clientes')->with('Cliente creado correctamente'); 
    } 
    
}
