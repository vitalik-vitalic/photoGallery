<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Gallery;
use App\photos;
use Illuminate\View\View;

class GalleryController extends Controller
{
    //
    public function postIndex(){
        $id= (int)$_POST['id'];
        //$obj = Gallery::find($id);
        $obj = photos::find($id);
        //$directory = photos::where('album',10)->get();

        return view("ajax.gallery", compact('obj'));
    }
}
