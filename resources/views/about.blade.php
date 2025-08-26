@extends('layouts.app')

@section('content')
<div class="container py-5 ">
    <div class="row align-items-center">
        <!-- الصورة -->
        <div class="col-md-6 position-relative">
            <img src="{{ asset('imges/wafell.jpg') }}" alt="About Image" class="img-fluid rounded shadow" style="height: 400px; object-fit: cover; width: 100%;">

            <!-- نافذة تظهر عند الوقوف على الصورة -->
            <div class="position-absolute top-50 start-50 translate-middle bg-dark text-white p-4 rounded shadow-lg opacity-0 hover-opacity transition" style="width: 80%; pointer-events: none;">
                <h5 class="fw-bold mb-3">Come and visit us</h5>
                <p class="mb-1"><i class="bi bi-telephone"></i> (414) 857 – 0107</p>
                <p class="mb-1"><i class="bi bi-envelope"></i> happytummy@restaurant.com</p>
                <p><i class="bi bi-geo-alt"></i> 837 W. Marshall Lane, Los Angeles</p>
            </div>
        </div>

        <!-- النص -->
        <div class="col-md-6 mt-4 mt-md-0">
            <h2 class="fw-bold mb-3">We provide healthy food for your family.</h2>
            <p>
                Our story began with a vision to create a unique dining experience that merges fine dining, exceptional service, and a vibrant ambiance. Rooted in the city's rich culinary culture, we aim to honor our local roots while infusing a global palate.
            </p>
            <p>
                At our place, we believe that dining is not just about food, but also about the overall experience. Our staff, renowned for their warmth and dedication, strives to make every visit an unforgettable event.
            </p>
        </div>
    </div>
</div>
<!-- Testimonials Section -->
<section class="bg-light py-8 mt-100"> 
    <div class="container">
        <h2 class="text-center mb-5 display-6 fw-semibold">What Our Customers Say</h2>

        <div class="row g-4">
            <!-- Testimonial 1 -->
            <div class="col-md-4">
                <div class="bg-white p-5 rounded-4 shadow-sm h-100"> 
                    <h5 class="text-danger">“The best restaurant”</h5>
                    <p class="text-muted">Last night, we dined at place and were simply blown away. From the moment we stepped in, we were enveloped in an inviting atmosphere.</p>
                    <hr>
                    <div class="d-flex align-items-center mt-3">
                        <img src="{{ asset('imges/test1.jpg') }}" alt="" class="rounded-circle me-3" width="50" height="50">
                        <div>
                            <strong>Sophire Robson</strong>
                            <div class="text-muted">Los Angeles, CA</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="col-md-4">
                <div class="bg-white p-5 rounded-4 shadow-sm h-100">
                    <h5 class="text-danger">“Simply delicious”</h5>
                    <p class="text-muted">Place exceeded my expectations on all fronts. The ambiance was cozy and relaxed, making it a perfect venue for our anniversary dinner.</p>
                    <hr>
                    <div class="d-flex align-items-center mt-3">
                        <img src="{{ asset('imges/test2.jpg') }}" alt="" class="rounded-circle me-3" width="50" height="50">
                        <div>
                            <strong>Matt Cannon</strong>
                            <div class="text-muted">San Diego, CA</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="col-md-4">
                <div class="bg-white p-5 rounded-4 shadow-sm h-100">
                    <h5 class="text-danger">“One of a kind restaurant”</h5>
                    <p class="text-muted">The culinary experience at place is first to none. The food was the highlight of our evening. Highly recommended by users high.</p>
                    <hr>
                    <div class="d-flex align-items-center mt-3">
                        <img src="{{ asset('imges/test3.jpg') }}" alt="" class="rounded-circle me-3" width="50" height="50">
                        <div>
                            <strong>Andy Smith</strong>
                            <div class="text-muted">San Francisco, CA</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<style>
/* حركة الظهور عند الـ hover */
.position-relative:hover .hover-opacity {
    opacity: 1 !important;
    pointer-events: auto;
}
.hover-opacity {
    opacity: 0;
    transition: opacity 0.4s ease;
}
.mt-100 {
    margin-top: 150px;
}

</style>
