<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //Register Class
    public function __construct()
    {
        $this->middleware('guest');
    }
}
