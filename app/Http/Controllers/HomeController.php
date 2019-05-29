<?php

namespace App\Http\Controllers;

// Connect to the model
use App\Home;
use App\Photos;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $arr = Home::all();
        $arr2 = Photos::where('album',9)->orderBy('path', 'desc')->take(30)->get();
        return view('home', compact('arr'), compact('arr2'));
    }

    public function getPhotoFromEgypt()
    {
        $arr = Home::all();
        $arr2 = Photos::where('album',10)->orderBy('path', 'desc')->take(30)->get();
        return view('egypt', compact('arr'), compact('arr2'));
    }
}
