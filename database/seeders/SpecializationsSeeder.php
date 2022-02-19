<?php

namespace Database\Seeders;

use App\Models\Masterspecialization;
use Illuminate\Database\Seeder;

class SpecializationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = ['Science', 'Maths', 'History'];
        foreach ($classes as $class) {
            Masterspecialization::insert(['specializations' => $class, 'status' => 1, 'position' => 1]);
        }
    }
}
