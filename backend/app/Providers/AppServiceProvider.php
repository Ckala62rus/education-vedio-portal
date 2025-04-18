<?php

namespace App\Providers;

use App\Contracts\CategoryVideoRepositoryInterface;
use App\Contracts\CategoryVideoServiceInterface;
use App\Contracts\LessonCategoryRepositoryInterface;
use App\Contracts\LessonCategoryServiceInterface;
use App\Contracts\LessonRepositoryInterface;
use App\Contracts\LessonServiceInterface;
use App\Contracts\MinioServiceInterface;
use App\Contracts\RoleRepositoryInterface;
use App\Contracts\RoleServiceInterface;
use App\Contracts\UserRepositoryInterface;
use App\Contracts\UserServiceInterface;
use App\Repositories\CategoryVideoRepository;
use App\Repositories\LessonCategoryRepository;
use App\Repositories\LessonRepository;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use App\Services\CategoryVideoService;
use App\Services\LessonCategoryService;
use App\Services\LessonService;
use App\Services\MinioService;
use App\Services\RoleService;
use App\Services\UserService;
use Illuminate\Routing\UrlGenerator;
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
        $this->app->bind(LessonRepositoryInterface::class, LessonRepository::class);
        $this->app->bind(LessonServiceInterface::class, LessonService::class);

        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(UserServiceInterface::class, UserService::class);

        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);
        $this->app->bind(RoleServiceInterface::class, RoleService::class);

        $this->app->bind(LessonCategoryRepositoryInterface::class, LessonCategoryRepository::class);
        $this->app->bind(LessonCategoryServiceInterface::class, LessonCategoryService::class);

        $this->app->bind(MinioServiceInterface::class, MinioService::class);

        $this->app->bind(CategoryVideoRepositoryInterface::class, CategoryVideoRepository::class);
        $this->app->bind(CategoryVideoServiceInterface::class, CategoryVideoService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {

        // Использовать для публикации в ngrok
        // ngrok http 127.0.0.1:8000
//        $url->forceScheme('https');
    }
}
