<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use App\Models\Concesion;
use Illuminate\Http\Request;

class SubtramitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_tramite)
    {
        $tramites = Tramite::where('origen', $id_tramite)->orderBy('fecha', 'asc')->paginate(15);//->get();
        $padre = Tramite::find($id_tramite);
        return view('Tramites.sublistar',compact('tramites','padre'));
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
            $tramite = new Tramite();
            $tramite->origen = $request->input('origen'); 
            $tramite->fecha = $request->input('fecha'); 
            $tramite->descripcion = $request->input('descripcion'); 
            $tramite->save();
            $t= $tramite->toArray();
            return response()->json($t,200) ;
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
        try{
            $tramite= Tramite::find($id);  
            $tramite->fill($request->all());
            $tramite->save();
            $t= $tramite->toArray();
            return response()->json($t,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            //if($e->getCode()==23000)  
                //return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
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
            $tramite= Tramite::find($id);  
            $t= $tramite->toArray();
            $tramite->delete();
            return response()->json($t,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            //if($e->getCode()==23000)  
                //return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }catch (\Exception $e){
            return response()->json(["Otro error: " . $e->getMessage()],500) ;
        }
    }
    public function beneficiarios(Request $request){
        try {
            //$campos = $request->all();
            $tramite= Tramite::find($request->input('tramite_id'));  
            if($tramite==null) return response()->json(["error"=>"Tramite no encontrado"],404) ;
            $t= $tramite->permisos($request->input('nombre'),$request->input('paterno'),$request->input('materno'));
            return response()->json($t,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }catch (\Exception $e){
            return response()->json(["Otro error: " . $e->getMessage()],500) ;
        }
    }
    public function conceder(Request $request){
        try {

            $concesion = Concesion::where('concesionado_id' , $request->input('concesionado_id'))
            ->where('concesionado_type' , 'App\Models\Tramite')
            ->where('user_id' , $request->input('user_id') )
            ->get()->count();

            if($concesion==0){
                $accion="poner";
                $concesion = Concesion::Create(
                    ['concesionado_id' => $request->input('concesionado_id'),
                     'concesionado_type' => 'App\Models\Tramite',
                     'user_id' => $request->input('user_id')]
                );    
            }else{
                $accion="quitar";
                Concesion::where('concesionado_id' , $request->input('concesionado_id'))
                ->where('concesionado_type' , 'App\Models\Tramite')
                ->where('user_id' , $request->input('user_id') )
                ->delete();
            }

            return response()->json("$accion",200) ;
        }catch (\Illuminate\Database\QueryException $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }catch (\Exception $e){
            return response()->json(["Otro error: " . $e->getMessage()],500) ;
        }
    }

}
