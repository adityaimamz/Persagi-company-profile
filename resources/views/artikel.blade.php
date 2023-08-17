@extends('layout/app')
@section('content')
    <section id="jumbotron-artikel">
        <div class="jumbotron-event bg-center">
            <h1 class="text-center title-jumbotron-profile">ARTIKEL</h1>
            <h1 class="text-center fw-bold pt-2 subtitle-jumbotron-profile">DPC PERSAGI KARAWANG</h1>
            <p class="text-center pt-2 text-jumbotron-profile">Dapatkan informasi berbagai artikel dari Persagi</p>
            <div class="text-center">
                <a href="#artikel" class="btn btn-light text-main border-main py-2 px-5 mt-4">Lihat Selengkapnya</a>
            </div>
        </div>
    </section>

    <!-- Artikel Populer -->
    <section id="artikel" class="bg-white">
        <div class="container pb-5">
            <div class=" text-left py-5 m-auto">
                <h1>
                    Artikel <span class="text-title">Terbaru</span>
                </h1>
            </div>
            <div class="d-flex flex-wrap gap-3">
                @foreach ($artikels as $item)
                    <div class="card card-artikel">
                        <img src="http://localhost:8001/storage/{{ $item->gambar }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start text-title">{{ $item->judul }}</h5>
                            <div class="d-flex gap-2">
                                <p class="txt-mid-art py-2 artikel-deskripsi">
                                    {{ substr($item->meta_deskripsi, 0, 120) }}{{ strlen($item->meta_deskripsi) > 120 ? '...' : '' }}
                                </p>
                            </div>
                            <p class="text-start text-secondary-emphasis">
                                {{ \Carbon\Carbon::parse($item->created_at)->locale('id')->diffForHumans() }}
                            </p>
                            <a href="/artikel/detail/{{ $item->slug }}" class="btn btn-light text-main border-main long">Baca Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pt-5">
                {{ $artikels->links() }}
            </div>
        </div>
    </section>
@endsection
