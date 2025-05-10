<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'tbl_usuarios';
    protected $fillable = ['nombre', 'apellido', 'edad', 'requerimiento'];
}