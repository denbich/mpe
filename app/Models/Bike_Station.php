<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike_Station extends Model
{
    use HasFactory;

protected $fillable = [
    'name',
    'capacity',
    'longitude',
    'laditude',
    'start_availability',
    'end_availability',
    'note',
];
}
