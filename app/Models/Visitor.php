<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = ['ip_address', 'user_agent', 'visits', 'last_visit'];

    protected $casts = [
        'last_visit' => 'datetime',
    ];
}
