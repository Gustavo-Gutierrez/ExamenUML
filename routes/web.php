<?php

use App\Http\Controllers\DiagramaController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\ProyectoController;
use App\Models\Diagrama;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::view('/home', 'home', ['diagrama' => Diagrama::find(1)])->name('dashboard');

    Route::get('proyectos-usuarios/{proyecto}', [ProyectoController::class, 'usuarios'])->name('proyectos.usuarios');
    Route::post('proyectos/favorito', [ProyectoController::class, 'favorito']);
    Route::post('proyectos/terminado', [ProyectoController::class, 'terminado']);
    Route::resource('proyectos', ProyectoController::class);
    Route::get('diagramas/',[DiagramaController::class, 'misDiagramas'])->name('diagramas.misDiagramas');
    Route::post('diagramas/guardar', [DiagramaController::class, 'guardar']);
    Route::post('diagramas/favorito', [DiagramaController::class, 'favorito']);
    Route::post('diagramas/terminado', [DiagramaController::class, 'terminado']);
    Route::get('diagramas/{proyecto}', [DiagramaController::class, 'index'])->name('diagramas.index');
    Route::get('diagramas/{diagrama}/edit', [DiagramaController::class, 'edit'])->name('diagramas.edit');
    Route::put('diagramas/{diagrama}/update', [DiagramaController::class, 'update'])->name('diagramas.update');
    Route::post('diagramas/', [DiagramaController::class, 'store'])->name('diagramas.store');

    Route::resource('notificaciones', NotificacionController::class);

});

require __DIR__.'/auth.php';
