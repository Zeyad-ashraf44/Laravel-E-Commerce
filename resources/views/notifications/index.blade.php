@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Notifications</h1>

    @forelse ($notifications as $notification)
        <div class="alert alert-info">
            {{ $notification->message }}
        </div>
    @empty
        <p class="text-center">No notifications found.</p>
    @endforelse
</div>
@endsection
