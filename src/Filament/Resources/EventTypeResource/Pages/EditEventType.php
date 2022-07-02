<?php

namespace SquadMS\Calendar\Filament\Resources\EventTypeResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;
use SquadMS\Calendar\Filament\Resources\EventTypeResource;

class EditEventType extends EditRecord
{
    use Translatable;

    protected static string $resource = EventTypeResource::class;
}
