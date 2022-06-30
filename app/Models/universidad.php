<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class universidad extends Model
{
    use HasFactory;
    protected $fillable = ['id','universidad','direccion','id_carrera','id_departamento','id_facultad'

] ;
}
