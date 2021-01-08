@extends('backend.pages.main')

@section('title', ' | Sosial Media')

@push('css')
<link rel="stylesheet" href="/plugins/ekko-lightbox/ekko-lightbox.css">
@endpush

@section('page')
<li class="breadcrumb-item active">Sosial Media</li>
@endsection

@section('header')
<h1 class="m-0 text-dark">Sosial Media</h1>
@endsection

@section('subcontent')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/admin-area/sosialmedia/tambah" class="btn btn-sm btn-primary">Tambah</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Sosial Media</th>
                                        <th>Link</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $index => $row)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $row->sosial_media_nama }}</td>
                                        <td>{{ $row->sosial_media_link }}</td>
                                        <td class="text-right" nowrap>
                                            <div class="btn-group">
                                            </div>
                                            <div class="btn-group">
                                                <a href="javascript:;" data-id="{{ $row->sosial_media_id }}" data-no="{{ $index+1 }}" class="btn-danger btn btn-hapus" > Hapus</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
                url: "/admin-area/sosialmedia/hapus",
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
