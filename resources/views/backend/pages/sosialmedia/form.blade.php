@extends('backend.pages.main')

@section('title', ' | '.$aksi.' Sosial Media')

@section('page')
<li class="breadcrumb-item">Sosial Media</li>
<li class="breadcrumb-item active">{{ $aksi }} Sosial Media</li>
@endsection

@section('header')
<h1 class="m-0 text-dark">{{ $aksi }} Sosial Media</h1>
@endsection

@section('subcontent')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('sosialmedia.simpan') }}" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            @csrf
                            <input type="hidden" name="redirect" value="{{ $back }}">
                            <div class="row">
                                @if($aksi == 'Edit')
                                <input type="hidden" name="ID" value="{{ $data->sosial_media_id }}">
                                @endif
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Sosial Media</label>
                                        <select class="form-control selectpicker" name="sosial_media_nama" data-live-search="true" data-style="btn-aqua" data-size="3" data-width="100%">
                                            <option value="facebook">Facebook</option>
                                            <option value="instagram">Instagram</option>
                                            <option value="twitter">Twitter</option>
                                            <option value="whatsapp">Whatsapp</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Link</label>
                                        <input class="form-control" type="text" name="sosial_media_link" value="{{ old('sosial_media_link')? old('sosial_media_link'): ($aksi == "Edit"? $data->sosial_media_link: "") }}" autocomplete="off" data-parsley-minlength="2" required />
                                    </div>
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
