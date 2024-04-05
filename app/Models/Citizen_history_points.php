<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen_history_points extends Model
{
    use HasFactory;

    protected $fillable = [
        'citizen_id',
        'points',
        'type',
    ];


    public function citizen()
    {
        return $this->belongsTo(Citizen::class);
    }

    const type_Trash = 1;
    const type_Official_add = 2;

}
