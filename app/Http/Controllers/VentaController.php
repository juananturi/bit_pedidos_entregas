<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Venta;



class VentaController extends Controller
{
    public function ventasDiarias()
{
    $ventasDiarias = Venta::selectRaw('DATE(fecha_registro) as fecha, SUM(total) as total, COUNT(*) as cantidad_pedidos')
        ->groupBy('fecha')
        ->get();

    return view('ventas.diarias', compact('ventasDiarias'));
}

public function index()
{
    // Obtener el total de ventas y cantidad de pedidos por día, semana y mes
    $ventasHoy = Venta::whereDate('fecha_registro', today())->selectRaw('SUM(total) as total, COUNT(*) as cantidad')->first();
    $ventasSemana = Venta::whereBetween('fecha_registro', [now()->startOfWeek(), now()->endOfWeek()])->selectRaw('SUM(total) as total, COUNT(*) as cantidad')->first();
    $ventasMes = Venta::whereMonth('fecha_registro', now())->selectRaw('SUM(total) as total, COUNT(*) as cantidad')->first();

    return view('ventas.index', compact('ventasHoy', 'ventasSemana', 'ventasMes'));
}   
}
