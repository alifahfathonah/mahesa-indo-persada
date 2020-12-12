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
        $kontak = Kontak::first();
        $slider = Slider::all();
        return view('frontend.pages.kontak', [
            'kontak' => $kontak,
            'slider' => $slider
        ]);
    }
}
