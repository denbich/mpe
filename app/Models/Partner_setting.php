<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner_setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'partner_id',
        'could_buy',
        'could_change_size',
        'is_discount',
        'discount_value',
    ];

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
}
