<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;
use App\Models\Cita;

class MedicosController extends Controller
{
    public function index(){
        $medicos = Medico::all();
        return $medicos;
      }

      public function pacienteMedicos($id){
        $medicos = Cita::
        join('medicos', 'medicos.id', '=', 'citas.medico_id')
        ->select('medicos.nombre','medicos.telefono','medicos.correo')
        ->where('citas.id', '=', $id)
        ->get();
    
        return $medicos;
       }
}
