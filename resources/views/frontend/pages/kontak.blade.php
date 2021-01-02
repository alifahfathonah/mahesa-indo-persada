@extends('frontend.layouts.default')

@section('title', ' | Kontak Kami')

@section('content')
<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <h1>Kontak Kami</h1>
            <h2><a href="/">Home </a> &nbsp;/&nbsp; Kontak Kami</h2>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION CONTACT US -->
<section class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 ">

        <div class="property-location mb-5">
            <h3>Lokasi Kami</h3>
            <div class="divider-fade"></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.6658259129326!2d116.2496042147845!3d-8.723247493733298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOMKwNDMnMjMuNyJTIDExNsKwMTUnMDYuNSJF!5e0!3m2!1sen!2sid!4v1609624770735!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
            </div>
            <div class="col-lg-4 col-md-12 bgc">
                <div class="call-info">
                    <h3>Kontak Detail</h3>
                    <ul>
                        <li>
                            <div class="info">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <p class="in-p">{{ config('constants.alamat') }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <p class="in-p">{{ config('constants.telpon') }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p class="in-p ti">{{ config('constants.mail') }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="info cll">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <p class="in-p ti">8:00 a.m - 9:00 p.m</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CONTACT US -->
@endsection
