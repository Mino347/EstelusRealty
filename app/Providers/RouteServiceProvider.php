<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use App\UserRole;
class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/home';  // Default home for customers
    public const ADMIN_DASHBOARD = '/admin/dashboard';  // Admin dashboard

    public function boot()
    {
        $this->routes(function () {
            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    // Optional: redirectTo function if needed globally
//    public function redirectTo()
//    {
//        return Auth::user()->role === \App\UserRole::Admin
//            ? self::ADMIN_DASHBOARD
//            : self::HOME;
//    }
}
