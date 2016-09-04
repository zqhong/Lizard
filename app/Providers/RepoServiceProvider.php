<?php

namespace Lizard\Providers;

use Illuminate\Support\ServiceProvider;
use Lizard\Repositories\EloquentThread;
use Lizard\Repositories\ThreadInterface;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ThreadInterface::class, function () {
            return $this->app->make(EloquentThread::class);
        });
    }
}
