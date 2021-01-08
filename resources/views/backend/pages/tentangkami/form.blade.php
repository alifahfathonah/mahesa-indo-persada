@extends('backend.pages.main')

@section('title', ' | Tentang Kami')

@push('css')
<link rel="stylesheet" href="/assets/admin-lte/plugins/summernote/summernote-bs4.css">
@endpush

@section('page')
<li class="breadcrumb-item">Tentang Kami</li>
@endsection

@section('header')
<h1 class="m-0 text-dark">Tentang Kami</h1>
@endsection

@section('subcontent')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('tentangkami.simpan') }}" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Isi</label>
                                        <textarea class="form-control textarea" rows="3" name="kalimat_text">{{ old('kalimat_text')? old('kalimat_text'): ($kalimat ? $kalimat->kalimat_text: "") }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Background</label>
                                        <input class="form-control" type="file" name="kalimat_gambar" accept="image/*" autocomplete="off" />
                                    </div>
                                    @if ($kalimat)
                                    <a href="{{ $kalimat->kalimat_gambar }}" target="_blank">Background</a>
                                    @endif
                                </div>
                                <div class="col-lg-12">
                                    <div style="border-style: solid; border-width: thin;">
                                        <div style="margin: 10px">
                                            <h3>Point-point</h3>
                                        <table class="table">
                                            <tbody id="point">
                                                @foreach ($data as $i => $row)
                                                @include('backend.pages.tentangkami.point', [
                                                    'id' => $i,
                                                    'sumber' => 'edit'
                                                ])
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <hr>
                                        <button class="btn btn-outline-secondary btn-default" onclick="tambah_point()" type="button">Tambah</button>
                                        </div>
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

@push('scripts')
<script src="/assets/admin-lte/plugins/summernote/summernote-bs4.min.js"></script>
<script>
    function tambah_point(){
        $.get("/admin-area/tentangkami/point", function(data, status){
            $("#point").append(data);
        });
    }

    function hapus(id) {
        $("#" + id).remove();
    }

    $(function () {
        $('.textarea').summernote({
            height: 400,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ]
        })
    })
</script>
@endpush
