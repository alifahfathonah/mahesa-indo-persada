<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Partner;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function frontend(Request $req)
    {
        $slider = Slider::take(5)->get();
        $partner = Partner::all();
        return view('frontend.pages.beranda', [
            'slider' => $slider,
            'partner' => $partner
        ]);
    }

    public function backend(Request $req)
    {
        return view('backend.pages.beranda');
    }
}
