@extends('layout/app')
@section('content')
    <section id="my-profile" class="bg-secondary">
        <div class="container-fluid">
            <div class="container py-5 justify-content-center">
                <div class="profile-container gap-4">
                    <div class="user-tabs">
                        <div class="card" style="width: 14rem;">
                            <div class="card-header text-center bg-main">
                                @if ($data == null)
                                <img class="rounded-circle pt-2" style="width:100px"
                                    src="{{ asset('assets/png/defaultpp.jpeg') }}">
                                @else
                                    <img class="rounded-circle pt-2" style="width:100px"
                                        src="{{ Storage::url($data->gambar) }}">
                                @endif
                                <h6 class="pt-2">{{ Auth::user()->name }}</h6>
                                <span>{{ Auth::user()->username }}</span>
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
                                <a href="{{ route('logout') }}" class="nav-link text-start"><i class="ri-logout-circle-line pr-2"></i>
                                    Keluar</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content konten-tabs" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <div class="card">
                                <div class="card-header text-center bg-main">Overview</div>
                                <div class="card-body text-center">
                                    @if ($data == null)
                                    <img class="rounded-circle pt-2" style="width:100px"
                                        src="{{ asset('assets/png/defaultpp.jpeg') }}">
                                    @else
                                        <img class="rounded-circle pt-2" style="width:100px"
                                            src="{{ Storage::url($data->gambar) }}">
                                    @endif
                                    <div class="text-start pt-3 bio">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>: {{ Auth::user()->username }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Nama Lengkap</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>: {{ Auth::user()->name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Jenis Kelamin</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>: {{ ($data == null ? "Belum Diisi" : $data->jenis_kelamin) }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>: {{Auth::user()->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Nomor Handphone</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>: {{ ($data == null) ? "Belum Diisi" : $data->no_handphone }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Tempat Tanggal Lahir</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>: {{ ($data == null) ? "Belum Diisi" : $data->tanggal_lahir }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Agama</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>: {{ ($data == null) ? "Belum Diisi" : $data->agama }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Alamat</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>: {{ ($data == null) ? "Belum Diisi" : $data->alamat_tinggal }}</p>
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
                                        <form class="text-start text-main py-3" action="{{ route('myprofile.store') }}" method="POST"
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
                                                    required value="{{ Auth::user()->name }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Jenis Kelamin</label>
                                                <input type="text" class="form-control" id="jk" name="jk" value="{{ ($data==null) ? "" : $data->jenis_kelamin }}"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="tempatTanggalLahir" class="form-label">Tanggal
                                                    Lahir</label>
                                                <input type="date" class="form-control" id="TanggalLahir"
                                                    name="tanggal_lahir" required value="{{ ($data==null) ? "" : $data->tanggal_lahir }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="nomorHandphone" class="form-label">Nomor Handphone</label>
                                                <input type="tel" class="form-control" id="nomorHandphone"
                                                    name="nomor_handphone" value="{{ ($data==null) ? "" : $data->no_handphone }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" value="{{ ($data==null) ? "" : $data->email }}"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="agama" class="form-label">Agama</label>
                                                <input type="text" class="form-control" id="agama" name="agama" value="{{ ($data==null) ? "" : $data->agama }}"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat" {{ ($data==null) ? "" : $data->alamat_tinggal }}
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
                                    <form action="{{ route('login.change') }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
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
