<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquete;
use App\Models\Paquetes_Servicio;
use DB;

class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $paquete=Paquete::getPaquetes();
      return $paquete;
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
    public function store(Paquete $paquete,Request $request)
    {
       $data=$request->only(['nombre','descripcion','precio','fechaFinal']);
       $servicios=$request->get('servicios');
       return $paquete->crearPaquete($data,Auth()->user()->id,$servicios);
       
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     return  Paquete::findOrFail($id);
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
    
    public function getPaqueteServicios(Request $request){
        $paquete=$request->get('paquete');
        $servicios=$request->get('servicios');
        foreach($servicios as $servicio){
          $id = DB::table('paquetes_servicios')->insert([
                "servicio_id" => $servicio,
                "paquete_id" =>  $paquete
            ]);
        }
        return Paquetes_Servicio::find($id);

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
        return Paquete::updatePaquetes($request->all(),$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $paquete=Paquete::find($id);
       $paquete->delete();
       return Response()->json(['success',true]);
    }
}
