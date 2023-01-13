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

   public function create(Request $request){
    $json = $request-> input('json',null);
    $params = json_decode($json,true);
     if(!empty($params)){


    $validate =  \Validator::make($params,[
     'nombre' => 'required',
      'ciudad' => 'required',
       'nit' => 'required'
    ]);

    if($validate->fails()){
      $data = [
        'code' => 400,
        'status'=> 'error',
        'message'=> 'no se ha podido guardar el hospital'
      ];
    }else{
        $hospital = new Hospital();
        $hospital->nombre = $params['nombre'];
        $hospital->ciudad = $params['ciudad'];
        $hospital->nit = $params['nit'];
        $hospital->direccion = $params['direccion'];
        $hospital->save();
        
        $data = [
          'code' => 200,
          'status'=> 'success',
          'message'=> 'hospital creado'
        ];
    }

    }else{
      $data = [
      'code' => 400,
      'status'=> 'error',
      'message'=> 'no se han enviado datos'
    ];
  }

    return response()->json($data,$data['code']);

   }

   public function getHospital($id){
    $hospital = Hospital::where('id', '=', $id)->get();
    
    return $hospital;
   }

   public function destroy($id, Request $request){

     $hospital = Hospital::find($id);

     if(!empty($hospital)){

     $hospital->delete();

     $data = [
      'code' => 200,
      'status'=> 'success',
      'message'=> 'hospital eliminado con exito'
    ];
  }else{
    $data = [
      'code' => 400,
      'status'=> 'error',
      'message'=> 'no hay hospital'
    ];
  }
    return response()->json($data,$data['code']);

   }
}
