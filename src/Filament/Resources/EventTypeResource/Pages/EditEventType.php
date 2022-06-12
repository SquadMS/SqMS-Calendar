<?php

namespace SquadMS\Calendar\Filament\Resources\EventTypeResource\Pages;

use SquadMS\Calendar\Filament\Resources\EventTypeResource;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;

class EditEventType extends EditRecord
{
    use Translatable;
    
    protected static string $resource = EventTypeResource::class;
}
