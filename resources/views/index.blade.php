@extends('layout/app')
@section('content')
    <div class="jumbotron bg-center">
        <div class="container pt-5">
            <h1 class="text-center title-jumbotron">
                Selamat datang di DPC Persagi Karawang
            </h1>
            <h2 class="text-center mt-3 h2-small text-jumbotron ">Kami hadir dengan bangga sebagai Persatuan Ahli Gizi
                Indonesia Cabang
                Karawang.
                Bersama-sama, kami mengajak Anda untuk meraih kesehatan optimal melalui informasi terkini
                seputar gizi, serta layanan unggulan yang dirancang khusus untuk masyarakat Karawang.</h2>
            <img src="Assets/png/jumbotron.png" alt="" class="img-fluid d-block mx-auto my-4 img-jumbotron">
            <button type="button" class="btn btn-lg button-lg d-block mx-auto btn-jumbotron no-hover">Layanan Utama
                Persagi</button>
        </div>
        <div class="d-flex flex-wrap justify-content-center gap-5 bg-center pb-7">
            <div class="card card-jumbotron">
                <div class="card-body">
                    <lottie-player src="https://lottie.host/f74a3e49-2b73-49ca-9a4e-045721bd37fb/Up1U9xfEYZ.json"
                        background="transparent" speed="1" style="width: 230px; height: 180px;" loop autoplay
                        class="mx-auto"></lottie-player>
                    <p class="text-main text-center fs-5 fw-bolder">Status Gizi</p>
                </div>
            </div>
            <div class="card card-jumbotron">
                <div class="card-body">
                    <lottie-player src="https://lottie.host/ec8387c7-9cc8-40f2-a609-2fb1f7bd70f7/oXUG2XSH9J.json"
                        background="transparent" speed="1" style="width: 230px; height: 180px;" loop autoplay
                        class="mx-auto"></lottie-player>
                    <p class="text-main text-center fs-5 fw-bolder">Konsultasi</p>

                </div>
            </div>

            <div class="card card-jumbotron">
                <div class="card-body">
                    <lottie-player src="https://lottie.host/7720c2ff-dad3-4202-b2aa-3c76427fdad4/S89oGx1Sjk.json"
                        background="transparent" speed="1" style="width: 230px; height: 180px;" loop autoplay
                        class="mx-auto"></lottie-player>
                    <p class="text-main text-center fs-5 fw-bolder">Pendaftaran Anggota</p>

                </div>
            </div>
        </div>
    </div>
    </div>


    <section class="bg-white pb-3">
        <div class="container mb-5">
            <div class="Artikel d-flex justify-content-center py-5 ">Artikel
            </div>
            <div class="swiper mySwiper py-5 ">
                <div class="swiper-wrapper">
                    @foreach ($artikels as $item)
                        <div class="card swiper-slide" style="width: 18rem;">
                            <img src="http://localhost:8000/storage/{{ $item->gambar }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-start text-title">{{ $item->judul }}</h5>
                                <p class="text-start text-secondary-emphasis">
                                    {{ \Carbon\Carbon::parse($item->created_at)->locale('id')->diffForHumans() }}</p>
                                <a href="#" class="btn btn-light text-main border-main long">Baca Selengkapnya</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div>

            </div><button class="btn btn-outline-art d-flex mx-auto mt-5 ">
                Lihat Artikel Lainnya
            </button>

        </div>
        </div>
    </section>

    <!--Event-->
    <section class="" style="background-color: #E1F3FF;">
        <div class="container">
            <div class="Artikel d-flex justify-content-center py-5">Event</div>
            <div class="d-flex flex-wrap justify-content-evenly">
                <button class="btn btn-primary btn-web button-event">Webinar</button>
                <button class="btn btn-secondary btn-l button-event">Lomba</button>
            </div>
            <div class="swiper mySwiper2 py-5 ">
                <div class="swiper-wrapper">
                    @foreach ($events as $event)
                    <div class="card swiper-slide d-flex gap-3 card-lg">
                        <div class="row">
                            <div class="col-4">
                                <img src="http://localhost:8000/storage/{{ $event->gambar }}" class="" alt="...">
                            </div>
                            <div class="col">
                                <div class="pt-3 ">
                                    <h5 class="text-start text-title">{{ $event->judul }}</h5>
                                    <div class="d-flex gap-2">
                                        <p><img src="Assets/png/clarity_date-solid.png" width="18px" alt=""></p>
                                        <p class="txt-foot">{{ $event->tanggal }}</p>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <p><img src="Assets/png/Vector.png" width="18px" alt=""></p>
                                        <p class="txt-foot"> {{ $event->jam }}
                                        </p>
                                    </div>
                                    <div class="d-flex gap-1">
                                        <p><img src="Assets/png/fluent_location-16-filled.png" width="18px"
                                                alt=""></p>
                                        <p class="txt-foot"> Online (Zoom Meeting)
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-light text-main border-main mb-3 me-auto ">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div>
                    <button class="btn btn-outline-art d-flex mx-auto mt-5">
                        Lihat Event Lainnya
                    </button>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
@endsection
