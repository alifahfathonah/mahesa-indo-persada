
@inject('perumahan', 'App\Perumahan')
@inject('bangunan_lain', 'App\BangunanLain')
@inject('sosial_media', 'App\SosialMedia')
@inject('kontak', 'App\Kontak')

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
                            <p><i class="fa fa-phone" aria-hidden="true"></i> {{ $kontak->first()->kontak_telpon }}</p>
                        </div>
                        <div class="address-header">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $kontak->first()->kontak_alamat }}</p>
                        </div>
                        <div class="mail-header">
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> <a class="text-white" href="mailto:{{ $kontak->first()->kontak_email }}">{{ $kontak->first()->kontak_email }}</a></p>
                        </div>
                    </div>
                    <div class="top-social hidden-sm-down">
                        <div class="social-icons-header">
                            <div class="social-icons">
                                @foreach ($sosial_media->all() as $sm)
                                <a href="{{ $sm->sosial_media_link }}" class="text-white" target="_blank"><i class="fa fa-{{ $sm->sosial_media_nama }}" aria-hidden="true"></i></a>
                                @endforeach
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
                                <li><a href="#">Proyek Lainnya</a>
                                    <ul>
                                        @foreach ($bangunan_lain->all() as $index => $bangunan_lain)
                                        <li><a href="/lainnya/{{ $bangunan_lain->getKey() }}">{{ $bangunan_lain->bangunan_lain_nama }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="#">Masterplan</a>
                                    <ul>
                                        @foreach ($perumahan->all() as $index => $perumahan)
                                        <li><a href="/masterplan/{{ $perumahan->getKey() }}" target="_blank">{{ $perumahan->perumahan_nama }}</a></li>
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
