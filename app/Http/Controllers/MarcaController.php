<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    // Mostrar una lista de marcas
    public function index()
    {
        $marcas = Marca::all();
        return view('marcas.index', compact('marcas'));
    }

    // Mostrar el formulario para crear una nueva marca
    public function create()
    {
        return view('marcas.create');
    }

    // Almacenar una nueva marca en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
           
        ]);

        Marca::create([
            'nombre' => $request->input('nombre'),
            
        ]);

        return redirect('/marcas')->with('success', 'Marca creada correctamente');
    }

    // Mostrar los detalles de una marca específica
    public function show($id)
    {
        $marca = Marca::findOrFail($id);
        return view('marcas.show', compact('marca'));
    }

    // Mostrar el formulario para editar una marca
    public function edit($id)
    {
        $marca = Marca::findOrFail($id);
        return view('marcas.edit', compact('marca'));
    }

    // Actualizar una marca en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            // Otros campos de validación según tus necesidades
        ]);

        $marca = Marca::findOrFail($id);
        $marca->update([
            'nombre' => $request->input('nombre'),
            // Otros campos según tus necesidades
        ]);

        return redirect('/marcas')->with('success', 'Marca actualizada correctamente');
    }

    // Eliminar una marca de la base de datos
    public function destroy($id)
    {
        $marca = Marca::findOrFail($id);
        $marca->delete();

        return redirect('/marcas')->with('success', 'Marca eliminada correctamente');
    }
}
