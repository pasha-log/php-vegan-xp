<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
// use Laravel\Fortify\Fortify;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // $this->registerPolicies();

        // Gate::define('viewWebSocketsDashboard', function ($user = null) {
        //     // ...
        // });
    
        // Gate::define('updateProfileInformation', function ($user, $model) {
        //     return $user->id === $model->id;
        // });
    
        // Gate::define('deleteAccount', function ($user, $model) {
        //     return $user->id === $model->id;
        // });
    
        // // $this->configurePermissions();
    }
}
