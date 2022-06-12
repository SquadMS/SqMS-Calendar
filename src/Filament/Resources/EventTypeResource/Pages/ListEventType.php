<?php

namespace SquadMS\Calendar\Filament\Resources\EventTypeResource\Pages;

use SquadMS\Calendar\Filament\Resources\EventTypeResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;

class ListEventType extends ListRecords
{
    use Translatable;
    
    protected static string $resource = EventTypeResource::class;
}
