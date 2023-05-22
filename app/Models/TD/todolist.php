<?php

namespace App\Models\TD;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todolist extends Model
{
    use HasFactory;
    // Codgo añadido
    protected $fillable = [
        'nombre',
        'descripcion',
        'importancia',
        'activo',
    ];
}
