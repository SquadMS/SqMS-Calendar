<?php

namespace SquadMS\Calendar;

use Illuminate\Support\Facades\Config;
use SquadMS\Foundation\Modularity\Contracts\SquadMSModule as SquadMSModuleContract;

class SquadMSModule extends SquadMSModuleContract
{
    public static function getIdentifier(): string
    {
        return 'sqms-calendar';
    }

    public static function getName(): string
    {
        return 'SquadMS Calendar';
    }
    
    public static function overrideConfigs(): array
    {
        return [
            'filament-spatie-laravel-translatable-plugin.default_locales' => Config::get('sqms.locales'),
        ];
    }
}
