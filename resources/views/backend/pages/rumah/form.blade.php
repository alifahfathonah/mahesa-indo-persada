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
