<?php

namespace App\Http\Controllers;

use App\SosialMedia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SosialmediaController extends Controller
{
    //
    public function backend(Request $req)
	{
        $data = SosialMedia::all();
        return view('backend.pages.sosialmedia.index', [
            'data' => $data,
        ]);
    }

	public function tambah(Request $req)
	{
        return view('backend.pages.sosialmedia.form', [
            'back' => Str::contains(url()->previous(), ['admin-area/sosialmedia/tambah', 'admin-area/sosialmedia/edit'])? '/admin-area/sosialmedia': url()->previous(),
            'aksi' => 'Tambah'
        ]);
    }

	public function simpan(Request $req)
	{
        try
        {
            $data = new SosialMedia();
            $data->sosial_media_nama = $req->get('sosial_media_nama');
            $data->sosial_media_link = $req->get('sosial_media_link');
            $data->save();
            return redirect($req->get('redirect')? $req->get('redirect'): 'admin-area/sosialmedia');
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menyimpan Data. '.$e->getMessage());
        }
    }
	public function hapus(Request $req)
	{
		try{
            $data = SosialMedia::findOrFail($req->get('id'));
            $data->delete();
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menghapus Data. '.$e->getMessage());
		}
	}
}
