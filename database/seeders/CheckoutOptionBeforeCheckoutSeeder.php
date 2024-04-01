<?php

namespace Database\Seeders;

use App\Models\CheckoutOptionBeforeCheckout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CheckoutOptionBeforeCheckoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'You can store your bags at the listing after checkout time.',
            "Please sign our guestbook before you leave.",
            'Leave used beds unmade.',
            'Please clean up any dirty dishes and put them away.',
            'Put any last minute dishes in the dishwasher.',
            'Make sure you turn off the stove, heater and lights.',
            'Replace any furniture that was rearranged.',
            'Take out the trash',
            'Leave used towels in the tub.',
            'Leave used towels on the floor.',
            'Leave the door unlocked.',

            'Make sure you lock the doors.',
            'Leave a key inside.',
            'Leave the key(s) in the lockbox.',

        ];

        foreach ($data as $key => $value) {
            $checkin = new CheckoutOptionBeforeCheckout();
            $checkin->name = $value;
            $checkin->save();
        }
    }
}
