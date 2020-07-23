<?php

namespace App\Policies;

use App\Models\Tramite;
use App\Models\Concesion;
use App\User;

use Illuminate\Auth\Access\HandlesAuthorization;

class CasPolicy
{
    use HandlesAuthorization;

    public function before(User $user)
    {
        if($user->rol == "RIP") return true;
    }
}
