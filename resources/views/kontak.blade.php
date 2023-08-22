@extends('layout/app')
@section('content')
    <section id="jumbotron-kontak">
        <div class="jumbotron-kontak bg-center">
            <h1 class="text-center title-jumbotron-profile">INFORMASI KONTAK </h1>
            <h1 class="text-center fw-bold pt-2 subtitle-jumbotron-profile">DPC PERSAGI KARAWANG</h1>
            <p class="text-center pt-2 text-jumbotron-profile">Kenali DPC Persagi Karawang lebih detail, cari tahu apa saja
                visi,
                misi, serta layanan yang kami sediakan untuk membantu anda!</p>
            <div class="text-center">
                <a href="#kontak-kami" class="btn btn-light text-main border-main py-2 px-5 mt-4">Lihat Selengkapnya</a>
            </div>
        </div>
    </section>
    
    <section id="kontak-kami" class="pb-5">
        <div class="container-fluid">
            <div class="container justify-content-center d-flex align-items-center mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="fw-bold pt-5">Kontak Kami</h1>
                        <h3 class="text-main fw-semibold text-kontak">DPC PERSAGI KARAWANG</h3>
                        <p class="text-kontak"">Anda perlu bantuan? Berikut ini alamat yang bisa anda kunjungi serta kontak
                            yang bisa anda
                            hubungi</p>
                        <div class="pt-2">
                            <h5 class="text-main">Alamat</h5>
                            <div class="d-flex gap-2">
                                <img src="Assets/png/fluent_location-16-filled.png" class="icon" alt="">
                                <p class="text-kontak">Jalan Parahiyangan No.39, Adiarsa Bar., Kec. Karawang Bar., Karawang,
                                    Jawa Barat 41311</p>
                            </div>
                            <h5 class="text-main">Email</h5>
                            <div class="d-flex gap-2">
                                <img src="Assets/png/ic_round-email.png" class="icon" alt="">
                                <p class="text-kontak">dpcpersagi3215@gmail.com</p>
                            </div>
                            <h5 class="text-main">Telepon</h5>
                            <div class="d-flex gap-2">
                                <img src="Assets/png/material-symbols_call2.png" class="icon" alt="">
                                <p class="text-kontak">+62852 2620 3601</p>
                            </div>
                            <h5 class="text-main">Ikuti Kami</h5>
                            <div class="d-flex gap-2">
                                <a href=""><img src="Assets/png/mdi_instagram.png" class="icon" alt=""></a>
                                <p class="pe-4">Facebook</p>
                                <a href=""><img src="Assets/png/mdi_fb.png" class="icon" alt=""></a>
                                <p class="text-kontak">Instagram</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="pt-5">Tidak Menemukan Informasi Yang Anda Cari?</h2>
                        <p class="pt-3">Lengkapi form berikut ini untuk mendapatkan bantuan dari kami!</p>
                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            
                        @endif
                        <form action="{{ route('kontak.store') }}" method="POST" name="kontak-kami" class="col mb-3 pt-3">
                            @csrf
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-3 col-form-label"
                                    style="font-weight: bold; font-size: small">Nama *</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukkan nama anda" required="Nama tidak boleh kosong">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-3 col-form-label"
                                    style="font-weight: bold; font-size: small">Email *</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="Masukkan email anda" required="Email tidak boleh kosong">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="judul" class="col-sm-3 col-form-label"
                                    style="font-weight: bold; font-size: small">Judul *</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="judul" name="judul"
                                        placeholder="Judul Aspirasi">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="pesan" class="col-sm-3 col-form-label"
                                    style="font-weight: bold; font-size: small">Pesan *</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="pesan" name="pesan" required="Pesan tidak boleh kosong"
                                        placeholder="Masukkan pesan" style="min-height: 5rem"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9">
                                    <button id="btnSubmit" type="submit"
                                        class="btn btn-danger btn-primary">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="maps">
        <div class="container container-maps py-5 px-2">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5878516681496!2d107.30447377411514!3d-6.317743861821297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977cebb9afa29%3A0x67e83add75c68c4a!2sJl.%20Parahiyangan%20No.39%2C%20Adiarsa%20Bar.%2C%20Kec.%20Karawang%20Bar.%2C%20Karawang%2C%20Jawa%20Barat%2041311!5e0!3m2!1sen!2sid!4v1691586432090!5m2!1sen!2sid"
                width="100%" height="100%" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="maps"></iframe>
        </div>
    </section>
@endsection
