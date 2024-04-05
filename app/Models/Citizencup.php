<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizencup extends Model
{
    use HasFactory;

    protected $fillable = [
        'citizen_id',
        'cup_id',
        'condition'
    ];

    public function citizen()
    {
        return $this->belongsTo(Citizen::class);
    }

    public function cuptype()
    {
        return $this->belongsTo(Cuptype::class, 'cup_id');
    }


}

