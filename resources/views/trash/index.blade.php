
@extends('admin.layout')
@section('content')
    <h4 class="mt-5">Data Admin</h4>
    <a href="{{ route('admin.index') }}" type="button" class="btn btn-success rounded-3">Back</a>
    <a href="{{ route('trash.undo') }}" type="button" class="btn btn-warning rounded-3">Undo All Data</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-3" role="alert">
            {{ $message }}
        </div>
    @endif
    <table class="table table-hover mt-2">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Username</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <td>{{ $data->id_admin }}</td>
                    <td>{{ $data->nama_admin }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->username }}</td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#hapusModal{{ $data->id_admin }}">
                            Hapus
                        </button>

                        <a href="{{ route('trash.undo', $data->id_admin) }}" type="button"
                            class="btn btn-warning rounded-3">Undo</a>

                        <!-- Modal -->
                        <div class="modal fade" id="hapusModal{{ $data->id_admin }}" tabindex="-1"
                            aria-labelledby="hapusModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content"> <!-- class diperbaiki -->
                                    <div class="modal-header"> <!-- class diperbaiki -->
                                        <h5 class="modal-title" id="hapusModalLabel">Konfirmasi</h5>
                                        <!-- class diperbaiki -->
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button> <!-- class diperbaiki -->
                                    </div>
                                    <form method="POST" action="{{ route('trash.delete', $data->id_admin) }}">
                                        @csrf
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus data ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button> <!-- class diperbaiki -->
                                            <button type="submit" class="btn btn-danger">Ya</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
            @endforeach
        </tbody>
</table> @stop
