@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <!-- Sidebar -->
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
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="h2 mr-auto">Info Produk {{ $products->product_name }}</h1>
                    <a href="{{ url('/products/' . $products->id . '/edit') }}" class="btn btn-primary">Edit</a>
                    <form action="{{ url('/products/' . $products->id) }}" method="POST">
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ml-3">Hapus</button>
                        @csrf
                    </form>
                </div>
                <hr>
                @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <ul>
                    <li>Nama produk: {{ $products->product_name }} </li>
                    <li>Harga Produk: {{ $products->product_price }} </li>
                    <li>Jumlah Stock: {{ $products->product_stock }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
