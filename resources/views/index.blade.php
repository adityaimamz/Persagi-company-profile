@extends('layout/app')
@section('content')
    <div class="jumbotron bg-center">
        <div class="container pt-5">
            <h1 class="text-center title-jumbotron" data-aos="fade-down">
                Selamat datang di DPC Persagi Karawang
            </h1>
            <h2 class="text-center mt-3 h2-small text-jumbotron" data-aos-delay="500" data-aos="fade-down">Kami hadir dengan bangga sebagai Persatuan Ahli Gizi
                Indonesia Cabang
                Karawang.
                Bersama-sama, kami mengajak Anda untuk meraih kesehatan optimal melalui informasi terkini
                seputar gizi, serta layanan unggulan yang dirancang khusus untuk masyarakat Karawang.</h2>
            <div data-aos-delay="500" data-aos="zoom-in">
                <img src="assets/png/hero-img.png" alt="" class="img-fluid d-block mx-auto my-4 img-jumbotron" >
                <button type="button" class="btn btn-lg button-lg d-block mx-auto btn-jumbotron no-hover">Layanan Utama
                    Persagi</button>
            </div>
        </div>
        <div class="d-flex flex-wrap justify-content-center gap-5 bg-center pb-7"  data-aos="zoom-in">
            <div class="card card-jumbotron">
                <div class="card-body lottie-card text-lottie">
                    <lottie-player src="https://lottie.host/f74a3e49-2b73-49ca-9a4e-045721bd37fb/Up1U9xfEYZ.json"
                        background="transparent" speed="1" style="width: 230px; height: 180px;" loop autoplay
                        class="mx-auto"></lottie-player>
                    <p class="text-center fs-5 fw-bolder">Status Gizi</p>
                </div>
            </div>
            <div class="card card-jumbotron">
                <div class="card-body lottie-card text-lottie">
                    <lottie-player src="https://lottie.host/ec8387c7-9cc8-40f2-a609-2fb1f7bd70f7/oXUG2XSH9J.json"
                        background="transparent" speed="1" style="width: 230px; height: 180px;" loop autoplay
                        class="mx-auto"></lottie-player>
                    <p class="text-center fs-5 fw-bolder">Konsultasi</p>
                </div>
            </div>

            <div class="card card-jumbotron">
                <div class="card-body lottie-card text-lottie">
                    <lottie-player src="https://lottie.host/7720c2ff-dad3-4202-b2aa-3c76427fdad4/S89oGx1Sjk.json"
                        background="transparent" speed="1" style="width: 230px; height: 180px;" loop autoplay
                        class="mx-auto"></lottie-player>
                    <p class="text-center fs-5 fw-bolder">Pendaftaran Anggota</p>

                </div>
            </div>
        </div>
    </div>
    </div>


    <section class="bg-white pb-3" style="height: 650px">
        <div class="container container-artikel">
            <h2 class="text-center Artikel py-4 fw-bold">Artikel
            </h2>
            <div class="swiper mySwiper pb-5">
                <div class="swiper-wrapper" data-aos-delay="200" data-aos="fade-up">
                    @foreach ($artikels as $item)
                        <!-- Tampilkan daftar artikel lainnya -->
                        <div class="swiper-slide">
                            <article class="cards">
                                <div class="thumb"
                                    style="background: url('http://127.0.0.1:8000/storage/{{ $item->gambar }}') no-repeat center;">
                                </div>
                                <div class="infos">
                                    <h2 class="title">{{ $item->judul }}</h2>
                                    <h3 class="date">
                                        {{ \Carbon\Carbon::parse($item->created_at)->locale('id')->diffForHumans() }}</h3>
                                    <p class="txt">
                                        {{ substr($item->meta_deskripsi, 0, 189) }}{{ strlen($item->meta_deskripsi) > 189 ? '...' : '' }}
                                    </p>
                                    <a href="/artikel/detail/{{ $item->slug }}" class="details cards-link">event
                                        details</a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!--Event-->
    <section class="" style="background-color: #E1F3FF;">
        <div class="container">
            <div class="Artikel d-flex justify-content-center py-5">Event</div>
            <div class="swiper mySwiper2 pt-1 pb-5"  data-aos-delay="200" data-aos="fade-up">
                <div class="swiper-wrapper">
                    @foreach ($events as $event)
                        <div class="card swiper-slide d-flex gap-3 card-lg">
                            <div class="row">
                                <div class="col-4">
                                    <img src="http://127.0.0.1:8001/storage/{{ $event->gambar }}" class="" alt="...">
                                </div>
                                <div class="col">
                                    <div class="pt-3 ">
                                        <h5 class="text-start text-title">{{ $event->judul }}</h5>
                                        <div class="d-flex gap-2">
                                            <p><img src="Assets/png/clarity_date-solid.png" width="18px" alt="">
                                            </p>
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
                                            <p class="txt-foot"> {{ $event->vanue }}
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
            <div class="swiper-pagination"></div>
        </div>
    </section>
@endsection
