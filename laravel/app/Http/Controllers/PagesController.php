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
        return view('pages/game', $id);

    }
}

