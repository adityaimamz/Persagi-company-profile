@extends('layout.app')
@section('content')
    <!-- Detail rtikel -->
    <section id="kontak-kami" class="pb-5">
        <div class="container-fluid">
            <div class="container justify-content-center d-flex align-items-center mt-5">
                <div class="row">
                    <div class="col-md-4 pt-5">
                        <img src="http://localhost:8001/storage/{{ $event->gambar }}" class="img-fluid img-event"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <h1 class="fw-bold pt-5">{{ $event->judul }}</h1>
                        <div class="pt-3 ">
                            <h5 class="text-start text-title">{{ $event->judul }}</h5>
                            <div class="d-flex gap-2">
                                <p><img src="{{ asset('assets/png/Calender.png') }}" width="18px"
                                        alt=""></p>
                                <p class="txt-foot">{{ $event->tanggal }}</p>
                            </div>
                            <div class="d-flex gap-2">
                                <p><img src="{{ asset('assets/png/Vector.png') }}" width="18px" alt=""></p>
                                <p class="txt-foot"> {{ $event->jam }}
                                </p>
                            </div>
                            <div class="d-flex gap-1">
                                <p><img src="{{ asset('assets/png/fluent_location-16-filled.png') }}" width="18px"
                                        alt=""></p>
                                <p class="txt-foot"> Online (Zoom Meeting)
                                </p>
                            </div>
                        </div>
                    </div>
                    <p class="pt-3 fs-1 text-justify">{!! $event->deskripsi !!}</p>
                </div>
    </section>

    <div class="container">

        <div class="">
            <h1 class="text-start" style="font-size: 20px; font-weight: bolder; color: #2d2d2d;">
                Bagikan event
            </h1>
            <div class="d-flex gap-4 py-4">
                <a href="#" id="copyLink"><img src="{{ asset('Assets/png/link-45deg 1.png') }}" class="bg-dark"
                        style="width: 30px; height: 30px; border-radius: 4px;"></a>
                <a href=""><img src="{{ asset('Assets/png/fb.png') }}"
                        style="width: 30px; height: 30px; border-radius: 4px">
                </a>
                <a href=""><img src="{{ asset('Assets/png/ig.png') }}"
                        style="width: 30px; height: 30px; border-radius: 4px"></a>
                <a href=""> <img src="{{ asset('Assets/png/wa.png') }}" style="width: 30px; height:30px; ">
                </a>
            </div>
            <button class="alert alert-success alert-dismissible fade show" id="copyButton" style="display: none;">URL
                tersalin</button>

        </div>
    </div>
    <!--event Lainnya-->
    <section class="bg-white pb-3">
        <div class="container">
            <h2 class="d-flex text-start pb-5 gap-2 fw-bold">Event
                <span class="text-main"> Lainya</span>
            </h2>
            <div class="swiper mySwiper2 pt-1 pb-5 ">
                <div class="swiper-wrapper">
                    @foreach ($events as $event)
                        <div class="card swiper-slide d-flex gap-3 card-lg">
                            <div class="row">
                                <div class="col-4">
                                    <img src="http://localhost:8001/storage/{{ $event->gambar }}" class=""
                                        alt="...">
                                </div>
                                <div class="col">
                                    <div class="pt-3 ">
                                        <h5 class="text-start text-title">{{ $event->judul }}</h5>
                                        <div class="d-flex gap-2">
                                            <p><img src="{{ asset('assets/png/Calender.png') }}" width="18px"
                                                    alt=""></p>
                                            <p class="txt-foot">{{ $event->tanggal }}</p>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <p><img src="{{ asset('assets/png/Vector.png') }}" width="18px"
                                                    alt=""></p>
                                            <p class="txt-foot"> {{ $event->jam }}
                                            </p>
                                        </div>
                                        <div class="d-flex gap-1">
                                            <p><img src="{{ asset('assets/png/fluent_location-16-filled.png') }}"
                                                    width="18px" alt=""></p>
                                            <p class="txt-foot"> Online (Zoom Meeting)
                                            </p>
                                        </div>
                                        <a href="/event/detail/{{$event->slug}}" class="btn btn-light text-main border-main mb-3 me-auto ">Baca
                                            Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div>
                    <a href="/event">
                        <button class="btn btn-outline-art d-flex mx-auto mt-5">
                            Lihat Event Lainnya
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
