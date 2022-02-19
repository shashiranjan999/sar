<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       $pages = Page::all();
       return view('admin.pages.index', compact('pages'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.pages.add_pages');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
       $page = new Page();
       $page->title = $request->title;
       $page->slug = Str::slug($request->title, '-');
       $page->body = $request->body;
       $page->status = $request->status ? 1 : 0;
       $page->save();
       return redirect('/pages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::findorfail($id);
        return view('admin.pages.edit_page', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $page = Page::findorfail($id);
        $page->title = $request->title;
        $page->slug = Str::slug($request->title, '_');
        $page->body = $request->body;
        $page->status = $request->status ? 1 : 0;
            $page->save();
        return redirect('/pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page::findorfail($id)->delete();
        return redirect('/pages');

    }
}
