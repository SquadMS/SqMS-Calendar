<?php

namespace SquadMS\Calendar\Filament\Resources\EventTypeResource\Pages;

use SquadMS\Calendar\Filament\Resources\EventTypeResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreateEventType extends CreateRecord
{
    use Translatable;
    
    protected static string $resource = EventTypeResource::class;
}
