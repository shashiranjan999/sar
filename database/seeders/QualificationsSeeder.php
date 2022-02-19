<?php

namespace Database\Seeders;

use App\Models\Masterqualification;
use Illuminate\Database\Seeder;

class QualificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quals = ['Arts', 'Architecture', 'Agricultural', 'Civil Aviation and Merchant Navy', 'Commerce', 'Engineering', 'Fashion and Interior Designing', 'Information Technology'];
        foreach ($quals as $qual) {
            Masterqualification::insert(['qualifications' => $qual, 'status' => 1, 'position' => 1]);
        }
    }
}
