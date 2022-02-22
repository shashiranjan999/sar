<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacherqualification;
use App\Models\Teacherspecialization;
use App\Models\Teacherexperience;
use App\Models\Teacherdetail;
use Auth;
class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getprofile(){
        $id=Auth::user()->id;
        $teacherdetail = Teacherdetail::where('user_id' ,$id)->first();
        $teacher_id = $teacherdetail->id;
        $teacherexperience = Teacherexperience::select("*")
        ->where("teacher_id", "=", $teacher_id)
        ->get();
        $teacherspecialization = Teacherspecialization::select("*")
        ->where("teacher_id", "=", $teacher_id)
        ->get();
        $teacherqualification = Teacherqualification::select("*")
        ->where("teacher_id", "=", $teacher_id)
        ->get();
        return view('profile',compact('teacherdetail','teacherexperience','teacherspecialization','teacherqualification'));
    }
    public function updateprofile(){
        return view('updateprofile');
    }
}
