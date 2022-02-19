<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teacherdetail;
use App\Models\Teacherqualification;
use App\Models\Masterclass;
use App\Models\Subject;
use App\Models\State;
use App\Models\District;
use App\Models\City;
use App\Models\Masterqualification;
use App\Models\Masterspecialization;

class SearchController extends Controller
{

    public function changeStatus(Request $request){
   $teacher=Teacherdetail::find($request->id);
 
   if($request->status=='false'){
    $teacher->status=1;
   }
   else{
    $teacher->status=0;
   }
   $teacher->save();
   return response()->json(['success'=>'Teacher status updated']);
    }

    public function fetchDistricts(Request $request){
        $districts = District::where('state_id', $request->state_id)->get();
        return $districts;
    }

    public function fetchCities(Request $request){
        $cities = City::where('district_id', $request->district_id)->get();
        return $cities;
    }

    public function searchregisterfield(Request $request)
    {
        switch ($request->searchtype) {
            case 'specailizationDropdown':
                $specializations = Masterspecialization::select('*')
                    ->where('specializations', 'LIKE', "%{$request->name}%")
                    ->get();
                return response()->json(['result' => $specializations, 'type' => $request->searchtype]);
                break;
            case 'classesDropdown':
                $classes = Masterclass::select('*')
                    ->where('name', 'LIKE', "%{$request->name}%")
                    ->get();
                return response()->json(['result' => $classes, 'type' => $request->searchtype]);
                break;
            case 'subjectDropdown':
                $subjects = Subject::select('*')
                    ->where('name', 'LIKE', "%{$request->name}%")
                    ->get();
                return response()->json(['result' => $subjects, 'type' => $request->searchtype]);
                break;
            case 'qualificationDropdown':
                $qualifications = Masterqualification::select('*')
                    ->where('qualifications', 'LIKE', "%{$request->name}%")
                    ->get();
                return response()->json(['result' => $qualifications, 'type' => $request->searchtype]);
                break;

            case 'mydistrict':
                $distrcits = District::select('*')
                    ->where('name', 'LIKE', "%{$request->name}%")->where('state_id', $request->selectedId)
                    ->get();
                return response()->json(['result' => $distrcits, 'type' => $request->searchtype]);
                break;

            case 'mystate':
                $states = State::select('*')
                    ->where('name', 'LIKE', "%{$request->name}%")
                    ->get();
                return response()->json(['result' => $states, 'type' => $request->searchtype]);
                break;

            case 'mycity':
                $cities = City::select('*')
                    ->where('name', 'LIKE', "%{$request->name}%")
                    ->where('district_id', $request->selectedId)
                    ->get();
                return response()->json(['result' => $cities, 'type' => $request->searchtype]);
                break;
        }
    }
}
