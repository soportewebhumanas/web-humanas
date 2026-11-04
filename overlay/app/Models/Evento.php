<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evento extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'titulo',
        'grado',
        'curricular',
        'observaciones',
        'fecha_inicio',
        'fecha_fin',
        'carga_horaria',
        'active',
        'responsables',
        'colaboradores',
        'destinatarios',
        'resolucion',
        'imagen',
        'lugar_id',
        'enlace_inscripcion',
        'modalidad_id',
        'tipo_id',
        'programa_id',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        // 'content' => 'array',
        'fecha_inicio' => 'datetime',
        'fecha_fin' => 'datetime',
        'active' => 'boolean',
        'responsables' => 'array',
        'colaboradores' => 'array',
        'destinatarios' => 'array',
    ];

    public function lugar()
    {
        return $this->belongsTo(Lugar::class);
    }

    public function modalidad()
    {
        return $this->belongsTo(Modalidad::class);
    }

    public function tipo()
    {
        return $this->belongsTo(TiposEvento::class, 'tipo_id');
    }

    public function programa()
    {
        return $this->belongsTo(ProgramaInstitucional::class, 'programa_id');
    }
}
