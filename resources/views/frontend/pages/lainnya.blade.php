@extends('frontend.layouts.default')

@section('title', ' | Pebangunan_lainan')

@section('content')
<!-- START SECTION PROPERTIES LISTING -->
<section class="single-proper blog details">
    <div class="container">
        <div class="blog-pots">
            <div class="row">
                <div class="col-md-12">
                    <section class="headings-2 pt-0">
                        <div class="pro-wrapper">
                            <div class="detail-wrapper-body">
                                <div class="listing-title-bar">
                                    <h3>{{ $data->bangunan_lain_nama }}</h3>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- main slider carousel items -->
                    <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                        <h5 class="mb-4">Gallery</h5>
                        <div class="carousel-inner">
                            @foreach ($data->gambar as $i => $gambar)
                            <div class="{{ $i == 0? 'active': '' }} item carousel-item" data-slide-number="{{ $i }}">
                                <img src="{{ ($gambar->bangunan_lain_gambar) }}" class="img-fluid" alt="slider-listing">
                            </div>
                            @endforeach

                            <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                        </div>
                        <!-- main slider carousel nav controls -->
                        <ul class="carousel-indicators smail-listing list-inline nav nav-justified">
                            @foreach ($data->gambar as $i => $gambar)
                            <li class="list-inline-item {{ $i == 0? 'active': '' }}">
                                <a id="carousel-selector-1" data-slide-to="{{ $i }}" data-target="#listingDetailsSlider">
                                    <img src="{{ ($gambar->bangunan_lain_gambar) }}" class="img-fluid" alt="listing-small">
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <!-- main slider carousel items -->
                    </div>
                    <div class="blog-info details mb-30">
                        <h5 class="mb-4">Deskripsi</h5>
                        {!! $data->bangunan_lain_deskripsi !!}
                    </div>
                </div>
            </div>
            <div class="floor-plan property wprt-image-video w50 pro">
                <h5>Sketsa</h5>
                <img alt="image" src="{{ ($data->bangunan_lain_sketsa) }}">
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PROPERTIES LISTING -->
@endsection
