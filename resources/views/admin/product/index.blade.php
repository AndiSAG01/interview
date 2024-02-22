@extends('apps.app')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

  
        <x-slot name="title">PRODUK TOKO</x-slot>
        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800 font-weight-bold">PRODUK TOKO</h1>
            <a href="{{ route('admin.product.tambah') }}" class="btn btn-primary">Tambah</a>
        </div>
        <div class="card shadow m-3">
            <div class="card-body">
                <table id="mytable" class="display responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Berat</th>
                            <th>Stok</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $no => $product)
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>{{ $product->name }}</td>
                                <td>Rp. {{ number_format($product->price, 2, ',', '.') }}</td>
                                <td>{{ $product->weigth }}gr</td>
                                <td>{{ $product->stok }}</td>
                                <td>
                                    <div class="d-flex" style="gap: 5px">
                                        <a href="{{ route('admin.product.edit', ['id' => $product->id])}}"
                                            class="btn btn-warning btn-sm"><i class="fa fa-gavel" aria-hidden="true"></i>
                                            Ubah</a>
                                        <a href="{{ route('admin.product.delete', ['id' => $product->id]) }}"
                                            onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i> Hapus
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    
</main>

@endsection