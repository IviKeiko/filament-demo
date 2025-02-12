<?php

namespace App\Filament\Pages;

use App\Models\Location;
use Filament\Pages\Page;

class LocationListPage extends Page
{

protected static string $view = 'filament.pages.city-locations-page';


public $locations;

public function mount(): void
{

$this->locations = Location::all();
}

    public static function route(string $path): array
    {
        return [
            'route' => [
                'path' => $path,
                'action' => static::class,
            ],
        ];
    }
}
