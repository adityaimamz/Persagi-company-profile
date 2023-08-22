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
                                <form action="{{ route('login.change') }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    {{-- <input type="hidden" name="id" value="{{ Auth::user()->id }}"> --}}
                                    <div class="row mb-3">
                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Password
                                            Baru</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="newpassword" type="password" class="form-control" id="newPassword">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Ulangi
                                            Password Baru</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="newpassword_confirmation" type="password" class="form-control"
                                                id="renewPassword">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" style="width: 250px" class="btn btn-primary">Ubah
                                            Password</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="tab-pane fade " id="pills-balita" role="tabpanel" aria-labelledby="balita-tab">
                            Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non
                            est
                            unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit.
                            Fuga
                            sequi sed ea saepe at unde.
                        </div>
                    </div><!-- End Pills Tabs -->
                </div>
            </div>
        </div>
    </section>
@endsection
