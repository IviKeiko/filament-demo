<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;
class LocationSeeder extends Seeder
{
    public function run(): void
    {
        Location::create([
            'city' => 'Banja Luka',
            'country' => 'BiH',
            'restaurantName' => 'La Strada',
            'restaurantAddress' => 'Vidovdanska 8',
        ]);

        Location::create([
            'city' => 'Novi Sad',
            'country' => 'Serbia',
            'restaurantName' => 'Toro',
            'restaurantAddress' => 'Zmaj Jovina 2',
        ]);

        Location::create([
            'city' => 'Belgrade',
            'country' => 'Serbia',
            'restaurantName' => 'Smokvica',
            'restaurantAddress' => 'Molerova 7',
        ]);
    }
}
