<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

  //relacion uno a muchos(inversa)
    public function hospital(){
        return $this->belongsTo('App\Models\Hospital');
    }

    public function cargo(){
        return $this->belongsTo('App\Models\Cargo');
    }

     //relacion uno a muchos
    public function citas(){
        return $this->hasMany('App\Models\Cita'); 
    }
}
