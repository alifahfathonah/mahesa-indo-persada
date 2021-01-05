@extends('backend.pages.main')

@section('title', ' | '.$aksi.' Partner')

@section('page')
<li class="breadcrumb-item">Partner</li>
<li class="breadcrumb-item active">{{ $aksi }} Partner</li>
@endsection

@section('header')
<h1 class="m-0 text-dark">{{ $aksi }} Partner</h1>
@endsection

@section('subcontent')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('partner.simpan') }}" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            @csrf
                            <input type="hidden" name="redirect" value="{{ $back }}">
                            <div class="row">
                                @if($aksi == 'Edit')
                                <input type="hidden" name="ID" value="{{ $data->partner_id }}">
                                @endif
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Nama</label>
                                        <input class="form-control" type="text" name="partner_nama" value="{{ old('partner_nama')? old('partner_nama'): ($aksi == "Edit"? $data->partner_nama: "") }}" autocomplete="off" data-parsley-minlength="2" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Link</label>
                                        <input class="form-control" type="text" name="partner_link" value="{{ old('partner_link')? old('partner_link'): ($aksi == "Edit"? $data->partner_link: "") }}" autocomplete="off" data-parsley-minlength="2" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Gambar</label>
                                        <input class="form-control" type="file" name="partner_gambar" accept="image/x-png,image/gif,image/jpeg" {{ $aksi == "Edit"? "": "required" }} autocomplete="off" />
                                    </div>
                                    {{-- <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sembunyikan" value="1">
                                        <label class="form-check-label" for="exampleCheck1">Sembunyikan</label>
                                    </div> --}}
                                    @include('backend.includes.component.error')
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
