<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HospitalesController;
use App\Http\controllers\MedicosController;
use App\Http\controllers\PacienteController;
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
    return "<h1>Vista principal</h1>";
});

Route::get('/hospitales',[HospitalesController::class,'index'])->middleware(['cors' ]);
Route::get('/medicos',[MedicosController::class,'index'])->middleware(['cors' ]);
Route::get('/medicos-hospitales/{id}',[HospitalesController::class,'medicosHospital'])->middleware(['cors' ]);
Route::get('/pacientes',[PacienteController::class,'index'])->middleware(['cors' ]);
Route::get('/pacientes-medicos/{id}',[MedicosController::class,'pacienteMedicos'])->middleware(['cors' ]);
