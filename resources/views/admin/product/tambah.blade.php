@extends('apps.app')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="modal-body">
            <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex">
                    <div class="w-3/4">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama Produk</label>
                            <input required type="text" class="form-control" value="{{ old('name') }}" name="name">
                            @error('name')
                                <small class="text-danger form-text">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputUsername1">Berat (gram)</label>
                            <input required type="number" value="{{ old('weigth') }}" class="form-control" name="weigth">
                            @error('weigth')
                                <small class="text-danger form-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Harga</label>
                            <input required type="number" value="{{ old('price') }}" class="form-control" name="price">
                            @error('price')
                                <small class="text-danger form-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Stok</label>
                            <input required value="{{ old('stok') }}" type="number" class="form-control" name="stok">
                            @error('stok')
                                <small class="text-danger form-text">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="description" id="" cols="30" rows="3" class="form-control" required>{{ old('description') }}
                                </textarea>
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
        </div>
    </main>
@endsection
