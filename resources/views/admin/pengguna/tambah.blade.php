@extends('apps.app')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
   
    <div class="card-header text-white" style="background-color: blue">
        <b>
            Form Tambah Data User
        </b>
    </div>
    <div class="card-body text-dark">
        <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group mb-4">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group mb-4">
                <label for="code">Role</label>
                <select name="isAdmin" id="code" class="form-control">
                        <option value="1">Pemilik</option>
                        <option value="0">Pegawai</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
    @endsection
</main>