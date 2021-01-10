<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="property">
<meta name="author" content="PT Mahesa Indo Persada">
<title>P.T. Mahesa Indo Persada</title>
<!-- FAVICON -->
<link rel="shortcut icon" type="image/x-icon" href="/assets/findhouse/images/logo-only.png">
<!-- ARCHIVES CSS -->
<link rel="stylesheet" href="/assets/findhouse/css/bootstrap.css">
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
    @include('frontend.includes.page-js')
</body>
</html>
