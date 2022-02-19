<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Studentdetail;
use Hash;


class StudentController extends Controller
{
    public function register(Request $request)
    {
    
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'name' => 'required|min:4',
        ]);
       
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $user->assignRole("student");
        $studentdetail = new Studentdetail();
        $studentdetail->user_id=$user->id;
        $studentdetail->name=$request->name;
        $studentdetail->father_name=$request->father_name;
        $studentdetail->mobile=$request->mobile;
        $studentdetail->email=$request->email;
        $studentdetail->address=$request->address;
        $studentdetail->city=$request->city;
        $studentdetail->state=$request->state;
        $studentdetail->save();
       
        $token = $user->createToken('LaravelAuthApp')->accessToken;
        return response()->json(['token' => $token,'success'=>"Student register Successfully"], 200);

    }
 
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
 
        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken("API Token")->accessToken;
            return response()->json(['token' => $token,'success'=>"Student Login Successfully"], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }   

    public function students(){
        $students = Studentdetail::paginate(10);
        return view('admin.studentlist',compact('students'));
    }
   
}
