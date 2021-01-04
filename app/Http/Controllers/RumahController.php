<?php

namespace App\Http\Controllers;

use App\Rumah;
use App\Perumahan;
use Illuminate\Support\Str;
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

        try{
            if ($req->get('ID')) {
                $data = Rumah::findOrFail($req->get('ID'));
                $data->rumah_tipe = $req->get('rumah_tipe');
                $data->rumah_deskripsi = $req->get('rumah_deskripsi');
                $data->rumah_alamat = $req->get('rumah_alamat');

                if($req->file('rumah_denah')){
                    File::delete(public_path($data->rumah_denah));
                    $file = $req->file('rumah_denah');

                    $ext = $file->getClientOriginalExtension();
                    $nama_file = time().Str::random().".".$ext;
                    $file->move(public_path('uploads/rumah'), $nama_file);
                    $data->rumah_denah = '/uploads/rumah/'.$nama_file;
                }

                $data->save();
            }else{
                $file = $req->file('rumah_denah');

                $ext = $file->getClientOriginalExtension();
                $nama_file = time().Str::random().".".$ext;
                $file->move(public_path('uploads/rumah'), $nama_file);

                $data = new Rumah();
                $data->rumah_tipe = $req->get('rumah_tipe');
                $data->rumah_deskripsi = $req->get('rumah_deskripsi');
                $data->rumah_denah = '/uploads/rumah/'.$nama_file;
                $data->rumah_alamat = $req->get('rumah_alamat');
                $data->save();
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
            File::delete(public_path($data->rumah_denah));
            $data->delete();
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menghapus Data. '.$e->getMessage());
		}
	}
}
