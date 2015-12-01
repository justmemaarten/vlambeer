<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home() {
        return view('pages/home');
    }

    public function products() {
        return view('pages/shop/store');
    }

    public function contact() {
        return view('pages/contact');
    }

    public function about() {

        return view('pages/about');
    }

    public function product() {
        $id = $_GET['id'];

        switch($id) {
           case  '3030-40158':
               return view('pages/games/ridiculousFishing');
        break;
            case '3030-41999':
                return view('pages/games/nuclearThrone');
        break;
            case '3030-39474':
                return view('pages/games/luftrausers');
        break;
            case '3030-32945':
                return view('pages/games/superCrateBox');
        break;
            case '3030-34402':
                return view('pages/games/seriousSamTheRandomEncounter');
        break;
            case '3030-37491':
                return view('pages/games/gunGodz');
        break;
            case '3030-46090':
                return view('pages/games/superBreadBox');
        break;

        }
    }
}

