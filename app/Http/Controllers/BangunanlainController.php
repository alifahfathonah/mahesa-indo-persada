<?php

namespace App\Http\Controllers;

use App\BangunanLain;
use Illuminate\Http\Request;

class BangunanlainController extends Controller
{
    //
    public function frontend($id)
    {
        return view('frontend.pages.lainnya', [
            'data' => BangunanLain::findOrFail($id),
            'lainnya' => BangunanLain::where('bangunan_lain_id', '!=', $id)->take(5)->orderBy('created_at', 'desc')->get()
        ]);
    }
}
