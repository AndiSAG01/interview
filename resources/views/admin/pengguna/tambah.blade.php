@extends('apps.app')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
   
    <div class="card-header text-white" style="background-color: blue">
        <b>
            Form Tambah Data User
        </b>
    </div>
    <div class="container">
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="input Nama">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="input email">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="input password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    @endsection
</main>