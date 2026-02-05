<?php

namespace Database\Seeders;

use App\Models\ShiftTemplate;
use Illuminate\Database\Seeder;

class ShiftTemplateSeeder extends Seeder
{
    private const SHIFT_START_TIMES = [
        'lunch' => [10, 11, 12],
        'dinner' => [5],
        'both' => [12],
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::SHIFT_START_TIMES as $shiftType => $startTimes) {
            foreach ($startTimes as $startTime) {
                ShiftTemplate::create([
                    'shift_type' => $shiftType,
                    'start_time' => $startTime,
                ]);
            }
        }
    }
}
