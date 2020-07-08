<?php

namespace App\Models;

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
        $sql = "SELECT users.id, CONCAT(apellido_paterno, ' ', apellido_materno, ', ', name) as usuario, concesionado_type, IF( ISNULL(concesionado_id)=1,'','checked') as checked FROM (select * from concesiones where concesionado_type like '%Tramite' and concesionado_id = " . $this->id . " ) L RIGHT JOIN users on L.user_id = users.id  WHERE users.name like '%" . $nombre . "%' AND users.apellido_paterno like '%" . $apat . "%' AND users.apellido_materno like '%" . $amat . "%' order by usuario";
        $a = DB::select(DB::raw($sql));
        return $a;
    }

    public function permitidos(){
        $sql = "SELECT id, CONCAT(apellido_paterno, ' ', apellido_materno, ', ', name) as usuario FROM users WHERE id in (select user_id from concesiones where concesionado_type like '%Tramite' and concesionado_id = " . $this->id . " ) order by usuario";
        $a = DB::select(DB::raw($sql));
        return $a;
    }
        
}
