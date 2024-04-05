<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'telephone',
        'street',
        'building_number',
        'postcode',
        'city',
        'logo_path',
    ];

    public function Partner_settings(){
        return $this->hasMany(Partner_setting::class, 'partner_id', 'id');
    }
}
