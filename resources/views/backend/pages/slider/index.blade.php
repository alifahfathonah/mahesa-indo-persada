@extends('backend.pages.main')

@section('title', ' | Slider')

@push('css')
<link rel="stylesheet" href="/plugins/ekko-lightbox/ekko-lightbox.css">
@endpush

@section('page')
<li class="breadcrumb-item active">Slider</li>
@endsection

@section('header')
<h1 class="m-0 text-dark">Slider</h1>
@endsection

@section('subcontent')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/admin-area/slider/tambah" class="btn btn-sm btn-primary">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="filter-container p-0 row">
                            @foreach ($data as $i => $row)
                            <div class="filtr-item col-sm-4 text-center">
                                {{ ++$i }}. {{ $row->slider_judul }}
                                <a href="{{ $row->slider_gambar }}" data-toggle="lightbox" data-title="{{ $row->gallery_judul }}">
                                    <img src="{{ $row->slider_gambar }}" class="img-fluid mb-2" alt="white sample"/>
                                </a>
                                <a href="javascript:;" data-id="{{ $row->slider_id }}" data-no="{{ $i }}" class="btn-danger btn-xs btn btn-hapus w-100" > Hapus</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    $(".btn-hapus").on('click', function () {
        var no = $(this).data('no');
        var id = $(this).data('id');
        var r = confirm('Anda akan menghapus data no ' + no);
        if (r == true) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/admin-area/slider/hapus",
                type: "POST",
                data: {
                    "_method": 'DELETE',
                    "id" : id
                },
                success: function(data){
                    location.reload(true);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.responseJSON.message);
                }
            });
        }
    });
</script>
@endpush

@push('scripts')
<script src="/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<script src="/plugins/filterizr/jquery.filterizr.min.js"></script>

<script>
    $(function () {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });
    })
</script>
@endpush
