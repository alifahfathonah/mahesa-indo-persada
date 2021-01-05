@extends('backend.pages.main')

@section('title', ' | '.$aksi.' Slider')

@section('page')
<li class="breadcrumb-item">Slider</li>
<li class="breadcrumb-item active">{{ $aksi }} Slider</li>
@endsection

@section('header')
<h1 class="m-0 text-dark">{{ $aksi }} Slider</h1>
@endsection

@section('subcontent')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('slider.simpan') }}" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            @csrf
                            <input type="hidden" name="redirect" value="{{ $back }}">
                            <div class="row">
                                @if($aksi == 'Edit')
                                <input type="hidden" name="ID" value="{{ $data->slider_id }}">
                                @endif
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Judul</label>
                                        <input class="form-control" type="text" name="slider_judul" value="{{ old('slider_judul')? old('slider_judul'): ($aksi == "Edit"? $data->slider_judul: "") }}" autocomplete="off" data-parsley-minlength="2" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Deskripsi</label>
                                        <textarea class="form-control" name="slider_deskripsi">{{ old('slider_deskripsi')? old('slider_deskripsi'): ($aksi == "Edit"? $data->slider_deskripsi: "") }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Link</label>
                                        <input class="form-control" type="text" name="slider_link" value="{{ old('slider_link')? old('slider_link'): ($aksi == "Edit"? $data->slider_link: "") }}" autocomplete="off" data-parsley-minlength="2" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Gambar</label>
                                        <input class="form-control" type="file" name="slider_gambar" accept="image/x-png,image/gif,image/jpeg" {{ $aksi == "Edit"? "": "required" }} autocomplete="off" />
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
