<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoverageRequirement extends Model
{
    protected $fillable = ['day_of_week', 'shift_type', 'min_staff_required'];
}
