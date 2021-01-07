<?php

namespace App\Http\Controllers;

use App\Kalimat;
use App\Moto;
use App\Rumah;
use App\Slider;
use App\Partner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function frontend(Request $req)
    {
        $slider = Slider::take(5)->get();
        $rumah = Rumah::with('gambar')->take(15)->orderBy('created_at', 'desc')->get();
        $partner = Partner::all();
        $moto = Moto::all();
        $intro = Kalimat::where('kalimat_jenis', 'Intro')->first();
        return view('frontend.pages.beranda', [
            'slider' => $slider,
            'partner' => $partner,
            'rumah' => $rumah,
            'intro' => $intro,
            'moto' => $moto
        ]);
    }

    public function backend(Request $req)
    {
        return view('backend.pages.home.index');
    }
}
