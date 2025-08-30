<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */

    public const CANDIDATE_DASHBOARD = '/candidate/dashboard';
    public const COMPANY_DASHBOARD = '/company/dashboard';


    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        Route::middleware('api')
            ->prefix('api')
            ->group(base_path('routes/api.php'));

        Route::middleware('web')
            ->group(base_path('routes/web.php'));

        Route::middleware('web')
            ->group(base_path('routes/admin.php'));
    }
}
