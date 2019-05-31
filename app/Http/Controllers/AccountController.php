<?php

namespace App\Http\Controllers;

// Connect to the model
use App\Home;
use App\Photos;
use App\Gallery;
use Auth;
use App\Http\Requests\GalleryRequest;


class AccountController extends Controller
{
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
        return view('account', compact('arr'));
    }

    // Одиночный запрос
    /*public function postIndex()
    {
        // Вывод содержимого
        //dd($_POST);


        // Выборка id album
        $album_id = Home::where('name', $_POST['album'])->first();
        //dd($album_id->id );
        // Создаем объект
        $obj = new Gallery();
        $obj->name = $_POST['name'];
        $obj->body = $_POST['body'];
        $obj->catalog_id = $album_id->id ;
        $obj->picture = "";
        $obj->status = "";
        $obj->user_id = (isset(Auth::user()->id) ? Auth::user()->id : "" );
        $obj->save();

        return redirect()->back();
    }*/

    // По средствам Request
    public function postIndex(GalleryRequest $r)
    {
        //dd($_FILES);
        /*dd($r['photo-name']);*/
        //dd(Auth::user()->id);
        //dd($r->all());
        /*Создаем класс на основе рекомендаций Laravel*/
        $pic = \App::make('App\Libs\Imag')->url($_FILES['picture1']['tmp_name'],null,$_FILES['picture1']['name']);
        if (!$pic) {
            $r['picture'] = '';
        }else{
            $r['picture'] = $pic;
        }
        $album_id = Home::where('name', $_POST['album'])->first();
        /*dd($album_id->id);*/
        $r['user_id'] = (isset(Auth::user()->id) ? Auth::user()->id : "1");
        $r['catalog_id'] = $album_id->id;
        //$r['picture'] = "";
        $r['status'] = "";
        unset($r['_token']);
        Gallery::create($r->all());

        return redirect()->back();
    }
}