@extends('frontend.layouts.default')

@section('title', ' | Tentang Kami')

@section('content')

<section class="headings">
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
        <div class="row">
            <div class="col-lg-6 col-md-12 who-1">
                <div>
                    <h2 class="text-left mb-4">Tentang <span>PT Mahesa Indo Persada</span></h2>
                </div>
                <div class="pftext">
                    <p>{{ $data->tentang_kami_text }}</p>
                </div>
                <div class="box bg-2">
                    <a href="about.html" class="text-center button button--moema button--text-thick button--text-upper button--size-s">read More</a>
                    <img src="images/signature.png" class="ml-5" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 who">
                <div class="wprt-image-video w50">
                    <img alt="image" src="images/projects/welcome.jpg">
                    <a class="icon-wrap popup-video popup-youtube" href="https://www.youtube.com/watch?v=2xHQqYRcrx4"></a>
                </div>
            </div>
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
                    <p>{{ $service->service_text }}</p>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</main>
<!-- END SECTION SERVICES -->
@endsection
