<?php

namespace App\Http\Controllers;

use App\Rumah;
use Illuminate\Http\Request;

class PerumahanController extends Controller
{
    //
    public function frontend($id = null)
    {
        return view('frontend.pages.perumahan', [
            'data' => Rumah::with('perumahan')->where('perumahan_id', $id)->paginate(6)
        ]);
    }
}
