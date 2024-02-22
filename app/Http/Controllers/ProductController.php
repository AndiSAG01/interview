<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.product.index', compact('products'));
    }


public function tambah()
{

    return view('admin.product.tambah');
}

public function store(ProductRequest $request)
{
    $data = Product::create([
        'name'          => $request->name,
        'description'   => $request->description,
        'price'         => $request->price,
        'stok'          => $request->stok,
        'weigth'        => $request->weigth,

    ]);

   
        $data->save();

    return redirect()->route('admin.product')->with('success', 'Berhasil Menambah Produk Baru');
}

public function edit(Product $id)
{
    return view('admin.product.edit', [
        'product'       => $id,
    ]);
}

public function update(Product $id, ProductRequest $request)
{
    $prod = $id;


    $prod->name = $request->name;
    $prod->description = $request->description;
    $prod->price = $request->price;
    $prod->weigth = $request->weigth;
    $prod->stok = $request->stok;

    $prod->update();

    return redirect()->route('admin.product')->with('success', 'Berhasil Mengubah Produk');
}

public function delete(Product $id)
{
   
    $id->delete();

    return redirect()->route('admin.product')->with('success', 'Berhasil Menghapus Produk');
}
}