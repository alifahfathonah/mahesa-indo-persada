
@inject('perumahan', 'App\Perumahan')
@inject('bangunan_lain', 'App\BangunanLain')

    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container">
            <!-- Topbar -->
            <div class="header-top">
                <div class="container">
                    <div class="top-info hidden-sm-down">
                        <div class="call-header">
                            <p><i class="fa fa-phone" aria-hidden="true"></i> (234) 0200 17813</p>
                        </div>
                        <div class="address-header">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> 95 South Park Ave, USA</p>
                        </div>
                        <div class="mail-header">
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> info@findhouses.com</p>
                        </div>
                    </div>
                    <div class="top-social hidden-sm-down">
                        <div class="social-icons-header">
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- Topbar / End -->
            <!-- Header -->
            <div id="header">
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
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">
                                <li><a href="/">Home</a></li>
                                <li><a href="#">Perumahan</a>
                                    <ul>
                                        @foreach ($perumahan->all() as $index => $perumahan)
                                        <li><a href="/perumahan/{{ $perumahan->getKey() }}">{{ $perumahan->perumahan_nama }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="#">Bangunan Lainnya</a>
                                    <ul>
                                        @foreach ($bangunan_lain->all() as $index => $bangunan_lain)
                                        <li><a href="/lainnya/{{ $bangunan_lain->getKey() }}">{{ $bangunan_lain->bangunan_lain_nama }}</a></li>
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
