<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['titulo','descripcion','imagen','resumen'];

    protected $searchableFields = ['*'];

    protected $table = 'noticias';

}
