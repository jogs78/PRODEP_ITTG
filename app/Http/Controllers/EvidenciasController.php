<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use App\Models\Evidencia;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class EvidenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_tramite)
    {
        $subtramite = Tramite::find($id_tramite);
        $tramite = Tramite::find($subtramite->origen);
        return view('Evidencias.mostrar',compact('tramite','subtramite'));
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
        try {
            $file = $request->file('documento');
            $fileName =  $file->getClientOriginalName();
            $path = Storage::putFileAs(
                '', $request->file('documento'), $fileName
            );

            $evidencia = new Evidencia();
            $evidencia->tramite_id = $request->input('tramite_id'); 
            $evidencia->documento = $path; 
            $evidencia->descripcion = $request->input('descripcion'); 
            $evidencia->save();

            $e= $evidencia->toArray();
            return response()->json($e,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }catch (\Exception $e){
            return response()->json(["Otro error: " . $e->getMessage()],500) ;
        }
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
        try {
            $evidencia = Evidencia::find($id);
            $evidencia->fill($request->all());
            $evidencia->save();
            $e= $evidencia->toArray();
            return response()->json($e,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }catch (\Exception $e){
            return response()->json(["Otro error: " . $e->getMessage()],500) ;
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

            $evidencia = Evidencia::find($id);
            $fileName = $evidencia->documento;

            if (Storage::disk('local')->exists($fileName) ) {
                Storage::disk('local')->delete($fileName) ;
            }else return response()->json(["error"=>"Evidencia no encontrada "],404) ;
    
            $e= $evidencia->toArray();
            $evidencia->delete();
            return response()->json($e,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }catch (\Exception $e){
            return response()->json(["Otro error: " . $e->getMessage()],500) ;
        }
    }
}

/*
        $Aval = Aval::find( $request->input('proyecto_id') );
        $fileName = $Aval->aval;
        $archivo = public_path() .'/evidencias/'.$fileName;
        $ret = "--";
        if (Storage::disk('local')->exists($fileName) ) {
            //return response()->download($url);
            $ret = Storage::disk('local')->delete($fileName) ;
            if($ret) $Aval->aval = null;
            $Aval->save();
            $realizado = "si";
        }else $realizado = "no";
        $arrayName = array('id' =>  $request->input('proyecto_id'),'realizado' => $ret , 'archivo'=> $archivo);
        return response()->json( $arrayName );

        try {
            $tramite= Tramite::find($id);  
            $t= $tramite->toArray();
            $tramite->delete();
            return response()->json($t,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            //if($e->getCode()==23000)  
                //return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }catch (\Exception $e){
            return response()->json(["Otro error"],500) ;
        }

*/