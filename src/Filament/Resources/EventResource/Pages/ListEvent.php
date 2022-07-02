<?php

namespace SquadMS\Calendar\Filament\Resources\EventResource\Pages;

use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;
use SquadMS\Calendar\Filament\Resources\EventResource;

class ListEvent extends ListRecords
{
    use Translatable;

    protected static string $resource = EventResource::class;
}
