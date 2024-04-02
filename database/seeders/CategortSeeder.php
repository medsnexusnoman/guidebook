<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Places to eat',
            'Activities',
            'Bars',
            'Attractions',
            'Shopping',
            "Other"
        ];

        foreach ($data as $key => $value) {
            $checkin = new Category();
            $checkin->name = $value;
            $checkin->save();
        }
    }
}
