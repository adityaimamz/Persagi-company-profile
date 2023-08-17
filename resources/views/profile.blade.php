@extends('layout/app')
@section('content')
    <section id="jumbotron-profile">
        <div class="jumbotron-profile bg-center">
            <h1 class="text-center title-jumbotron-profile">PROFIL</h1>
            <h1 class="text-center fw-bold pt-2 subtitle-jumbotron-profile">DPC PERSAGI KARAWANG</h1>
            <p class="text-center pt-2 text-jumbotron-profile">Kenali DPC Persagi Karawang lebih detail, cari tahu apa saja
                visi,
                misi, serta layanan yang kami sediakan untuk membantu anda!</p>
            <div class="text-center">
                <a href="#tentang-kami" class="btn btn-light text-main border-main py-2 px-5 mt-4">Lihat Selengkapnya</a>
            </div>
        </div>
    </section>
    <section id="tentang-kami">
        <div class="container container-profile d-flex align-items-center">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="title-profile">TENTANG KAMI</h1>
                    <h2 class="text-main">DPC PERSAGI KARAWANG</h2>
                    <p class="mt-4 fs-9 text-justify text-profile">Kami adalah wadah bagi para ahli gizi dan pemerhati kesehatan di
                        Karawang
                        yang berkomitmen untuk menjadikan gizi
                        sebagai pilar utama dalam membangun masyarakat yang kuat dan sehat.</p>
                    <p class="fs-9 text-justify text-profile">Sebagai bagian dari Persatuan Ahli Gizi Indonesia, kami hadir dengan
                        semangat
                        kolektif untuk menginspirasi,
                        mendidik, dan mendorong perubahan positif dalam gaya hidup dan pola makan.</p>
                </div>
                <div class="col-md-5 text-md-end">
                    <img src="{{ asset('assets/png/Logo.png') }}" class="img-profile" alt="">
                </div>
            </div>
        </div>
    </section>


    <div class="text-center bg-main py-3">
        <h1 class="fw-bold">Visi & Misi</h1>
        <h3>DPC PERSAGI KARAWANG</h3>
    </div>
    <section id="visi-misi" class="jumbotron bg-secondary visi-misi">
        <div class="container pt-5">
            <div class="card mx-auto bg-main text-center" style="max-width: 47rem; border-radius:0">
                <div class="card-header" style="font-size: 24px">
                    Visi
                </div>
                <ul class="list-group list-group-flush text-visi">
                    <li class="list-group-item"">Lorem ipsum dolor sit amet consectetur. Porttitor
                        feugiat laoreet cursus
                        facilisi. Vulputate vestibulum accumsan aliquet massa gravida hac volutpat vitae cras. Lorem euismod
                        nam
                        sed pretium turpis nisi viverra. Pretium est risus sed fusce.</li>
                </ul>
            </div>

            <div class="card mx-auto bg-main text-center mt-5" style="max-width: 47rem; border-radius:0">
                <div class="card-header" style="font-size: 24px">
                    Misi
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-visi">
                        <p>Lorem ipsum dolor sit amet consectetur. Porttitor feugiat laoreet cursus
                            facilisi. Vulputate vestibulum accumsan aliquet massa gravida hac volutpat vitae cras. Lorem
                            euismod nam
                            sed pretium turpis nisi viverra. Pretium est risus sed fusce.</p>
                        <p>Lorem ipsum dolor sit amet consectetur. Porttitor feugiat laoreet cursus
                            facilisi. Vulputate vestibulum accumsan aliquet massa gravida hac volutpat vitae cras. Lorem
                            euismod nam
                            sed pretium turpis nisi viverra. Pretium est risus sed fusce.</p>
                        <p>Lorem ipsum dolor sit amet consectetur. Porttitor feugiat laoreet cursus
                            facilisi. Vulputate vestibulum accumsan aliquet massa gravida hac volutpat vitae cras. Lorem
                            euismod nam
                            sed pretium turpis nisi viverra. Pretium est risus sed fusce.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="struktur-organisasi">
        <div class="container text-center">
            <h1 class="fw-bold pt-5">Struktur Organisasi</h1>
            <h3 class="text-main fw-semibold">DPC PERSAGI KARAWANG</h3>
            <div class="my-5">
                <img src="Assets/png/struktur organisasi.png" class="img-struktur" alt="">
            </div>
        </div>
    </section>
@endsection
