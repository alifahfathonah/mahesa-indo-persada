@extends('frontend.layouts.default')

@section('title', ' | Perumahan')

@section('content')
<!-- START SECTION PROPERTIES LISTING -->
<section class="properties-right featured portfolio blog">
    <div class="container">
        <div class="row">
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
                    <div class="item col-lg-4 col-md-4 col-xs-12 landscapes sale">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="/rumah/{{ $rumah->rumah_id }}" class="homes-img">
                                        <div class="homes-price">Rp. {{ number_format($rumah->rumah_harga) }}</div>
                                        <img src="{{ Storage::url($rumah->gambar->first()->rumah_gambar) }}" alt="home-1" class="img-responsive">
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
        </div>
        <nav aria-label="..." class="pt-55">
            {{ $data->links() }}
        </nav>
    </div>
</section>
<!-- END SECTION PROPERTIES LISTING -->
@endsection
