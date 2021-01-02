<?php

namespace App\Http\Controllers;

use App\Rumah;
use Illuminate\Http\Request;

class RumahController extends Controller
{
    //
    public function frontend($id = null)
    {
        return view('frontend.pages.rumah', [
            'data' => Rumah::findOrFail($id),
            'lainnya' => Rumah::where('rumah_id', '!=', $id)->take(5)->orderBy('created_at', 'desc')->get()
        ]);
    }
}
