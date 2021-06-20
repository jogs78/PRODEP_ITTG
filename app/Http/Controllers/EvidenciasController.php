<?php

namespace App\Http\Controllers;

use App\Auxiliares\PdfDivider;
use App\Models\Tramite;
use App\Models\Evidencia;
use App\Models\Concesion;
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

        $traza = array();

        
        $subtramite = Tramite::find($id_tramite);
        
        $actual = $subtramite;
        do {
            array_push($traza, [$actual->descripcion,$actual->id]);
            $last = $actual;
        } while ($actual = $actual->padre);
//        array_push($traza, [$last->descripcion,$last->id]);        
        $inverso = array_reverse($traza);         
        $tramite = Tramite::find($subtramite->origen);
        return view('Evidencias.mostrar',compact('tramite','subtramite','inverso'));
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

            if (! Storage::disk('local')->exists($request->input('tramite_id') . '\\' . $fileName) ) {
                $path = Storage::putFileAs(
                    '', $request->file('documento'), $request->input('tramite_id') . '\\' . $fileName
                );
            }else return response()->json(["error"=>"Ya existe un archivo con ese nombre (" . $fileName . ")"],404) ;

            $evidencia = new Evidencia();
            $evidencia->tramite_id = $request->input('tramite_id'); 
            $evidencia->documento = $fileName; 
            $evidencia->descripcion = $request->input('descripcion'); 
            $evidencia->save();

            $evidencia_id = $evidencia->id;


            // $evidencia = Evidencia::find($evidencia_id);
            // $evidencia->documento = $path; 
            // $evidencia->save();

            $e= $evidencia->toArray();
            return response()->json($e,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            
            return response()->json(["error"=>"Error ". $e->getMessage() ."en el archivo: '" . $e->getFile() . "' en la línea: " . $e->getLine() ],409) ;
        }catch (\Exception $e){
            return response()->json(["error"=>"Error ". $e->getMessage() ."en el archivo: '" . $e->getFile() . "' en la línea: " . $e->getLine() ],500) ;
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
        try {

            $file = $request->file('documento');
            $documento = $file->getRealPath();
            $fileName =  $request->input('descripcion');

            //validar la existencia del directorio
            if (! Storage::disk('local')->has($request->input('tramite_id') ) ) {            
                $path = Storage::makeDirectory($request->input('tramite_id'));
            }

            $pdf = new PdfDivider();
            $pdf->setFolder($request->input('tramite_id'));
            $pdf->setPrefijo($fileName);

            if($request->input('tiene_oficio') == "true")
                $pdf->setOficio($request->input('cuantas_el_o'));
            $pdf->setDestinatarios($request->input('cuantos_dest'),$request->input('cuantas_cada'));

            $pdf->setOrigen($documento);

            $pdf->procesar();
            
//            1 oficio de 1
//            12 reconocmientos de 1 
            $tramite_id= $request->input('tramite_id');
            foreach ($pdf->getNames() as $archivo ) {
                $evidencia = new Evidencia();
                $evidencia->tramite_id = $tramite_id; 
                $evidencia->documento = $archivo; 
                $evidencia->descripcion = $archivo; 
                $evidencia->save();
            }
            $evidencias = Evidencia::where('tramite_id',$tramite_id)->get();
            $e= $evidencias->toArray();
//            $e= $pdf->getNames();
            return response()->json($e,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }catch (\Exception $e){
            return response()->json(["error"=>"Error ". $e->getMessage()],500) ;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store3(Request $request)
    {
        try {

            $file = $request->file('documento');
            $documento = $file->getRealPath();
            $fileName =  $request->input('descripcion');

            //validar la existencia del directorio
            if (! Storage::disk('local')->has($request->input('tramite_id') ) ) {            
                $path = Storage::makeDirectory($request->input('tramite_id'));
            }

            $pdf = new PdfDivider();
            $pdf->setFolder($request->input('tramite_id'));
            $pdf->setPrefijo($fileName);

            if($request->input('tiene_oficio') == "true")
                $pdf->setOficio($request->input('cuantas_el_o'));
            
            $pdf->setRangos($request->input('rangos'));

            $pdf->setOrigen($documento);

            $pdf->procesar();
            
//            1 oficio de 1
//            12 reconocmientos de 1 
            $tramite_id= $request->input('tramite_id');
            foreach ($pdf->getNames() as $archivo ) {
                $evidencia = new Evidencia();
                $evidencia->tramite_id = $tramite_id; 
                $evidencia->documento = $archivo; 
                $evidencia->descripcion = $archivo; 
                $evidencia->save();
            }
            $evidencias = Evidencia::where('tramite_id',$tramite_id)->get();
            $e= $evidencias->toArray();
//            $e= $pdf->getNames();
            return response()->json($e,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            return response()->json(["error"=>"Error ". $e->getMessage() ],409) ;
        }catch (\Exception $e){
            return response()->json(["error"=>"Error ". $e->getMessage() . "En la linea " . $e->getLine() . "del archivo " . $e->getFile() ],500) ;
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
        $evidencia =  Evidencia::find($id);
        $tramite_id = $evidencia->tramite_id;
        $url =Storage::disk('local')->path('') . "$tramite_id/" .$evidencia->documento;
        $content = "application/octet-stream";
        
        if(strpos($evidencia->documento , ".PDF"  ) ){
            $content = "application/pdf";
        }

        if(strpos($evidencia->documento , ".pdf"  ) ){
            $content = "application/pdf";
        }
          //,".JPG",".png",".PNG",".gif",".GIF",".jpeg",".JPEG"] 

        if(strpos ( $evidencia->documento , ".JPG" ) ) {
            $content = "image/jpeg";
        }
        if(strpos ( $evidencia->documento , ".jpg" ) ) {
            $content = "image/jpeg";
        }
          return response()->make(file_get_contents($url), 200, [
            'Content-Type' => $content,
            'Content-Disposition' => 'inline; filename="'.$url.'"'
            ]
        );



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
            DB::beginTransaction();
            $evidencia = Evidencia::find($id);
            $fileName = $evidencia->documento;

            if (Storage::disk('local')->exists($evidencia->tramite_id . '\\' . $fileName) ) {
                Storage::disk('local')->delete($evidencia->tramite_id . '\\' . $fileName) ;
            }else return response()->json(["error"=>"Evidencia no encontrada (" . $evidencia->tramite_id . '\\' . $fileName . ")"],404) ;
            Concesion::where('concesionado_id',$id)->where('concesionado_type',"App\Models\Evidencia")->delete();
            $e= $evidencia->toArray();
            $evidencia->delete();
            DB::commit();
            return response()->json($e,200) ;
        }catch (\Illuminate\Database\QueryException $e){
            DB::rollback();
            return response()->json(["error"=>"Error ". $e->getMessage()],409) ;
        }catch (\Exception $e){
            DB::rollback();
            return response()->json(["error"=>"Error ". $e->getMessage()],500) ;
        }
    }

    public function beneficiarios(Request $request){
        try {
/*            $tramite = Tramite::find($request->input('subtramite_id'));  
            if($tramite==null) return response()->json(["error"=>"Tramite para esta evidencia no encontrado"],404) ;
            $t= $tramite->permisos($request->input('nombre'),$request->input('paterno'),$request->input('materno'));
*/
            $evidencia= Evidencia::find($request->input('evidencia_id'));  
            if($evidencia==null) return response()->json(["error"=>"Evidencia no encontrada"],404) ;
  
            $a= $evidencia->permisos($request->input('nombre'),$request->input('paterno'),$request->input('materno'),$request->input('subtramite_id'));
            $b= $evidencia->permisos2();
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
/*
            ->where('concesionado_type' , 'App\Models\Tramite')
            ->where('concesionario_type' , $request->input('concesionario_type'))
            ->where('concesionario_id' , $request->input('user_id') )

*/
            $concesion = Concesion::
              where('concesionado_id' , $request->input('concesionado_id'))
            ->where('concesionado_type' , 'App\Models\Evidencia')
            ->where('concesionario_type' , $request->input('concesionario_type'))
            ->where('concesionario_id' , $request->input('user_id') )
            ->get()->count();

            if($concesion==0){
                $accion="poner";
                $concesion = Concesion::Create(
                    ['concesionado_id' => $request->input('concesionado_id'),
                     'concesionado_type' => 'App\Models\Evidencia',
                     'concesionario_type' => $request->input('concesionario_type'),
                     'concesionario_id' => $request->input('user_id')]
                );    
            }else{
                $accion="quitar";
                Concesion::where('concesionado_id' , $request->input('concesionado_id'))
                ->where('concesionado_type' , 'App\Models\Evidencia')
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