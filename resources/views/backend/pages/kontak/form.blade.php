@extends('backend.pages.main')

@section('title', ' | Kontak')

@section('page')
<li class="breadcrumb-item">Kontak</li>
@endsection

@section('header')
<h1 class="m-0 text-dark">Kontak</h1>
@endsection

@section('subcontent')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('kontak.simpan') }}" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Deskripsi Singkat</label>
                                        <textarea class="form-control" name="kontak_tentang">{{ old('kontak_tentang')? old('kontak_tentang'): ($data ? $data->kontak_tentang: "") }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Alamat</label>
                                        <input class="form-control" type="text" name="kontak_alamat" value="{{ old('kontak_alamat')? old('kontak_alamat'): ($data ? $data->kontak_alamat: "") }}" required autocomplete="off" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Telpon</label>
                                        <input class="form-control" type="text" name="kontak_telpon" value="{{ old('kontak_telpon')? old('kontak_telpon'): ($data ? $data->kontak_telpon: "") }}" required autocomplete="off" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input class="form-control" type="text" name="kontak_email" value="{{ old('kontak_email')? old('kontak_email'): ($data ? $data->kontak_email: "") }}" required autocomplete="off" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Jam Kerja</label>
                                        <input class="form-control" type="text" name="kontak_jam_kerja" value="{{ old('kontak_jam_kerja')? old('kontak_jam_kerja'): ($data ? $data->kontak_jam_kerja: "") }}" required autocomplete="off" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Peta</label>
                                        <input class="form-control" type="text" name="kontak_peta" value="{{ old('kontak_peta')? old('kontak_peta'): ($data ? $data->kontak_peta: "") }}" required autocomplete="off" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Background</label>
                                        <input class="form-control" type="file" name="kontak_gambar" accept="image/*" autocomplete="off" />
                                    </div>
                                    @if ($data)
                                    <a href="{{ $data->kontak_gambar }}" target="_blank">Background</a>
                                    @endif
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
