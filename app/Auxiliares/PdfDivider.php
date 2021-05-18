<?php

namespace App\Auxiliares;

use Exception;
use App\Auxiliares\pdf\FPDF;
use App\Auxiliares\pdf\FPDI;

use Illuminate\Support\Facades\Storage;

//@include(app_path(). '/Auxiliares/pfdi/fpdf.php');
//@include(app_path(). '/Auxiliares/pfdi/fpdi.php');

class PdfDivider 
{

    protected $tiene_oficio = false;
    protected $paginas_oficio = 0;
    protected $cuantos_destinatarios = 0;
    protected $paginas_cada_uno = 1;
    protected $prefijo = "Archivo";

    protected $pdf_origen;
    protected $documento_tmp="";
    protected $path="";
    protected $folder="";
    protected $names = array();
    protected $rangos = "";
    protected $partes = array();

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
/*         $this->tiene_oficio = false;
        $this->paginas_oficio = 0;
        $this->cuantos_destinatarios = 0;
        $this->paginas_cada_uno = 1;
        $this->prefijo = "";
        $this->original="";
 */    }
 
    public function setFolder($folder){
        $this->folder = $folder;
    }

    public function setPrefijo($prefijo){
//        $prefijo = str_replace([0=>".pdf" , 1=>".PDF" ],"",$prefijo);
        $this->prefijo =  $prefijo;

    }
    public function setOficio($paginas_oficio){
        $this->tiene_oficio = true;
        $this->paginas_oficio = $paginas_oficio;
    }
    public function setDestinatarios($cuantos_destinatarios, $paginas_cada_uno){
        $this->cuantos_destinatarios = $cuantos_destinatarios;
        $this->paginas_cada_uno = $paginas_cada_uno;
    }
    public function setRangos($rangos){
        $terminal = $rest = substr($rangos, -1);
        if ($terminal==";"){
            $largo = strlen($rangos);
            $rangos = substr($rangos,0,$largo-1);
        }

        $this->rangos = $rangos;
        $this->partes = explode(";", $rangos);
        
        //puede que sirva
        $this->cuantos_destinatarios = count($this->partes);

    }
    public function setOrigen($documento_tmp){
        $this->documento_tmp = $documento_tmp;
    }

    public function procesar(){
        $this->pdf_origen = new FPDI();  
        $paginas_totales_origen = $this->pdf_origen->setSourceFile($this->documento_tmp); 
        $paginas_en_oficio = $this->tiene_oficio * $this->paginas_oficio;

        if($this->rangos!=""){
            //sifnifica que si es por rangos
            $paginas_destinatarios=0;
            foreach ($this->partes as $parte => $cuantas) {
                $paginas_destinatarios+=$cuantas;
            }           
            if($paginas_totales_origen != ( $paginas_en_oficio + $paginas_destinatarios ) ){
                throw new Exception ("El tamaño del archivo es $paginas_totales_origen pero no coincide con ($this->tiene_oficio * $this->paginas_oficio)+ $this->rangos");
                die;
            }    
        }else{
            $paginas_destinatarios = $this->cuantos_destinatarios*$this->paginas_cada_uno;
            if($paginas_totales_origen != ( $paginas_en_oficio + $paginas_destinatarios ) ){
                throw new Exception ("El tamaño del archivo es $paginas_totales_origen pero no coincide con ($this->tiene_oficio * $this->paginas_oficio)+ $this->cuantos_destinatarios*$this->paginas_cada_uno");
                die;
            }    
        }



        if($this->folder == "" ){
            throw new Exception ('No se ha especificado el folder');
            die;
        }

        if($this->prefijo == "" ){
            throw new Exception ('No se ha especificado el prefijo');
            die;
        }
        if($this->documento_tmp == "" ){
            throw new Exception ('No se ha especificado el nombre temporal del documento');
            die;
        }

        $contador=0;

        $paginas_usadas = 1;
        if($this->tiene_oficio){
            $nombre_nuevo_archivo = $this->prefijo . "_" . sprintf("%'02d", $contador++) . "_oficio.pdf";
            $nuevo_pdf=new FPDI();
            for($paginas_usadas=1; $paginas_usadas<=$this->paginas_oficio; $paginas_usadas++){
//                $nuevo_pdf->AddPage();
                $nuevo_pdf->setSourceFile($this->documento_tmp);
                $tplIdx = $nuevo_pdf->importPage($paginas_usadas);
                $size = $nuevo_pdf->getTemplateSize($tplIdx);

                $nuevo_pdf->AddPage(($size['h'] > $size['w']) ? 'P' : 'L', array($size['h'] , $size['w']) );                
                $nuevo_pdf->useTemplate($tplIdx);
            }
            $nuevo_pdf->Output( Storage::disk('local')->path('') . $this->folder. '/' . $nombre_nuevo_archivo, "F");    
            $nuevo_pdf->Close();
            array_push($this->names, $nombre_nuevo_archivo);
        }

        if($this->rangos!="")
            foreach ($this->partes as $parte => $cuantas) {
                $nombre_nuevo_archivo = $this->prefijo . "_" . sprintf("%'02d", $contador++) . ".pdf";
                $nuevo_pdf=new FPDI();
    //           $viejo_pdf=new FPDI(); ...

                for($pagina_dest = 1; $pagina_dest <= $cuantas; $pagina_dest++){
    //                $nuevo_pdf->AddPage();
                    $nuevo_pdf->setSourceFile($this->documento_tmp);
                    $tplIdx = $nuevo_pdf->importPage($paginas_usadas++);

                    $size = $nuevo_pdf->getTemplateSize($tplIdx);
                    $nuevo_pdf->AddPage(($size['h'] > $size['w']) ? 'P' : 'L', array($size['h'] , $size['w']));

                    $nuevo_pdf->useTemplate($tplIdx);
                }
                $nuevo_pdf->Output( Storage::disk('local')->path('') . $this->folder. '/' . $nombre_nuevo_archivo, "F");    
                $nuevo_pdf->Close();
                array_push($this->names, $nombre_nuevo_archivo);
            }           
        else
            for($destinatarios=1; $destinatarios<=$this->cuantos_destinatarios; $destinatarios++ ){
                $nombre_nuevo_archivo = $this->prefijo . "_" . sprintf("%'02d", $contador++) . ".pdf";
                $nuevo_pdf=new FPDI();
    //           $viejo_pdf=new FPDI(); ...

                for($pagina_dest = 1; $pagina_dest <= $this->paginas_cada_uno; $pagina_dest++){
    //                $nuevo_pdf->AddPage();
                    $nuevo_pdf->setSourceFile($this->documento_tmp);
                    $tplIdx = $nuevo_pdf->importPage($paginas_usadas++);

                    $size = $nuevo_pdf->getTemplateSize($tplIdx);
                    $nuevo_pdf->AddPage(($size['h'] > $size['w']) ? 'P' : 'L', array($size['h'] , $size['w']));

                    $nuevo_pdf->useTemplate($tplIdx);
                }
                $nuevo_pdf->Output( Storage::disk('local')->path('') . $this->folder. '/' . $nombre_nuevo_archivo, "F");    
                $nuevo_pdf->Close();
                array_push($this->names, $nombre_nuevo_archivo);
            }
      
    }
    public function getNames(){
        return $this->names;
    }

}
