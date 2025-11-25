<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job';

    protected $fillable = [
        'company_id',
        'title',
        'type', // Full Time, Part Time, Remote, Internship
        'location',
        'salary_min',
        'salary_max',
        'description',
        'responsibilities',
        'requirements',
        'benefits',
        'how_to_apply',
        'is_active',
        'order',
        'posted_at',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'posted_at' => 'datetime',
        'responsibilities' => 'array',
        'requirements' => 'array',
        'benefits' => 'array',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function getSalaryRangeAttribute()
    {
        if (!$this->salary_min && !$this->salary_max) {
            return 'Gaji tidak ditampilkan';
        }

        if (!$this->salary_max) {
            return 'Rp ' . number_format($this->salary_min) . '+/bulan';
        }

        return 'Rp ' . number_format($this->salary_min) . ' - ' . number_format($this->salary_max) . '/bulan';
    }

    public function getPostedTimeAgoAttribute()
    {
        return $this->posted_at->diffForHumans();
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where(function ($q) use ($search) {
            $q->where('title', 'like', "%{$search}%")
                ->orWhereHas('company', function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%");
                });
        });
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['location'] ?? false, function ($q, $location) {
            $q->where('location', $location);
        });

        $query->when($filters['type'] ?? false, function ($q, $type) {
            $q->where('type', $type);
        });

        return $query;
    }
}
