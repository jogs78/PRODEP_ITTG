<?php

namespace App\Policies;

use App\Models\Tramite;
use App\Models\Concesion;
use App\User;

use Illuminate\Auth\Access\HandlesAuthorization;

class SubtramitesPolicy
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
     * @param  \App\Tramite  $tramite
     * @return mixed
     */
    public function view(User $user, Tramite $tramite)
    {
        if($user->rol != "BENEFICIARIO") return true;
        else return Concesion::where('user_id', '=', $user->id)->where('concesionado_type', '=', "App\Models\Tramite")->where('concesionado_id', '=', $tramite->id )->exists();
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
     * @param  \App\Tramite  $tramite
     * @return mixed
     */
    public function update(User $user, Tramite $tramite)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Tramite  $tramite
     * @return mixed
     */
    public function delete(User $user, Tramite $tramite)
    {
        if ($user->rol == "RIP") return true;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Tramite  $tramite
     * @return mixed
     */
    public function restore(User $user, Tramite $tramite)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Tramite  $tramite
     * @return mixed
     */
    public function forceDelete(User $user, Tramite $tramite)
    {
        //
    }
}
