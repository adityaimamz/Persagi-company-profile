@extends('layout.app')

@section('content')
    <section id="jumbotron-artikel">
        <div class="jumbotron-layanan bg-center rounded-bottom">
            <div class="container  px-1">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="py-10">Layanan Konsultasi
                        </h1>
                        <p class="text-justify">Layanan ini merupakan jembatan antara Anda dan para ahli gizi terkualifikasi
                            untuk menemukan solusi gizi yang sesuai dengan kebutuhan dan kondisi kesehatan Anda. Baik Anda
                            ingin mengatasi masalah berat badan, mengelola kondisi medis tertentu, atau hanya ingin memahami
                            bagaimana menjalani gaya hidup sehat, para ahli gizi kami siap membantu. Dengan konsultasi
                            langsung, Anda dapat berdiskusi tentang tujuan Anda, mendapatkan rekomendasi pribadi, serta
                            merencanakan pola makan yang sesuai dengan gaya hidup dan preferensi Anda. Dengan dukungan ahli
                            gizi, Anda dapat mengambil langkah-langkah konkret untuk mencapai keseimbangan gizi dan
                            kesejahteraan yang optimal.</p>
                        <a href="#imt" class="btn btn-imt text-white border-main mt-1">Konsultasi Sekarang</a>
                    </div>
                    <div class="col-md-4">
                        <lottie-player src="https://lottie.host/ec8387c7-9cc8-40f2-a609-2fb1f7bd70f7/oXUG2XSH9J.json"
                            background="transparent" speed="1" style="width: 450px; height:380px;" loop autoplay
                            class="img-fluid rounded-start mx-auto lottie"></lottie-player>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="konsultasi">
        <div class="container py-5 text-center">
            <h1 class="fw-semibold">3 Langkah Mudah </h1>
            <h2 class="text-main fw-semibold">Konsultasi gizi di PDC Persagi Karawang</h2>
            <div class="container">
                <div class="grid text-center d-flex flex-wrap justify-content-center gap-3 pt-5">
                    <div class="card g-col-6 g-col-md-4" style="width: 21rem;">
                        <div class="card-header bg-main">
                            Langkah 1
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('assets/png/image 455.png') }}" width="80px" class="pt-3" alt="">
                            <h5 class="pt-4 fw-semibold">Isi Formulir Konsultasi</h5>
                            <p class="pt-45">isi formulir dibawah ini dengan data yang benar beserta keluhan yang anda
                                rasakan</p>
                        </div>
                    </div>
                    <div class="card g-col-6 g-col-md-4" style="width: 21rem;">
                        <div class="card-header bg-main">
                            Langkah 2
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('assets/png/image 456.png') }}" width="110px" class="" alt="">
                            <h5 class=" fw-semibold">Tunggu Informasi balasan dari admin Persagi</h5>
                            <p class="pt-3">Setelah mengisi form, anda akan dihubungi admin persagi untuk informasi
                                selanjutnya melalui
                                whatsapp.</p>
                        </div>
                    </div>
                    <div class="card g-col-6 g-col-md-4" style="width: 21rem;">
                        <div class="card-header bg-main">
                            Langkah 3
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('assets/png/image 457.png') }}" width="100px" class="pt-2" alt="">
                            <h5 class="pt-3 fw-semibold">Lakukan Konsultasi dengan ahli gizi</h5>
                            <p class="pt-3">Setelah mendapat informasi dari admin, lakukan konsultasi dengan ahli gizi
                                yang sudah
                                ditentukan sesuai dengan keluhan anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="container" style="max-width: 700px">
            <h2 class="pt-3 text-center fw-semibold">Form Konsultasi</h2>
            <p class="text-center">Isi form berikut dengan benar dan jelas. Segala informasi yang diisikan disini untuk keperluan kelanjutan
                konsultasi. setelah mengisi form, tunggu beberapa hari untuk mendapatkan info lanjutan dari pihak persagi
                terkait konsultasi</p>
            <form action="{{ route('konsultasi.store') }}" method="POST" class="text-main ">
                @csrf
                <div class="mb-">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <label for="Nama Pemohon" class="col-md-4 col-lg-3 col-form-label">Nama Pemohon</label>
                    <input type="text" class="form-control" name="pemohon" value="{{ Auth::user()->name }}" disabled>
                </div>
                <div class="mb-">
                    <label for="Nama pasien" class="col-md-4 col-lg-3 col-form-label">Nama Pasien</label>
                    <input type="text" class="form-control" name="pasien" placeholder="Masukan nama p   asien, jika pasian adalah pemohon tulis ulang nama">
                </div>
                <div class="mb-">
                    <label for="telp" class="col-md-4 col-lg-3 col-form-label">No Telepon</label>
                    <input type="text" class="form-control" name="no_telepon" placeholder="Masukan no telepon">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="Nama pasien" class="col-md-6 col-lg-5 col-form-label">Berat Badan (Kg)</label>
                        <input type="text" class="form-control" name="berat_badan" placeholder="Masukan berat badan">
                    </div>
                    <div class="col-md-6">
                        <label for="Nama pasien" class="col-md-6 col-lg-5 col-form-label">Tinggi Badan (Cm)</label>
                        <input type="text" class="form-control" name="tinggi_badan" placeholder="Masukan tinggi badan">
                    </div>
                </div>
                <div class="mb-">
                    <label for="Nama pasien" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir">
                </div>
                <div class="mb-">
                    <label for="Nama pasien" class="col-md-4 col-lg-3 col-form-label">Tanggal Konsultasi</label>
                    <input type="date" class="form-control" name="jadwal_konsultasi">
                </div>
                <div class="mb-3">
                    <label for="Nama pasien" class="col-md-4 col-lg-3 col-form-label">Keluhan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="keluhan" placeholder="Masukan Deskripsi Keluhan Utama pasien dan jika pasien memiliki riwayat penyakit harap dicantumkan "></textarea>
                </div>
                <div class="mb-5">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </section>
@endsection
