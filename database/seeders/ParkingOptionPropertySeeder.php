<?php

namespace Database\Seeders;

use App\Models\ParkingOptionProperty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParkingOptionPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Driveway parking available',
            "On-Street parking available",
            'Economical parking available',
            'Parking is expensive nearby',
        ];

        foreach ($data as $key => $value) {
            $checkin = new ParkingOptionProperty();
            $checkin->name = $value;
            $checkin->save();
        }
    }
}
