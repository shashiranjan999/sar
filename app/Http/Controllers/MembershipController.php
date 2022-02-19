<?php

namespace App\Http\Controllers;
use App\Models\Membership;
use Illuminate\Http\Request;
use Redirect;
use Auth;

class MembershipController extends Controller
{
    public function index(){
        $memberships=Membership::paginate(10);
        return view('admin/addmembership',compact('memberships'));
    }
    public function addMembership(Request $request){
        $request->validate([
            'membershipname' => 'required',
            'membershipprice' => 'required',
            'membershipduration'=>'required'
        ]);
        $membership = new Membership();
        $membership->user_id=Auth::id();
        $membership->name = $request->membershipname;
        $membership->duration = $request->membershipduration;
        $membership->price = $request->membershipprice;
        $membership->status = $request->status ? 1 : 0;
       
        if($request->memebershiptype==''){
            return Redirect::back()->withInput($request->all())->withErrors(['msg' => 'Please Select Membership Type']);
        }
        else{
            $membership->membership_type = $request->memebershiptype;
        }
        $membership->save();
        return redirect('/membership');
    }

    public function destroymembership($id){
        $membership = Membership::find($id);
        $membership->delete();
        return redirect('/membership');

    }

    public function editmembership($id)
    {
        $membership = Membership::find($id);
        return view('admin.editmembership', compact('membership'));
    }
    public function updatemembership(Request $request, $id)
    {
        $membership = Membership::find($id);
        $membership->name = $request->membershipname;
        $membership->duration = $request->membershipduration;
        $membership->price = $request->membershipprice;
        $membership->status = $request->status ? 1 : 0;
        $membership->membership_type = $request->memebershiptype;
        $membership->save();
        return redirect('/membership');
    }
}
