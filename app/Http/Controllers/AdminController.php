<?php

namespace App\Http\Controllers;
use App\Models\Teacherqualification;
use App\Models\Teacherspecialization;
use App\Models\Teacherexperience;
use App\Models\Teacherdetail;
use App\Models\Masterclass;
use App\Models\Gallery;
use App\Models\Subject;
use App\Models\State;
use App\Models\District;
use App\Models\City;
use App\Models\Masterqualification;
use App\Models\Masterspecialization;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Storage;
use App\Models\User;
use Auth;
use Hash;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.dashboard');
    }

    public function teachers()
    {
        $teachers = Teacherdetail::paginate(10);
        return view('admin.teacherslist',compact('teachers'));
    }
     
    public function teacherDetail($id){
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
        //   return $teacherspecialization;
        return view('admin.teacherdetail', compact('teacherdetail','teacherexperience','teacherspecialization','teacherqualification'));
    }
    public function class()
    {
        $masterclass = Masterclass::all();
        return view('admin.addclass', compact('masterclass'));
    }

    public function addclass(Request $request)
    {
        $request->validate([
            'class_name' => 'required',
        ]);
        $masterclass = new Masterclass();
        $masterclass->name = $request->class_name;
        $masterclass->position = $request->position;
        $masterclass->status = $request->status ? 1 : 0;
        $masterclass->save();
        return redirect('/Add-class');
    }

    public function destroyclass($id)
    {
        $masterclass = Masterclass::find($id);
        $masterclass->delete();
        return redirect('/Add-class');
    }

    public function editclass($id)
    {
        $masterclass = Masterclass::find($id);
        return view('admin.editclass', compact('masterclass'));
    }
    public function updateclass(Request $request, $id)
    {
        $masterclass = Masterclass::find($id);
        $masterclass->name = $request->class_name;
        $masterclass->position = $request->position;
        $masterclass->status = $request->status ? 1 : 0;
        $masterclass->save();
        return redirect('/Add-class');
    }

    public function subject()
    {
        $Subjects = Subject::all();
        return view('admin.addsubject', compact('Subjects'));
    }

    public function addsubject(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif',
            'subject_name' => 'required',
        ]);
        $Subjects = new Subject();
        $subjectimage = $request->file('image');
        $subjectimagename = 'gallery_'.time() . '.' . $subjectimage->getClientOriginalExtension();
        $subjectimagepath = $request->file('image')->storeAs('gallery/images', $subjectimagename, 'public');
        $Subjects->subject_image = $subjectimagename;
        $Subjects->name = $request->subject_name;
        $Subjects->position = $request->position;
        $Subjects->status = $request->status ? 1 : 0;
        $Subjects->save();
        return redirect('/Add-subject');
    }

    public function destroysubject($id)
    {
        $Subjects = Subject::find($id);
        if (Storage::exists('public/gallery/images/'.$Subjects->subject_image)) {
            Storage::delete('public/gallery/images/'.$Subjects->subject_image);
        }
        $Subjects->delete();
        return redirect('/Add-subject');
    }

    public function editsubject($id)
    {
        $Subject = Subject::find($id);
        return view('admin.editsubject', compact('Subject'));
    }
    public function updatesubject(Request $request, $id)
    {
        $Subjects = Subject::find($id);
        if($request->has('image')){
            
            if (Storage::exists('public/gallery/images/'.$request->oldimage)) {
                Storage::delete('public/gallery/images/'.$request->oldimage);
            }
           
        $subjectimage = $request->file('image');
        $subjectimagename = 'gallery_'.time() . '.' . $subjectimage->getClientOriginalExtension();
        $subjectimagepath = $request->file('image')->storeAs('gallery/images', $subjectimagename, 'public');
        $Subjects->subject_image = $subjectimagename;
        }
        $Subjects->name = $request->subject_name;
        $Subjects->position = $request->position;
        $Subjects->status = $request->status ? 1 : 0;
        $Subjects->save();
        return redirect('/Add-subject');
    }

    public function state()
    {
        $states = State::paginate(8);
        return view('admin.addstate', compact('states'));
    }

    public function addstate(Request $request)
    {
        $request->validate([
            'state_name' => 'required',
        ]);
        $state = new State();
        $state->name = $request->state_name;
        $state->status = $request->status ? 1 : 0;
        $state->save();
        return redirect('/Add-state');
    }

    public function destroystate($id)
    {
        DB::table('states')
            ->where('id', $id)
            ->delete();
        // $state = State::find($id);

        // $state->delete();
        return redirect('/Add-state');
    }

    public function editstate($id)
    {
        $state = State::find($id);

        // $state = State::find($id);
        return view('admin.editstate', compact('state'));
    }
    public function updatestate(Request $request, $id)
    {
        // $state = State::find($id);
        // $state = State::select('*')
        // ->where('state_id', '=', $id)
        // ->first();

        // $state->state_title = $request->state;

        
        $state = State::find($id);
        $state->name = $request->state_name;
        $state->status = $request->status ? 1 : 0;
        $state->save();
        return redirect('/Add-state');
    }

    public function district()
    {
        $districts = District::paginate(8);
        $states = State::all();
        return view('admin.adddistrict', compact('districts', 'states'));
    }

    public function adddistrict(Request $request)
    {
        $request->validate([
            'district_name' => 'required',
        ]);
        $district = new District();
        $district->name = $request->district_name;
        $district->state_id = $request->state_id;
        $district->status = $request->status ? 1: 0;
        $district->save();
        return redirect('/Add-district');
    }

    public function destroydistrict($id)
    {
        $district = District::find($id);
        $district->delete();
        return redirect('/Add-district');
    }

    public function editdistrict($id)
    {
        $district = District::find($id);
        $states = State::all();
        return view('admin.editdistrict', compact('district', 'states'));
    }
    public function updatedistrict(Request $request, $id)
    {
        $district = District::find($id);
        $district->name = $request->district_name;
        $district->state_id = $request->state_id;
        $district->status = $request->status ? 1: 0;
        $district->save();
        return redirect('/Add-district');
    }

    public function city(Request $request)
    {
        if($request->get('state_id')){
            $districts = District::where('state_id', $request->get('state_id'))->get();
        }else{
            $districts = District::all();
        }
        $cities = City::paginate(8);
        $states = State::all();
       
        return view('admin.addcity', compact('cities', 'states', 'districts'));
    }

    public function addcity(Request $request)
    {
        
        $request->validate([
            'city_name' => 'required',
        ]);
        $city = new City();
        $city->name = $request->city_name;
        $city->state_id = $request->state_id;
        $city->district_id = $request->district_id;
        $city->status = $request->status ? 1 : 0;
        $city->save();
        return redirect('/Add-city');
    }

    public function destroycity($id)
    {
        $city = City::find($id);
        $city->delete();
        return redirect('/Add-city');
    }

    public function editcity(Request $request, $id)
    {
        $city = City::find($id);
        $states = State::all();
        if($request->get('state_id')){
            $districts = District::where('state_id', $request->get('state_id'))->get();
        }else{
            $districts = District::where('state_id', $city->state_id)->get();
        }
        return view('admin.editcity', compact('city', 'states', 'districts'));
    }
    public function updatecity(Request $request, $id)
    {
        $city = City::find($id);
        $city->name = $request->city_name;
        $city->district_id = $request->district_id;
        $city->state_id = $request->state_id;
        $city->status = $request->status ? 1 : 0;
        $city->save();
        return redirect('/Add-city');
    }


    public function qualification()
    {
        $qualifications = Masterqualification::all();
        return view('admin.addqualification', compact('qualifications'));
    }

    public function addqualification(Request $request)
    {
        $request->validate([
            'qualification' => 'required',
        ]);
        $qualification = new Masterqualification();
        $qualification->qualifications = $request->qualification;
        $qualification->position = $request->position;
        $qualification->status = $request->status ? 1 : 0;
        $qualification->save();
        return redirect('/Add-qualification');
    }

    public function destroyqualification($id)
    {
        $masterclass = Masterqualification::find($id);
        $masterclass->delete();
        return redirect('/Add-qualification');
    }

    public function editqualification($id)
    {
        $qualification = Masterqualification::find($id);
        return view('admin.editqualification', compact('qualification'));
    }
    public function updatequalification(Request $request, $id)
    {
        $qualification = Masterqualification::find($id);
        $qualification->qualifications = $request->qualification;
        $qualification->position = $request->position;
        $qualification->status = $request->status ? 1 : 0;
        $qualification->save();
        return redirect('/Add-qualification');
    }

    public function specialization()
    {
        $specializations = Masterspecialization::all();
        return view('admin.addspecialization', compact('specializations'));
    }

    public function addspecialization(Request $request)
    {
        $request->validate([
            'specialization' => 'required',
        ]);
        $specialization = new Masterspecialization();
        $specialization->specializations = $request->specialization;
        $specialization->position = $request->position;
        $specialization->status = $request->status ? 1 : 0;
        $specialization->save();
        return redirect('/Add-specialization');
    }

    public function destroyspecialization($id)
    {
        $specialization = Masterspecialization::find($id);
        $specialization->delete();
        return redirect('/Add-specialization');
    }

    public function editspecialization($id)
    {
        $specialization = Masterspecialization::find($id);
        return view('admin.editspecialization', compact('specialization'));
    }
    public function updatespecialization(Request $request, $id)
    {
        $specialization = Masterspecialization::find($id);
        $specialization->specializations = $request->specialization;
        $specialization->position = $request->position;
        $specialization->status = $request->status ? 1 : 0;
        $specialization->save();
        return redirect('/Add-specialization');
    }

    public function gallery(){
        $galleries=Gallery::all();
        return view('admin.addgalleryimage',compact('galleries'));
    }
    public function addgallery(Request $request){
    
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif',
            'position'=>'required'
        ]);

        $gallery = new Gallery;
        $galleryimage = $request->file('image');
        $galleryimagename = 'gallery_'.time() . '.' . $galleryimage->getClientOriginalExtension();
        $galleryimagepath = $request->file('image')->storeAs('gallery/images', $galleryimagename, 'public');
        $gallery->gallery_image_name = $galleryimagename;
        $gallery->status=$request->status?1:0;
        $gallery->position = $request->position;
        $gallery->save();
        return redirect('/upload-gallery');
    }
    public function destroygallery($id){
        $gallery = Gallery::find($id);
        // $path = 'storage/public/gallery/images/' . $gallery->gallery_image_name;
     
        if (Storage::exists('public/gallery/images/'.$gallery->gallery_image_name)) {
            Storage::delete('public/gallery/images/'.$gallery->gallery_image_name);
        }
        $gallery->delete();
        return redirect('/upload-gallery');
    }
    public function editgallery($id){
        $gallery = Gallery::find($id);
       
        return view('admin.editgalleryimage', compact('gallery'));
    }
    public function updategallery(Request $request, $id){
       
        
        $gallery = Gallery::find($id);
    
        if($request->has('image')){
            
            if (Storage::exists('public/gallery/images/'.$request->oldimage)) {
                Storage::delete('public/gallery/images/'.$request->oldimage);
            }
           
        $galleryimage = $request->file('image');
        $galleryimagename = 'gallery_'.time() . '.' . $galleryimage->getClientOriginalExtension();
        $galleryimagepath = $request->file('image')->storeAs('gallery/images', $galleryimagename, 'public');
        $gallery->gallery_image_name = $galleryimagename;
        }
        $gallery->position = $request->position;
        $gallery->status = $request->status ? 1 : 0;
        $gallery->save();
        return redirect('/upload-gallery');
        
    }

    public function changepass(){
       
        return view('changepassword');
      }
      public function changeuserpass(Request $request){


        $id=Auth::user()->id;
        $user = User::find($id);
        if ($request->password != $request->confirmpassword) {
            return back()->with('error', 'Password Not Confirmed');
        }
        $user->password= Hash::make($request->password);
        $user->save();
        return redirect('/dashboard');

      }
}
