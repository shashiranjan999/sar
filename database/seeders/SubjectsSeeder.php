<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = ['English', 'Maths', 'Social Science', 'Hindi','Science'];
        foreach ($subjects as $subject) {
            Subject::insert(['name' => $subject, 'status' => 1, 'position' => 1, 'subject_image' => 'https://via.placeholder.com/150']);
        }
    }
}
