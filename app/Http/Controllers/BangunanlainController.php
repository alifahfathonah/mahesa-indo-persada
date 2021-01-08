<?php

namespace App\Http\Controllers;

use App\BangunanLain;
use App\BangunanLainGambar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BangunanlainController extends Controller
{
    //
    public function frontend($id)
    {
        return view('frontend.pages.lainnya', [
            'data' => BangunanLain::findOrFail($id)
        ]);
    }

    public function backend(Request $req)
	{
        $data = BangunanLain::where(function($q) use ($req){
            $q->where('bangunan_lain_nama', 'like', '%'.$req->cari.'%');
        })->paginate(10);
        $data->appends([$req->cari]);
        return view('backend.pages.lainnya.index', [
            'data' => $data,
            'i' => ($req->input('page', 1) - 1) * 10,
            'cari' => $req->cari,
        ]);
    }

	public function tambah(Request $req)
	{
        return view('backend.pages.lainnya.form', [
            'back' => Str::contains(url()->previous(), ['admin-area/slider/tambah', 'admin-area/slider/edit'])? '/admin-area/slider': url()->previous(),
            'aksi' => 'Tambah'
        ]);
    }

	public function simpan(Request $req)
	{
        try
        {
            if ($req->ID) {
                DB::transaction(function () use ($req){
                    $data = BangunanLain::findOrFail($req->ID);
                    $sketsa = $req->file('bangunan_lain_sketsa');
                    if ($sketsa) {
                        File::delete(public_path($data->bangunan_lain_sketsa));

                        $ext = $sketsa->getClientOriginalExtension();
                        $nama_file = time().Str::random().".".$ext;
                        $sketsa->move(public_path('uploads/bangunanlain'), $nama_file);
                        $data->bangunan_lain_sketsa = '/uploads/bangunanlain/'.$nama_file;
                    }

                    $data->bangunan_lain_nama = $req->get('bangunan_lain_nama');
                    $data->bangunan_lain_alamat = $req->get('bangunan_lain_alamat');
                    $data->bangunan_lain_deskripsi = $req->get('bangunan_lain_deskripsi');
                    $data->save();

                    $gambar_dihapus = $data->gambar->whereNotIn('bangunan_lain_gambar', $req->bangunan_lain_gambar_old)->pluck('bangunan_lain_gambar');

                    foreach ($gambar_dihapus as $gambar) {
                        File::delete(public_path($gambar));
                    }
                    BangunanLainGambar::whereIn('bangunan_lain_gambar', $gambar_dihapus)->delete();

                    $bangunan_lain_gambar = $req->file('bangunan_lain_gambar');

                    if ($bangunan_lain_gambar) {
                        foreach ($bangunan_lain_gambar as $gambar) {
                            $ext_gambar = $gambar->getClientOriginalExtension();
                            $nama_gambar = time().Str::random().".".$ext_gambar;
                            $gambar->move(public_path('uploads/bangunanlain'), $nama_gambar);

                            $fas = new BangunanLainGambar();
                            $fas->bangunan_lain_id = $data->bangunan_lain_id;
                            $fas->bangunan_lain_gambar = '/uploads/bangunanlain/'.$nama_gambar;
                            $fas->save();
                        }
                    }
                });
            }else{
                DB::transaction(function () use ($req){
                    $data = new BangunanLain();
                    $sketsa = $req->file('bangunan_lain_sketsa');
                    if ($sketsa) {
                        $ext = $sketsa->getClientOriginalExtension();
                        $nama_file = time().Str::random().".".$ext;
                        $sketsa->move(public_path('uploads/bangunanlain'), $nama_file);
                        $data->bangunan_lain_sketsa = '/uploads/bangunanlain/'.$nama_file;
                    }

                    $data->bangunan_lain_nama = $req->get('bangunan_lain_nama');
                    $data->bangunan_lain_alamat = $req->get('bangunan_lain_alamat');
                    $data->bangunan_lain_deskripsi = $req->get('bangunan_lain_deskripsi');
                    $data->save();

                    $bangunan_lain_gambar = $req->file('bangunan_lain_gambar');

                    if ($bangunan_lain_gambar) {
                        foreach ($bangunan_lain_gambar as $gambar) {
                            $ext_gambar = $gambar->getClientOriginalExtension();
                            $nama_gambar = time().Str::random().".".$ext_gambar;
                            $gambar->move(public_path('uploads/bangunanlain'), $nama_gambar);

                            $fas = new BangunanLainGambar();
                            $fas->bangunan_lain_id = $data->bangunan_lain_id;
                            $fas->bangunan_lain_gambar = '/uploads/bangunanlain/'.$nama_gambar;
                            $fas->save();
                        }
                    }
                });
            }
            return redirect($req->get('redirect')? $req->get('redirect'): 'admin-area/lainnya');
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menyimpan Data. '.$e->getMessage());
        }
    }

	public function edit(Request $req)
	{
        return view('backend.pages.lainnya.form', [
            'data' => BangunanLain::findOrFail($req->get('id')),
            'back' => Str::contains(url()->previous(), ['admin-area/lainnya/tambah', 'admin-area/lainnya/edit'])? '/lainnya': url()->previous(),
            'aksi' => 'Edit'
        ]);
    }

	public function hapus(Request $req)
	{
		try{
            $data = BangunanLain::findOrFail($req->get('id'));
            File::delete(public_path($data->bangunan_lain_sketsa));
            foreach ($data->gambar as $gambar) {
                File::delete(public_path($gambar->bangunan_lain_gambar));
            }
            $data->delete();
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menghapus Data. '.$e->getMessage());
		}
	}
}
