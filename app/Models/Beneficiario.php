<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Beneficiario extends User
{
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'rfc', 'genero', 'civil', 'nacionalidad', 'entidad', 'fecha_nacimiento', 'telefono', 'celular', 'email_ins' ,'fecha_inscrpcion' , 'perfil' , 'area' , 'disciplina', 'nombramiento', 'tipo_nombramiento' , 'dedicacion' , 'unidad', 'fecha_contrato', 'nivel' , 'siglas' , 'estudios' , 'pais' , 'institucion_otorgante' , 'fecha_titulo',
    ];

           
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
