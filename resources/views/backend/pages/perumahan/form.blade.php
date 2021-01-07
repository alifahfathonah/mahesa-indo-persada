@extends('backend.pages.main')

@section('title', ' | '.$aksi.' Perumahan')


@section('page')
<li class="breadcrumb-item">Perumahan</li>
<li class="breadcrumb-item active">{{ $aksi }} Data</li>
@endsection

@section('header')
<h1 class="m-0 text-dark">{{ $aksi }} Perumahan</h1>
@endsection

@section('subcontent')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('perumahan.simpan') }}" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            @csrf
                            <input type="hidden" name="redirect" value="{{ $back }}">
                            <div class="row">
                                @if($aksi == 'Edit')
                                <input type="hidden" name="ID" value="{{ $data->perumahan_id }}">
                                @endif
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Nama Perumahan</label>
                                        <input class="form-control" type="text" name="perumahan_nama" value="{{ old('perumahan_nama')? old('perumahan_nama'): ($aksi == "Edit"? $data->perumahan_nama: "") }}" autocomplete="off" id="perumahan_nama" data-parsley-minlength="2" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Alamat</label>
                                        <input class="form-control" type="text" name="perumahan_alamat" value="{{ old('perumahan_alamat')? old('perumahan_alamat'): ($aksi == "Edit"? $data->perumahan_alamat: "") }}" autocomplete="off" id="perumahan_alamat" data-parsley-minlength="2" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Deskripsi</label>
                                        <textarea class="form-control" name="perumahan_deskripsi">{{ old('perumahan_deskripsi')? old('perumahan_deskripsi'): ($aksi == "Edit"? $data->perumahan_deskripsi: "") }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Gambar Denah</label>
                                        <input class="form-control" type="file" name="perumahan_denah" accept="image/x-png,image/gif,image/jpeg" {{ $aksi == "Edit"? "": "required" }} autocomplete="off" />
                                    </div>
                                    @if ($aksi == 'Edit')
                                    <a href="{{ $data->perumahan_denah }}" target="_blank">Gambar Lama</a>
                                    @endif
                                    @include('backend.includes.component.error')
                                </div>
                                <div class="col-lg-6">
                                    <div class="alert alert-danger">
                                        <h3>Gambar</h3>
                                        <hr>
                                        <div id="gambar">
                                            @foreach ($data->gambar as $i => $row)
                                            @include('backend.pages.perumahan.gambar', [
                                                'id' => $i,
                                                'sumber' => 'edit'
                                            ])
                                            @endforeach
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
        $.get("/admin-area/perumahan/gambar", function(data, status){
            $("#gambar").append(data);
        });
    }

    function hapus(id) {
        $("#" + id).remove();
    }
</script>
@endpush
