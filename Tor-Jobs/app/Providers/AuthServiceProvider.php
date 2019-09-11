<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(Gatecontract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('isEmployer', function($user){
            $user->user_type == 'employer';
        });

        $gate->define('isCandidate', function($user){
            $user->user_type == 'candidate';
        });
    }
}
