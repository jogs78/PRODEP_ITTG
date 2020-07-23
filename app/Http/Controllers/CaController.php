<?php

namespace App\Http\Controllers;

use App\Models\Ca;
use App\Models\Miembro;
use App\Models\Concesion;
use Illuminate\Http\Request;


class CaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cas = Ca::paginate(15);//->get();
        return view('ca.listar',compact('cas'));
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
            $ca = new Ca();
            $ca->clave = $request->input('clave'); 
            $ca->nombre = $request->input('nombre'); 
            $ca->save();
            $t= $ca->toArray();
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
            $ca= Ca::find($id);  
            $ca->fill($request->all());
            $ca->save();
            $t= $ca->toArray();
            $t['parametros']= $request->all();
            return response()->json($t,200) ;
        }catch (\Illuminate\Database\QueryException $e){
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
            $ca= Ca::find($id);  
            $t= $ca->toArray();
            $ca->delete();
            return response()->json($t,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }catch (\Exception $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],500) ;
        }
    }



    public function miembros(Request $request){
        try {
            //$campos = $request->all();
            $ca= Ca::find($request->input('ca_id'));  
            if($ca==null) return response()->json(["error"=>"Ca no encontrado"],404) ;
            $t= $ca->quienes($request->input('nombre'),$request->input('paterno'),$request->input('materno'));
            return response()->json($t,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }catch (\Exception $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],500) ;
        }
    }
    public function enrrolar(Request $request){
        try {

            //$membresia = Miembro
            $membresia = Miembro::where('beneficiario_id' , $request->input('beneficiario_id'))
            ->where('ca_id' , $request->input('ca_id') )
            ->get()->count();

            if($membresia==0){
                $accion="poner";
                $membresia = Miembro::Create(
                    ['beneficiario_id' => $request->input('beneficiario_id'),
                     'ca_id' => $request->input('ca_id')]
                );    
            }else{
                $accion="quitar";
                Miembro::where('beneficiario_id' , $request->input('beneficiario_id'))
                ->where('ca_id' , $request->input('ca_id') )
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
