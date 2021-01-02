@extends('frontend.layouts.default')

@section('title', ' | Pebangunan_lainan')

@section('content')
<!-- START SECTION PROPERTIES LISTING -->
<section class="single-proper blog details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 blog-pots">
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
                                    <img src="{{ Storage::url($gambar->bangunan_lain_gambar) }}" class="img-fluid" alt="slider-listing">
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
                                        <img src="{{ Storage::url($gambar->bangunan_lain_gambar) }}" class="img-fluid" alt="listing-small">
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            <!-- main slider carousel items -->
                        </div>
                        <div class="blog-info details mb-30">
                            <h5 class="mb-4">Deskripsi</h5>
                            {{ $data->bangunan_lain_deskripsi }}
                        </div>
                    </div>
                </div>
                <div class="single homes-content details mb-30">
                    <!-- title -->
                    <h5 class="mb-4">Spesifikasi</h5>
                    <ul class="homes-list clearfix">
                        <li>
                            <span class="font-weight-bold mr-1">Kamar Tidur:</span>
                            <span class="det">{{ $data->bangunan_lain_kamar }}</span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">Kamar Mandi:</span>
                            <span class="det">{{ $data->bangunan_lain_kamar_mandi }}</span>
                        </li>
                    </ul>
                </div>
                <div class="floor-plan property wprt-image-video w50 pro">
                    <h5>Sketsa</h5>
                    <img alt="image" src="{{ Storage::url($data->bangunan_lain_sektsa) }}">
                </div>
            </div>
            <aside class="col-lg-4 col-md-12 car">
                <div class="single widget">
                    <!-- end author-verified-badge -->
                    <div class="sidebar">
                        <div class="main-search-field-2">
                            <div class="widget-boxed mt-5">
                                <div class="widget-boxed-header">
                                    <h4>bangunan_lain Lainnya</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="recent-post">
                                        @foreach ($lainnya as $lainnya)
                                        <div class="recent-main">
                                            <div class="recent-img">
                                                <a href="/bangunan_lain/{{ $lainnya->bangunan_lain_id }}"><img src="{{ Storage::url($lainnya->gambar->first()->bangunan_lain_gambar) }}" alt=""></a>
                                            </div>
                                            <div class="info-img">
                                                <a href="/bangunan_lain/{{ $lainnya->bangunan_lain_id }}"><h6>{{ $lainnya->bangunan_lain_tipe }}</h6></a>
                                                <p>{{ number_format($lainnya->bangunan_lain_harga) }}</p>
                                            </div>
                                        </div>
                                        <br>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- END SECTION PROPERTIES LISTING -->
@endsection
