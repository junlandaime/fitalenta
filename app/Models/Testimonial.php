<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'company',
        'content',
        'rating',
        'image',
        'is_featured'
    ];

    protected $casts = [
        'rating' => 'integer',
        'is_featured' => 'boolean',
    ];
}
