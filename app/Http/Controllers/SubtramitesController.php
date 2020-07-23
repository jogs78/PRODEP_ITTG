<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use App\Models\Concesion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

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
            Storage::makeDirectory($tramite->id);
            $t= $tramite->toArray();
            return response()->json($t,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }catch (\Exception $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],500) ;
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
            return response()->json(["error"=>"Error ". $e->getMessage()],500) ;
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
            Storage::deleteDirectory($id);
            return response()->json($t,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            //if($e->getCode()==23000)  
                //return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }catch (\Exception $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],500) ;    
        }
    }
    public function beneficiarios(Request $request){
        try {
            //$campos = $request->all();
            $tramite= Tramite::find($request->input('tramite_id'));  
            if($tramite==null) return response()->json(["error"=>"Tramite no encontrado"],404) ;

            $a= $tramite->permisos($request->input('nombre'),$request->input('paterno'),$request->input('materno'));
            $b= $tramite->permisos2();
            $t = array_merge($a,$b);
            return response()->json($t,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }catch (\Exception $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],500) ;
        }
    }
    public function conceder(Request $request){
        try {

            $concesion = Concesion::where('concesionado_id' , $request->input('concesionado_id'))
            ->where('concesionado_type' , 'App\Models\Tramite')
            ->where('concesionario_type' , $request->input('concesionario_type'))
            ->where('concesionario_id' , $request->input('user_id') )
            ->get()->count();

            if($concesion==0){
                $accion="poner";
                $concesion = Concesion::Create(
                    ['concesionado_id' => $request->input('concesionado_id'),
                     'concesionado_type' => 'App\Models\Tramite',
                     'concesionario_type'=>$request->input('concesionario_type'),
                     'concesionario_id' => $request->input('user_id')]
                );    
            }else{
                $accion="quitar";
                Concesion::where('concesionado_id' , $request->input('concesionado_id'))
                ->where('concesionado_type' , 'App\Models\Tramite')
                ->where('concesionario_type' , $request->input('concesionario_type'))
                ->where('concesionario_id' , $request->input('user_id') )
                ->delete();
            }

            return response()->json("$accion",200) ;
        }catch (\Illuminate\Database\QueryException $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }catch (\Exception $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],500) ;
        }
    }

    public function privatizar(Request $request){
        try {
            DB::beginTransaction();
            Concesion::where('concesionado_id' , $request->input('concesionado_id'))
                ->where('concesionado_type' , 'App\Models\Tramite')
                ->delete();
            DB::commit();
            return response()->json( ['concesionado_id'=>$request->input('concesionado_id') ]  ,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            DB::rollback();
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }catch (\Exception $e){
            DB::rollback();
            return response()->json(["error"=>"Error ". $e->getMessage()],500) ;
        }
    }
    public function publicar(Request $request){
        try {
            DB::beginTransaction();
            Concesion::where('concesionado_id' , $request->input('concesionado_id'))
                ->where('concesionado_type' , 'App\Models\Tramite')
                ->delete();
            $concesion = Concesion::Create(
                ['concesionado_id' => $request->input('concesionado_id'),
                    'concesionado_type' => 'App\Models\Tramite',
                    'user_id' => -1]
            );    
            DB::commit();
            return response()->json( $concesion->toArray()  ,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            DB::rollback();
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }catch (\Exception $e){
            DB::rollback();
            return response()->json(["error"=>"Error ". $e->getMessage()],500) ;
        }
    }

}
