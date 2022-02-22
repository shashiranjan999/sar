<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacherqualification;
use App\Models\Teacherspecialization;
use App\Models\Teacherexperience;
use App\Models\Teacherdetail;
use App\Models\User;
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
    public function update(Request $request){
        
        $id=Auth::id();
        $user=User::find($id);
        $user->name=$request->first_name;
        $user->save();

        $teacherdetail=Teacherdetail::where('user_id',$id)->first();
        $teacherdetail->user_id = $user->id;
        $teacherdetail->status = 1;
        $teacherdetail->first_name = $request->first_name;
        $teacherdetail->last_name = $request->last_name;
        $teacherdetail->father_name = $request->father_name;
        $teacherdetail->mother_name = $request->mother_name;
        $teacherdetail->gender = $request->gender;
        $teacherdetail->dob = $request->dob;
        $teacherdetail->phone = $request->phone;
        $teacherdetail->email = $request->email;
        $teacherdetail->alt_phone = $request->alt_phone;
        $teacherdetail->address = $request->address;
        $teacherdetail->state = trim($city->label);
        $teacherdetail->district = trim($district->label);
        $teacherdetail->city = trim($state->label);
        $teacherdetail->avability_period = $request->avability_period;
        $teacherdetail->available_time = $request->available_time;
        $teacherdetail->save();
      
    }
}
