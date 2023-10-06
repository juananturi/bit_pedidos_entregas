<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable =[
        'codigo',
'nombre',
'descripcion',
'cantidad_disponible',
'habilitado',
'cantidad_ventas',
'iva',
'precio',
'marca_id',
'categoria_id',
    ];
}
