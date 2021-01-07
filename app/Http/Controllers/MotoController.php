<?php

namespace App\Http\Controllers;

use App\Kalimat;
use App\Moto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MotoController extends Controller
{
    //
	public function backend(Request $req)
	{
        return view('backend.pages.moto.form', [
            'kalimat' => Kalimat::where('kalimat_jenis', 'Intro')->first(),
            'data' => Moto::all()
        ]);
    }


	public function simpan(Request $req)
	{
        // return $re   q;
        try{
            DB::transaction(function () use ($req) {
                $data = Kalimat::where('kalimat_jenis', 'Intro')->first();
                $data->kalimat_jenis = 'Intro';
                $data->kalimat_judul = $req->kalimat_judul;
                $data->kalimat_text = $req->kalimat_text;
                if($req->file('kalimat_gambar')){
                    File::delete(public_path($data->kalimat_gambar));
                    $file = $req->file('kalimat_gambar');

                    $ext = $file->getClientOriginalExtension();
                    $nama_file = time().Str::random().".".$ext;
                    $file->move(public_path('uploads/moto'), $nama_file);
                    $data->kalimat_gambar = '/uploads/moto/'.$nama_file;
                }
                $data->save();

                $moto_dihapus = Moto::all()->whereNotIn('moto_gambar', $req->moto_gambar_old)->pluck('moto_judul');

                foreach ($moto_dihapus as $gambar) {
                    File::delete(public_path($gambar));
                }
                Moto::whereIn('moto_judul', $moto_dihapus)->delete();

                $moto_gambar = $req->file('moto_gambar');

                if ($moto_gambar) {
                    foreach ($moto_gambar as $i => $gambar) {
                        $ext_gambar = $gambar->getClientOriginalExtension();
                        $nama_gambar = time().Str::random().".".$ext_gambar;
                        $gambar->move(public_path('uploads/rumah'), $nama_gambar);

                        $fas = new Moto();
                        $fas->moto_judul = $req->moto_judul[$i];
                        $fas->moto_deskripsi = $req->moto_deskripsi[$i];
                        $fas->moto_gambar = '/uploads/rumah/'.$nama_gambar;
                        $fas->save();
                    }
                }
            });


            return redirect('admin-area/moto');
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menyimpan Data. '.$e->getMessage());
        }
    }
}
