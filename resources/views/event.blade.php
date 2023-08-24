@extends('layout/app')
@section('content')
    <section id="jumbotron-event">
        <div class="jumbotron-event bg-center">
            <h1 class="text-center title-jumbotron-profile">EVENT</h1>
            <h1 class="text-center fw-bold pt-2 subtitle-jumbotron-profile">DPC PERSAGI KARAWANG</h1>
            <p class="text-center pt-2 text-jumbotron-profile">Dapatkan informasi dan ikuti berbagai kegiatan yang diadakan oleh kami disini</p>
            <div class="text-center">
                <a href="#event" class="btn btn-light text-main border-main py-2 px-5 mt-4">Lihat Selengkapnya</a>
            </div>
        </div>
    </section>
    <!-- event Populer -->
    <section id="event" class="bg-white">
        <div class="container pb-5">
            <div class=" text-left py-5 m-auto">
                <h1>
                    Event <span class="text-title">Terbaru</span>
                </h1>
            </div>
            <div class="d-flex flex-wrap gap-2">
                @foreach ($events as $item)
                    <div class="card card-event" data-aos="fade-up">
                        <img src="http://localhost:8001/storage/{{ $item->gambar }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start text-title">{{ $item->judul }}</h5>
                            <div class="d-flex gap-2">
                                <p><img src="Assets/png/clarity_date-solid.png" width="18px" alt=""></p>
                                <p class="txt-foot">{{ $item->tanggal }}</p>
                            </div>
                            <div class="d-flex gap-2">
                                <p><img src="Assets/png/Vector.png" width="18px" alt=""></p>
                                <p class="txt-foot"> {{ $item->jam }}
                                </p>
                            </div>
                            <div class="d-flex gap-1">
                                <p><img src="Assets/png/fluent_location-16-filled.png" width="18px" alt=""></p>
                                <p class="txt-foot"> Online (Zoom Meeting)
                                </p>
                            </div>
                            <a href="/event/detail/{{ $item->slug }}" class="btn btn-light text-main border-main long">Baca Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pt-5">
                {{ $events->links() }}
            </div>
        </div>
    </section>
@endsection
