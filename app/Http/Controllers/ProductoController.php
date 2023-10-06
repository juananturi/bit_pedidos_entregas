<?php

namespace App\Http\Controllers;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use App\Models\Marca;
use App\Models\Categoria;



use Illuminate\Http\Request;
use App\Models\Producto; // Asegúrate de importar el modelo Producto

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all(); // Obtener todos los productos
        return view('productos.index', compact('productos'));
    }

    public function show($id)
    {
        $producto = Producto::findOrFail($id); // Buscar un producto por ID
        return view('productos.show', compact('producto'));
    }

    public function create()
    {
            $categorias = Categoria::all(); // Obtener los datos de las categorías desde tu modelo
            $marcas = Marca::all(); // Obtener los datos de las marcas desde tu modelo

            return view('productos.create', compact('marcas','categorias'));
            
    }

    public function store(Request $request)
    {
        // Validación de los datos del formulario (puedes personalizar las reglas de validación)
        /* $request->validate([
            'codigo' => 'required|unique:productos|max:255',
            'nombre' => 'required|max:255',
            'descripcion' => 'nullable',
            'cantidad_disponible' => 'required|integer',
            'habilitado' => 'required|boolean',
            'cantidad_ventas' => 'required|integer',
            'iva' => 'required|numeric',
            'precio' => 'required|numeric',
            'marca_id' => 'required|exists:marcas,id', // Asegúrate de que la marca exista en la tabla marcas
            'categoria_id' => 'required|exists:categorias,id', // Asegúrate de que la categoría exista en la tabla categorias
        ]);
 */
        // Crear un nuevo producto en la base de datos
         Producto::create([
            'codigo' => $request->codigo,
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'cantidad_disponible' => $request->cantidad_disponible,
            'habilitado' => $request->habilitado,
            'cantidad_ventas' => $request->cantidad_ventas,
            'iva' => $request->precio * 0.19,
            'precio' => $request->precio,
            'marca_id' => $request->marca_id,
            'categoria_id' => $request->categoria_id,
        ]); 
        
        // return redirect('productos')->with('success', 'Producto creado correctamente');
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id); // Buscar un producto por ID para editar
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        // Validación de los datos del formulario (puedes personalizar las reglas de validación)
        $request->validate([
            'codigo' => 'required|unique:productos,codigo,'.$id,
            'nombre' => 'required|max:255',
            'descripcion' => 'nullable',
            'cantidad_disponible' => 'required|integer',
            'habilitado' => 'required|boolean',
            'cantidad_ventas' => 'required|integer',
            'iva' => 'required|numeric',
            'precio' => 'required|numeric',
            'marca_id' => 'required|exists:marcas,id', // Asegúrate de que la marca exista en la tabla marcas
            'categoria_id' => 'required|exists:categorias,id', // Asegúrate de que la categoría exista en la tabla categorias
        ]);

        $producto = Producto::findOrFail($id); // Buscar el producto por ID para actualizar
        $producto->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'codigo' => $request->codigo,
            'cantidad_disponible' => $request->cantidad_disponible,
            'iva' => $request->iva,
            'habilitado' => $request->habilitado



            // Actualiza otros campos aquí según tu migración
        ]);

        // Actualizar los campos del producto
        $producto->codigo = $request->codigo;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->cantidad_disponible = $request->cantidad_disponible;
        $producto->habilitado = $request->habilitado;
        $producto->cantidad_ventas = $request->cantidad_ventas;
        $producto->iva = $request->iva;
        $producto->precio = $request->precio;
        $producto->marca_id = $request->marca_id;
        $producto->categoria_id = $request->categoria_id;

        $producto->save(); // Guardar los cambios

        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente');
    }

    public function destroy($id)
    {
        $producto = Producto::findOrFail($id); // Buscar el producto por ID para eliminar
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente');
    }
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nombre');
            $table->text('descripcion');
            $table->integer('cantidad_disponible');
            $table->boolean('habilitado');
            $table->integer('cantidad_ventas');
            $table->float('iva');
            $table->float('precio');

            // Definir las columnas de foreign keys
            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('categoria_id');

            $table->timestamps();

            // Definir las relaciones de foreign keys
            $table->foreign('marca_id')->references('id')->on('marcas'); // Relación con la tabla marcas
            $table->foreign('categoria_id')->references('id')->on('categorias'); // Relación con la tabla categorias
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
