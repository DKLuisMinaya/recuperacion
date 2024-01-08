<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\TareaController;
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
    return view('home');
});

Route::get('/indexEmpleado',[EmpleadoController::class, 'index']);
Route::get('/indexTarea',[TareaController::class, 'index']);

Route::post('/registro',[EmpleadoController::class,'saveP']);
Route::post('/registroT',[TareaController::class,'registrar']);
