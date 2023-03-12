<?php

namespace App\Providers;

use App\Managers\User\UserManager;
use App\Managers\User\UserManagerInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Managers
        $this->app->bind(UserManagerInterface::class, UserManager::class);

        // Repositories
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
