@extends('admin.layout') @section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title fw-bolder mb3">Tambah Admin</h5>
            <form method="post" action="{{ route('admin.store') }}"> @csrf
                <div class="mb-3">
                    <label for="id_admin" class="formlabel">ID
                        Admin</label>
                    <input type="number" class="formcontrol" id="id_admin" name="id_admin">
                </div>
                <div class="mb-3">
                    <label for="nama_admin" class="form-label">Nama
                        Admin</label>
                    <input type="text" class="formcontrol" id="nama_admin" name="nama_admin">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="formlabel">Alamat</label>
                    <input type="text" class="formcontrol" id="alamat" name="alamat">
                </div>
                <div class="mb-3">
                    <label for="username" class="formlabel">Username</label>
                    <input type="text" class="formcontrol" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="formlabel">Password</label>
                    <input type="password" class="formcontrol" id="password" name="password">
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Tambah" />
                </div>
            </form>
        </div>
</div> @stop
