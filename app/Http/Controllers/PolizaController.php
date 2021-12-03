<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poliza;
use App\Models\Poliza_Servicio;
use DB;
use Str;

class PolizaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Poliza::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->all();
        $poliza=Poliza::crearPoliza($request->all(),Auth()->user()->id);
        return $poliza;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getPolizaServicios(Request $request){
        $servicios=$request->get('servicio_id');
        $poliza=$request->get('poliza_id');
        foreach($servicios as $servicio){
          $id = DB::table('poliza_servicios')->insert([
                "servicio_id" => $servicio,
                "poliza_id" =>  $poliza,
                "autorizado" => 1,
                "fecha_ini" => date("Y-m-d"),
                "fecha_fin" => Poliza::getFechaFinal()
            ]);
        }
        return Poliza_Servicio::find($id);
    }


    public function MuestraPolizas(){

       $polizas=Poliza::where('user_id',Auth()->user()->id)->get();
        return $polizas;

    }

    public function obtenerServicios(){
        $poliza= DB::table('paquetes_servicios')->select('polizas.id','paquetes.descripcion','servicios.nombre')->leftjoin('paquetes','paquetes.id','paquetes_servicios.paquete_id')->
        leftjoin('servicios','servicios.id','paquetes_servicios.servicio_id')->leftjoin('polizas','polizas.paquete_id','paquetes.id')->where('polizas.user_id',Auth()->user()->id )->get();

    
        return $poliza;
    }
}


