<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TiposCurso extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['nombre'];

    protected $searchableFields = ['*'];

    protected $table = 'tipos_cursos';

    public function cursos()
    {
        return $this->hasMany(Curso::class, 'tipo_id');
    }
}
