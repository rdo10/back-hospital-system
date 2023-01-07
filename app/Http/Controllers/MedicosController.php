<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;

class MedicosController extends Controller
{
    public function index(){
        $medicos = Medico::all();
        return $medicos;
      }
}
