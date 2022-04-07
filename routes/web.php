<?php
use App\Http\Controllers\PersonaController;
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

Route::get('personas',[PersonaController::class,'index'])->name('personas.index');
Route::get('personas/create',[PersonaController::class,'create'])->name('personas.create');
Route::post('personas',[PersonaController::class,'store'])->name('personas.store');
Route::get('personas/{id}',[PersonaController::class,'show'])->name('personas.show');

