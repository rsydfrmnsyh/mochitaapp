@extends('layouts.app')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-8 col-md-6">
                <h1 class="h2 pt-4">Edit Produk</h1>
                <hr>
                <form action="{{ url('/products/' . $products->id) }}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="product_name">Nama Produk</label>
                        <input type="text" class="form-control @error('product_name') is-invalid @enderror" id="product_name" name="product_name" value="{{ old('product_id') ?? $products->product_name }}">
                        @error('product_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="product_price">Harga Produk</label>
                        <input type="text" class="form-control @error('product_price') is-invalid @enderror"
                            id="product_price" name="product_price" value="{{ old('product_id') ?? $products->product_price }}">
                        @error('product_price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="product_stock">Jumlah Stock</label>
                        <input type="text" class="form-control @error('product_stock') is-invalid @enderror"
                            id="product_stock" name="product_stock"
                            value="{{ old('product_id') ?? $products->product_stock }}">
                        @error('product_stock')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary my-2">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
