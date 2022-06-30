<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ciclo extends Model
{
    use HasFactory;
    protected $fillable =['id','ciclo','id_materia'
];
}
