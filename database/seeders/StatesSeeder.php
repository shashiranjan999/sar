<?php

namespace Database\Seeders;

use App\Models\State;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = array("Andaman & Nicobar Islands", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra & Nagar Haveli", "Daman & Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu & Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Odisha", "Puducherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Tripura", "Uttar Pradesh", "Uttarakhand", "West Bengal");
        foreach ($states as $state) {
            State::insert(['name' => $state]);
        }
        // $states = [
        //     [
        //         'name' => 'Andaman & Nicobar Islands',
        //         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //         'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     ],
        // ];

        
    }
}
