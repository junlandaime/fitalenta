<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventView extends Model
{
    use HasFactory;

    protected $fillable = ['event_id', 'ip_address', 'user_agent'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
