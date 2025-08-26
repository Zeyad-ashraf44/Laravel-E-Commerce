@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Admin Dashboard</h1>

    <div class="row justify-content-center">
        <!-- Manage Users -->
        <div class="col-md-3 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Manage Users</h5>
                    <a href="{{ route('admin.users') }}" class="btn btn-primary">View Users</a>
                </div>
            </div>
        </div>

        <!-- Manage Bookings -->
        <div class="col-md-3 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Manage Bookings</h5>
                    <a href="{{ route('admin.bookings') }}" class="btn btn-success">View Bookings</a>
                </div>
            </div>
        </div>

        <!-- Manage Menu -->
        <div class="col-md-3 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Manage Menu</h5>
                    <a href="{{ route('admin.menu') }}" class="btn btn-warning">View Menu</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
