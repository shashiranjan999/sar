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
        $teacherdetail = Teacherdetail::find($id);
        $teacherexperience = Teacherexperience::select("*")
        ->where("teacher_id", "=", $id)
        ->get();
        $teacherspecialization = Teacherspecialization::select("*")
        ->where("teacher_id", "=", $id)
        ->get();
        $teacherqualification = Teacherqualification::select("*")
        ->where("teacher_id", "=", $id)
        ->get();
        return view('profile',compact('teacherdetail','teacherexperience','teacherspecialization','teacherqualification'));
    }
    public function updateprofile(){
        return view('updateprofile');
    }
}
