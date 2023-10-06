<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        // Validación de datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        // Crear una nueva categoría
        Categoria::create([
            'nombre' => $request->input('nombre'),
        ]);

        return redirect()->route('categorias.index')
            ->with('success', 'Categoría creada correctamente.');
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $categoria =request()->except(['_token', '_method']);
        Categoria::where('id', '=', $id)->update($categoria);
        return redirect('categorias');
       
    }

    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect()->route('categorias.index')
            ->with('success', 'Categoría eliminada correctamente.');
    }

    public function verProductos($id)
    {
        $categoria = Categoria::find($id);
        $productos = Producto::where('categoria_id', $id)->get();
        return view('categorias.verProductos', compact('categoria', 'productos'));
    }
    public function show($id)
    {
        $categoria = Categoria::find($id);
        
    
        return view('categorias.show', compact('categoria'));
    }

}