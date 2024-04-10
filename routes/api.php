<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
Route::resource('Denuncia', 'DenunciaController');
Route::resource('Usuario', 'UsuarioController');
Route::resource('Seguimiento', 'SeguimientoController');
Route::resource('Zona', 'ZonaController');
Route::resource('Alerta', 'AlertaController');