<?php

namespace App\Models;
use App\Models\Concesion;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tramite extends Model
{
    
    protected $fillable = [
        'fecha', 'descripcion', 'origen'
     ];
    //


    public function evidencias(){
        return $this->hasMany('App\Models\Evidencia','tramite_id','id')->orderBy('documento', 'asc');
//                return $this->belongsToMany('App\Models\Evidencia', 'evidencias_tramites');
    }

    public function beneficiarios(){
        return $this->belongsToMany('App\User', 'tramites_users');
//      return $this->belongsToMany('App\User', 'tramites_user','user_id','w','x','y','z');
    }
    public function concesiones(){
        return $this->morphMany('App\Models\Concesion', 'concesionado');
    }

    public function permisos($nombre, $apat, $amat){
        //$sql = "SELECT users.id, CONCAT(apellido_paterno, ' ', apellido_materno, ', ', name) as usuario, concesionado_type, IF( ISNULL(concesionado_id)=1,'','checked') as checked FROM (select * from concesiones where concesionado_type like '%Tramite' and concesionado_id = " . $this->id . " ) L RIGHT JOIN users on L.user_id = users.id order by usuario" ;
//        $sql = "SELECT users.id, CONCAT(apellido_paterno, ' ', apellido_materno, ', ', name) as usuario, concesionado_type, IF( ISNULL(concesionado_id)=1,'','checked') as checked FROM (select * from concesiones where concesionado_type like '%Tramite' and concesionado_id = " . $this->id . " ) L RIGHT JOIN users on L.user_id = users.id  WHERE users.name like '%" . $nombre . "%' AND users.apellido_paterno like '%" . $apat . "%' AND users.apellido_materno like '%" . $amat . "%' order by usuario";
//        $sql = "SELECT users.id, CONCAT(apellido_paterno, ' ', apellido_materno, ', ', name) as nombre, 'App\\\\Models\\\\Beneficiario' as concesionario_type , IF( ISNULL(concesionado_id)=1,'','checked') as checked FROM (select * from concesiones where concesionado_type like '%Tramite' and concesionado_id = " . $this->id . " ) L RIGHT JOIN users on L.user_id = users.id  WHERE users.name like '%" . $nombre . "%' AND users.apellido_paterno like '%" . $apat . "%' AND users.apellido_materno like '%" . $amat . "%' order by nombre";
        $campos1 = " users.id, CONCAT(apellido_paterno, ' ', apellido_materno, ', ', name) as nombre, 'App\\\\Models\\\\Beneficiario' as concesionario_type , IF( ISNULL(concesionado_id)=1,'','checked') as checked ";
        $subL =  "select * from concesiones where concesionado_type like '%Tramite' and concesionario_type like '%Beneficiario' and concesionado_id = " . $this->id ;
        $filtro ="users.name like '%" . $nombre . "%' AND users.apellido_paterno like '%" . $apat . "%' AND users.apellido_materno like '%" . $amat . "%'  and users.rol = 'BENEFICIARIO' ";
        $sql1  = "SELECT $campos1 FROM ( $subL ) L RIGHT JOIN users on L.concesionario_id = users.id  WHERE $filtro order by nombre";

        $a = DB::select(DB::raw($sql1));
        return $a;
    }
    public function permisos2(){
        $campos2 = " cas.id, CONCAT(clave, ' ', nombre) as nombre, 'App\\\\Models\\\\Ca' as concesionario_type , IF( ISNULL(concesionado_id)=1,'','checked') as checked ";
        $subL2 =  "select * from concesiones where concesionado_type like '%Tramite' and concesionario_type like '%Ca' and concesionado_id = " . $this->id ;
        $sql = "SELECT $campos2 FROM ( $subL2 ) L RIGHT JOIN cas on L.concesionario_id = cas.id  order by nombre";
        $a = DB::select(DB::raw($sql));
        return $a;
    }

    
    public function permitidos(){
        $campos1 = "id, CONCAT(apellido_paterno, ' ', apellido_materno, ', ', name) as nombre ";
        $subQ = "select concesionario_id from concesiones where concesionado_type like '%Tramite' and concesionario_type like '%Beneficiario' and concesionado_id = " . $this->id ;
        $sql = "SELECT $campos1 FROM users WHERE id in ( $subQ ) and rol = 'BENEFICIARIO' order by nombre";
        $a = DB::select(DB::raw($sql));
        return $a;
    }

    public function permitidosca(){
        $campos1 = "id, CONCAT(clave, ' ', nombre ) as nombre ";
        $subQ = "select concesionario_id from concesiones where concesionado_type like '%Tramite' and concesionario_type like '%Ca' and concesionado_id = " . $this->id ;
        $sql = "SELECT $campos1 FROM cas WHERE id in ( $subQ ) order by nombre";
        $a = DB::select(DB::raw($sql));
        return $a;
    }


    public function publico(){
        return Concesion::where('concesionario_id', '=', -1)->where('concesionado_type', '=', "App\Models\Tramite")->where('concesionado_id', '=', $this->id )->exists();
    }
        
}
