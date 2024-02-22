@extends('apps.app')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <x-slot name="title">
            Produk Toko
        </x-slot>
    
        <form action="{{ route('admin.product.update', ['id' => $product->id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="card shadow m-3">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama Produk</label>
                        <input required type="text" class="form-control" name="name" value="{{ $product->name }}">
                        @error('name')
                            <small class="text-danger form-text">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="exampleInputUsername1">Stok</label>
                            <input required type="number" class="form-control" name="stok" value="{{ $product->stok }}">
                            @error('stok')
                                <small class="text-danger form-text">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="exampleInputUsername1">Berat (gram)</label>
                            <input required type="number" class="form-control" name="weigth"
                                value="{{ $product->weigth }}">
                            @error('weigth')
                                <small class="text-danger form-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="exampleInputUsername1">Harga</label>
                            <input required type="number" class="form-control" name="price"
                                value="{{ $product->price }}">
                            @error('price')
                                <small class="text-danger form-text">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="description" id="" cols="30" rows="5" class="form-control" required>{{ $product->description }}</textarea>
                        @error('description')
                            <small class="text-danger form-text">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary text-right"><i class="fas fa-check"></i>
                            Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    
</main>
@endsection