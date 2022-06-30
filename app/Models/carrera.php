<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrera extends Model
{
    use HasFactory;
    protected $fillable=['id','nombre_carrera','duracion_carrera','costo','id_ciclo','id_arancel'
];
}
