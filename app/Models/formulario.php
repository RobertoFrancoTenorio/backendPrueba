<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formulario extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre', 'edad', 'fecha_nacimiento', 'fecha_inscripcion', 'costo'
    ];

    protected $table = 'formulario';
}
