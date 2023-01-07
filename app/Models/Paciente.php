<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

     public function medicos(){
        return $this->hasMany('App\Models\Medico'); 
    }
     //relacion uno a muchos
     public function citas(){
        return $this->hasMany('App\Models\Cita'); 
    }
}
