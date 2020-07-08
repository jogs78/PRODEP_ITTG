<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Concesion extends Model
{
    protected $table = "concesiones";

    protected $fillable = [
        'concesionado_id', 'concesionado_type', 'user_id'
    ];
    public $timestamps =false;

    public function user(){
        return $this->belongsTo('App\User');
//        return $this->hasOne('App\User','user_id','id');

    }
}
