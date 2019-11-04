<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Auth;
use App\User;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getAll(){
        $users = User::paginate(10);
        return view('users', compact('users'));
    }

    public function getOne($id = null){
        $obj = User::find($id);
        return view('user', compact('obj'));
    }

}
