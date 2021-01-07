<?php

namespace App\Http\Controllers;

use App\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class KontakController extends Controller
{
    //

    public function frontend(Request $req)
    {
        return view('frontend.pages.kontak', [
            'data' => Kontak::get()->first()
        ]);
    }

	public function backend(Request $req)
	{
        return view('backend.pages.kontak.form', [
            'data' => Kontak::all()->first()
        ]);
    }


	public function simpan(Request $req)
	{
        // return $re   q;
        try{
            DB::transaction(function () use ($req) {
                $data = Kontak::all()->first();
                $data->kontak_alamat = $req->kontak_alamat;
                $data->kontak_telpon = $req->kontak_telpon;
                $data->kontak_email = $req->kontak_email;
                $data->kontak_jam_kerja = $req->kontak_jam_kerja;
                $data->kontak_peta = $req->kontak_peta;
                $data->kontak_tentang = $req->kontak_tentang;
                if($req->file('kontak_gambar')){
                    File::delete(public_path($data->kontak_gambar));
                    $file = $req->file('kontak_gambar');

                    $ext = $file->getClientOriginalExtension();
                    $nama_file = time().Str::random().".".$ext;
                    $file->move(public_path('uploads/kontak'), $nama_file);
                    $data->kontak_gambar = '/uploads/kontak/'.$nama_file;
                }
                $data->save();
            });


            return redirect('admin-area/kontak');
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menyimpan Data. '.$e->getMessage());
        }
    }
}
