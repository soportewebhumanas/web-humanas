<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'titulo',
    	'esPeriodica',
        'tipoDePublicacion',
    	'anio',
    	'editorial',
    	'autor',
    	'compilador',
    	'coordinador',
    	'editor',
    	'resumen',
    	'enlace',
        'activo',
        'imagen',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'autor' => 'array',
        'compilador' => 'array',
        'coordinador' => 'array',
        'editor' => 'array',
        'activo' => 'boolean',
    ];

    protected $table = 'publicaciones';
}
