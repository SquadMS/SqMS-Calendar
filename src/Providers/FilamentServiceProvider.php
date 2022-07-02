<?php

namespace SquadMS\Calendar\Providers;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;
use SquadMS\Calendar\Filament\Resources\EventResource;
use SquadMS\Calendar\Filament\Resources\EventTypeResource;

class FilamentServiceProvider extends PluginServiceProvider
{
    protected array $resources = [
        EventResource::class,
        EventTypeResource::class,
    ];

    public function configurePackage(Package $package): void
    {
        $package->name('sqms-calendar');
    }
}
