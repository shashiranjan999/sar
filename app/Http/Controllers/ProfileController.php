<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacherqualification;
use App\Models\Teacherspecialization;
use App\Models\Teacherexperience;
use App\Models\Teacherdetail;
use App\Models\User;
use App\Models\Masterclass;
use App\Models\City;
use App\Models\Masterqualification;
use App\Models\Masterspecialization;
use App\Models\Subject;
use App\Models\State;
use App\Models\District;
use Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getprofile()
    {
        
        $id = Auth::user()->id;
        $teacherdetail = Teacherdetail::where('user_id', $id)->first();
        $teacher_id = $teacherdetail->id;
        $teacherexperience = Teacherexperience::select("*")
            ->where("teacher_id", "=", $teacher_id)
            ->get();
        $teacherspecialization = Teacherspecialization::select("*")
            ->where("teacher_id", "=", $teacher_id)
            ->get();
            $spz=[];
            $cls=[];
            $sbj=[];
            foreach($teacherspecialization as $specail){
                if($specail->specailizations!=null){
                    array_push($spz,$specail->specailizations);
                }
                if($specail->subjects!=null){
                    array_push($sbj,$specail->subjects);
                }
                if($specail->classes!=null){
                    array_push($cls,$specail->classes);
                }
            }
        $teacherqualification = Teacherqualification::select("*")
            ->where("teacher_id", "=", $teacher_id)
            ->get();
        
        $states = State::select("*")
            ->where("status", 1)
            ->get();
       
        $classes = Masterclass::select("*")
            ->where("status", 1)
            ->orderBy('position', 'asc')
            ->get();
        $subjects = Subject::select("*")
            ->where("status", 1)
            ->orderBy('position', 'asc')
            ->get();
        $qualifications = Masterqualification::select("*")
            ->where("status", 1)
            ->orderBy('position', 'asc')
            ->get();
        $specializations = Masterspecialization::select("*")
            ->where("status", 1)
            ->orderBy('position', 'asc')
            ->get();
            // return $teacherexperience;
        return view('profile', compact('spz','cls','sbj','states','classes', 'subjects', 'qualifications', 'specializations', 'teacherdetail', 'teacherexperience', 'teacherspecialization', 'teacherqualification'));
    }
    public function updateprofile()
    {
        return view('updateprofile');
    }
    public function update(Request $request)
    {

       
    }
    public function updatePersonalDetail(Request $request){

        $request->validate([
            // 'email' => 'required|email|unique:users,email',
            'first_name' => 'required',
            'last_name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            
        ]);
        // return $request;
        $id = Auth::id();
       
        $user = User::find($id);
        $user->name = $request->first_name;
        $user->save();

        $dis=explode("-",$request->district);
        $state=explode("-",$request->state);
        $city=explode("-",$request->city);
        $dislen=count($dis);
        $statelen=count($state);
        $citylen=count($city);
      
        $teacherdetail = Teacherdetail::where('user_id', $id)->first();
        $teacherdetail->user_id = $id;
        $teacherdetail->status = 1;
        $teacherdetail->first_name = $request->first_name;
        $teacherdetail->last_name = $request->last_name;
        $teacherdetail->father_name = $request->father_name;
        $teacherdetail->mother_name = $request->mother_name;
        $teacherdetail->gender = $request->gender;
        $teacherdetail->dob = $request->dob;
        $teacherdetail->phone = $request->phone;
        // $teacherdetail->email = $request->email;
        $teacherdetail->alt_phone = $request->alt_phone;
        $teacherdetail->address = $request->address;
        $teacherdetail->state = $state[$statelen-1];
        $teacherdetail->district = $dis[$dislen-1];
        $teacherdetail->city = $city[$citylen-1];
        $teacherdetail->avability_period = $request->avability_period;
        $teacherdetail->available_time = $request->available_time;
        $teacherdetail->save();
        return redirect('/profile');
        // return $request;

    }
    public function updateBankDetail(Request $request){
      
        $id = Auth::id();
        $teacherdetail = Teacherdetail::where('user_id', $id)->first();
        $teacherdetail->user_id = $id;
        $teacherdetail->bank_name = $request->bank_name;
        $teacherdetail->bank_number = $request->bank_number;
        $teacherdetail->ifsc = $request->bank_ifsc;
        $teacherdetail->adhar_number = $request->aadhar_number;
        $teacherdetail->pan_number = $request->pan_number;


        if($request->has('profile_picture')){  
            if (Storage::exists('public/gallery/teacher/Profile/'.$request->old_profile_picture)) {
                Storage::delete('public/gallery/teacher/Profile/'.$request->old_profile_picture);
            }
        $profileimage = $request->file('profile_picture');
        $profileimagename = 'profile_'.time() . '.' . $profileimage->getClientOriginalExtension();
        $profileimagepath = $request->file('profile_picture')->storeAs('gallery/teacher/Profile', $profileimagename, 'public');
        $teacherdetail->profile_img    = $profileimagename;
        }

        if($request->has('cover_picture')){ 
            if (Storage::exists('public/gallery/teacher/CoverImage/'.$request->old_cover_picture)) {
                Storage::delete('public/gallery/teacher/CoverImage/'.$request->old_cover_picture);
            }
        $coverimage = $request->file('cover_picture');
        $coverimagename = 'cover_'.time() . '.' . $coverimage->getClientOriginalExtension();
        $coverimagepath = $request->file('cover_picture')->storeAs('gallery/teacher/CoverImage', $coverimagename, 'public');
        $teacherdetail->cover_img = $coverimagename;
        }

        if($request->has('bank_account_picture')){
            if (Storage::exists('public/gallery/teacher/account_pic/'.$request->old_bank_account_picture)) {
                Storage::delete('public/gallery/teacher/account_pic/'.$request->old_bank_account_picture);
            }
        $bankaccountimage = $request->file('bank_account_picture');
        $bankaccountimagename = 'account_'.time() . '.' .  $bankaccountimage->getClientOriginalExtension();
        $bankaccountimagepath = $request->file('bank_account_picture')->storeAs('gallery/teacher/account_pic', $bankaccountimagename, 'public');
        $teacherdetail->bank_account_img = $bankaccountimagename;
        }
        if($request->has('aadhar_front_picture')){
            if (Storage::exists('public/gallery/teacher/adhar_front/'.$request->old_aadhar_front_picture)) {
                Storage::delete('public/gallery/teacher/adhar_front/'.$request->old_aadhar_front_picture);
            }
        $adharfrontimage = $request->file('aadhar_front_picture');
        $adharfrontimagename = 'aadhar_front_'.time() . '.' . $adharfrontimage->getClientOriginalExtension();
        $adharfrontimagepath = $request->file('aadhar_front_picture')->storeAs('gallery/teacher/adhar_front', $adharfrontimagename, 'public');
        $teacherdetail->adhar_front_img = $adharfrontimagename;
        }
        if($request->has('pancard_picture')){ 
            if (Storage::exists('public/gallery/teacher/pan/'.$request->old_pancard_picture)) {
                Storage::delete('public/gallery/teacher/pan/'.$request->old_pancard_picture);
            }
        $pancardimage = $request->file('pancard_picture');
        $pancardimagename = 'pancard_'.time() . '.' . $pancardimage->getClientOriginalExtension();
        $pancardimagenamepath = $request->file('pancard_picture')->storeAs('gallery/teacher/pan', $pancardimagename, 'public');
        $teacherdetail->pancard_img = $pancardimagename;
        }
        if($request->has('aadhar_back_picture')){
            if (Storage::exists('public/gallery/teacher/adhar_back/'.$request->old_aadhar_back_picture)) {
                Storage::delete('public/gallery/teacher/adhar_back/'.$request->old_aadhar_back_picture);
            }
        $adharbackimage = $request->file('aadhar_back_picture');
        $adharbackimagename = 'aadhar_back_'.time() . '.' . $adharbackimage->getClientOriginalExtension();
        $adharbackimagepath = $request->file('aadhar_back_picture')->storeAs('gallery/teacher/adhar_back', $adharbackimagename, 'public');
        $teacherdetail->adhar_back_img = $adharbackimagename;
        }

        if($request->has('resume')){
            if (Storage::exists('public/gallery/teacher/cv/'.$request->old_resume)) {
                Storage::delete('public/gallery/teacher/cv/'.$request->old_resume);
            }
        $resume = $request->file('resume');
        $resumename = 'resume_'.time() . '.' . $resume->getClientOriginalExtension();
        $resumepath = $request->file('resume')->storeAs('gallery/teacher/cv', $resumename, 'public');
        $teacherdetail->cv = $resumename;
        }

        $teacherdetail->save();
        return redirect('/profile');

    }

    public function updateProfessionalDetail(Request $request){
        //return count($request->years);
        $id = Auth::id();
        $teacherdetail = Teacherdetail::where('user_id', $id)->first();
        $teacherexp = Teacherexperience::where('user_id', $id)->get();
        $teacherexplen=count($teacherexp);
        $yearlen=count($request->years);
        $experiencelen=count($request->experience);

        for($i=0;$i<=$teacherexplen-1;$i++){
            if($request->experience[$i]){
                $teacherexp[$i]->experience_name=$request->experience[$i];
            }
            if($request->years[$i]){
                $teacherexp[$i]->experiences_year=$request->years[$i];
            }
            $teacherexp[$i]->save();
        }
         
        if($teacherexplen==$yearlen){
           
            return redirect('/profile');
        }
        else if($teacherexplen<$yearlen){
          $newval=$yearlen-$teacherexplen;
        }
        else{
          $newval=$teacherexplen-$yearlen;
        }
      
        for($j=$yearlen-1;$j>=$teacherexplen;$j--){
          
            $teacherexp = new Teacherexperience;
            $teacherexp->user_id = $id;
            $teacherexp->teacher_id = $teacherdetail->id;
            $teacherexp->experience_name =$request->experience[$j];
            $teacherexp->experiences_year = $request->years[$j];
            $teacherexp->save();
        }
    
        return redirect('/profile');
    }
    public function updateQualificationDetail(Request $request){
    //   return $request;
        $id = Auth::id();
        $teacherdetail = Teacherdetail::where('user_id', $id)->first();
        $teacherqual = Teacherqualification::where('user_id', $id)->get();
        $teacherspecialization = Teacherspecialization::select("*")
            ->where("user_id", "=", $id)
            ->get();
        foreach($teacherspecialization as $specialization){
            $specialization->delete();
        }
        // return redirect('/profile');
        $teacherquallen=count($teacherqual);

        for($i=0;$i<=$teacherquallen-1;$i++){
            if($request->qualification[$i]){
                $teacherqual[$i]->qualification_name=$request->qualification[$i];
            }
            if($request->qualification_year[$i]){
                $teacherqual[$i]->qualification_year=$request->qualification_year[$i];
            }
            if($request->total_marks[$i]){
                $teacherqual[$i]->total_marks=$request->total_marks[$i];
            }
            if($request->marks_obtained[$i]){
                $teacherqual[$i]->marks_obtained=$request->marks_obtained[$i];
            }
            if($request->rank[$i]){
                $teacherqual[$i]->Rank=$request->rank[$i];
            }
            if($request->remarks[$i]){
                $teacherqual[$i]->Remarks=$request->remarks[$i];
            }
            $teacherqual[$i]->save();
        }


        $data = array(
            "specializations" => 0,
            "classes" => 0,
            "subjects" => 0,
        );
        
        $specail = $request->specailization;
        $class = $request->classes;
        $subject = $request->subjects;

        $data['specializations'] = count($specail);
        $data['classes'] = count($class);
        $data['subjects'] = count($subject);
        function getMax($array)
        {
            $max = 0;
            foreach ($array as $k => $v) {
                $max = max(array($max, $v));
            }
            return $max;
        }

        $maxrow = getMax($data);

        for ($i = 0; $i < $maxrow; $i++) {
            $teacherspecail = new Teacherspecialization();
            $teacherspecail->user_id = $teacherdetail->user_id;
            $teacherspecail->teacher_id = $teacherdetail->id;
            if (array_key_exists($i, $specail)) {
                $teacherspecail->specailizations = $specail[$i];
            }
            if (array_key_exists($i, $subject)) {
                $teacherspecail->subjects = $subject[$i];
            }
            if (array_key_exists($i, $class)) {
                $teacherspecail->classes = $class[$i];
            }
            $teacherspecail->save();
        }
        
        return redirect('/profile');

    }
}
