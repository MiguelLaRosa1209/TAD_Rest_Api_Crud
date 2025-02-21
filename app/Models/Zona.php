<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'seguridad',
        'Latitud_menor',
        'Latitud_mayor',
        'Longitud_menor',
        'Longitud_mayor',
    ];
}