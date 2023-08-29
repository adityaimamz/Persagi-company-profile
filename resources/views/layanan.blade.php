@extends('layout/app')
@section('content')
    <section id="jumbotron-artikel">
        <div class="jumbotron-layanan bg-center">
            <h1 class="text-center title-jumbotron-profile">LAYANAN</h1>
            <h1 class="text-center fw-bold pt-2 subtitle-jumbotron-profile">DPC PERSAGI KARAWANG</h1>
            <p class="text-center pt-2 text-jumbotron-profile">Apa saja layanan yang disediakan oleh DPC Persagi Karawang?
                Simak beberapa layanan yang kami sediakan dibawah ini!</p>
            <div class="text-center">
                <a href="#layanan" class="btn btn-light text-main border-main py-2 px-5 mt-4">Lihat Selengkapnya</a>
            </div>
        </div>
    </section>
    <!-- Artikel Populer -->
    <section id="layanan" class="jumbotron bg-secondary">
        <div class="container pb-5">
            <div class=" text-left py-5" data-aos="fade-right">
                <h1 class="fw-bold">LAYANAN</h1>
                <h3 class="text-main fw-semibold text-kontak">DPC PERSAGI KARAWANG</h3>
                <p class="text-kontak"">Berikut 3 Layanan utama yang kami sediakan untuk anda</p>
            </div>
            <div class="card mb-3" style="max-width: 100%;" data-aos-delay="200" data-aos-duration="1000" data-aos="fade-in">
                <div class="row g-0">
                    <div class="col-md-3">
                        <lottie-player src="https://lottie.host/f74a3e49-2b73-49ca-9a4e-045721bd37fb/Up1U9xfEYZ.json"
                            background="transparent" speed="1" style="width: 280px; height:230px;" loop autoplay
                            class="img-fluid rounded-start mx-auto"></lottie-player>
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <h5 class="card-title">Status Gizi</h5>
                            <p class="card-text text-justify">Layanan ini adalah solusi cepat dan efektif untuk menilai
                                status gizi pada
                                balita dan orang dewasa melalui perhitungan Indeks Masa Tubuh (IMT). IMT adalah metode
                                sederhana yang mengukur proporsi berat badan terhadap tinggi badan. Dengan memasukkan data
                                berat dan tinggi, layanan ini memberikan informasi penting mengenai kategori gizi, membantu
                                dalam pemantauan pertumbuhan dan identifikasi risiko gizi yang perlu diperhatikan. Ini
                                merupakan alat yang bermanfaat bagi orang tua, perawat, dan tenaga kesehatan dalam menjaga
                                kesehatan dan nutrisi yang tepat bagi semua kelompok usia.</p>
                            <a href="/imt"> <button id="btnSubmit" type="submit"
                                    class="btn btn-primary w-full">Baca
                                    Selengkapnya</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 100%;" data-aos-duration="1000" data-aos="fade-in">
                <div class="row g-0">
                    <div class="col-md-3">
                        <lottie-player src="https://lottie.host/ec8387c7-9cc8-40f2-a609-2fb1f7bd70f7/oXUG2XSH9J.json"
                            background="transparent" speed="1" style="max-width: 280px; height: 230px;" loop autoplay
                            class="img-fluid rounded-start mx-auto"></lottie-player>
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <h5 class="card-title">Konsultasi</h5>
                            <p class="card-text text-justify">Layanan ini merupakan jembatan antara Anda dan para ahli gizi
                                terkualifikasi untuk menemukan solusi gizi yang sesuai dengan kebutuhan dan kondisi
                                kesehatan Anda. Baik Anda ingin mengatasi masalah berat badan, mengelola kondisi medis
                                tertentu, atau hanya ingin memahami bagaimana menjalani gaya hidup sehat, para ahli gizi
                                kami siap membantu. Dengan konsultasi langsung, Anda dapat berdiskusi tentang tujuan Anda,
                                mendapatkan rekomendasi pribadi, serta merencanakan pola makan yang sesuai dengan gaya hidup
                                dan preferensi Anda. Dengan dukungan ahli gizi, Anda dapat mengambil langkah-langkah konkret
                                untuk mencapai keseimbangan gizi dan kesejahteraan yang optimal.</p>
                            <a href="konsultasi"> <button id="btnSubmit" type="submit"
                                    class="btn btn-primary w-full">Baca
                                    Selengkapnya</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 100%;" data-aos-duration="1000" data-aos="fade-in">
                <div class="row g-0">
                    <div class="col-md-3">
                        <lottie-player src="https://lottie.host/7720c2ff-dad3-4202-b2aa-3c76427fdad4/S89oGx1Sjk.json"
                            background="transparent" speed="1" style="max-width: 280px; height: 230px;" loop autoplay
                            class="img-fluid rounded-start mx-auto"></lottie-player>
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <h5 class="card-title">Pendaftaran Anggota DPC Persagi Karawang</h5>
                            <p class="card-text text-justify">Siap untuk menjadi bagian dari komunitas yang berfokus pada
                                perkembangan
                                pribadi dan kolektif? Layanan pendaftaran anggota kami memberi Anda kesempatan untuk
                                terlibat dalam berbagai kegiatan, membangun jaringan, dan berkontribusi pada tujuan bersama.
                                Bergabunglah sekarang dan jadilah bagian dari perubahan positif!</p>
                            <a href=""> <button id="btnSubmit" type="submit"
                                    class="btn btn-primary w-full mt-5">Baca
                                    Selengkapnya</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
