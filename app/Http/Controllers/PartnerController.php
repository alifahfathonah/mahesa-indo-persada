<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PartnerController extends Controller
{
    //
    public function backend(Request $req)
	{
        $data = Partner::all();
        return view('backend.pages.partner.index', [
            'data' => $data,
        ]);
    }

	public function tambah(Request $req)
	{
        return view('backend.pages.partner.form', [
            'back' => Str::contains(url()->previous(), ['admin-area/partner/tambah', 'admin-area/partner/edit'])? '/admin-area/partner': url()->previous(),
            'aksi' => 'Tambah'
        ]);
    }

	public function simpan(Request $req)
	{
        try
        {
            $file = $req->file('partner_gambar');

            $ext = $file->getClientOriginalExtension();
            $nama_file = time().Str::random().".".$ext;
            $file->move(public_path('uploads/partner'), $nama_file);

            $data = new Partner();
            $data->partner_nama = $req->get('partner_nama');
            $data->partner_link = $req->get('partner_link');
            $data->partner_gambar = '/uploads/partner/'.$nama_file;
            $data->save();
            return redirect($req->get('redirect')? $req->get('redirect'): 'admin-area/partner');
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menyimpan Data. '.$e->getMessage());
        }
    }
	public function hapus(Request $req)
	{
		try{
            $data = Partner::findOrFail($req->get('id'));
            File::delete(public_path($data->partner_gambar));
            $data->delete();
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menghapus Data. '.$e->getMessage());
		}
	}
}
