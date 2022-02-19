<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
class TestController extends Controller
{
    public function index()
    {
        // return view('registration');
        // $result = District::with('state')->whereHas('state', function ($query){
        //     $query->where('name', 'like', '%'.'har'.'%');
        // })->get();
        // $result = City::with('district')->whereHas('district', function ($query){
        //         $query->where('name', 'like', '%'.'gan'.'%');
        //     })->get();

        // return $result;
        //  Role::create(['name' => 'admin']);
        // $user = User::find(1);
        // $user->assignRole('admin');

        // Role::create(['name' => 'teacher']);
        // Role::create(['name' => 'student']);
    }
}
