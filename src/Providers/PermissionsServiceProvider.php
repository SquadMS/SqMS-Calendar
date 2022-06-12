<?php

namespace SquadMS\Calendar\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use SquadMS\Foundation\Facades\SquadMSPermissions;

class PermissionsServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        /* Permissions */
        foreach (Config::get('sqms-calendar.permissions.definitions', []) as $definition => $displayName) {
            SquadMSPermissions::define(Config::get('sqms-calendar.permissions.module'), $definition, $displayName);
        }
    }
}
