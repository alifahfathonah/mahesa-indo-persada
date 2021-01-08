<?php

namespace App\Http\Controllers;

use App\Kalimat;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class TentangkamiController extends Controller
{
    //
    public function frontend(Request $req)
    {
        return view('frontend.pages.tentangkami', [
            'data' => Kalimat::where('kalimat_jenis', 'Tentang Kami')->first(),
            'service' => Service::take(4)->get()
        ]);
    }

	public function backend(Request $req)
	{
        return view('backend.pages.tentangkami.form', [
            'kalimat' => Kalimat::where('kalimat_jenis', 'Tentang Kami')->first(),
            'data' => Service::all()
        ]);
    }


	public function simpan(Request $req)
	{
        // return $re   q;
        try{
            DB::transaction(function () use ($req) {
                $data = Kalimat::where('kalimat_jenis', 'Tentang Kami')->first();
                $data->kalimat_jenis = 'Tentang Kami';
                $data->kalimat_judul = $req->kalimat_judul;
                $data->kalimat_text = $req->kalimat_text;
                if($req->file('kalimat_gambar')){
                    File::delete(public_path($data->kalimat_gambar));
                    $file = $req->file('kalimat_gambar');

                    $ext = $file->getClientOriginalExtension();
                    $nama_file = time().Str::random().".".$ext;
                    $file->move(public_path('uploads/kalimat'), $nama_file);
                    $data->kalimat_gambar = '/uploads/kalimat/'.$nama_file;
                }
                $data->save();

                $service_dihapus = Service::all()->whereNotIn('service_gambar', $req->service_gambar_old)->pluck('service_judul');

                foreach ($service_dihapus as $gambar) {
                    File::delete(public_path($gambar));
                }
                Service::whereIn('service_judul', $service_dihapus)->delete();

                $service_gambar = $req->file('service_gambar');

                if ($service_gambar) {
                    foreach ($service_gambar as $i => $gambar) {
                        $ext_gambar = $gambar->getClientOriginalExtension();
                        $nama_gambar = time().Str::random().".".$ext_gambar;
                        $gambar->move(public_path('uploads/service'), $nama_gambar);

                        $fas = new Service();
                        $fas->service_judul = $req->service_judul[$i];
                        $fas->service_deskripsi = $req->service_deskripsi[$i];
                        $fas->service_gambar = '/uploads/service/'.$nama_gambar;
                        $fas->save();
                    }
                }
            });


            return redirect('admin-area/tentangkami');
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menyimpan Data. '.$e->getMessage());
        }
    }
}
