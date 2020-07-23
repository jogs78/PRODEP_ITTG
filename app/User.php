<?php

namespace App;

use App\Models\Beneficiario;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'rol'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function beneficiario(){
        return $this->hasOne('App\Models\Beneficiario')
        ->withDefault([
            'user_id' => null,
            'rfc' => 'usuario de sistema'
        ]);;

    }


    public function ca(){
        return $this->hasOneThrough(
            'App\Models\Ca',
            'App\Models\Miembro',
            'beneficiario_id',
            'id'/*cas.id*/,
            'id'/* miembros.id */,
            'ca_id'
        );
    }


    /*
    public function rol()
    {
        return $this->hasOneThrough(
            'App\Owner',
            'App\Car',
            'mechanic_id', // Foreign key on cars table...
            'car_id', // Foreign key on owners table...
            'id', // Local key on mechanics table...
            'id' // Local key on cars table...
        );
    }
*/

}
