<?php

namespace SquadMS\Calendar\Filament\Resources\EventTypeResource\Pages;

use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;
use SquadMS\Calendar\Filament\Resources\EventTypeResource;

class ListEventType extends ListRecords
{
    use Translatable;

    protected static string $resource = EventTypeResource::class;
}
