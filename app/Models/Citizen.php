<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;

    protected $fillable = [
        'home_adress',
        'title',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function citizen_history_points() {
    return $this->hasMany(Citizen_history_points::class);
    }

    public function citizencup() {
         return $this->hasMany(Citizencup::class);
    }

}
