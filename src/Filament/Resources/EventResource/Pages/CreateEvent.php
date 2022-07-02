<?php

namespace SquadMS\Calendar\Filament\Resources\EventResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\Translatable;
use SquadMS\Calendar\Filament\Resources\EventResource;

class CreateEvent extends CreateRecord
{
    use Translatable;

    protected static string $resource = EventResource::class;
}
