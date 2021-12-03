<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paquetes_Servicio;
use DB;
class Paquete extends Model
{
    use HasFactory;

       //Campos para evitar inyección SQL
       protected $fillable = [
        'descripcion',
        'fechaFinal',
        'precio',
    ];

    public function crearPaquete($data, $us_id,$req){
        $return = DB::table("paquetes")->insertGetId([
            "descripcion" => $data["descripcion"],
            "fechaFinal"  => $data["fechaFinal"],
            "precio"      => $data["precio"],
            'user_id'     => $us_id,
            'autorizado' => 1
        ]); 
        return Paquete::find($return);
    }



   /* public function getServicios(){
        $lista = DB::table('paquetes_servicios')
                    ->where('paquete_id', $this->id)
                    ->get('servicio_id');
        $listaServicios = array();
        foreach($lista as $id){
            array_push($listaServicios, Servicio::find($id->servicio_id));
        }
        return $listaServicios;
    }*/

    public function paquetes_servicios(){
        return  $this->hasMany(Paquetes_Servicio::class);
    }

    public function getPaquetes(){
        return Paquete::all();
    }

    public function updatePaquetes($paquetes,$id){
        $data= Paquete::find($id);
        $data->update($paquetes);
        return $data;
    }

}
