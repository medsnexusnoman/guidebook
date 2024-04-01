<?php

namespace Database\Seeders;

use App\Models\CheckoutOptionPolicy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CheckoutOptionPolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            "Unfortunately we can't accommodate late checkouts.",
            "Sometimes we can accommodate late checkouts if you contact us.",
            "Contact us if you'd like to arrange a later checkout.",
            "Show late checkout option (if unchecked we won't mention it at all)",
        ];

        foreach ($data as $key => $value) {
            $checkin = new CheckoutOptionPolicy();
            $checkin->name = $value;
            $checkin->save();
        }
    }
}
