<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $fillable = ['nombre', 'email', 'telefono', 'identificacion', 'asunto', 'mensaje', 'status'];
    
}


