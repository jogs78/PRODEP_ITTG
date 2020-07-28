<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use App\Models\Concesion;
use Illuminate\Http\Request;


class TramitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->input('page')) $hayg=true;
        else $hayg = false;
        if (\Session::has('page')) $hays=true;
        else $hays = false;

        if( $hayg == false && $hays == false ){
            $page=true;
        }
        if( $hayg == false && $hays == true  ){
            $page = \Session::get('page');
        }
        if( $hayg == true  && $hays == false ){
            $page=$request->input('page');
            \Session::put('page' ,  $request->input('page') );
        }
        if( $hayg == true  && $hays == true  ){
            $page=$request->input('page');
            \Session::put('page' ,  $request->input('page') );
        }
        $request->merge( array( 'page' => $page ) );

        //$year solo es usado por el coordinador
        if ($request->input('year')) $hayg=true;
        else $hayg = false;
        if (\Session::has('year')) $hays=true;
        else $hays = false;

        if( $hayg == false && $hays == false ){
            $year=2020;
        }

        if( $hayg == false && $hays == true  ){
            $year = \Session::get('year');
        }
        if( $hayg == true  && $hays == false ){
            $year=$request->input('year');
            \Session::put('year' ,  $request->input('year') );
        }
        if( $hayg == true  && $hays == true  ){
            $year=$request->input('year');
            \Session::put('year' ,  $request->input('year') );
        }
        $request->merge( array( 'year' => $year ) );
        $tramites = Tramite::where('origen', NULL)->where('fecha','>=', "$year-01-01")->where('fecha','<=', "$year-12-31")->orderBy('fecha', 'asc')->paginate(15);//->get();
//        $tramites = Tramite::paginate(15);//->get();
        return view('Tramites.listar',compact('tramites','year'));
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
            $tramite->fecha = $request->input('fecha'); 
            $tramite->descripcion = $request->input('descripcion'); 
            $tramite->save();
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
            $t= $tramite->permisos($request->input('nombre'),$request->input('paterno'),$request->input('materno'));
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
    
}
