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

Route::get('/hospitales',[HospitalesController::class,'index']);
Route::get('/hospital/{id}',[HospitalesController::class,'getHospital']);
Route::delete('/hospital/{id}',[HospitalesController::class,'destroy']);
Route::put('/hospital/{id}',[HospitalesController::class,'update']);
Route::get('/medicos',[MedicosController::class,'index']);
Route::get('/medicos-hospitales/{id}',[HospitalesController::class,'medicosHospital']);
Route::get('/pacientes',[PacienteController::class,'index']);
Route::get('/pacientes-medicos/{id}',[MedicosController::class,'pacienteMedicos']);
Route::post('/hospitales',[HospitalesController::class,'create']);
