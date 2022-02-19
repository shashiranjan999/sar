<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creating role
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'teacher']);
        Role::create(['name' => 'student']);

        //creating users
        DB::table('users')->insert([
            'name' => 'shashi',
            'email' => 'shashi@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
        // DB::table('users')->insert([
        //     'name' => 'ikshit',
        //     'email' => 'ikshit@email.com',
        //     'password' => bcrypt('123456789'),
        // ]);
        // DB::table('users')->insert([
        //     'name' => 'chandan',
        //     'email' => 'chandan@email.com',
        //     'password' => bcrypt('123456789'),
        // ]);

        //assign Roles
        $user = User::find(1);
        $user->assignRole('admin');

        // $user = User::find(2);
        // $user->assignRole('teacher');

        // $user = User::find(3);
        // $user->assignRole('student');
    }
}
