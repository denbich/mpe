<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;

    protected $fillable = [
        'home_adress',
        'points',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
