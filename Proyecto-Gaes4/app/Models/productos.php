<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;

    protected $fillable = ['NOMBRE_PRODUCTO', 'CANTIDAD_PRODUCTO', 'DESCRIPCION', 'CATEGORIA_PRODUCTOS', 'PRECIO_PRODUCTO'];

}

