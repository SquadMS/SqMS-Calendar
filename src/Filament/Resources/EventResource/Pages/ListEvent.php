<?php

namespace SquadMS\Calendar\Filament\Resources\EventResource\Pages;

use SquadMS\Calendar\Filament\Resources\EventResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;

class ListEvent extends ListRecords
{
    use Translatable;
    
    protected static string $resource = EventResource::class;
}
