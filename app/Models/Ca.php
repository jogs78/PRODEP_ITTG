<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Ca extends Model
{
//    protected $table = "concesiones";
    protected $fillable = [
        'clave', 'nombre',
    ];
    public $timestamps =false;

    public function quienes($nombre, $apat, $amat){
        //$sql = "SELECT users.id, CONCAT(apellido_paterno, ' ', apellido_materno, ', ', name) as usuario, concesionado_type, IF( ISNULL(concesionado_id)=1,'','checked') as checked FROM (select * from concesiones where concesionado_type like '%Tramite' and concesionado_id = " . $this->id . " ) L RIGHT JOIN users on L.user_id = users.id order by usuario" ;
        $sql = "SELECT users.id, CONCAT(apellido_paterno, ' ', apellido_materno, ', ', name) as usuario, IF( ISNULL(L.id)=1,'','checked') as checked FROM (select * from miembros where ca_id = " . $this->id . " ) L RIGHT JOIN users on L.beneficiario_id = users.id  WHERE users.name like '%" . $nombre . "%' AND users.apellido_paterno like '%" . $apat . "%' AND users.apellido_materno like '%" . $amat . "%' order by usuario";
        $a = DB::select(DB::raw($sql));
        return $a;
    }

    

/*
    public function user(){
        return $this->belongsTo('App\User');
//        return $this->hasOne('App\User','user_id','id');
    }
*/
}
