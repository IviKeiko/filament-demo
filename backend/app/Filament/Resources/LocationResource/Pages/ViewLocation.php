<?php

namespace App\Filament\Resources\LocationResource\Pages;

use App\Filament\Resources\LocationResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLocation extends ViewRecord
{
    protected static string $resource = LocationResource::class;

    public function getView(): string
    {
        return 'filament.pages.view-location';
    }
    public function getTitle(): string
    {
        return ' ';
    }

}
