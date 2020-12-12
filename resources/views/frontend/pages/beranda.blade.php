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
                    <a href="/"><img src="assets/findhouse/images/logo-only.png" data-sticky-logo="assets/findhouse/images/logo-only.png" alt=""> </a>
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
                                <li><a href="/produk/{{ $perumahan->getKey() }}">{{ $perumahan->perumahan_nama }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#">Bangunan Lainnya</a>
                            <ul>
                                @foreach ($bangunan_lain->all() as $index => $bangunan_lain)
                                <li><a href="/produk/{{ $bangunan_lain->getKey() }}">{{ $bangunan_lain->bangunan_lain_nama }}</a></li>
                                @endforeach
                            </ul>
                        </li>
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
                <li data-index="rs-{{ $i }}" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ Storage::url($slider->slider_gambar) }}" data-rotate="0" data-saveperformance="off" data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ Storage::url($slider->slider_gambar) }}" data-bgcolor='#f8f8f8' style='' alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>

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
    <section class="top-locations recently portfolio bg-white-1">
        <div class="container-fluid">
            <div class="section-title col-md-5">
                <h3>Top</h3>
                <h2>Locations</h2>
            </div>
            <div class="portfolio col-xl-12">
                <div class="slick-lancers">
                    <div class="agents-grid">
                        <a href="single-property-1.html" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url(images/popular-places/7.jpg);"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">New York</div>
                                <div class="recent-price">32 Properties</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                    <div class="agents-grid">
                        <a href="single-property-1.html" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url(images/popular-places/8.jpg);"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">Los Angeles</div>
                                <div class="recent-price">13 Properties</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                    <div class="agents-grid">
                        <a href="single-property-1.html" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url(images/popular-places/9.jpg);"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">Miami</div>
                                <div class="recent-price">15 Properties</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                    <div class="agents-grid">
                        <a href="single-property-1.html" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url(images/popular-places/10.jpg);"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">Chicago</div>
                                <div class="recent-price">24Properties</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                    <div class="agents-grid">
                        <a href="single-property-1.html" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url(images/popular-places/11.jpg);"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">San Francisco</div>
                                <div class="recent-price">28 Properties</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                    <div class="agents-grid">
                        <a href="listing-details.html" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url(images/popular-places/7.jpg);"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">New York</div>
                                <div class="recent-price">32 Properties</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                    <div class="agents-grid">
                        <a href="single-property-1.html" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url(images/popular-places/7.jpg);"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">New York</div>
                                <div class="recent-price">32 Properties</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                    <div class="agents-grid">
                        <a href="single-property-1.html" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url(images/popular-places/8.jpg);"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">Los Angeles</div>
                                <div class="recent-price">13 Properties</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                    <div class="agents-grid">
                        <a href="single-property-1.html" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url(images/popular-places/9.jpg);"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">Miami</div>
                                <div class="recent-price">15 Properties</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION TOP LOCATIONS -->

    <!-- START SECTION INFO-HELP -->
    <section class="info-help h18">
        <div class="container">
            <div class="row info-head">
                <div class="col-lg-12 col-md-8 col-xs-8">
                    <div class="info-text">
                        <h3 class="text-center mb-0">Why Choose Us</h3>
                        <p class="text-center mb-4 p-0">We offer perfect real estate services</p>
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
                    <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0">
                        <div _ngcontent-bgi-c3="" class="single-featured-box">
                            <div _ngcontent-bgi-c3="" class="icon color-fb7756"><img src="images/icons/i-1.svg" width="85" height="85" alt=""></div>
                            <h3 _ngcontent-bgi-c3="" class="mt-5">Find Your Home</h3>
                            <p _ngcontent-bgi-c3="">Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p><a _ngcontent-bgi-c3="" class="read-more-btn" href="single-property-1.html">Read More</a></div>
                    </div>
                    <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0">
                        <div _ngcontent-bgi-c3="" class="single-featured-box">
                            <div _ngcontent-bgi-c3="" class="icon color-facd60"><img src="images/icons/i-2.svg" width="85" height="85" alt=""></div>
                            <h3 _ngcontent-bgi-c3="" class="mt-5">Trusted by thousands</h3>
                            <p _ngcontent-bgi-c3="">Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p><a _ngcontent-bgi-c3="" class="read-more-btn" href="single-property-1.html">Read More</a></div>
                    </div>
                    <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0">
                        <div _ngcontent-bgi-c3="" class="single-featured-box">
                            <div _ngcontent-bgi-c3="" class="icon color-1ac0c6"><img src="images/icons/i-3.svg" width="85" height="85" alt=""></div>
                            <h3 _ngcontent-bgi-c3="" class="mt-5">Financing made easy</h3>
                            <p _ngcontent-bgi-c3="">Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p><a _ngcontent-bgi-c3="" class="read-more-btn" href="single-property-1.html">Read More</a></div>
                    </div>
                    <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0">
                        <div _ngcontent-bgi-c3="" class="single-featured-box">
                            <div _ngcontent-bgi-c3="" class="icon"><img src="images/icons/i-4.svg" width="85" height="85" alt=""></div>
                            <h3 _ngcontent-bgi-c3="" class="mt-5">24/7 support</h3>
                            <p _ngcontent-bgi-c3="">Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p><a _ngcontent-bgi-c3="" class="read-more-btn" href="single-property-1.html">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION INFO -->

    <!-- START SECTION AGENTS -->
    <section class="team bg-white-1">
        <div class="container">
            <div class="section-title col-md-5">
                <h3>Meet Our</h3>
                <h2>Agents</h2>
            </div>
            <div class="row team-all">
                <!--Team Block-->
                <div class="team-block col-lg-3 col-md-6 col-xs-12">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="agents-listing-grid.html"><img src="images/team/t-1.jpg" alt="" /></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="agents-listing-grid.html">Carls Jhons</a></h3>
                            <div class="designation">Real Estate Agent</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class="team-block col-lg-3 col-md-6 col-xs-12">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="agents-listing-grid.html"><img src="images/team/t-2.jpg" alt="" /></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="agents-listing-grid.html">Arling Tracy</a></h3>
                            <div class="designation">Real Estate Agent</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class="team-block col-lg-3 col-md-6 col-xs-12 pb-none">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="agents-listing-grid.html"><img src="images/team/t-3.jpg" alt="" /></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="agents-listing-grid.html">Mark Web</a></h3>
                            <div class="designation">Real Estate Agent</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class="team-block col-lg-3 col-md-6 col-xs-12 pb-none">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="agents-listing-grid.html"><img src="images/team/t-4.jpg" alt="" /></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="agents-listing-grid.html">Katy Grace</a></h3>
                            <div class="designation">Real Estate Agent</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION AGENTS -->

