<?php

namespace Database\Seeders;

use App\Models\DirectionOptionsDirection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DirectionOptionsDirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'To/from airport',
            "Taxi",
            'Uber',
            'Lyft',
            'Bus',
            'Train',
            'Ferry-boat',
            'Pickup',
            'Driving',

        ];

        foreach ($data as $key => $value) {
            $checkin = new DirectionOptionsDirection();
            $checkin->name = $value;
            $checkin->save();
        }
    }
}
