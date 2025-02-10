<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';
    protected $fillable = [
        'city',
        'country',
        'restaurantName',
        'restaurantAddress'
    ];

    public static function create(array $array)
    {
    }
}
