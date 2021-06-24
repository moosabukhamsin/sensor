<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\EloquentRepositoryInterface; 
use App\Repositories\BaseRepository; 
use App\Repositories\DoorReading\DoorReadingRepositoryInterface;
use App\Repositories\DoorReading\DoorReadingRepository; 
use App\Repositories\TemperatureReading\TemperatureReadingRepositoryInterface;
use App\Repositories\TemperatureReading\TemperatureReadingRepository;  

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(DoorReadingRepositoryInterface::class, DoorReadingRepository::class);
        $this->app->bind(TemperatureReadingRepositoryInterface::class, TemperatureReadingRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
