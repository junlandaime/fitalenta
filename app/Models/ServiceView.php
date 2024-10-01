<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceView extends Model
{
    use HasFactory;

    protected $fillable = ['service_id', 'ip_address', 'user_agent'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
