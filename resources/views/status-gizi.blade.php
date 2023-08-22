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
                                <button class="nav-link active" id="pills-dewasa-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-dewasa" type="button" role="tab"
                                    aria-controls="pills-dewasa" aria-selected="true">Dewasa</button>
                            </li>
                            <li class="nav-item nav-tabs" role="presentation">
                                <button class="nav-link" id="pills-balita-tab" data-bs-toggle="pill"
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
                                <form action="{{ route('login.change') }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    {{-- <input type="hidden" name="id" value="{{ Auth::user()->id }}"> --}}
                                    <div class="row mb-3">
                                        <label for="jenisKelamin" class="col-md-4 col-lg-3 col-form-label">Jenis
                                            Kelamin</label>
                                        <div class="col-md-8 col-lg-9 gap-3 pt-2 gap-2">
                                            <input type="radio" name="jenisKelamin" id="lakiLaki" value="laki-laki">
                                            <label for="lakiLaki">Laki-Laki</label>

                                            <input type="radio" class="" name="jenisKelamin" id="perempuan"
                                                value="perempuan">
                                            <label for="perempuan">Perempuan</label>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="beratBadan" class="col-md-4 col-lg-3 col-form-label">
                                            Berat Badan (kg)</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="beratBadan" type="number" class="form-control" id="beratBadan">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="tinggiBadan" class="col-md-4 col-lg-3 col-form-label">
                                            Tinggi Badan (cm)</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="tinggiBadan" type="number" class="form-control" id="tinggiBadan">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3">
                                        <button type="submit" class="btn btn-primary w-full">Hitung IMT</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="tab-pane fade " id="pills-balita" role="tabpanel" aria-labelledby="balita-tab">
                            <div class="container" style="max-width: 700px">
                                <h4 class="text-center">Masukan Data</h4>
                                <form action="{{ route('login.change') }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    {{-- <input type="hidden" name="id" value="{{ Auth::user()->id }}"> --}}
                                    <div class="row mb-3">
                                        <label for="jenisKelamin" class="col-md-4 col-lg-3 col-form-label">Jenis
                                            Kelamin</label>
                                        <div class="col-md-8 col-lg-9 gap-3 pt-2 gap-2">
                                            <input type="radio" name="jenisKelamin" id="lakiLaki" value="laki-laki">
                                            <label for="lakiLaki">Laki-Laki</label>

                                            <input type="radio" class="" name="jenisKelamin" id="perempuan"
                                                value="perempuan">
                                            <label for="perempuan">Perempuan</label>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="tanggalLahir" class="col-md-4 col-lg-3 col-form-label">
                                            Tanggal Lahir</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="tanggalLahir" type="date" class="form-control" id="tanggalLahir">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="tanggalDiukur" class="col-md-4 col-lg-3 col-form-label">
                                            Tanggal Diukur</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="tanggalDiukur" type="date" class="form-control" id="tanggalDiukur">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="usiaDiukur" class="col-md-4 col-lg-3 col-form-label">
                                            Usia Diukur (Bulan)</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="usiaDiukur" type="number" class="form-control" id="usiaDiukur">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="beratBadan" class="col-md-4 col-lg-3 col-form-label">
                                            Berat Badan (kg)</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="beratBadan" type="number" class="form-control" id="beratBadan">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="tinggiBadan" class="col-md-4 col-lg-3 col-form-label">
                                            Tinggi Badan (cm)</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="tinggiBadan" type="number" class="form-control" id="tinggiBadan">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3">
                                        <button type="submit" class="btn btn-primary w-full">Hitung IMT</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End Pills Tabs -->
                </div>
            </div>

            <div class="card mt-4 card-imt">
                <div class="card-body">
                    <h4 class="text-center">Hasil perhitungan</h4>
                </div>
            </div>
        </div>
    </section>
@endsection
