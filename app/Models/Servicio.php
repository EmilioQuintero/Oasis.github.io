<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable = [
       'nombre',
       'descripcion',
       'precio',
       'fechaFin'
    ];

    public function crearServicio($data){
        $return = DB::table("Servicios")->insertGetId([
            "nombre" => $data["nombre"],
            "descripcion"  => $data["descripcion"],
            "precio"      => $data["precio"],
            'fechafin'     => $data["fechafin"],
        ]);
        return Servicio::find($return);
    }
}
