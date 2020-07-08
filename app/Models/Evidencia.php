<?php

namespace App\Models;

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
        $sql = "SELECT U.id, CONCAT(U.apellido_paterno, ' ', U.apellido_materno, ', ', U.name) as usuario, L.concesionado_type, IF( ISNULL(L.concesionado_id)=1,'','checked') as checked FROM (select * from concesiones where concesionado_type like '%Evidencia' and concesionado_id = " . $this->id . " ) L RIGHT JOIN (select * from users where id in (select user_id from concesiones where concesionado_type like '%Tramite' and concesionado_id ='" . $this->tramite_id .  "' )) U on L.user_id = U.id  WHERE U.name like '%" . $nombre . "%' AND U.apellido_paterno like '%" . $apat . "%' AND U.apellido_materno like '%" . $amat . "%' order by usuario";
        $a = DB::select(DB::raw($sql));
        return $a;
    }

}