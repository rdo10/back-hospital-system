<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cita extends Model
{
    use HasFactory;
     // relacion uno a muchos (inversa)

    public function pacientes(){
       return $this->belongsTo('App\Models\Paciente','paciente_id'); 
    }

    public function medicos(){
        return $this->belongsTo('App\Models\Medico','medico_id'); 
     }
}
