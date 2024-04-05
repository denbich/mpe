<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuptype extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'size',
        'capacity',
        'type',
        'image_path',
        'price',
        'note'
    ];

    public function citizencup() {
        return $this->hasMany(Citizencup::class);
   }
}
