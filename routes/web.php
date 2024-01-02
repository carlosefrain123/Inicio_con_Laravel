<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/* //TODO: Es simplificado
Route::view('/', 'welcome');


Y le podemos dar un nombre
Route::view('/', 'welcome')->name('welcome');
*/

//TODO: Acá puedes crear los "/" que desees
Route::get('/prueba', function () {
    return "Welcome to our services page";
});

//TODO: Acá puedes crear los "/" que desees, colocando un parametro relacionado
Route::get('/prueba/{prueba}', function ($prueba) {
    return "Bienvenido ".$prueba;
});

//TODO: Acá podemos redireccionar
Route::get('/prueba/{prueba?}', function ($prueba) {
    if ($prueba==='2') {
        return redirect('/prueba');
    }
    return "Bienvenido, mi estimado ".$prueba;
});

//TODO: Acá podemos redireccionar; pero con el nombre
Route::get('/pruebaPapu', function () {
    return "Bienvenido, este es una prueba de redirección";
})->name('prueba.index');
Route::get('/prueba/{prueba}', function ($prueba) {
    if ($prueba==='2') {
        return to_route('prueba.index');
    }
    return "Bienvenido, mi estimado ".$prueba;
});
/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php'; */
