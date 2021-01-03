<?php

namespace App\Http\Controllers;

use App\Service;
use App\TentangKami;
use Illuminate\Http\Request;

class TentangkamiController extends Controller
{
    //
    public function frontend(Request $req)
    {
        return view('frontend.pages.tentangkami', [
            'data' => TentangKami::get()->first(),
            'service' => Service::all()
        ]);
    }
}
