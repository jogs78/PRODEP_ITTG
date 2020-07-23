<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use App\Models\Tramite;
use App\Models\Evidencia;
use App\Policies\SubtramitesPolicy;
use App\Policies\EvidenciasPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\Models\Tramite' => 'App\Policies\SubtramitesPolicy',
        'App\Models\Evidencia' => 'App\Policies\EvidenciasPolicy',
        'App\Models\Ca' => 'App\Policies\CasPolicy',
        //    Tramite::class => SubtramitesPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
