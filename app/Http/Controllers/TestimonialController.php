<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Storage;

class TestimonialController extends Controller
{
    public function testimonial(){
        $testimonial=Testimonial::all();
        return view('admin.addtestimonial',compact('testimonial'));
    }
    public function addtestimonial(Request $request){
    
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif',
            'name'=>'required',
            'designation'=>'required',
            'description'=>'required',
            'position'=>'required'
        ]);

        $testimonial = new Testimonial;
        $testimonialimage = $request->file('image');
        $testimonialimagename = 'gallery_'.time() . '.' . $testimonialimage->getClientOriginalExtension();
        $testimonialimagepath = $request->file('image')->storeAs('gallery/images', $testimonialimagename, 'public');
        $testimonial->testimonial_image = $testimonialimagename;
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->description = $request->description;
        $testimonial->status=$request->status?1:0;
        $testimonial->position = $request->position;
        $testimonial->save();
        return redirect('/testimonial');
    }
    public function destroytestimonial($id){
        $testimonial = Testimonial::find($id);

     
        if (Storage::exists('public/gallery/images/'.$testimonial->testimonial_image)) {
            Storage::delete('public/gallery/images/'.$testimonial->testimonial_image);
        }
        $testimonial->delete();
        return redirect('/testimonial');
    }
    public function edittestimonial($id){
        $testimonial = Testimonial::find($id);
       
        return view('admin.edittestimonial', compact('testimonial'));
    }
    public function updatetestimonial(Request $request, $id){
       
        $testimonial = Testimonial::find($id);
    
        if($request->has('image')){
            
            if (Storage::exists('public/gallery/images/'.$request->oldimage)) {
                Storage::delete('public/gallery/images/'.$request->oldimage);
            }
           
        $testimonialimage = $request->file('image');
        $testimonialimagename = 'gallery_'.time() . '.' . $testimonialimage->getClientOriginalExtension();
        $testimonialimagepath = $request->file('image')->storeAs('gallery/images', $testimonialimagename, 'public');
        $testimonial->testimonial_image = $testimonialimagename;
        }
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->description = $request->description;
        $testimonial->position = $request->position;
        $testimonial->status = $request->status ? 1 : 0;
        $testimonial->save();
        return redirect('/testimonial');
        
    }
}
