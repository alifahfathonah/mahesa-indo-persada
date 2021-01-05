<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    //
    public function backend(Request $req)
	{
        $data = Slider::all();
        return view('backend.pages.slider.index', [
            'data' => $data,
        ]);
    }

	public function tambah(Request $req)
	{
        return view('backend.pages.slider.form', [
            'back' => Str::contains(url()->previous(), ['admin-area/slider/tambah', 'admin-area/slider/edit'])? '/admin-area/slider': url()->previous(),
            'aksi' => 'Tambah'
        ]);
    }

	public function simpan(Request $req)
	{
        try
        {
            $file = $req->file('slider_gambar');

            $ext = $file->getClientOriginalExtension();
            $nama_file = time().Str::random().".".$ext;
            $file->move(public_path('uploads/slider'), $nama_file);

            $data = new Slider();
            $data->slider_judul = $req->get('slider_judul');
            $data->slider_deskripsi = $req->get('slider_deskripsi');
            $data->slider_link = $req->get('slider_link');
            $data->slider_gambar = '/uploads/slider/'.$nama_file;
            $data->save();
            return redirect($req->get('redirect')? $req->get('redirect'): 'admin-area/slider');
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menyimpan Data. '.$e->getMessage());
        }
    }
	public function hapus(Request $req)
	{
		try{
            $data = Slider::findOrFail($req->get('id'));
            File::delete(public_path($data->slider_gambar));
            $data->delete();
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menghapus Data. '.$e->getMessage());
		}
	}
}
