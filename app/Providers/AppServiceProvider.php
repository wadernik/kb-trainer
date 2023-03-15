<?php

namespace App\Providers;

use App\Managers\Lesson\LessonManager;
use App\Managers\Lesson\LessonManagerInterface;
use App\Managers\LessonCategory\LessonCategoryManager;
use App\Managers\LessonCategory\LessonCategoryManagerInterface;
use App\Managers\User\UserManager;
use App\Managers\User\UserManagerInterface;
use App\Managers\UserProgression\UserProgressionManager;
use App\Managers\UserProgression\UserProgressionManagerInterface;
use App\Repositories\Lesson\LessonRepository;
use App\Repositories\Lesson\LessonRepositoryInterface;
use App\Repositories\LessonCategory\LessonCategoryRepository;
use App\Repositories\LessonCategory\LessonCategoryRepositoryInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\UserProgression\UserProgressionRepository;
use App\Repositories\UserProgression\UserProgressionRepositoryInterface;
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
        $this->app->bind(LessonCategoryManagerInterface::class, LessonCategoryManager::class);
        $this->app->bind(LessonManagerInterface::class, LessonManager::class);
        $this->app->bind(UserProgressionManagerInterface::class, UserProgressionManager::class);

        // Repositories
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(LessonCategoryRepositoryInterface::class, LessonCategoryRepository::class);
        $this->app->bind(LessonRepositoryInterface::class, LessonRepository::class);
        $this->app->bind(UserProgressionRepositoryInterface::class, UserProgressionRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
