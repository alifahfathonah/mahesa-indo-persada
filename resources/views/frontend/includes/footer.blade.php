
@inject('sosial_media', 'App\SosialMedia')
@inject('kontak', 'App\Kontak')
<!-- START FOOTER -->
<footer class="first-footer ">
    <div class="top-footer {{ $warna }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="netabout">
                        <a href="/">
                            <img src="/assets/findhouse/images/logo.png" style="width: 500px" alt="netcom">
                        </a>
                        <p class="in-p">{{ $kontak->first()->kontak_tentang }}</p>
                    </div>
                    <div class="contactus">
                        <ul>
                            <li>
                                <div class="info">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p class="in-p">{{ $kontak->first()->kontak_alamat }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p class="in-p">{{ $kontak->first()->kontak_telpon }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p class="in-p"><a href="mailto:{{ $kontak->first()->kontak_email }}">{{ $kontak->first()->kontak_email }}</a></p>
                                </div>
                            </li>
                        </ul>
                        <br>
                        @foreach ($sosial_media->all() as $sm)
                        <a href="{{ $sm->sosial_media_link }}" target="_blank"><i class="fa fa-lg fa-{{ $sm->sosial_media_nama }}" aria-hidden="true"></i></a> &nbsp;
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="second-footer">
        <div class="container">
            <p class="text-white">2020 © Copyright - All Rights Reserved.</p>
        </div>
    </div>
</footer>

<a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
<!-- END FOOTER -->

<!-- START PRELOADER -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- END PRELOADER -->
