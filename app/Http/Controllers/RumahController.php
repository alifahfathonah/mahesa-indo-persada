<?php

namespace App\Http\Controllers;

use App\Rumah;
use App\Perumahan;
use App\RumahGambar;
use App\RumahFasilitas;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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

    public function backend(Request $req)
	{
        $data = Rumah::where(function($q) use ($req){
            $q->where('rumah_tipe', 'like', '%'.$req->cari.'%');
        })->paginate(10);
        $data->appends([$req->cari]);
        return view('backend.pages.rumah.index', [
            'data' => $data,
            'i' => ($req->input('page', 1) - 1) * 10,
            'cari' => $req->cari,
        ]);
    }

	public function tambah(Request $req)
	{
        return view('backend.pages.rumah.form', [
            'back' => Str::contains(url()->previous(), ['admin-area/rumah/tambah', 'admin-area/rumah/edit'])? '/admin-area/rumah': url()->previous(),
            'perumahan' => Perumahan::all(),
            'aksi' => 'Tambah'
        ]);
    }

	public function simpan(Request $req)
	{
        $req->validate([
            'rumah_tipe' => 'required'
        ]);

        try
        {
            if ($req->ID) {
                DB::transaction(function () use ($req){
                    $data = Rumah::findOrFail($req->ID);
                    $sketsa = $req->file('rumah_sketsa');
                    if ($sketsa) {
                        File::delete(public_path($data->rumah_sketsa));

                        $ext = $sketsa->getClientOriginalExtension();
                        $nama_file = time().Str::random().".".$ext;
                        $sketsa->move(public_path('uploads/rumah'), $nama_file);
                        $data->rumah_sketsa = '/uploads/rumah/'.$nama_file;
                    }

                    $data->perumahan_id = $req->get('perumahan_id');
                    $data->rumah_tipe = $req->get('rumah_tipe');
                    $data->rumah_harga = $req->get('rumah_harga');
                    $data->rumah_deskripsi = $req->get('rumah_deskripsi');
                    $data->rumah_kamar = $req->get('rumah_kamar');
                    $data->rumah_kamar_mandi = $req->get('rumah_kamar_mandi');
                    $data->rumah_ruang_keluarga = $req->get('rumah_ruang_keluarga');
                    $data->rumah_dapur = $req->get('rumah_dapur');
                    $data->rumah_ruang_tamu = $req->get('rumah_ruang_tamu');
                    $data->save();

                    RumahFasilitas::where('rumah_id', $req->ID)->delete();
                    if ($req->rumah_fasilitas) {
                        foreach ($req->rumah_fasilitas as $fasilitas) {
                            $fas = new RumahFasilitas();
                            $fas->rumah_id = $data->rumah_id;
                            $fas->rumah_fasilitas = $fasilitas;
                            $fas->save();
                        }
                    }

                    $gambar_dihapus = $data->gambar->whereNotIn('rumah_gambar', $req->rumah_gambar_old)->pluck('rumah_gambar');

                    foreach ($gambar_dihapus as $gambar) {
                        File::delete(public_path($gambar));
                    }
                    RumahGambar::whereIn('rumah_gambar', $gambar_dihapus)->delete();

                    $rumah_gambar = $req->file('rumah_gambar');

                    if ($rumah_gambar) {
                        foreach ($rumah_gambar as $gambar) {
                            $ext_gambar = $gambar->getClientOriginalExtension();
                            $nama_gambar = time().Str::random().".".$ext_gambar;
                            $gambar->move(public_path('uploads/rumah'), $nama_gambar);

                            $fas = new RumahGambar();
                            $fas->rumah_id = $data->rumah_id;
                            $fas->rumah_gambar = '/uploads/rumah/'.$nama_gambar;
                            $fas->save();
                        }
                    }
                });
            }else{
                DB::transaction(function () use ($req){
                    $data = new Rumah();
                    $sketsa = $req->file('rumah_sketsa');
                    if ($sketsa) {
                        $ext = $sketsa->getClientOriginalExtension();
                        $nama_file = time().Str::random().".".$ext;
                        $sketsa->move(public_path('uploads/rumah'), $nama_file);
                        $data->rumah_sketsa = '/uploads/rumah/'.$nama_file;
                    }

                    $data->perumahan_id = $req->get('perumahan_id');
                    $data->rumah_tipe = $req->get('rumah_tipe');
                    $data->rumah_harga = $req->get('rumah_harga');
                    $data->rumah_deskripsi = $req->get('rumah_deskripsi');
                    $data->rumah_kamar = $req->get('rumah_kamar');
                    $data->rumah_kamar_mandi = $req->get('rumah_kamar_mandi');
                    $data->rumah_ruang_keluarga = $req->get('rumah_ruang_keluarga');
                    $data->rumah_dapur = $req->get('rumah_dapur');
                    $data->rumah_ruang_tamu = $req->get('rumah_ruang_tamu');
                    $data->save();
                    if ($req->rumah_fasilitas) {
                        foreach ($req->rumah_fasilitas as $fasilitas) {
                            $fas = new RumahFasilitas();
                            $fas->rumah_id = $data->rumah_id;
                            $fas->rumah_fasilitas = $fasilitas;
                            $fas->save();
                        }
                    }

                    $rumah_gambar = $req->file('rumah_gambar');

                    if ($rumah_gambar) {
                        foreach ($rumah_gambar as $gambar) {
                            $ext_gambar = $gambar->getClientOriginalExtension();
                            $nama_gambar = time().Str::random().".".$ext_gambar;
                            $gambar->move(public_path('uploads/rumah'), $nama_gambar);

                            $fas = new RumahGambar();
                            $fas->rumah_id = $data->rumah_id;
                            $fas->rumah_gambar = '/uploads/rumah/'.$nama_gambar;
                            $fas->save();
                        }
                    }
                });
            }
            return redirect($req->get('redirect')? $req->get('redirect'): 'admin-area/rumah');
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menyimpan Data. '.$e->getMessage());
        }
    }

	public function edit(Request $req)
	{
        return view('backend.pages.rumah.form', [
            'data' => Rumah::findOrFail($req->get('id')),
            'perumahan' => Perumahan::all(),
            'back' => Str::contains(url()->previous(), ['admin-area/rumah/tambah', 'admin-area/rumah/edit'])? '/rumah': url()->previous(),
            'aksi' => 'Edit'
        ]);
    }

	public function hapus(Request $req)
	{
		try{
            $data = Rumah::findOrFail($req->get('id'));
            File::delete(public_path($data->rumah_sketsa));
            foreach ($data->gambar as $gambar) {
                File::delete(public_path($gambar->rumah_gambar));
            }
            $data->delete();
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menghapus Data. '.$e->getMessage());
		}
	}
}
