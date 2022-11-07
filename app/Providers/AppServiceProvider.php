<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        Gate::define('admin', function (User $user) {
            return $user->is_admin;
        });
        Gate::define('Admin_UMKM', function (User $user) {
            return $user->is_admin && $user->role == 'Admin_UMKM';
        });
        Gate::define('Admin_Wisata', function (User $user) {
            return $user->is_admin && $user->role == 'Admin_Wisata';
        });
    }
}