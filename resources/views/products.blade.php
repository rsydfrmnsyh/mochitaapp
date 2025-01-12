@extends('layouts.app')

@section('content')
    <div class='container-fluid'>
        <div class='row'>
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
                    <h1 class="h2 mr-auto">Tabel Produk</h1>
                    <a href="{{ url('/products/create') }}" class="btn btn-primary">Tambah Produk</a>
                </div>
                @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Produk</th>
                            <th>Harga Produk</th>
                            <th>Jumlah Stock Produk</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>
                                    <a href="{{ url('/products/' . $product->id) }}">
                                        {{ $product->product_name }}
                                    </a>
                                </td>
                                <td>{{ $product->product_price }}</td>
                                <td>{{ $product->product_stock }}</td>
                            </tr>
                        @empty
                            <td colspan="6" class="text-center">Tidak ada data...</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
