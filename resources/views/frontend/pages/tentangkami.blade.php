@extends('frontend.layouts.default')

@section('title', ' | Tentang Kami')

@section('content')
<section class="headings" style="background: linear-gradient(rgba(18, 27, 34, 0.6), rgba(18, 27, 34, 0.6)), url({{ $data->kalimat_gambar }}) no-repeat center center !important;">
    <div class="text-heading text-center">
        <div class="container">
            <h1>Tentang Kami</h1>
            <h2><a href="/">Home </a> &nbsp;/&nbsp; Tentang Kami</h2>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION ABOUT -->
<section class="about-us">
    <div class="container">
        <div>
            <h2 class="text-left mb-4">Tentang <span>Kami</span></h2>
        </div>
        <div class="pftext">
            {!! $data->kalimat_text !!}
        </div>
    </div>
</section>
<!-- END SECTION ABOUT -->

<!-- START SECTION SERVICES -->
<main class="services-2">
    <div class="container">
        <div class="section-title">
            <h3>Layanan</h3>
            <h2>Kami</h2>
        </div>
        <div class="row service-1">
            @foreach ($service as $service)
            <article class="col-md-4 serv">
                <div class="art-1 img-1">
                    <img src="{{ $service->service_gambar }}" width="52" alt="">
                    <h3>{{ $service->service_judul }}</h3>
                    <p>{{ $service->service_deskripsi }}</p>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</main>
<!-- END SECTION SERVICES -->
@endsection
