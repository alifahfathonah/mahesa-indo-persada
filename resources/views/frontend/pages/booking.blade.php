<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('backend.includes.head')
</head>
<body>
    <div src="{{ $perumahan->perumahan_denah }}" alt="" id="peta" style="position: relative;">
        <img src="{{ $perumahan->perumahan_denah }}" alt="">
        @foreach ($data as $row)
            <div style="position: absolute; top: {{ $row->booking_y }}px; left: {{ $row->booking_x }}px;">
                <img src="/assets/images/home.png" style="width: 50px;  background-color: white;" alt="" title="{{ $row->booking_blok }} - {{ $row->booking_pelanggan }}">
                <label for="" style="background-color: white">{{ $row->booking_blok }} - {{ $row->booking_pelanggan }}</label>
            </div>
        @endforeach
    </div>
    @include('backend.includes.page-js')
</body>
</html>
