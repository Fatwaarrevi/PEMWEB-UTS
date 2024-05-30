@extends('layouts.app')

@section('content')
    <form class="{{ route('beasiswa') }}" method="GET">
        <div class="card mt-3">
            <h5 class="card-header">Aplikasi Data Beasiswa</h5>
            <div class="card-body">
                <div class="col-8">
                    Nomor Pendaftaran
                    <input type="text" class="form-control" name="nomor_pendaftaran" id="nomor_pendaftaran">
                </div>
                <div class="col-8 mt-3">
                    Nama
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end mt-3 gap-2">
            <input type="submit" class="btn btn-primary" value="Search">
            <a href="{{ route('beasiswa.tambah') }}" class="btn btn-primary">Add</a>
        </div>
    </form>
    @include('components.alert')
    <div class="table-responsive">
        <table class="table table-bordered mt-3">
            <tr class="table-primary">
                <th>No</th>
                <th>Nomor Pendaftaran</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Program Studi</th>
                <th>Jenis Beasiswa</th>
                <th>Gelombang Penerimaan</th>
                <th>Status Beasiswa</th>
                <th>Action</th>
            </tr>
            @forelse ($beasiswas as $beasiswa)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $beasiswa->nomor_pendaftaran }}</td>
                    <td>{{ $beasiswa->nama }}</td>
                    <td>{{ $beasiswa->email }}</td>
                    <td>{{ $beasiswa->program_studi }}</td>
                    <td>{{ $beasiswa->jenis_beasiswa }}</td>
                    <td>{{ $beasiswa->gelombang_penerimaan }}</td>
                    <td>{{ $beasiswa->status_beasiswa }}</td>
                    <td>
                        <a href="{{ route('beasiswa.view', $beasiswa->id) }}" class="btn btn-primary btn-sm">Detail</a>
                        <a href="{{ route('beasiswa.edit', $beasiswa->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#deleteData" data-id="{{ $beasiswa->id }}">
                            Delete
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9"> Tidak ada data</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection

@section('modal')
    <div class="modal fade" id="deleteData" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Menghapus Data Beasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('beasiswa.delete') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        Anda yakin menghapus data beasiswa dengan Nomor Pendaftaran <span id="nomor_pendaftaran"></span> ?
                        <input type="hidden" name="id" id="id">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Ok">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        $('#deleteData').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');

            var modal = $(this);
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #nomor_pendaftaran').text(id);
        });
    </script>
@endsection