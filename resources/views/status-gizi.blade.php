@extends('layout/app')
@section('content')
    <section id="jumbotron-artikel">
        <div class="jumbotron-layanan bg-center rounded-bottom">
            <div class="container  px-1">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="py-10">Layanan Status Gizi</h1>
                        <p class="text-justify">Layanan ini kami sediakan untuk mengukur proporsi antara berat badan
                            seseorang dengan tinggi
                            badannya dengan menggunakan perhitungan IMT (Indeks Massa Tubuh), yaitu metode yang umum
                            digunakan untuk mengidentifikasi apakah seseorang berada dalam kisaran berat badan yang sehat
                            atau mengalami masalah gizi seperti kelebihan berat badan atau kekurangan berat badan.</p>
                        <a href="#imt" class="btn btn-imt text-white border-main mt-1">Hitung IMT</a>
                    </div>
                    <div class="col-md-4">
                        <lottie-player src="https://lottie.host/f74a3e49-2b73-49ca-9a4e-045721bd37fb/Up1U9xfEYZ.json"
                            background="transparent" speed="1" style="width: 450px; height:380px;" loop autoplay
                            class="img-fluid rounded-start mx-auto lottie"></lottie-player>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="imt">
        <div class="container pt-5">
            <div class="card card-imt">
                <div class="card-header text-center bg-main fs-4">Kalkulator Indeks Masa Tubuh
                </div>
                <div class="card-body text-center">
                    <h4>Pilih Kategori</h4>
                    <div class="d-flex flex-wrap justify-content-center pt-2">
                        <ul class="nav nav-pills mb-3 gap-3" id="pills-tab" role="tablist">
                            <li class="nav-item nav-tabs" role="presentation">
                                <img src="{{ asset('assets/png/dewasa.png') }}" alt="Dewasa" class="button-icon">
                                <button class="nav-link active nav-link-imt" id="pills-dewasa-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-dewasa" type="button" role="tab"
                                    aria-controls="pills-dewasa" aria-selected="true">Dewasa</button>
                            </li>
                            <li class="nav-item nav-tabs" role="presentation">
                                <img src="{{ asset('assets/png/balita.png') }}" alt="Balita" class="button-icon pt-3">
                                <button class="nav-link nav-link-imt" id="pills-balita-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-balita" type="button" role="tab"
                                    aria-controls="pills-balita" aria-selected="false">Balita</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- End Card with header and footer -->
            <div class="card mt-4 card-imt">
                <div class="card-body">
                    <div class="tab-content pt-2" id="myTabContent">
                        <div class="tab-pane fade show active" id="pills-dewasa" role="tabpanel"
                            aria-labelledby="dewasa-tab">
                            <div class="container" style="max-width: 700px">
                                <h4 class="text-center">Masukan Data</h4>
                                {{-- <input type="hidden" name="id" value="{{ Auth::user()->id }}"> --}}
                                <div class="row mb-3">
                                    <label for="jenisKelamin" class="col-md-4 col-lg-3 col-form-label">Jenis
                                        Kelamin</label>
                                    <div class="col-md-8 col-lg-9 gap-3 pt-2 gap-2">
                                        <input type="radio" name="jenisKelamin" id="lakiLaki" value="laki-laki" required="tidak boleh kosong">
                                        <label for="lakiLaki">Laki-Laki</label>

                                        <input type="radio" class="" name="jenisKelamin" id="perempuan" required="tidak boleh kosong"
                                            value="perempuan">
                                        <label for="perempuan">Perempuan</label>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="beratBadan" class="col-md-4 col-lg-3 col-form-label">
                                        Berat Badan (kg)</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="beratBadan" type="number" class="form-control" id="beratBadan" required="tidak boleh kosong">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="tinggiBadan" class="col-md-4 col-lg-3 col-form-label">
                                        Tinggi Badan (cm)</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="tinggiBadan" type="number" class="form-control" id="tinggiBadan" required="tidak boleh kosong">
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    <button type="submit" class="btn btn-primary w-full" id="hitungBMI">Hitung IMT</button>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade " id="pills-balita" role="tabpanel" aria-labelledby="balita-tab">
                            <div class="container" style="max-width: 700px">
                                <img src="{{ asset('assets/png/maintance.png') }}" alt="">
                                {{-- <h4 class="text-center">Masukan Data</h4> --}}
                                {{-- <form action="{{ route('login.change') }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="jenisKelamin" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-md-8 col-lg-9 gap-3 pt-2 gap-2">
                                            <input type="radio" name="jenisKelamin" id="lakiLaki" value="laki-laki" required>
                                            <label for="lakiLaki">Laki-Laki</label>
                                    
                                            <input type="radio" class="" name="jenisKelamin" id="perempuan" value="perempuan" required>
                                            <label for="perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                    

                                    <div class="row mb-3">
                                        <label for="tanggalLahir" class="col-md-4 col-lg-3 col-form-label">
                                            Tanggal Lahir</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="tanggalLahir" type="date" class="form-control"
                                                id="tanggalLahir">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="tanggalDiukur" class="col-md-4 col-lg-3 col-form-label">
                                            Tanggal Diukur</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="tanggalDiukur" type="date" class="form-control"
                                                id="tanggalDiukur">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="usiaDiukur" class="col-md-4 col-lg-3 col-form-label">
                                            Usia Diukur (Bulan)</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="usiaDiukur" type="number" class="form-control" id="usiaDiukur"
                                                disabled>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="beratBadan" class="col-md-4 col-lg-3 col-form-label">
                                            Berat Badan (kg)</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="beratBadan" type="number" class="form-control"
                                                id="beratBadan">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="tinggiBadan" class="col-md-4 col-lg-3 col-form-label">
                                            Tinggi Badan (cm)</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="tinggiBadan" type="number" class="form-control"
                                                id="tinggiBadan">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3">
                                        <button type="submit" class="btn btn-primary w-full">Hitung IMT</button>
                                    </div>
                                </form> --}}
                            </div>
                        </div>
                    </div><!-- End Pills Tabs -->
                </div>
            </div>

            <div class="card mt-4 card-imt">
                <div class="card-body">
                    <h4 class="text-center">Hasil perhitungan</h4>
                    <div id="hasil" style="max-width: 750px text-center">

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            var tanggalLahirInput = document.getElementById("tanggalLahir");
            var tanggalDiukurInput = document.getElementById("tanggalDiukur");
            var usiaDiukurInput = document.getElementById("usiaDiukur");

            tanggalLahirInput.addEventListener("change", updateUsiaDiukur);
            tanggalDiukurInput.addEventListener("change", updateUsiaDiukur);

            function updateUsiaDiukur() {
                var tanggalLahir = new Date(tanggalLahirInput.value);
                var tanggalDiukur = new Date(tanggalDiukurInput.value);

                var diffInDays = Math.floor((tanggalDiukur - tanggalLahir) / (1000 * 60 * 60 * 24));
                var diffInMonths = Math.floor(diffInDays / 30) + (diffInDays % 30 == 0 ? 1 : 0);

                usiaDiukurInput.value = diffInMonths;
            }
        });
    </script> --}}
    <script>
        $("#hitungBMI").on("click", function() {
            let perhitungan = $("#beratBadan").val() / (($("#tinggiBadan").val() / 100) ** 2);
            if (perhitungan < 18.5) {
                $("#hasil").html(`
                <p class="text-center fs-4">IMT Kamu : <span class="text-main">${perhitungan.toFixed(2)}</span>  </p>
                <p class="text-center">Berdasarkan perhitungan diatas, anda termasuk orang yang kurus. </p>
                <p class="text-center">Pastikan kamu mengonsumsi makanan kaya protein seperti daging tanpa lemak, ikan, telur, dan kacang-kacangan. Jangan lupa untuk tambahkan lemak sehat seperti alpukat, kacang-kacangan, dan minyak zaitun. Tetap konsumsi karbohidrat seperti nasi merah untuk energi.</p>
                <div class="text-center mb-3">
                    <a href="/konsultasi"><button id="btnSubmit" style="width:250px" type="submit" class="btn btn-primary">Konsultasikan Gizimu</button></a>
                </div>
            `)
            } else if (perhitungan >= 18.5 && perhitungan <= 24.9) {
                $("#hasil").html(`
                <p class="text-center fs-4">IMT Kamu : <span class="text-main">${perhitungan.toFixed(2)}</span>  </p>
                <p class="text-center">Berdasarkan perhitungan diatas, anda termasuk orang yang Normal. </p>
                <p class="text-center">Apabila anda merasa kebingungan untuk menjaga tubuh anda, silakan konsultasi dengan pakar gizi.</p>
            `)
            } else if (perhitungan >= 25 && perhitungan <= 27) {
                $("#hasil").html(`
                <p class="text-center fs-4">IMT Kamu : <span class="text-main">${perhitungan.toFixed(2)}</span>  </p>
                <p class="text-center">Berdasarkan perhitungan diatas, anda termasuk orang yang Gemuk. </p>
                <p class="text-center">sebaiknya anda melakukan konsultasi dengan pakar gizi agar tubuh anda menjadi normal.</p>
                <div class="text-center mb-3">
                    <a href="/konsultasi"><button id="btnSubmit" style="width:250px" type="submit" class="btn btn-primary">Konsultasikan Gizimu</button></a>
                </div>
            `)
            } else if (perhitungan > 27) {
                $("#hasil").html(`
            <p class="text-center fs-4">IMT Kamu : <span class="text-main">${perhitungan.toFixed(2)}</span>  </p>
                <p class="text-center">Berdasarkan perhitungan diatas, anda termasuk orang yang Obesitas. </p>
                <p class="text-center">sebaiknya anda melakukan konsultasi dengan pakar gizi agar tubuh anda menjadi normal.</p>
                <div class="text-center mb-3">
                    <a href="/konsultasi"><button id="btnSubmit" style="width:250px" type="submit" class="btn btn-primary">Konsultasikan Gizimu</button></a>
                </div>            `)
            }
        });
    </script>
@endsection
