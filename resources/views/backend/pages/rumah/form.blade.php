@extends('backend.pages.main')

@section('title', ' | '.$aksi.' Rumah')

@section('page')
<li class="breadcrumb-item">Rumah</li>
<li class="breadcrumb-item active">{{ $aksi }} Data</li>
@endsection

@section('header')
<h1 class="m-0 text-dark">{{ $aksi }} Rumah</h1>
@endsection

@section('subcontent')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('rumah.simpan') }}" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            @csrf
                            <input type="hidden" name="redirect" value="{{ $back }}">
                            <div class="row">
                                @if($aksi == 'Edit')
                                <input type="hidden" name="ID" value="{{ $data->rumah_id }}">
                                @endif
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Tipe</label>
                                        <input class="form-control" type="text" name="rumah_tipe" value="{{ old('rumah_tipe')? old('rumah_tipe'): ($aksi == "Edit"? $data->rumah_tipe: "") }}" autocomplete="off" id="rumah_tipe" data-parsley-minlength="2" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Harga</label>
                                        <input class="form-control" type="number" name="rumah_harga" value="{{ old('rumah_harga')? old('rumah_harga'): ($aksi == "Edit"? $data->rumah_harga: "") }}" autocomplete="off" id="rumah_harga" data-parsley-minlength="2" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Deskripsi</label>
                                        <textarea class="form-control" name="rumah_deskripsi">{{ old('rumah_deskripsi')? old('rumah_deskripsi'): ($aksi == "Edit"? $data->rumah_deskripsi: "") }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="control-label">Perumahan</label>
                                        <select class="form-control selectpicker" name="perumahan_id" data-live-search="true" data-style="btn-aqua" data-size="3" data-width="100%">
                                            <option value="">-- Tidak Ada Perumahan --</option>
                                            @foreach($perumahan as $row)
                                            @php
                                                $selected = '';
                                                if($aksi == 'Edit'){
                                                    if ($data->perumahan_id == $row->perumahan_id) {
                                                        $selected =  'selected';
                                                    }
                                                }else{
                                                    if(old('perumahan_id') == $row->perumahan_id){
                                                        $selected =  'selected';
                                                    }
                                                }
                                            @endphp
                                            <option value="{{ $row->perumahan_id }}" {{ $selected }}>{{ $row->perumahan_nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Sketsa</label>
                                        <input class="form-control" type="file" name="rumah_sketsa" accept="image/x-png,image/gif,image/jpeg" {{ $aksi == "Edit"? "": "required" }} autocomplete="off" />
                                    </div>
                                    @if ($aksi == 'Edit')
                                    <a href="{{ $data->rumah_sketsa }}" target="_blank">Sketsa Lama</a>
                                    @endif
                                    <br>
                                    <br>
                                    <div class="alert alert-primary">
                                        <h3>Ruang</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="control-label">Jumlah Kamar Tidur</label>
                                                    <input class="form-control" type="number" name="rumah_kamar" value="{{ old('rumah_kamar')? old('rumah_kamar'): ($aksi == "Edit"? $data->rumah_kamar: "") }}" autocomplete="off" id="rumah_kamar" data-parsley-minlength="2" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Jumlah Ruang Keluarga</label>
                                                    <input class="form-control" type="number" name="rumah_ruang_keluarga" value="{{ old('rumah_ruang_keluarga')? old('rumah_ruang_keluarga'): ($aksi == "Edit"? $data->rumah_ruang_keluarga: "") }}" autocomplete="off" id="rumah_ruang_keluarga" data-parsley-minlength="2" required />
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="control-label">Jumlah Kamar Mandi</label>
                                                    <input class="form-control" type="number" name="rumah_kamar_mandi" value="{{ old('rumah_kamar_mandi')? old('rumah_kamar_mandi'): ($aksi == "Edit"? $data->rumah_kamar_mandi: "") }}" autocomplete="off" id="rumah_kamar_mandi" data-parsley-minlength="2" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Jumlah Dapur</label>
                                                    <input class="form-control" type="number" name="rumah_dapur" value="{{ old('rumah_dapur')? old('rumah_dapur'): ($aksi == "Edit"? $data->rumah_dapur: "") }}" autocomplete="off" id="rumah_dapur" data-parsley-minlength="2" required />
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="control-label">Jumlah Ruang Tamu</label>
                                                    <input class="form-control" type="number" name="rumah_ruang_tamu" value="{{ old('rumah_ruang_tamu')? old('rumah_ruang_tamu'): ($aksi == "Edit"? $data->rumah_ruang_tamu: "") }}" autocomplete="off" id="rumah_ruang_tamu" data-parsley-minlength="2" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="alert alert-success">
                                                <h3>Fasilitas</h3>
                                                <hr>
                                                <div id="fasilitas"></div>
                                                <button class="btn btn-outline-secondary btn-default" onclick="tambah_fasilitas()" type="button">Tambah</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="alert alert-danger">
                                                <h3>Gambar</h3>
                                                <hr>
                                                <div id="gambar"></div>
                                                <button class="btn btn-outline-secondary btn-default" onclick="tambah_gambar()" type="button">Tambah</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer form-inline">
                            <input type="submit" value="Simpan" class="btn btn-sm btn-success"/>
                            &nbsp;
                            <a href="{{ $back }}" class="btn btn-sm btn-danger">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    function tambah_fasilitas(){
        $.get("/admin-area/rumah/fasilitas", function(data, status){
            $("#fasilitas").append(data);
        });
    }
    function tambah_gambar(){
        $.get("/admin-area/rumah/gambar", function(data, status){
            $("#gambar").append(data);
        });
    }

    function hapus(id) {
        $("#" + id).remove();
    }
</script>
@endpush
