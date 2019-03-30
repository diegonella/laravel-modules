<?php

namespace Diegonella\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Diegonella\Modules\Contracts\RepositoryInterface;
use Diegonella\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}
