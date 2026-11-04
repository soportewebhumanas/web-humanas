<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LlamadoSeleccion extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'cantidad',
    	'cargo',
    	'dedicacion',
    	'asignatura',
    	'departamento',
    	'carrera',
    	'plan',
    	'observacion',
    	'inicio_inscripcion',
    	'fin_inscripcion',
    	'enlace_inscripcion',
        'activo',
        'resolucion',
        'acta_final',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'inicio_inscripcion' => 'datetime',
        'fin_inscripcion' => 'datetime',
        'activo' => 'boolean',
    ];

    protected $table = 'llamadosSeleccion';
}
