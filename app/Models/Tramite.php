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

    public function tipo_tramite(){
        return $this->belongsTo('App\Models\Tipo_Tramite');

    }

    public function evidencias(){
        return $this->belongsToMany('App\Models\Evidencia', 'evidencias_tramites');
    }

    public function beneficiarios(){
        return $this->belongsToMany('App\User', 'tramites_users');
//      return $this->belongsToMany('App\User', 'tramites_user','user_id','w','x','y','z');
    }
}
