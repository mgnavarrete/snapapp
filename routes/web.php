<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ComentarioController;
use App\Models\Rol;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\GaleriaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación. Estas
| rutas son cargadas por el RouteServiceProvider y todas ellas serán
| asignadas al grupo de middleware "web". ¡Haz algo grandioso!
|
*/

// LANDING PAGE //

Route::get('/', [IndexController::class, 'index'])->name('index');  // Muestra la vista de inicio

// EVENTO //

Route::get('/evento/{id}', [EventoController::class, 'show'])->name('eventoShow');  // Muestra la vista de evento

Route::get('/galeria/{id}', [GaleriaController::class, 'show'])->name('galeria');  // Muestra la vista de galeria

Route::post('/comentario/{id}/create', [ComentarioController::class, 'create'])->name('comentarios.create');  // Crea un comentario






Route::post('/upload/{id_evento}', [FileUploadController::class, 'uploadImage'])->name('upload.image');
