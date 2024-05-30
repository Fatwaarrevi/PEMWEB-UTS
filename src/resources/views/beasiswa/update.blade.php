@extends('layouts.app')
@section('content')
    <h5>Tambah Data Beasiswa</h5>
    <form action="{{ route('beasiswa.update', $scholarship->nomor_pendaftaran) }}" method="POST" class="mt-5">
        @method('put')
        @csrf
        <div class="row g-3 mb-3">
            <div class="col-md-6">
                Nama
                <input type="text" class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" name="nama"
                    value="{{ old('nama') ?: $scholarship->nama }}">
                @if ($errors->has('nama'))
                    <p class="text-danger">{{ $errors->first('nama') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Nomor Pendaftaran
                <input type="text" class="form-control {{ $errors->has('nomor_pendaftaran') ? 'is-invalid' : '' }}" name="nomor_pendaftaran"
                    value="{{ $scholarship->nomor_pendaftaran }}" readonly>
                @if ($errors->has('nomor_pendaftaran'))
                    <p class="text-danger">{{ $errors->first('nomor_pendaftaran') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Email
                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email"
                    value="{{ old('email') ?: $scholarship->email }}">
                @if ($errors->has('email'))
                    <p class="text-danger">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Program Studi
                <input type="text" class="form-control {{ $errors->has('program_studi') ? 'is-invalid' : '' }}" name="program_studi"
                    value="{{ old('program_studi') ?: $scholarship->program_studi }}">
                @if ($errors->has('program_studi'))
                    <p class="text-danger">{{ $errors->first('program_studi') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Jenis Beasiswa
                <input type="text" class="form-control {{ $errors->has('jenis_beasiswa') ? 'is-invalid' : '' }}" name="jenis_beasiswa"
                    value="{{ old('jenis_beasiswa') ?: $scholarship->jenis_beasiswa }}">
                @if ($errors->has('jenis_beasiswa'))
                    <p class="text-danger">{{ $errors->first('jenis_beasiswa') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Gelombang Penerimaan
                <input type="text" class="form-control {{ $errors->has('gelombang_penerimaan') ? 'is-invalid' : '' }}" name="gelombang_penerimaan"
                    value="{{ old('gelombang_penerimaan') ?: $scholarship->gelombang_penerimaan }}">
                @if ($errors->has('gelombang_penerimaan'))
                    <p class="text-danger">{{ $errors->first('gelombang_penerimaan') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Status Beasiswa
                <input type="text" class="form-control {{ $errors->has('status_beasiswa') ? 'is-invalid' : '' }}" name="status_beasiswa"
                    value="{{ old('status_beasiswa') ?: $scholarship->status_beasiswa }}">
                @if ($errors->has('status_beasiswa'))
                    <p class="text-danger">{{ $errors->first('status_beasiswa') }}</p>
                @endif
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Ubah">
        <a href="{{ route('beasiswa') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection