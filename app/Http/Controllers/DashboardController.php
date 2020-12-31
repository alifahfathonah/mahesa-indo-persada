<?php

namespace App\Http\Controllers;

use App\Moto;
use App\Rumah;
use App\Slider;
use App\Partner;
use App\Karyawan;
use App\Perumahan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function frontend(Request $req)
    {
        $slider = Slider::take(5)->get();
        $rumah = Rumah::with('gambar')->take(15)->orderBy('created_at', 'desc')->get();
        $partner = Partner::all();
        $moto = Moto::all();
        return view('frontend.pages.beranda', [
            'slider' => $slider,
            'partner' => $partner,
            'rumah' => $rumah,
            'moto' => $moto,
            'karyawan' => Karyawan::all()
        ]);
    }

    public function backend(Request $req)
    {
        return view('backend.pages.beranda');
    }
}
