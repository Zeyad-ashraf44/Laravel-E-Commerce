@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">

    <!-- Hero Section -->
    <div class="d-flex flex-column justify-content-center align-items-center text-center"
         style="background: url('{{ asset('imges/hero.jpg') }}') no-repeat center center; background-size: cover; height: 100vh;">

        <h1 class="display-3 fw-bold mb-4 text-dark">Best food for your taste</h1>
        <p class="lead mb-5 text-dark">Discover delectable cuisine and unforgettable moments in our welcoming culinary haven.</p>

        <div>
            <a href="{{ route('book.create') }}" class="btn btn-danger btn-lg rounded-pill px-5 py-3 me-3 shadow">Book A Table</a>
            <a href="{{ route('menu') }}" class="btn btn-outline-dark btn-lg rounded-pill px-5 py-3 shadow">Explore Menu</a>
        </div>
    </div>

    <!-- Browse Our Menu Section -->
    <div class="container my-5">
        <h2 class="text-center mb-5 fw-bold" style="font-size: 2.5rem;">Browse Our Menu</h2>

        <div class="row text-center">
            <!-- Breakfast -->
           <div class="col-md-3 mb-4">
                <div class="card  shadow-sm border rounded" style="height:400px;">
                    <div class="card-body">
                        <div class="mb-3">
     <i class="fas fa-egg fa-3x text-danger pt-4"></i>
</div>
                        <h5 class="card-title fw-bold">Main Dishes</h5>
                        <p class="card-text pt-5">In the new era of technology we look in the future with certainty and pride for our life. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, nam. </p>
                        <a href="{{ route('menu') }}" class="text-danger fw-bold text-decoration-none">Explore Menu</a>
                    </div>
                </div>
            </div>

            <!-- Main Dishes -->
            <div class="col-md-3 mb-4">
                <div class="card  shadow-sm border rounded" style="height:400px;">
                    <div class="card-body">
                        <div class="mb-3">
    <i class="fas fa-drumstick-bite fa-3x text-danger pt-4"></i>
</div>
                        <h5 class="card-title fw-bold">Main Dishes</h5>
                        <p class="card-text pt-5">In the new era of technology we look in the future with certainty and pride for our life. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, nam. </p>
                        <a href="{{ route('menu') }}" class="text-danger fw-bold text-decoration-none">Explore Menu</a>
                    </div>
                </div>
            </div>

            <!-- Drinks -->
            <div class="col-md-3 mb-4">
                <div class="card  shadow-sm border rounded" style="height:400px;">
                    <div class="card-body">
                        <div class="mb-3">
    <i class="fas fa-mug-hot fa-3x text-danger pt-4"></i>
</div>
                        <h5 class="card-title fw-bold">Drinks</h5>
                        <p class="card-text pt-5">In the new era of technology we look in the future with certainty and pride for our life. Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, ratione.</p>
                        <a href="{{ route('menu') }}" class="text-danger fw-bold text-decoration-none">Explore Menu</a>
                    </div>
                </div>
            </div>

            <!-- Desserts -->
            <div class="col-md-3 mb-4">
                <div class="card  shadow-sm border rounded" style="height:400px;">
                    <div class="card-body">
                        <div class="mb-3">
    <i class="fas fa-ice-cream fa-3x text-danger pt-4"></i>
</div>
                        <h5 class="card-title fw-bold">Desserts</h5>
                        <p class="card-text pt-5">In the new era of technology we look in the future with certainty and pride for our life. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, cumque.</p>
                        <a href="{{ route('menu') }}" class="text-danger fw-bold text-decoration-none
">Explore Menu</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection

