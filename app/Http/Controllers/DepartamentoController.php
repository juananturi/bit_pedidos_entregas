<?php 
 
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
use App\Models\Municipio;  
use App\Models\Departamento;  
class DepartamentoController extends Controller 
{ 
    public function index(){ 
        $departamento = Departamento::all();  
        return response()->json($departamento,200);  
          
    } 
    public function show(string $id){ 
 
        $departamento = Departamento::find($id); 
        return  Municipio::where('departamento_id', $id)->get(); 
    } 
}