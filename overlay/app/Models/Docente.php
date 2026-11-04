<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'nombre',
        'apellido',
    	'titulo',
        'asignaturas',
    	'especialidad',
        'CVFile',
        'CVLink',
        'imagen',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'asignaturas' => 'array',
        'especialidad' => 'array'
    ];

    protected $table = 'docentes';
}
