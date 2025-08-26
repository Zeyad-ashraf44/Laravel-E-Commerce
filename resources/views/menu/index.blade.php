@extends('layouts.app')

@section('content')
<div class="container py-5 text-center">
    <h1 class="mb-3" style="font-size: 3rem;">Our Menu</h1>
    <p class="mb-5 text-muted" style="font-size: 1.2rem;">
        We consider all the drivers of change gives you the components you need to change to create a truly happens.
    </p>

    {{-- Filter buttons --}}
    <div class="mb-5 d-flex justify-content-center gap-2 flex-wrap">
        <button class="btn btn-dark rounded-pill px-4">All</button>
        <button class="btn btn-outline-dark rounded-pill px-4">Breakfast</button>
        <button class="btn btn-outline-dark rounded-pill px-4">Main Dishes</button>
        <button class="btn btn-outline-dark rounded-pill px-4">Drinks</button>
        <button class="btn btn-outline-dark rounded-pill px-4">Desserts</button>
    </div>

    {{-- Menu items --}}
 <div class="row">
    @foreach($menuItems as $item)
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm border-0">

                @php
    $imagePath = public_path('imges/menu/' . $item->image);
@endphp

@if(file_exists($imagePath) && $item->image)
    <img src="{{ asset('imges/menu/' . $item->image) }}" class="img-fluid" style="height: 200px; object-fit: cover; width: 100%;">
@endif

                <div class="card-body text-start">
                    <h5 class="text-danger fw-bold">${{ number_format($item->price, 2) }}</h5>
                    <h6 class="fw-bold">{{ $item->name }}</h6>
                    <p class="text-muted small mb-0">{{ $item->description }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

</div>

{{-- Full width image section --}}
<div class="container-fluid px-0 mt-5">
    <img src="/imges/brand.jpg" alt="Menu Banner" class="img-fluid w-100" style="max-height: 550px; object-fit: cover;">
</div>
@endsection
