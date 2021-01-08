@extends('backend.pages.main')

@section('title', ' | Ganti Password')

@section('page')
<li class="breadcrumb-item">Ganti Password</li>
<li class="breadcrumb-item active">Data</li>
@endsection

@section('header')
<h1 class="m-0 text-dark">Ganti Password</h1>
@endsection

@section('subcontent')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('password.simpan') }}" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Password Lama</label>
                                <input class="form-control" type="password" name="pengguna_sandi_lama" autocomplete="off" required />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Password Baru</label>
                                <input class="form-control" type="password" name="pengguna_sandi" autocomplete="off" minlength="2" required />
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
