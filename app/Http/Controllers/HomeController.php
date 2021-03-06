<?php

namespace App\Http\Controllers;

// Connect to the model
use App\Home;
use App\Photos;
use App\User;

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
        //$arr2 = Photos::where('album',9)->orderBy('path', 'desc')->take(30)->get();

        /*Get all Users*/
        $users = User::all();

        /**/
        $objs = Photos::where('album',9)->orderBy('id','DESC')->paginate(20);

        return view('home', compact('arr','objs','users'));
    }

    public function getPhotoFromEgypt()
    {
        $arr = Home::all();
        //$arr2 = Photos::where('album',10)->orderBy('path', 'desc')->take(30)->get();

        $objs = Photos::where('album',10)->orderBy('id','DESC')->paginate(10);

        return view('egypt', compact('arr'), compact('objs'));
    }

    public function getAdmin()
    {
        $users = User::all();
        //return view('admin', compact('objs'));
        return response()->json($users);
    }
}
