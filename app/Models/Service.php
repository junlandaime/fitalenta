<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'short',
        'price',
        'duration',
        'is_featured',
        'icon',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_featured' => 'boolean',
    ];

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function getFormattedPriceAttribute()
    {
        return $this->price ? 'Rp ' . number_format($this->price, 0, ',', '.') : 'Contact for Price';
    }

    public function getResolvedIconAttribute()
    {
        $iconMap = [
            'chart-line' => 'chart-line',
            'people-group' => 'users',
            'person-arrow-up-from-line' => 'user-graduate',
            'business-time' => 'briefcase',
            'store' => 'store',
            'calendar-days' => 'calendar-alt',
            'group-arrows-rotate' => 'sync-alt',
            'plane' => 'plane',
            'cogs' => 'cogs',
            'clipboard' => 'clipboard-check',
        ];

        if (!empty($this->icon)) {
            return $iconMap[$this->icon] ?? $this->icon;
        }

        $serviceName = strtolower($this->name ?? '');

        if (str_contains($serviceName, 'avionics') || str_contains($serviceName, 'aviation') || str_contains($serviceName, 'aircraft') || str_contains($serviceName, 'category c')) {
            return 'plane';
        }
        if (str_contains($serviceName, 'improvement')) {
            return 'cogs';
        }
        if (str_contains($serviceName, 'management')) {
            return 'clipboard-check';
        }
        if (str_contains($serviceName, 'financial')) {
            return 'chart-line';
        }
        if (str_contains($serviceName, 'human capital')) {
            return 'users';
        }
        if (str_contains($serviceName, 'edu')) {
            return 'graduation-cap';
        }
        if (str_contains($serviceName, 'affiliate')) {
            return 'briefcase';
        }
        if (str_contains($serviceName, 'branding') || str_contains($serviceName, 'marketing')) {
            return 'bullhorn';
        }
        if (str_contains($serviceName, 'event')) {
            return 'calendar-alt';
        }
        if (str_contains($serviceName, 'stem') || str_contains($serviceName, 'spark')) {
            return 'atom';
        }

        return 'briefcase';
    }
}
