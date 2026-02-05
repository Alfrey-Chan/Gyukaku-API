<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\SchedulePeriod;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SchedulePeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $start = Carbon::now('America/Vancouver')->startOfWeek(Carbon::SUNDAY);
        $end = $start->copy()->addWeeks(2);

        SchedulePeriod::create([
            'start_date' => $start,
            'end_date' => $end,
        ]);
    }
}
