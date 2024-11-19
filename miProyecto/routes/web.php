<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



/*Route::get('/', [HomeController::class, 'index']);*/
Route::get('/', [HomeController::class, 'index']);
Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/create', [CursoController::class, 'create']);
Route::get('/cursos/{curso}', [CursoController::class, 'show']);
Route::post('/cursos', [CursoController::class, 'store'])->name('cursos.store');

/*Route::get('/', function () {
    return view('welcome');
});*/
/*******Pruebas****** */
/*Route::get('/', function () {
    return "Hola clase de 2DW3";
});*/

/*Route::get('/cursos', function () {
    return "Aqui el listado de cursos de 2DW3";
});
/******fin pruebas******* */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
