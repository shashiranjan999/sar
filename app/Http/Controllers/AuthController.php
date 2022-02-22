<?php

namespace App\Http\Controllers;

use App\Models\Teacherqualification;
use App\Models\Teacherspecialization;
use App\Models\Teacherexperience;
use App\Models\User;
use App\Models\Teacherdetail;

use App\Models\Masterclass;
use App\Models\Subject;
use App\Models\State;
use App\Models\District;

use App\Models\City;
use App\Models\Masterqualification;
use App\Models\Masterspecialization;
use Illuminate\Http\Request;
use Redirect;
use Auth;
use Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class AuthController extends Controller
{
    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:8'
        ]);

        if ($validator->fails()) {
            $notification = array(
                'message' => 'Email and password not correct',
                'alert-type' => 'error'
            );

            return Redirect::to('/')->with($notification);
        }
        $userdata = array(
            'email' => $request->email,
            'password' => $request->password
        );
        // attempt to do the login
        if (Auth::attempt($userdata)) {
            // validation successful
            $notification = array(
                'message' => 'Login successfully!',
                'alert-type' => 'success'
            );

            return Redirect::to('/dashboard')->with($notification);
        } else {
            // validation not successful, send back to form
            $notification = array(
                'message' => 'Login Failed Wrong Creentials',
                'alert-type' => 'error'
            );

            return Redirect::to('/')->with($notification);
        }
        //   }

    }
    public function logout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect::to('/'); // redirect the user to the login screen
    }

    public function teacherSignUpPage()
    {
        $districts = District::select("*")
            ->where("status", 1)
            ->get();
        $states = State::select("*")
            ->where("status", 1)
            ->get();
        $cities = City::select("*")
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

        return view('teacher_registration', compact('districts', 'states', 'cities', 'classes', 'subjects', 'qualifications', 'specializations'));
    }


    public function _teacherRegister(Request $request)
    {
        $profile_picture = $request->file('profile_picture');
        // return json_decode($request->experiences);
        return $request->all();
    }

    public function teacherRegister(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email|unique:users,email',
        ]);
       
        $user = User::create([
            'name' => $request->first_name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // auth()->login($user);
        $user->assignRole("teacher");

        $state=json_decode($request->state);
        $city=json_decode($request->city);
        $district=json_decode($request->district);

        $teacherdetail = new Teacherdetail();
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
        $teacherdetail->bank_name = $request->bank_name;
        $teacherdetail->bank_number = $request->bank_number;
        $teacherdetail->ifsc = $request->bank_ifsc;
        $teacherdetail->adhar_number = $request->aadhar_number;
        $teacherdetail->pan_number = $request->pan_number;

        // $profileimage = $request->file('profile_picture');
        // $profileimagename = 'profile_'.time() . '.' . $profileimage->getClientOriginalExtension();
        // $profileimagepath = $request->file('profile_picture')->storeAs('gallery/teacher/Profile', $profileimagename, 'public');
        // $teacherdetail->profile_img    = $profileimagename;

        // $coverimage = $request->file('cover_picture');
        // $coverimagename = 'cover_'.time() . '.' . $coverimage->getClientOriginalExtension();
        // $coverimagepath = $request->file('cover_picture')->storeAs('gallery/teacher/CoverImage', $coverimagename, 'public');
        // $teacherdetail->cover_img = $coverimagename;

        // $bankaccountimage = $request->file('bank_account_picture');
        // $bankaccountimagename = 'account_'.time() . '.' .  $bankaccountimage->getClientOriginalExtension();
        // $bankaccountimagepath = $request->file('bank_account_picture')->storeAs('gallery/teacher/account_pic', $bankaccountimagename, 'public');
        // $teacherdetail->bank_account_img = $bankaccountimagename;

        // $adharfrontimage = $request->file('aadhar_front_picture');
        // $adharfrontimagename = 'aadhar_front_'.time() . '.' . $adharfrontimage->getClientOriginalExtension();
        // $adharfrontimagepath = $request->file('aadhar_front_picture')->storeAs('gallery/teacher/adhar_front', $adharfrontimagename, 'public');
        // $teacherdetail->adhar_front_img = $adharfrontimagename;

        // $adharbackimage = $request->file('aadhar_back_picture');
        // $adharbackimagename = 'aadhar_back_'.time() . '.' . $adharbackimage->getClientOriginalExtension();
        // $adharbackimagepath = $request->file('aadhar_back_picture')->storeAs('gallery/teacher/adhar_back', $adharbackimagename, 'public');
        // $teacherdetail->adhar_back_img = $adharbackimagename;

        // $pancardimage = $request->file('pancard_picture');
        // $pancardimagename = 'pancard_'.time() . '.' . $pancardimage->getClientOriginalExtension();
        // $pancardimagenamepath = $request->file('pancard_picture')->storeAs('gallery/teacher/pan', $pancardimagename, 'public');
        // $teacherdetail->pancard_img = $pancardimagename;

        // $resume = $request->file('resume');
        // $resumename = 'resume_'.time() . '.' . $resume->getClientOriginalExtension();
        // $resumepath = $request->file('resume')->storeAs('gallery/teacher/cv', $resumename, 'public');
        // $teacherdetail->cv = $resumename;

        $teacherdetail->save();

        $exp = json_decode($request->experiences);
        foreach ($exp as $e) {
            $teacherexp = new Teacherexperience();
            $teacherexp->user_id = $user->id;
            $teacherexp->teacher_id = $teacherdetail->id;
            $teacherexp->experience_name = $e->experience;
            $teacherexp->experiences_year = $e->years;
            $teacherexp->save();
        }

        $qual = json_decode($request->qualifications);
        foreach ($qual as $q) {
            $teacherqual = new Teacherqualification();
            $teacherqual->user_id = $user->id;
            $teacherqual->teacher_id = $teacherdetail->id;
            $teacherqual->qualification_name = $q->qualification->name;
            $teacherqual->qualification_year = $q->years;
            $teacherqual->total_marks = $q->total_marks;
            $teacherqual->marks_obtained = $q->marks_obtained;
            $teacherqual->Rank = $q->rank;
            $teacherqual->Remarks = $q->remarks;
            $teacherqual->save();
        }

        $data = array(
            "specializations" => 0,
            "classes" => 0,
            "subjects" => 0,
        );
        $specail = json_decode($request->specailizations);
        $class = json_decode($request->classes);
        $subject = json_decode($request->subjects);

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
            $teacherspecail->user_id = $user->id;
            $teacherspecail->teacher_id = $teacherdetail->id;
            if (array_key_exists($i, $specail)) {
                $teacherspecail->specailizations = trim($specail[$i]->label);
            }
            if (array_key_exists($i, $subject)) {
                $teacherspecail->subjects = trim($subject[$i]->label);
            }
            if (array_key_exists($i, $class)) {
                $teacherspecail->classes = trim($class[$i]->label);
            }

            $teacherspecail->save();
        }
        return response()->json(['success'=>'Teacher register Successfully']);
    }

   
}
