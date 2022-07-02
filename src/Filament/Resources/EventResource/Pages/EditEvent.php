<?php

namespace SquadMS\Calendar\Filament\Resources\EventResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;
use SquadMS\Calendar\Filament\Resources\EventResource;

class EditEvent extends EditRecord
{
    use Translatable;

    protected static string $resource = EventResource::class;
}
