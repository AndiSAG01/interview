@extends('apps.app')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="header">
      <h2>Data Pengguna</h2>
  </div>

  <div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">DATA USER</h6>
      <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
    </div>
    <div class="table-responsive p-3">
      <table id="example" class="table align-items-center table-flush table-hover" id="dataTableHover">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>

          </tr>
        </thead>
        <tbody>
          @foreach ( $users as $no => $us )
          <tr>
              <td>{{ ++$no }}</td>
              <td>{{ $us->name }}</td>
              <td>{{ $us->email }}</td>
              <td>
                @if ($us->isAdmin == 1)
                <span>Pemilik</span>
                @elseif($us->isAdmin == 0)
                <span>Pengawai</span>
                @endif
              </td>
              <td>
                  <a href="{{ route('user.edit', $us->id ) }}" class="btn btn-warning btn-sm mb-2">Edit</a>
                  <form action="{{ route('user.delete', $us->id) }}" method="post" onsubmit="return confirm('Yakin Hapus data')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm ">
                        <i class="fas fa-trash"></i> Hapus
                    </button>
                </form>
                
              </td>
          </tr>
          @endforeach
      </tbody>
      </table>
    </div>
  </div>

</main>
@endsection
