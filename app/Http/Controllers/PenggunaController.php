<?php

namespace App\Http\Controllers;

use App\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    //

	public function backend(Request $req)
	{
        return view('backend.pages.password.form', [
            'data' => Pengguna::where('pengguna_id', 'administrator')->first()
        ]);
    }


	public function simpan(Request $req)
	{
        try{
			$data = Pengguna::findOrFail(Auth::id());
            if(!Hash::check($req->pengguna_sandi_lama, $data->pengguna_sandi)){
                return redirect()->back()->withInput()->withErrors('Gagal mengganti password. Password lama salah');
            }
            $data->pengguna_sandi = Hash::make($req->pengguna_sandi);
            $data->save();
            return redirect('admin-area/password');
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menyimpan Data. '.$e->getMessage());
        }
    }
}
