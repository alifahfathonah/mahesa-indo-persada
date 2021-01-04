<?php

namespace App\Http\Controllers;

use App\Rumah;
use App\Perumahan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PerumahanController extends Controller
{
    //
    public function frontend($id = null)
    {
        return view('frontend.pages.perumahan', [
            'data' => Rumah::with('perumahan')->where('perumahan_id', $id)->paginate(6)
        ]);
    }

    public function backend(Request $req)
	{
        $data = Perumahan::where(function($q) use ($req){
            $q->where('perumahan_nama', 'like', '%'.$req->cari.'%');
        })->paginate(10);
        $data->appends([$req->cari]);
        return view('backend.pages.perumahan.index', [
            'data' => $data,
            'i' => ($req->input('page', 1) - 1) * 10,
            'cari' => $req->cari,
        ]);
    }

	public function tambah(Request $req)
	{
        return view('backend.pages.perumahan.form', [
            'back' => Str::contains(url()->previous(), ['admin-area/perumahan/tambah', 'admin-area/perumahan/edit'])? '/admin-area/perumahan': url()->previous(),
            'aksi' => 'Tambah'
        ]);
    }

	public function simpan(Request $req)
	{
        $req->validate([
            'perumahan_nama' => 'required'
        ]);

        try{
            if ($req->get('ID')) {
                $data = Perumahan::findOrFail($req->get('ID'));
                $data->perumahan_nama = $req->get('perumahan_nama');
                $data->perumahan_deskripsi = $req->get('perumahan_deskripsi');
                $data->perumahan_alamat = $req->get('perumahan_alamat');

                if($req->file('perumahan_denah')){
                    File::delete(public_path($data->perumahan_denah));
                    $file = $req->file('perumahan_denah');

                    $ext = $file->getClientOriginalExtension();
                    $nama_file = time().Str::random().".".$ext;
                    $file->move(public_path('uploads/perumahan'), $nama_file);
                    $data->perumahan_denah = '/uploads/perumahan/'.$nama_file;
                }

                $data->save();
            }else{
                $file = $req->file('perumahan_denah');

                $ext = $file->getClientOriginalExtension();
                $nama_file = time().Str::random().".".$ext;
                $file->move(public_path('uploads/perumahan'), $nama_file);

                $data = new Perumahan();
                $data->perumahan_nama = $req->get('perumahan_nama');
                $data->perumahan_deskripsi = $req->get('perumahan_deskripsi');
                $data->perumahan_denah = '/uploads/perumahan/'.$nama_file;
                $data->perumahan_alamat = $req->get('perumahan_alamat');
                $data->save();
            }
            return redirect($req->get('redirect')? $req->get('redirect'): 'admin-area/perumahan');
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menyimpan Data. '.$e->getMessage());
        }
    }

	public function edit(Request $req)
	{
        return view('backend.pages.perumahan.form', [
            'data' => Perumahan::findOrFail($req->get('id')),
            'back' => Str::contains(url()->previous(), ['admin-area/perumahan/tambah', 'admin-area/perumahan/edit'])? '/perumahan': url()->previous(),
            'aksi' => 'Edit'
        ]);
    }

	public function hapus(Request $req)
	{
		try{
            $data = Perumahan::findOrFail($req->get('id'));
            File::delete(public_path($data->perumahan_denah));
            $data->delete();
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menghapus Data. '.$e->getMessage());
		}
	}
}
