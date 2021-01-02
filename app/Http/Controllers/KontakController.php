<?php

namespace App\Http\Controllers;

use App\Kontak;
use App\Slider;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    //
    public function frontend(Request $req)
    {
        return view('frontend.pages.kontak');
    }
}
