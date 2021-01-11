@extends('frontend.layouts.default')

@section('title', ' | Perumahan')

@push('css')
    <link rel="stylesheet" href="/assets/findhouse/css/swiper.min.css">
@endpush

@section('content')
<div class="swiper-container">
    <div class="swiper-wrapper">
        @foreach ($data->first()->perumahan->gambar as $gambar)
        <div class="swiper-slide">
            <a href="{{ $gambar->perumahan_gambar }}" class="grid image-link">
                <img src="{{ $gambar->perumahan_gambar }}" class="img-fluid" alt="#">
            </a>
        </div>
        @endforeach
    </div>

    <div class="swiper-pagination swiper-pagination-white"></div>

    <div class="swiper-button-next swiper-button-white mr-3"></div>
    <div class="swiper-button-prev swiper-button-white ml-3"></div>
</div>

<!-- START SECTION PROPERTIES LISTING -->
<section class="properties-right featured portfolio blog">
    <div class="container">
        <div class="blog-pots">
            <section class="headings-2 pt-0">
                <div class="pro-wrapper">
                    <div class="detail-wrapper-body">
                        <div class="listing-title-bar">
                            <div class="text-heading text-left">
                                <p><a href="index.html">Home </a> &nbsp;/&nbsp; <span>Perumahan</span></p>
                            </div>
                            <h3>{{ $data->first()->perumahan->perumahan_nama }}</h3>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row">
                @foreach ($data as $rumah)
                <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                    <div class="project-single">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="/rumah/{{ $rumah->rumah_id }}" class="homes-img">
                                    <div class="homes-price">Rp. {{ number_format($rumah->rumah_harga) }}</div>
                                    <img src="{{ ($rumah->gambar->first()->rumah_gambar) }}" alt="home-1" class="img-responsive" style="height: 250px">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3><a href="/rumah/{{ $rumah->rumah_id }}">{{ $rumah->rumah_tipe }}</a></h3>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <span>{{ $rumah->rumah_kamar }} Kamar Tidur</span>
                                </li>
                                <li>
                                    <span>{{ $rumah->rumah_kamar_mandi }} Kamar Mandi</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <nav aria-label="..." class="pt-55">
            {{ $data->links() }}
        </nav>
        <div class="floor-plan property wprt-image-video w50 pro">
            <h5>Deskripsi</h5>
            {!! $data->first()->perumahan->perumahan_deskripsi !!}
        </div>
        <div class="floor-plan property wprt-image-video w50 pro">
            <h5>Masterplan</h5>
                <div alt="" id="peta" style="position: relative; overflow:auto">
                    <img src="{{ $data->first()->perumahan->perumahan_denah }}" alt="" style="width: 1300px; max-width: 1300px">
                    @foreach ($booking as $row)
                        <img src="/assets/images/{{ $row->booking_pelanggan? 'home.png': 'home_green.png' }}" style="width: 30px; position: absolute; top: {{ $row->booking_y+10 }}px; left: {{ $row->booking_x+10 }}px" alt="" title="{{ $row->booking_blok.($row->booking_pelanggan?:"") }}">
                    @endforeach
                </div>
        </div>
    </div>

</section>
<!-- END SECTION PROPERTIES LISTING -->
@endsection

@push('scripts')
<script src="/assets/findhouse/js/swiper.min.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
                slidesPerView: 3,
                slidesPerGroup: 1,
                loop: true,
                loopFillGroupWithBlank: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 50,
                    },
                }
            });
</script>
@endpush
