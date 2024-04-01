<?php

namespace Database\Seeders;

use App\Models\CheckInOptions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CheckInOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Unfortunately we cannot accommodate checking in before this time.',
            'Occasionally we accommodate checking in at other times, if you contact us',
            'We are happy to arrange alternative check-in times, if you contact us.',
            'We are happy to You can store your bags in the listing all day.',
            'Enter your own'
        ];

        foreach ($data as $key => $value) {
            $checkin = new CheckInOptions();
            $checkin->name = $value;
            $checkin->save();
        }

    }
}
