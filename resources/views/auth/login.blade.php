@extends('layouts.app')

@section('content')

<div class="container py-5 text-center">
    <h1 class="mb-3" style="font-size: 3rem;">Login</h1>
    <p class="mb-5 text-muted" style="font-size: 1.2rem;">
        Welcome back! Please login to your account.
    </p>

    <div class="mx-auto p-5 bg-white shadow rounded-4" style="max-width: 500px;">
        <form method="POST" action="{{ route('login') }}">
            @csrf
{{-- عرض كل الأخطاء دفعة واحدة فوق الفورم --}}
@if ($errors->any())
    <div class="alert alert-danger text-center">
        @foreach ($errors->all() as $error)
            <p class="mb-0">{{ $error }}</p>
        @endforeach
    </div>
@endif

{{-- Email --}}
<div class="mb-3">
    <input type="email" name="email" class="form-control rounded-pill" placeholder="Email Address" required autofocus value="{{ old('email') }}">
    
    @error('email')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

{{-- Password --}}
<div class="mb-3">
    <input type="password" name="password" class="form-control rounded-pill" placeholder="Password" required>

    @error('password')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>


            {{-- Remember me --}}
            <div class="mb-3 text-start">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label ms-1" for="remember">
                        Remember Me
                    </label>
                </div>
            </div>

            {{-- Login Button --}}
            <div class="d-grid">
                <button type="submit" class="btn btn-danger rounded-pill py-2 fs-5">Login</button>
            </div>

            {{-- Link to Register --}}
            <div class="mt-4 text-muted">
                Don't have an account? <a href="{{ route('register') }}">Register here</a>
            </div>
        </form>
    </div>
</div>

@endsection
