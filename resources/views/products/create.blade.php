@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-2 bg-dark text-white p-3" style="min-height: 100vh;">
                <h4 class="mb-4">Dashboard</h4>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="{{ route('home') }}" class="nav-link text-white">Home</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('products') }}" class="nav-link text-white">Products</a>
                    </li>
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a href="#" class="nav-link text-danger"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-10 p-4">
                <h1 class="h2 pt-4">Input Produk</h1>
                <hr>
                <form action="{{ url('/products') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="product_name">Nama Produk</label>
                        <input type="text" class="form-control @error('product_name') is-invalid @enderror"
                            id="product_name" name="product_name" value="{{ old('product_name') }}">
                        @error('product_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="product_price">Harga Produk</label>
                        <input type="text" class="form-control @error('product_price') is-invalid @enderror" id="product_price" name="product_price" value="{{ old('product_price') }}">
                        @error('product_price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="product_stock">Jumlah Stock</label>
                        <input type="text" class="form-control @error('product_stock') is-invalid @enderror"
                            id="product_stock" name="product_stock" value="{{ old('product_stock') }}">
                        @error('product_stock')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary my-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
