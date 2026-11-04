<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Parametro extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'clave',
        'valor',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
    ];
}
