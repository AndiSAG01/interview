@extends('apps.app')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="card-header text-white" style="background-color: blue">
        <b>
            Form Edit Data User
        </b>
    </div>
    <div class="card-body text-dark">
        <form action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $user -> name) }}">
            </div>
            <div class="form-group mb-4">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $user -> email) }}">
            </div>
            <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" value="{{ old('password', $user -> password) }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</main>
@endsection