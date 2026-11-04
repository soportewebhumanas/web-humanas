<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasantia extends Model
{
    use HasFactory;
    use Searchable;
    protected $table = 'pasantias';
    protected $searchableFields = ['*'];

    protected $fillable = [
        'organismo_solicitante' ,
        'cantidad' ,
        'duracion' ,
        'destinatario' ,
        'inicio_inscripcion' ,
        'fin_inscripcion' ,
        'requisitos' ,
        'tareas' ,
        'formulario_inscripcion' ,
        'documentacion_obligatoria' ,
        'observaciones',
        'active'
    ];


    protected $casts = [
        'inicio_inscripcion' => 'datetime',
        'fin_inscripcion' => 'datetime',
        'tareas' => 'array',
        'requisitos' => 'array',
        'documentacion_obligatoria' => 'array',
    ];

}
