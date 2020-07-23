<?php

namespace App\Models;
use App\Models\Concesion;
use App\Models\Tramite;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Evidencia extends Model
{
    protected $fillable = [
        'tramite_id', 'documento', 'descripcion',
     ];

     public function concesiones(){
        return $this->morphMany('App\Models\Concesion', 'concesionado');
    }
    public function permitidos(){
        return 
            $this->morphMany('App\Models\Concesion', 'concesionado')
            ->leftjoin('users', function($join){
            $join->on('concesiones.user_id','=', 'users.id');
        });
    }

    public function permisos($nombre, $apat, $amat, $sub_tramite){
//        $sql = "SELECT users.id, CONCAT(apellido_paterno, ' ', apellido_materno, ',', name) as usuario, concesionado_type, IF( ISNULL(concesionado_id)=1,1,0) as checked FROM (select * from concesiones where concesionado_type like '%Evidencia' and concesionado_id = " . $this->id . " ) L RIGHT JOIN users on L.user_id = users.id order by usuario" ;
//        $sql = "SELECT users.id, CONCAT(apellido_paterno, ' ', apellido_materno, ', ', name) as usuario, concesionado_type, IF( ISNULL(concesionado_id)=1,'','checked') as checked FROM (select * from concesiones where concesionado_type like '%Evidencia' and concesionado_id = " . $this->id . " ) L RIGHT JOIN users on L.user_id = users.id  WHERE users.name like '%" . $nombre . "%' AND users.apellido_paterno like '%" . $apat . "%' AND users.apellido_materno like '%" . $amat . "%' order by usuario";
//bak     $sql = "SELECT U.id, CONCAT(U.apellido_paterno, ' ', U.apellido_materno, ', ', U.name) as nombre, L.concesionado_type, IF( ISNULL(L.concesionado_id)=1,'','checked') as checked FROM (select * from concesiones where concesionado_type like '%Evidencia' and concesionado_id = " . $this->id . " ) L RIGHT JOIN (select * from users where id in (select concesionario_id from concesiones where concesionado_type like '%Tramite' and concesionario_type like '%Beneficiario'  and concesionado_id ='" . $this->tramite_id .  "' )) U on L.concesionario_id = U.id  WHERE U.name like '%" . $nombre . "%' AND U.apellido_paterno like '%" . $apat . "%' AND U.apellido_materno like '%" . $amat . "%' order by nombre";
/*en tramites
        $campos1 = " users.id, CONCAT(apellido_paterno, ' ', apellido_materno, ', ', name) as nombre, 'App\\\\Models\\\\Beneficiario' as concesionario_type , IF( ISNULL(concesionado_id)=1,'','checked') as checked ";
        $subL =  "select * from concesiones where concesionado_type like '%Tramite' and concesionario_type like '%Beneficiario' and concesionado_id = " . $this->id ;
        $filtro ="users.name like '%" . $nombre . "%' AND users.apellido_paterno like '%" . $apat . "%' AND users.apellido_materno like '%" . $amat . "%'";
        $sql1  = "SELECT $campos1 FROM ( $subL ) L RIGHT JOIN users on L.concesionario_id = users.id  WHERE $filtro order by nombre";
 */
        $campos = "U.id, CONCAT(U.apellido_paterno, ' ', U.apellido_materno, ', ', U.name) as nombre,  'App\\\\Models\\\\Beneficiario' as concesionario_type, IF( ISNULL(L.concesionado_id)=1,'','checked') as checked ";
        $subL = "select * from concesiones where concesionado_type like '%Evidencia' and concesionado_id = " . $this->id ;
        $subQ = "select concesionario_id from concesiones where concesionado_type like '%Tramite' and concesionario_type like '%Beneficiario'  and concesionado_id ='" . $this->tramite_id .  "' ";
        $sql = "SELECT $campos FROM ( $subL ) L RIGHT JOIN (select * from users where id in ( $subQ )) U on L.concesionario_id = U.id  WHERE U.name like '%" . $nombre . "%' AND U.apellido_paterno like '%" . $apat . "%' AND U.apellido_materno like '%" . $amat . "%' order by nombre";
        $a = DB::select(DB::raw($sql));
        return $a;
    }

    public function permisos2(){
        //        $sql = "SELECT users.id, CONCAT(apellido_paterno, ' ', apellido_materno, ',', name) as usuario, concesionado_type, IF( ISNULL(concesionado_id)=1,1,0) as checked FROM (select * from concesiones where concesionado_type like '%Evidencia' and concesionado_id = " . $this->id . " ) L RIGHT JOIN users on L.user_id = users.id order by usuario" ;
        //        $sql = "SELECT users.id, CONCAT(apellido_paterno, ' ', apellido_materno, ', ', name) as usuario, concesionado_type, IF( ISNULL(concesionado_id)=1,'','checked') as checked FROM (select * from concesiones where concesionado_type like '%Evidencia' and concesionado_id = " . $this->id . " ) L RIGHT JOIN users on L.user_id = users.id  WHERE users.name like '%" . $nombre . "%' AND users.apellido_paterno like '%" . $apat . "%' AND users.apellido_materno like '%" . $amat . "%' order by usuario";
        //bak     $sql = "SELECT U.id, CONCAT(U.apellido_paterno, ' ', U.apellido_materno, ', ', U.name) as nombre, L.concesionado_type, IF( ISNULL(L.concesionado_id)=1,'','checked') as checked FROM (select * from concesiones where concesionado_type like '%Evidencia' and concesionado_id = " . $this->id . " ) L RIGHT JOIN (select * from users where id in (select concesionario_id from concesiones where concesionado_type like '%Tramite' and concesionario_type like '%Beneficiario'  and concesionado_id ='" . $this->tramite_id .  "' )) U on L.concesionario_id = U.id  WHERE U.name like '%" . $nombre . "%' AND U.apellido_paterno like '%" . $apat . "%' AND U.apellido_materno like '%" . $amat . "%' order by nombre";
        $campos = "U.id, CONCAT(U.clave, ' ', U.nombre) as nombre,  'App\\\\Models\\\\Ca' as concesionario_type, IF( ISNULL(L.concesionado_id)=1,'','checked') as checked ";
        $subL = "select * from concesiones where concesionado_type like '%Evidencia' and concesionado_id = " . $this->id ;
        $subQ = "select concesionario_id from concesiones where concesionado_type like '%Tramite' and concesionario_type like '%Ca'  and concesionado_id ='" . $this->tramite_id .  "' ";
        $sql = "SELECT $campos FROM ( $subL ) L RIGHT JOIN (select * from cas where id in ( $subQ )) U on L.concesionario_id = U.id  order by nombre";
        $a = DB::select(DB::raw($sql));
        return $a;
    }

            
    public function publica(){
        return Tramite::find($this->tramite_id)->publico();
    }
}