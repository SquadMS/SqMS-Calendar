<?php

namespace SquadMS\Calendar\Filament\Resources\EventResource\Pages;

use SquadMS\Calendar\Filament\Resources\EventResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreateEvent extends CreateRecord
{
    use Translatable;
    
    protected static string $resource = EventResource::class;
}
