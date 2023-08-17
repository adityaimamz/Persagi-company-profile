@extends('layout.app')
@section('content')
    <!-- Detail rtikel -->
    <section class="" style="background-color: #ffffff;">
        <div class="container py-5">
            <div class=" text-left text-head-art text-center py-3">
                <h1>
                    {{ $artikel->judul }}
                </h1>
            </div>
            <div class="d-flex flex-column gap-3">

                <div class="text-center txt-foot-art">
                    <p>{{ \Carbon\Carbon::parse($artikel->created_at)->isoFormat('dddd, D MMMM Y') }}</p>

                </div>
                <img src="http://localhost:8001/storage/{{ $artikel->gambar }}" class=" img-d-art mx-auto py-2"">

                <div class="container text-left py-3 text-justify">
                    {!! $artikel->konten !!}
                </div>
                <hr>

                <div class="">
                    <h1 class="text-start" style="font-size: 20px; font-weight: bolder; color: #2d2d2d;">
                        Bagikan Artikel
                    </h1>
                    <div class="d-flex gap-4 py-4">
                        <a href="#" id="copyLink"><img src="{{ asset('Assets/png/link-45deg 1.png') }}"
                                class="bg-dark" style="width: 30px; height: 30px; border-radius: 4px;"></a>


                        <a href=""><img src="{{ asset('Assets/png/fb.png') }}"
                                style="width: 30px; height: 30px; border-radius: 4px">
                        </a>

                        <a href=""><img src="{{ asset('Assets/png/ig.png') }}"
                                style="width: 30px; height: 30px; border-radius: 4px"></a>

                        <a href=""> <img src="{{ asset('Assets/png/wa.png') }}" style="width: 30px; height:30px; ">
                        </a>
                    </div>
                    <button class="alert alert-success alert-dismissible fade show" id="copyButton"
                        style="display: none;">URL tersalin</button>

                </div>
            </div>
        </div>
        </div>
    </section>


    <!--Artikel Lainnya-->
    <section class="bg-white pb-3">
        <div class="container">
            <h2 class="d-flex text-start pb-5 gap-2 fw-bold">Artikel
                <span class="text-main"> Lainya</span>
            </h2>
            <div class="swiper mySwiper pb-5">
                <div class="swiper-wrapper">
                    @foreach ($artikels as $item)
                        <!-- Tampilkan daftar artikel lainnya -->
                        <div class="card swiper-slide" style="width: 18rem;">
                            <img src="http://localhost:8001/storage/{{ $item->gambar }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-start text-title">{{ $item->judul }}</h5>
                                <p class="text-start text-secondary-emphasis">
                                    {{ \Carbon\Carbon::parse($item->created_at)->locale('id')->diffForHumans() }}</p>
                                <a href="/artikel/detail/{{ $item->slug }}"
                                    class="btn btn-light text-main border-main long">Baca Selengkapnya</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
@endsection
