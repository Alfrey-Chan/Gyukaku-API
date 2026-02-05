<?php

namespace Database\Seeders;

use App\Models\CoverageRequirement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CoverageRequirementsSeeder extends Seeder
{
    private const DAY_REQUIREMENTS = [
            0 => [
                'lunch' => 3,
                'dinner' => 6,
            ],
            1 => [
                'lunch' => 3,
                'dinner' => 6,
            ],
            2 => [
                'lunch' => 3,
                'dinner' => 6,
            ],
            3 => [
                'lunch' => 3,
                'dinner' => 6,
            ],
            4 => [
                'lunch' => 3,
                'dinner' => 6,
            ],
            5 => [
                'lunch' => 4,
                'dinner' => 7,
            ],
            6 => [
                'lunch' => 4,
                'dinner' => 7,
            ],
            7 => [
                'lunch' => 4,
                'dinner' => 7,
            ],
        ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::DAY_REQUIREMENTS as $dayOfWeek => $requirements) {
            foreach ($requirements as $type => $staffRequired) {
                CoverageRequirement::create([
                    'day_of_week' => $dayOfWeek,
                    'shift_type' => $type,
                    'min_staff_required' => $staffRequired,
                ]);
            }
        }
    }
}
