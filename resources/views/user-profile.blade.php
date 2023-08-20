@extends('layout/app')
@section('content')
    <section id="my-profile" class="bg-secondary">
        <div class="container-fluid">
            <div class="container py-5 justify-content-center">
                <div class="profile-container gap-4">
                    <div class="user-tabs">
                        <div class="card" style="width: 14rem;">
                            <div class="card-header text-center bg-main">
                                <img class="rounded-circle pt-2" style="width:100px"
                                    src="{{ asset('assets/png/defaultpp.jpeg') }}">
                                <h6 class="pt-2">Nama </h6>
                                <span>Username</span>
                            </div>
                            <div class="nav flex-column nav-pills p-2 " id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="text-start nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab"
                                    aria-controls="v-pills-home" aria-selected="true"><i class="bi bi-person-circle"></i>
                                    Overview</button>
                                <button class="nav-link text-start" id="v-pills-edit-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-edit-profile" type="button" role="tab"
                                    aria-controls="v-pills-edit-profile" aria-selected="false"><i
                                        class="bi bi-pencil-square"></i> Edit Profil</button></button>
                                <button class="nav-link text-start" id="v-pills-change-password-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-change-password" type="button" role="tab"
                                    aria-controls="v-pills-change-password" aria-selected="false"><i
                                        class="ri-lock-2-line"></i>
                                    Ganti Kata Sandi</button></button>
                                <button class="nav-link text-start"><i class="ri-logout-circle-line pr-2"></i>
                                    Keluar</button></button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content konten-tabs" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <div class="card">
                                <div class="card-header text-center bg-main">Overview</div>
                                <div class="card-body text-center">
                                    <img class="rounded-circle pt-2" style="width:150px"
                                        src="{{ asset('assets/png/defaultpp.jpeg') }}">
                                    <div class="text-start pt-3 bio">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>: Lutfihakim123</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Nama Lengkap</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>: Ahmad Lutfi Hakim</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>: ahmadlutfi@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Nomor Handphone</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>: 0895123456789</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Tempat Tanggal Lahir</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>: Demak, 16 Maret 2002</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Agama</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>: Islam</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Alamat</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>: Perumahan Citra Pratama, Jalan Kenanga Blok A No.13 Sumampir,
                                                    Purwokerto Utara, Kab. Banyumas, Jawa Tengah, Indonesia</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-main"> &nbsp
                                </div>
                            </div><!-- End Card with header and footer -->
                        </div>
                        <div class="tab-pane fade " id="v-pills-edit-profile" role="tabpanel"
                            aria-labelledby="v-pills-edit-profile-tab">
                            <div class="card">
                                <div class="card-header text-center bg-main">Edit Profil
                                </div>
                                <div class="card-body text-center">
                                    <div class="container">
                                        <form class="text-start text-main py-3" action="" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="#picture" class="form-label">Ganti Foto Profil</label>
                                                <input type="file" class="form-control" id="picture" name="gambar"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="nama" name="nama"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="tempatTanggalLahir" class="form-label">Tempat Tanggal
                                                    Lahir</label>
                                                <input type="text" class="form-control" id="tempatTanggalLahir"
                                                    name="tempat_tanggal_lahir" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nomorHandphone" class="form-label">Nomor Handphone</label>
                                                <input type="tel" class="form-control" id="nomorHandphone"
                                                    name="nomor_handphone" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="agama" class="form-label">Agama</label>
                                                <input type="text" class="form-control" id="agama" name="agama"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat"
                                                    required>
                                            </div>
                                            <div class="text-center">
                                                <button class="btn btn-primary mx-auto button-user" type="submit">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- End Card with header and footer -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-change-password" role="tabpanel"
                            aria-labelledby="v-pills-change-password-tab">
                            <div class="card">
                                <div class="card-header text-center bg-main">Ganti Password
                                </div>
                                <div class="card-body text-center">
                                    {{-- <form action="{{ route('login.change') }}" method="POST"> --}}
                                    {{-- @method('PUT')
                                        @csrf
                                        @if ($data->user_id == Auth::user()->id)
                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                        @else
                                        <input type="hidden" name="id" value="{{ $data->user_id }}">
                                        @endif --}}
                                    <div class="row mb-3">
                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Password
                                            Baru</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="newpassword" type="password" class="form-control"
                                                id="newPassword">
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
                        </div><!-- End Card with header and footer -->
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
