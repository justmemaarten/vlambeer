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
           case  1:
               return view('pages/games/ridiculousFishing');
        break;
            case 2:
                return view('pages/games/nuclearThrone');
        break;
            case 3:
                return view('pages/games/luftrausers');
        break;
            case 4:
                return view('pages/games/superCrateBox');
        break;
            case 5:
                return view('pages/games/seriousSamTheRandomEncounter');
        break;
            case 6:
                return view('pages/games/gunGodz');
        break;
            case 7:
                return view('pages/games/superBreadBox');
        break;

        }
    }
}

