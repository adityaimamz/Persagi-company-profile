@extends('layout.app')

@section('content')
    <div class="container">
        <form action="{{ route('konsultasi.store') }}" method="POST">
            @csrf
            <div class="mb-">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <label for="Nama Pemohon" class="col-md-4 col-lg-3 col-form-label">Nama Pemohon</label>
                <input type="text" class="form-control" name="pemohon" value="{{ Auth::user()->name }}" disabled>
            </div>
            <div class="mb-">
                <label for="Nama pasien" class="col-md-4 col-lg-3 col-form-label">Nama Pasien</label>
                <input type="text" class="form-control" name="pasien">
            </div>
            <div class="mb-">
                <label for="telp" class="col-md-4 col-lg-3 col-form-label">No Telepon</label>
                <input type="text" class="form-control" name="no_telepon">
            </div>
            <div class="mb-">
                <label for="Nama pasien" class="col-md-4 col-lg-3 col-form-label">Berat Badan (Kg)</label>
                <input type="text" class="form-control" name="berat_badan">
            </div>
            <div class="mb-">
                <label for="Nama pasien" class="col-md-4 col-lg-3 col-form-label">Tinggi Badan (Cm)</label>
                <input type="text" class="form-control" name="tinggi_badan">
            </div>
            <div class="mb-">
                <label for="Nama pasien" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir">
            </div>
            <div class="mb-">
                <label for="Nama pasien" class="col-md-4 col-lg-3 col-form-label">Tanggal Konsultasi</label>
                <input type="date" class="form-control" name="jadwal_konsultasi">
            </div>
            <div class="mb-">
                <label for="Nama pasien" class="col-md-4 col-lg-3 col-form-label">Keluhan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="keluhan"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
    </div>
@endsection