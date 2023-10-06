<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pedido; 
use App\Models\User;  
use App\Models\Cliente; 
use App\Models\Empleado;  



class PedidoController extends Controller
{
    public function index(Request $request)
{
    $query = Pedido::query();

    // Aplicar filtros
    if ($request->filled('numero_orden')) {
        $query->where('numero_orden', $request->input('numero_orden'));
    }

    if ($request->filled('fecha_desde') && $request->filled('fecha_hasta')) {
        $query->whereBetween('fecha_pedido', [$request->input('fecha_desde'), $request->input('fecha_hasta')]);
    }

    if ($request->filled('empleado')) {
        $query->where('empleado_id', $request->input('empleado'));
    }

    if ($request->filled('cliente')) {
        $query->where('cliente_id', $request->input('cliente'));
    }

    // Obtener los pedidos filtrados
    $pedidos = $query->get();

    // Retorna la vista 'pedidos.index' y pasa los pedidos como datos
    return view('pedidos.index', compact('pedidos'));
}
public function create()
{
    // Aquí debes agregar la lógica para mostrar el formulario de creación de pedidos.
    $clientes = Cliente::all();
    $empleados = DB::table('empleados')->where('cargo', '=', 'asesor')->get();
    $entregadores = DB::table('empleados')->where('cargo', '=', 'repartidor')->get();
 return view('pedidos.create',compact('clientes','empleados', 'entregadores'));
    
}

public function edit($id)
{
    // Aquí debes agregar la lógica para mostrar el formulario de edición de pedidos.
    $pedido = Pedido::findOrFail($id); // Buscar el pedido por ID
    return view('pedidos.edit', compact('pedido'));
}
}
