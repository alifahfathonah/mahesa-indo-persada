@extends('backend.pages.main')

@section('title', ' | Data Booking')

@section('page')
<li class="breadcrumb-item">Data Booking</li>
<li class="breadcrumb-item active">Edit Data Booking</li>
@endsection

@section('header')
<h1 class="m-0 text-dark">Edit Data Booking</h1>
@endsection

@section('subcontent')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('booking.simpan') }}" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="ID" value="{{ $data->booking_id }}">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Perumahan dan Blok</label>
                                        <input class="form-control" type="text" name="booking_pelanggan" value="{{ $data->perumahan->perumahan_nama." - ".$data->booking_blok }}" autocomplete="off" readonly/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Pelanggan</label>
                                        <input class="form-control" type="text" name="booking_pelanggan" value="{{ old('booking_pelanggan')? old('booking_pelanggan'): ($data ? $data->booking_pelanggan: "") }}" autocomplete="off" />
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea class="form-control" name="booking_keterangan">{{ old('booking_keterangan')? old('booking_keterangan'): ($data ? $data->booking_keterangan: "") }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer form-inline">
                            <input type="submit" value="Simpan" class="btn btn-sm btn-success"/>
                        </div>
                    </div>
                </form>
                @include('backend.includes.component.error')
            </div>
        </div>
    </div>
</section>
@endsection
