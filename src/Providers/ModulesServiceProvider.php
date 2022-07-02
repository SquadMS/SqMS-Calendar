<?php

namespace SquadMS\Calendar\Providers;

use Illuminate\Support\ServiceProvider;
use SquadMS\Calendar\SquadMSModule;
use SquadMS\Foundation\Facades\SquadMSModuleRegistry;

class ModulesServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        SquadMSModuleRegistry::register(SquadMSModule::class);
    }
}
