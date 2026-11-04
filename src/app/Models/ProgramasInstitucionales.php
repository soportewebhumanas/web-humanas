<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramasInstitucionales extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'nombre',
        'tipo',
        'color',
        'orden',
        'responsables',
        'email',
        'reseña',
        'imagen',
        'active',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'responsables' => 'array',
        'active' => 'boolean',
    ];

    public function eventos()
    {
        return $this->hasMany(Evento::class, 'programa_id');
    }
}
