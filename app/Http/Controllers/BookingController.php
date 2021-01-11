<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Perumahan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    //
	public function frontend($id)
	{
        return view('frontend.pages.booking', [
            'perumahan' => Perumahan::findOrFail($id),
            'data' => Booking::where('perumahan_id', $id)->get()
        ]);
    }

    public function backend(Request $req)
	{
        $data = Booking::where(function($q) use ($req){
            $q->where('booking_blok', 'like', '%'.$req->cari.'%');
        })->paginate(10);
        $data->appends([$req->cari]);
        return view('backend.pages.booking.index', [
            'data' => $data,
            'i' => ($req->input('page', 1) - 1) * 10,
            'cari' => $req->cari,
            'perumahan' => Perumahan::all()
        ]);
    }

	public function tambah($id, Request $req)
	{
        return view('backend.pages.booking.map', [
            'back' => Str::contains(url()->previous(), ['admin-area/booking/tambah', 'admin-area/booking/edit'])? '/admin-area/booking': url()->previous(),
            'perumahan' => Perumahan::findOrFail($id),
            'data' => Booking::where('perumahan_id', $id)->get(),
            'aksi' => 'Tambah'
        ]);
    }

	public function edit($id, Request $req)
	{
        return view('backend.pages.booking.form', [
            'back' => Str::contains(url()->previous(), ['admin-area/booking/tambah', 'admin-area/booking/edit'])? '/admin-area/booking': url()->previous(),
            'data' => Booking::findOrFail($id)
        ]);
    }

	public function simpan(Request $req)
	{
        try
        {
            if ($req->ID) {
                $data = Booking::findOrFail($req->ID);
                $data->booking_pelanggan = $req->get('booking_pelanggan');
                $data->booking_keterangan = $req->get('booking_keterangan');
                $data->save();
            }else{
                $data = new Booking();
                $data->perumahan_id = $req->get('perumahan_id');
                $data->booking_x = $req->get('booking_x');
                $data->booking_y = $req->get('booking_y');
                $data->booking_pelanggan = $req->get('booking_pelanggan');
                $data->booking_blok = $req->get('booking_blok');
                $data->booking_keterangan = $req->get('booking_keterangan');
                $data->save();
            }
            return redirect($req->get('redirect')? $req->get('redirect'): 'admin-area/booking');
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menyimpan Data. '.$e->getMessage());
        }
    }

	public function hapus(Request $req)
	{
		try{
            $data = Booking::findOrFail($req->get('id'));
            $data->delete();
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menghapus Data. '.$e->getMessage());
        }
    }
}