@endsection

@push('scripts')<!-- ARCHIVES JS -->
<script src="assets/findhouse/js/jquery.min.js"></script>
<script src="assets/findhouse/js/jquery-ui.js"></script>
<script src="assets/findhouse/js/tether.min.js"></script>
<script src="assets/findhouse/js/moment.js"></script>
<script src="assets/findhouse/js/transition.min.js"></script>
<script src="assets/findhouse/js/bootstrap.min.js"></script>
<script src="assets/findhouse/js/mmenu.min.js"></script>
<script src="assets/findhouse/js/mmenu.js"></script>
<script src="assets/findhouse/js/swiper.min.js"></script>
<script src="assets/findhouse/js/fitvids.js"></script>
<script src="assets/findhouse/js/jquery.waypoints.min.js"></script>
<script src="assets/findhouse/js/jquery.counterup.min.js"></script>
<script src="assets/findhouse/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/findhouse/js/isotope.pkgd.min.js"></script>
<script src="assets/findhouse/js/smooth-scroll.min.js"></script>
<script src="assets/findhouse/js/lightcase.js"></script>
<script src="assets/findhouse/js/search.js"></script>
<script src="assets/findhouse/js/owl.carousel.js"></script>
<script src="assets/findhouse/js/jquery.magnific-popup.min.js"></script>
<script src="assets/findhouse/js/ajaxchimp.min.js"></script>
<script src="assets/findhouse/js/newsletter.js"></script>
<script src="assets/findhouse/js/forms-2.js"></script>
<script>
    $(window).on('scroll load', function() {
        $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
    });

</script>

<!-- Slider Revolution scripts -->
<script src="assets/findhouse/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/findhouse/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/findhouse/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/findhouse/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/findhouse/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/findhouse/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/findhouse/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/findhouse/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/findhouse/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/findhouse/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/findhouse/revolution/js/extensions/revolution.extension.video.min.js"></script>


<script src="assets/findhouse/js/slick.min.js"></script>
<script src="assets/findhouse/js/slick2.js"></script>
<script>
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

</script>

<!-- MAIN JS -->
<script src="assets/findhouse/js/script.js"></script>
@endpush
