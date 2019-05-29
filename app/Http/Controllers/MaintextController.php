<?php

namespace App\Http\Controllers;

// Connect to the model
use App\Maintext;

class MaintextController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex($urls = NULL)
    {
        $url = '';
        $obj = Maintext::where('url', $urls)->first(); // 'url' - поле в БД

        if (isset($obj)) {

            $url = $obj->url;
        } else {
            $url = "default";
        }

        switch ($url) {
            case 'contact_me':
                return view('contactme', compact('obj'));
                break;
            case 'partners':
                return view('partners', compact('obj'));
                break;
            case 'about_me':
                return view('aboutme', compact('obj'));
                break;
            default:
                return view('default', compact('url'));
        }

    }

    public function getAll()
    {
        $arr = Maintext::all();
        return view('all', compact('arr'));
    }
}
