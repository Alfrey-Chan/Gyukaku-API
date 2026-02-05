<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    private const NAMES = [
        "VCADARSH",
        "VCADILYN",
        "VCALFREY",
        "VCALISA",
        "VCALISON",
        "VCANGIE",
        "VCANTHONY",
        "VCCORY",
        "VCDENNIS",
        "VCILAYDA",
        "VCIORI",
        "VCJACK",
        "VCJEFF",
        "VCLINDA",
        "VCLISA",
        "VCMINJOO",
        "VCMOON",
        "VCNAJINKIM",
        "VCRINSUKE",
        "VCSHANDESH",
        "VCSHELDON",
        "VCVICTOR",
        "VCRICKY",
        "VCALICE",
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::NAMES as $name) {
            User::factory()->create([
                'first_name' => $name,
            ]);
        }
    }
}
