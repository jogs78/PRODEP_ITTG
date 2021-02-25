<?php

namespace App\Policies;

use App\Models\Evidencia;
use App\Models\Concesion;
use App\Models\Beneficiario;

use App\User;

use Illuminate\Auth\Access\HandlesAuthorization;

class EvidenciasPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Evidencia  $evidencia
     * @return mixed
     */
    public function view(User $user, Evidencia $evidencia)
    {
        if($user->rol != "BENEFICIARIO") return true;
        else{
            $publica = Concesion::where('concesionario_id', '=', -1)->where('concesionario_type', '=', "App\Models\Beneficiario")->where('concesionado_type', '=', "App\Models\Tramite")->where('concesionado_id', '=', $evidencia->tramite_id )->exists();
            if($publica) return true;
            $usuario_puede = Concesion::where('concesionario_id', '=', $user->id)->where('concesionario_type', '=', "App\Models\Beneficiario")->where('concesionado_type', '=', "App\Models\Evidencia")->where('concesionado_id', '=', $evidencia->id )->exists();
            if($usuario_puede) return true;
            //como miembro de ca
            if($user->ca)
                return Concesion::where('concesionario_id', '=', $user->ca->id)->where('concesionario_type', '=', "App\Models\Ca")->where('concesionado_type', '=', "App\Models\Evidencia")->where('concesionado_id', '=', $evidencia->id )->exists();
        } 
    }

    /**
     * Determine whether the user can asing models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function asignar(User $user)
    {
        if ($user->rol == "RIP") return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if ($user->rol == "RIP") return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Evidencia  $evidencia
     * @return mixed
     */
    public function update(User $user, Evidencia $evidencia)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Evidencia  $evidencia
     * @return mixed
     */
    public function delete(User $user, Evidencia $evidencia)
    {
        if ($user->rol == "RIP") return true;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Evidencia  $evidencia
     * @return mixed
     */
    public function restore(User $user, Evidencia $evidencia)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Evidencia  $evidencia
     * @return mixed
     */
    public function forceDelete(User $user, Evidencia $evidencia)
    {
        //
    }
}
