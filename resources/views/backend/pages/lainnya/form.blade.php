@extends('backend.pages.main')

@section('title', ' | '.$aksi.' Proyek Lain')

@section('page')
<li class="breadcrumb-item">Proyek Lain</li>
<li class="breadcrumb-item active">{{ $aksi }} Data</li>
@endsection

@section('header')
<h1 class="m-0 text-dark">{{ $aksi }} Proyek Lain</h1>
@endsection

@section('subcontent')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('lainnya.simpan') }}" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            @csrf
                            <input type="hidden" name="redirect" value="{{ $back }}">
                            <div class="row">
                                @if($aksi == 'Edit')
                                <input type="hidden" name="ID" value="{{ $data->bangunan_lain_id }}">
                                @endif
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Nama Proyek</label>
                                        <input class="form-control" type="text" name="bangunan_lain_nama" value="{{ old('bangunan_lain_nama')? old('bangunan_lain_nama'): ($aksi == "Edit"? $data->bangunan_lain_nama: "") }}" autocomplete="off" id="bangunan_lain_nama" data-parsley-minlength="2" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Deskripsi</label>
                                        <textarea class="form-control" name="bangunan_lain_deskripsi">{{ old('bangunan_lain_deskripsi')? old('bangunan_lain_deskripsi'): ($aksi == "Edit"? $data->bangunan_lain_deskripsi: "") }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Sketsa</label>
                                        <input class="form-control" type="file" name="bangunan_lain_sketsa" accept="image/*"  autocomplete="off" />
                                    </div>
                                    @if ($aksi == 'Edit')
                                    <a href="{{ $data->bangunan_lain_sketsa }}" target="_blank">Sketsa Lama</a>
                                    @endif
                                </div>

                                <div class="col-lg-6">
                                    <div class="alert alert-danger">
                                        <h3>Gambar</h3>
                                        <hr>
                                        <div id="gambar">
                                            @if ($aksi == 'Edit')
                                            @foreach ($data->gambar as $i => $row)
                                            @include('backend.pages.lainnya.gambar', [
                                                'id' => $i,
                                                'sumber' => 'edit'
                                            ])
                                            @endforeach
                                            @endif
                                        </div>
                                        <button class="btn btn-outline-secondary btn-default" onclick="tambah_gambar()" type="button">Tambah</button>
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
                @include('backend.includes.component.error')
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    function tambah_gambar(){
        $.get("/admin-area/lainnya/gambar", function(data, status){
            $("#gambar").append(data);
        });
    }

    function hapus(id) {
        $("#" + id).remove();
    }
</script>
@endpush
