<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\User;
use App\Models\Subject;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $subjects = Subject::select("*")
            ->where("status", 1)
            ->whereBetween('position', [1, 10])
            ->orderBy('position', 'asc')
            ->get();
        $testimonials=Testimonial::select("*")
        ->where("status", 1)
        ->orderBy('position', 'asc')
        ->get();
        return view('templates.index',compact('subjects','testimonials'));
               // return view('Teacher.index');
      
        // else{
        //     return view('templates.index');
        // }
        // return view('home');
    }
    public function home()
    {
        
    }
    public function gallery(){
        $gallery = Gallery::select("*")->where("status", 1)->orderBy('id', 'DESC')->get();

        return view('templates.gallery',compact('gallery'));
    }
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->where('status',1)->firstOrFail();
        return view('admin.pages.show', compact('page'));
    }


    
}
