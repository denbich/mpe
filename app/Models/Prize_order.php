<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prize_order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'citizen_id',
        'prize_id',
        'info',
        'citizen_points',
        'prize_points',
    ];


}
