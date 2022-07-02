<?php

namespace SquadMS\Calendar\Filament\Resources\EventTypeResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\Translatable;
use SquadMS\Calendar\Filament\Resources\EventTypeResource;

class CreateEventType extends CreateRecord
{
    use Translatable;

    protected static string $resource = EventTypeResource::class;
}
