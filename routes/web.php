<?php

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

// Route::get('/', function () {
//    return view('welcome');
// });

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\UserController;
Route::get('/', [App\Http\Controllers\InicioController::class, 'index']);
Route::get('/nosotros', [App\Http\Controllers\NosotrosController::class, 'index']);
Route::get('/contactenos', [App\Http\Controllers\ContactenosController::class, 'index']);

use App\Http\Controllers\CursoController;
Route::resource('cursos', CursoController::class);