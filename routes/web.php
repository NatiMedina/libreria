<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personaController;

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
    return view('inicio');
});

Route::get("/novedades", function() {
    return view("novedades");
});

Route::get("/contacto", function() {
    return view("contacto");
});

Route::get("/datos", function(){
    return view("datos");
});

Route::post("/datos",[personaController::class,'store']);
Route::get("/articulos",[personaController::class,'index']);
