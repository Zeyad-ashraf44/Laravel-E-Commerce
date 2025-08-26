<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bistro Bliss</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .navbar-brand span {
            color: #8B8B8B;
            font-style: italic;
        }
        .btn-danger {
            background-color: #A82C48;
            border-color: #A82C48;
        }
        .btn-danger:hover {
            background-color: #92223c;
            border-color: #92223c;
        }
        .btn-outline-dark:hover {
            background-color: #000;
            color: #fff;
        }
    </style>
</head>
<body>

    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
