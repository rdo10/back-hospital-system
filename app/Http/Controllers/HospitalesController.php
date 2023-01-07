<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hospital;
use App\Models\Cita;
use App\Models\Medico;
use App\Paciente;


class HospitalesController extends Controller
{
   public function index(){
     $hospitales = Hospital::all();
     return $hospitales;
   }

   public function medicosHospital($id){
    $medicos = Medico::
    join('hospitals', 'hospitals.id', '=', 'medicos.hospital_id')
    ->select('hospitals.nombre', 'medicos.nombre','medicos.ciudad','medicos.telefono','medicos.correo')
    ->where('hospitals.id', '=', $id)
    ->get();

    return $medicos;
   }

   public function create(){

   }
}
