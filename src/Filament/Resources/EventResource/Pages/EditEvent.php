<?php

namespace SquadMS\Calendar\Filament\Resources\EventResource\Pages;

use SquadMS\Calendar\Filament\Resources\EventResource;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;

class EditEvent extends EditRecord
{
    use Translatable;
    
    protected static string $resource = EventResource::class;
}
