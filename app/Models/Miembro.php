<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Miembro extends Model
{
//    protected $table = "concesiones";

    protected $fillable = [
        'ca_id', 'beneficiario_id'
    ];
    public $timestamps =false;

    public function user(){
        return $this->belongsTo('App\User','beneficiario_id');
    }
    public function ca(){
        return $this->belongsTo('App\Models\Ca','ca_id');
    }
}
