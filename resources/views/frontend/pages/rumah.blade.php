@extends('frontend.layouts.default')

@section('title', ' | Perumahan')

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
                                        <h3>{{ $data->rumah_tipe }}</h3>
                                        <div class="mt-0">
                                            <a href="#listing-location" class="listing-address">
                                                <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>{{ $data->perumahan->perumahan_nama }}
                                            </a>
                                            <h4>Rp. {{ number_format($data->rumah_harga) }}</h4>
                                        </div>
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
                                    <img src="{{ ($gambar->rumah_gambar) }}" class="img-fluid" alt="slider-listing">
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
                                        <img src="{{ ($gambar->rumah_gambar) }}" class="img-fluid" alt="listing-small">
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            <!-- main slider carousel items -->
                        </div>
                        <div class="blog-info details mb-30">
                            <h5 class="mb-4">Deskripsi</h5>
                            {{ $data->rumah_deskripsi }}
                        </div>
                    </div>
                </div>
                <div class="single homes-content details mb-30">
                    <!-- title -->
                    <h5 class="mb-4">Ruang</h5>
                    <ul class="homes-list clearfix">
                        <li>
                            <span class="font-weight-bold mr-1">Kamar Tidur:</span>
                            <span class="det">{{ $data->rumah_kamar }}</span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">Kamar Mandi:</span>
                            <span class="det">{{ $data->rumah_kamar_mandi }}</span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">Ruang Keluarga:</span>
                            <span class="det">{{ $data->rumah_ruang_keluarga }}</span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">Dapur:</span>
                            <span class="det">{{ $data->rumah_dapur }}</span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">Ruang Tamu:</span>
                            <span class="det">{{ $data->rumah_ruang_tamu }}</span>
                        </li>
                    </ul>
                    <!-- title -->
                    <h5 class="mt-5">Fasilitas</h5>
                    <!-- cars List -->
                    <ul class="homes-list clearfix">
                        @foreach ($data->fasilitas as $fasilitas)
                        <li>
                            <i class="fa fa-check-square" aria-hidden="true"></i>
                            <span>{{ $fasilitas->rumah_fasilitas }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="floor-plan property wprt-image-video w50 pro">
                    <h5>Sketsa</h5>
                    <img alt="image" style="width: 100%" src="{{ ($data->rumah_sketsa) }}">
                </div>
            </div>
            <aside class="col-lg-4 col-md-12 car">
                <div class="single widget">
                    <!-- end author-verified-badge -->
                    <div class="sidebar">
                        <div class="main-search-field-2">
                            <div class="widget-boxed mt-5">
                                <div class="widget-boxed-header">
                                    <h4>Rumah Lainnya</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="recent-post">
                                        @foreach ($lainnya as $lainnya)
                                        <div class="recent-main">
                                            <div class="recent-img">
                                                <a href="/rumah/{{ $lainnya->rumah_id }}"><img src="{{ ($lainnya->gambar->first()->rumah_gambar) }}" alt=""></a>
                                            </div>
                                            <div class="info-img">
                                                <a href="/rumah/{{ $lainnya->rumah_id }}"><h6>{{ $lainnya->rumah_tipe }}</h6></a>
                                                <p>{{ number_format($lainnya->rumah_harga) }}</p>
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
