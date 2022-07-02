<?php

namespace SquadMS\Calendar;

use Illuminate\Support\ServiceProvider;

class CalendarServiceProvider extends ServiceProvider
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
        /* Configuration */
        $this->mergeConfigFrom(__DIR__.'/../config/sqms-calendar.php', 'sqms-calendar');

        /* Load Migrations */
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
