<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //
    public function index(Request $req)
    {
        $slider = Slider::all();
        return view('frontend.pages.beranda', [
            'slider' => $slider
        ]);
    }
}
