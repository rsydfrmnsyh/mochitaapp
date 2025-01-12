@extends('layouts.app')

@section('content')
<div class="container-fluid">
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
        <!-- Main Content -->
        <div class="col-md-10 p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Welcome to the Dashboard</h2>
            </div>
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Today's Sales</h5>
                            <p class="card-text">$53,000</p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title">New Clients</h5>
                            <p class="card-text">3,462</p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Total Sales</h5>
                            <p class="card-text">$103,430</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
