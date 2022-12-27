<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    //relacion uno a muchos
    public function medicos(){
        return $this->hasMany('App\Models\Medico'); 
    }
}
