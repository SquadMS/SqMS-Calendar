<?php

namespace SquadMS\Calendar;

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
}
