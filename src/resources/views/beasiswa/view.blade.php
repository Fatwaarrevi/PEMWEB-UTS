@extends('layouts.app')
@section('content')
    <h5>Detail Data Beasiswa</h5>
    <div class="row mt-5">
        <div class="col-md-6">
            <h6>Nama</h6>
            <p>{{ $scholarship->nama }}</p>
        </div>
        <div class="col-md-6">
            <h6>Nomor Pendaftaran</h6>
            <p>{{ $scholarship->nomor_pendaftaran }}</p>
        </div>
        <hr>
        <div class="col-md-6">
            <h6>Email</h6>
            <p>{{ $scholarship->email }}</p>
        </div>
        <div class="col-md-6">
            <h6>Program Studi</h6>
            <p>{{ $scholarship->program_studi }}</p>
        </div>
        <hr>
        <div class="col-md-6">
            <h6>Jenis Beasiswa</h6>
            <p>{{ $scholarship->jenis_beasiswa }}</p>
        </div>
        <div class="col-md-6">
            <h6>Gelombang Penerimaan</h6>
            <p>{{ $scholarship->gelombang_penerimaan }}</p>
        </div>
        <hr>
        <div class="col-md-6">
            <h6>Status Beasiswa</h6>
            <p>{{ $scholarship->status_beasiswa }}</p>
        </div>
    </div>
    <a href="/" class="btn btn-secondary">Kembali</a>
@endsection