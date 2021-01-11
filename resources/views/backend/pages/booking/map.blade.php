@extends('backend.pages.main')

@section('title', ' | Masterplan')

@section('page')
<li class="breadcrumb-item">Data Booking</li>
<li class="breadcrumb-item active">Masterplan</li>
@endsection

@section('header')
<h1 class="m-0 text-dark">Masterplan</h1>
@endsection

@section('subcontent')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="overflow: auto; height: 800px">
                <div alt="" id="peta" style="position: relative; ">
                    <img src="{{ $perumahan->perumahan_denah }}" alt="" style="width: 1300px">
                    @foreach ($data as $row)
                        <img src="/assets/images/{{ $row->booking_pelanggan? 'home.png': 'home_green.png' }}" style="width: 30px; position: absolute; top: {{ $row->booking_y+10 }}px; left: {{ $row->booking_x+10 }}px" alt="" title="{{ $row->booking_blok }} - {{ $row->booking_pelanggan }}">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal" tabindex="-1" id="myModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('booking.simpan') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Input Data Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="booking_x" id="blok_x">
                    <input type="hidden" name="booking_y" id="blok_y">
                    <input type="hidden" name="perumahan_id" value="{{ $perumahan->perumahan_id }}">
                    <div class="form-group">
                        <label class="control-label">Blok</label>
                        <input class="form-control" type="text" name="booking_blok" autocomplete="off" id="booking_blok" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nama Pelanggan</label>
                        <input class="form-control" type="text" name="booking_pelanggan" autocomplete="off" id="booking_pelanggan"  />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Keterangan</label>
                        <textarea class="form-control" name="booking_keterangan">{{ old('booking_keterangan')? old('booking_keterangan'): ($aksi == "Edit"? $data->booking_keterangan: "") }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $('#peta').on('click', function (e) {
        var posX = $(this).offset().left,
        posY = $(this).offset().top;

        $('#blok_x').val(e.pageX - posX - 25);
        $('#blok_y').val(e.pageY - posY - 25);
        $('#myModal').modal('show');
    })
</script>
@endpush
