<h2>Notifications</h2>

<ul>
@foreach (auth()->user()->notifications as $notification)
    <li>{{ $notification->data['message'] }} ({{ $notification->created_at->diffForHumans() }})</li>
@endforeach
</ul>
