<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    //relacion uno a muchos
    public function medicos(){
        return $this->hasMany('App\Models\Medico'); 
    }
}
