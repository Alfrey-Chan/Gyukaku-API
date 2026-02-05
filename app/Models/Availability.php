<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Availability extends Model
{
    protected $fillable = ['user_id', 'schedule_period_id', 'date', 'lunch_available', 'dinner_available', 'constraints'];

    protected $casts = [
        'date' => 'date',
        'lunch_available' => 'boolean',
        'dinner_available' => 'boolean',
    ];

    public function schedulePeriod(): BelongsTo
    {
        return $this->belongsTo(SchedulePeriod::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
