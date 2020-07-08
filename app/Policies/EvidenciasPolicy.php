<?php

namespace App\Policies;

use App\Models\Evidencia;
use App\Models\Concesion;
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
        else return Concesion::where('user_id', '=', $user->id)->where('concesionado_type', '=', "App\Models\Evidencia")->where('concesionado_id', '=', $evidencia->id )->exists();
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
