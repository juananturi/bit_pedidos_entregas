<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/pedidos', [PedidoController::class, 'index'])->name ('pedidos.index'); 
// Route::get('/empleado', [EmpleadoControllerController::class, 'index'])->name ('empleado.index');  
Route::get('/welcome', function () { 
    return view('welcome'); 
}); 

Route::resource('/empleados', EmpleadoController::class);
Route::resource('/clientes', ClienteController::class);  
Route::resource('/categorias', CategoriaController::class);
Route::resource('/marcas', MarcaController::class); 
Route::resource('/ventas', VentaController::class);  
Route::resource('/productos', ProductoController::class);

Route::get('/', [AuthController::class, 'showLoginForm']);



 //Route::middleware(['auth'])->group(function () {
    Route::resource('/empleados', EmpleadoController::class);
    Route::resource('/pedidos', PedidoController::class);
    Route::resource('/clientes', ClienteController::class);  
    Route::resource('/categorias', CategoriaController::class);
    Route::resource('/marcas', MarcaController::class); 
    Route::resource('/ventas', VentaController::class);  
    Route::resource('/productos', ProductoController::class);
//  });



 
 
Route::get('/gerente', function () { 
    return view('roles.entregador'); 
});  
Route::get('/departamentos',[DepartamentoController::class, 'index']); 
Route::get('/departamentos/{id}',[DepartamentoController::class, 'show']); 

 



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
