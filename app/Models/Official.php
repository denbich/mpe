<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'department',
        'title',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
