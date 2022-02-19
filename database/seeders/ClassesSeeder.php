<?php

namespace Database\Seeders;

use App\Models\Masterclass;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = array("first", 'second', 'third','fourth', 'fifth');
        foreach ($classes as $class) {
            Masterclass::insert(['name' => $class, 'status' => 1, 'position' => 1]);
        }
    }
}
