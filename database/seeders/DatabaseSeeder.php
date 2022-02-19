<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(StatesSeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(ClassesSeeder::class);
        $this->call(SpecializationsSeeder::class);
        $this->call(SubjectsSeeder::class);
        $this->call(QualificationsSeeder::class);
    }
}
