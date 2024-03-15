<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Projects\ProjectInterface;
use App\Repository\Projects\ProjectRepository;

class RepositoryServiceProveider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            ProjectInterface::class,
            ProjectRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
