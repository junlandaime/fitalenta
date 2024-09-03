<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'category',
        'is_featured',
        'order'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
    ];

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }
}
