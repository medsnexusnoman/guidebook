<?php

namespace Database\Seeders;

use App\Models\CheckInproperty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CheckInpropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'There is a lockbox containing your house key.',
            "We'll be there to meet you, if not contact me on arrival.",
            'We will email you the access codes prior to your arrival.',
            'Check your email for check-in instructions.',
            'We have keyless entry.'
        ];

        foreach ($data as $key => $value) {
            $checkin = new CheckInproperty();
            $checkin->name = $value;
            $checkin->save();
        }
    }
}
