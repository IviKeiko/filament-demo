<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';
    protected $fillable = [
'city_id',
        'city',
        'country',
        'restaurantName',
        'restaurantAddress',
        'image_path',
        'description'
    ];

    public static function create(array $array)
    {
    }


}
