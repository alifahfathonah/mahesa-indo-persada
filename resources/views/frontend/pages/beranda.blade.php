@extends('frontend.layouts.home')

@section('title', ' | Beranda')

@inject('perumahan', 'App\Perumahan')
@inject('bangunan_lain', 'App\BangunanLain')

@section('content')
<!-- START SECTION HEADINGS -->
<!-- Header Container
================================================== -->
<header id="header-container" class="header head-tr">
    <!-- Header -->
    <div id="header" class="head-tr bottom">
        <div class="container">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="/"><img src="/assets/findhouse/images/logo-only.png" data-sticky-logo="/assets/findhouse/images/logo-only.png" alt=""> </a>
                </div>
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <!-- Main Navigation -->
                <nav id="navigation" class="style-1 head-tr">
                    <ul id="responsive">
                        <li><a class="current" href="/">Home</a></li>
                        <li><a href="#">Perumahan</a>
                            <ul>
                                @foreach ($perumahan->all() as $index => $perumahan)
                                <li><a href="/perumahan/{{ $perumahan->getKey() }}">{{ $perumahan->perumahan_nama }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#">Proyek Lainnya</a>
                            <ul>
                                @foreach ($bangunan_lain->all() as $index => $bangunan_lain)
                                <li><a href="/lainnya/{{ $bangunan_lain->getKey() }}">{{ $bangunan_lain->bangunan_lain_nama }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        {{-- <li><a href="#">Masterplan</a>
                            <ul>
                                @foreach ($perumahan->all() as $index => $perumahan)
                                <li><a href="/masterplan/{{ $perumahan->getKey() }}">{{ $perumahan->perumahan_nama }}</a></li>
                                @endforeach
                            </ul>
                        </li> --}}
                        <li><a href="/tentangkami">Tentang Kami</a></li>
                        <li><a href="/kontak">Kontak Kami</a></li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->

        </div>
    </div>
    <!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->
<!-- SLIDER START -->
<div id="rev_slider_26_1_wrapper " class="rev_slider_26_1_wrapper fullscreen-container home-rev-slider" data-alias="mask-showcase" data-source="gallery">
    <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
    <div id="rev_slider_26_1" class="rev_slider_26_1 fullscreenbanner" style="display:none;" data-version="5.4.1">
        <ul>
            @foreach ($slider as $i => $slider)
            <!-- SLIDE 1 -->
            <li data-index="rs-{{ $i }}" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ ($slider->slider_gambar) }}" data-rotate="0" data-saveperformance="off" data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ ($slider->slider_gambar) }}" data-bgcolor='#f8f8f8' style='' alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>

                <!-- LAYERS 2 number block-->
                <div class="tp-caption rev-btn  tp-resizeme slider-block sx-bg-primary" id="slide-{{ $i }}-layer-2" data-x="['left','left','left','center']" data-hoffset="['60','60','30','0']" data-y="['middle','middle','middle','top']" data-voffset="['-220','-220','-220','50']" data-fontweight="['600','600','600','600']" data-fontsize="['120','120','80','80']" data-lineheight="['120','120','80','80']" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]' data-textAlign="['left','left','left','center']" data-paddingtop="[20,20,20,20]" data-paddingright="[10,10,10,10]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[10,10,10,10]" style="z-index: 10; font-family: 'Poppins', sans-serif;">{{ sprintf('%02s', $i + 1) }}</div>

                <!-- LAYER 3  Thin text title-->
                <div class="tp-caption   tp-resizeme slider-tag-line" id="slide-{{ $i }}-layer-3" data-x="['left','left','left','center']" data-hoffset="['60','60','30','0']" data-y="['middle','middle','middle','top']" data-voffset="['-80','-80','-80','170']" data-fontsize="['64','64','60','40']" data-lineheight="['{{ $i }}','{{ $i }}','70','50']" data-width="['700','650','620','380']" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":300,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','left','center']" data-paddingtop="[10,10,10,10]" data-paddingright="[20,20,20,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10; font-weight:200; letter-spacing:10px; color: #fff;font-family: 'Poppins', sans-serif; text-transform:uppercase">{{ $slider->slider_judul }}</div>

                <!-- LAYER 5  Paragraph-->
                <div class="tp-caption   tp-resizeme" id="slide-{{ $i }}-layer-5" data-x="['left','left','left','center']" data-hoffset="['60','60','30','0']" data-y="['middle','middle','middle','top']" data-voffset="['90','90','90','300']" data-fontsize="['20','20','20','20']" data-lineheight="['30','30','30','30']" data-width="['600','600','600','380']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','left','center']" data-paddingright="[20,20,20,20]" data-paddingbottom="[30,30,30,30]" data-paddingleft="[0,0,0,0]" style="z-index: 10; white-space: normal; color: #fff;font-family: 'Poppins', sans-serif;">{{ $slider->slider_deskripsi }}</div>

                <!-- LAYER 6  Read More-->
                <div class="tp-caption rev-btn  tp-resizeme" id="slide-{{ $i }}-layer-6" data-x="['left','left','left','center']" data-hoffset="['60','60','30','0']" data-y="['middle','middle','middle','top']" data-voffset="['180','180','180','410']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]' data-textAlign="['left','left','left','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:9; line-height:30px;"><a href="{{ $slider->slider_link }}" class="site-button-secondry btn-half"><span> Selengkapnya</span></a></div>

                <!-- Border left Part -->
                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-{{ $i }}-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-visibility="['on','on','off','off']" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:8;background-color:rgba(0, 0, 0, 0);border-left:40px solid #{{ rand(100000,999999) }};"> </div>

                <!-- Border bottom Part -->
                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-{{ $i }}-layer-7" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-visibility="['on','on','off','off']" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:8;background-color:rgba(0, 0, 0, 0);border-bottom:80px solid #eef1f2;"> </div>
            </li>
            @endforeach
        </ul>
        <div class="tp-bannertimer"></div>
        <!-- left side social bar-->
        <div class="slide-left-social">
            <ul class="clearfix">
                <li><a href="#" class="sx-title-swip" data-hover="Linkedin"><h4><u>P.T. Mahesa Indo Persada</u></h4></a></li>
            </ul>
        </div>

    </div>
</div>
<!-- SLIDER END -->

<!-- START SECTION TOP LOCATIONS -->
    <section class="recently portfolio">
        <div class="container">
            <div class="section-title ml-3">
                <h3>Property</h3>
                <h2>Terbaru</h2>
            </div>
            <div class="portfolio col-xl-12">
                <div class="slick-lancers">
                @foreach ($rumah as $rumah)
                <div class="agents-grid">
                    <div class="landscapes">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="/rumah/{{ $rumah->rumah_id }}">Detail</a><span class="category">{{ $rumah->perumahan->perumahan_nama }}</span></h4>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <img src="{{ $rumah->gambar->count()? ($rumah->gambar->first()->rumah_gambar): '' }}" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="/rumah/{{ $rumah->rumah_id }}">{{ $rumah->rumah_tipe }}</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="/rumah/{{ $rumah->rumah_id }}">
                                        <span>{{ $rumah->rumah_deskripsi }}</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix">
                                    <li>
                                        <i class="fa fa-bed" aria-hidden="true"></i>
                                        <span>{{ $rumah->rumah_kamar }} Kamar Tidur</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath" aria-hidden="true"></i>
                                        <span>{{ $rumah->rumah_kamar_mandi }} Kamar Mandi</span>
                                    </li>
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="single-property-1.html">Rp. {{ number_format($rumah->rumah_harga) }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TOP LOCATIONS -->

<!-- START SECTION INFO-HELP -->
<section class="info-help h18" style="background: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.1)), to(rgba(255, 255, 255, 0.1))), url({{ $intro->kalimat_gambar }}) no-repeat scroll center center !important;">
    <div class="container">
        <div class="row info-head">
            <div class="col-lg-12 col-md-8 col-xs-8">
                <div class="info-text">
                    <h3 class="text-center mb-0">{{ $intro->kalimat_judul }}</h3>
                    <p class="text-center mb-4 p-0">{{ $intro->kalimat_text }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION INFO-HELP -->

<!-- START SECTION INFO -->
<section _ngcontent-bgi-c3="" class="featured-boxes-area bg-white-1">
    <div _ngcontent-bgi-c3="" class="container">
        <div _ngcontent-bgi-c3="" class="featured-boxes-inner">
            <div _ngcontent-bgi-c3="" class="row m-0">
                @foreach ($moto as $moto)
                <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0">
                    <div _ngcontent-bgi-c3="" class="single-featured-box">
                        <div _ngcontent-bgi-c3="" class="icon color-fb7756"><img src="{{ ($moto->moto_gambar) }}" width="85" height="85" alt=""></div>
                        <h3 _ngcontent-bgi-c3="" class="mt-5">{{ $moto->moto_judul }}</h3>
                        <p _ngcontent-bgi-c3="">{{ $moto->moto_deskripsi }}</p></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- END SECTION INFO -->

<!-- STAR SECTION PARTNERS -->
<div class="partners bg-white-1">
    <div class="container">
        <div class="owl-carousel style3">
            @foreach ($partner as $partner)
            <div class="owl-item"><a href="{{ $partner->partner_link }}" target="_blank"><img src="{{ ($partner->partner_gambar) }}" alt="" style="width: 150px"></a></div>
            @endforeach
        </div>
    </div>
</div>
<!-- END SECTION PARTNERS -->
@endsection

@push('scripts')
<!-- ARCHIVES JS -->
<script src="/assets/findhouse/js/owl.carousel.js"></script>
<script src="/assets/findhouse/js/slick.min.js"></script>
<script src="/assets/findhouse/js/slick3.js"></script>
<script>
    $(window).on('scroll load', function() {
        $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
    });

    var tpj = jQuery;
    var revapi26;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_26_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_26_1");
        } else {
            revapi26 = tpj("#rev_slider_26_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "revolution/js/",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        touchOnDesktop: "off",
                        swipe_threshold: 75,
                        swipe_min_touches: 50,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },

                    arrows: {
                        style: "metis",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '',
                        left: {
                            h_align: "right",
                            v_align: "bottom",
                            h_offset: 80,
                            v_offset: 10
                        },
                        right: {
                            h_align: "right",
                            v_align: "bottom",
                            h_offset: 10,
                            v_offset: 10
                        }
                    },
                    bullets: {
                        enable: false,
                        hide_onmobile: false,
                        style: "bullet-bar",
                        hide_onleave: false,
                        direction: "horizontal",
                        h_align: "right",
                        v_align: "bottom",
                        h_offset: 30,
                        v_offset: 30,
                        space: 5,
                        tmp: ''
                    }
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1270, 1024, 778, 480],
                gridheight: [729, 600, 600, 480],
                lazyType: "none",
                parallax: {
                    type: "scroll",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: ".site-header",
                fullScreenOffset: "0px",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/


	$('.style3').owlCarousel({
		loop: true,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 5000,
		responsive: {
			0: {
				items: 1
			},
			400: {
				items: 1,
				margin: 20
			},
			500: {
				items: 1,
				margin: 20
			},
			768: {
				items: 2,
				margin: 20
			},
			991: {
				items: 2,
				margin: 20
			},
			1000: {
				items: 5,
				margin: 20
			}
		}
	});

</script>
@endpush
