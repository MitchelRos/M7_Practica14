<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDo\ListControler;

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

// Ruta de inicio
Route::get('/', function () {return view('welcome');});

// Rutas de Lista
Route::get('/todolist', [ListControler::class, 'index'])->name('to.do.list');