<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_usuario',
        'Tipo',
        'Sescripcion',
        'Momento',
        'Estado',
        'Latitud',
        'Longitud',
    ];
}