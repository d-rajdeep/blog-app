<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $post->title }} | My Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS (Same as home) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Same Google Font (if used in home) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        footer {
            background: #343a40;
            color: white;
            padding: 1rem 0;
        }
        .footer a {
            color: #adb5bd;
            text-decoration: none;
        }
        .footer a:hover {
            color: white;
        }
    </style>
</head>

<body>

    <!-- Header/Navbar (matching home.blade.php) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('blog.home') }}">My Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a href="{{ route('blog.home') }}" class="nav-link active">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Blogs</a></li>
                @auth
                    <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
                    <li class="nav-item">
                        <form action="{{ route('admin.logout') }}" method="POST">@csrf
                            <button class="btn btn-sm btn-outline-danger">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item"><a href="{{ route('login.store') }}" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="{{ route('register.store') }}" class="nav-link">Register</a></li>
                @endauth
            </ul>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <p class="text-muted mb-4">By <strong>{{ $post->user->name }}</strong> on {{ $post->created_at->format('d M Y') }}</p>
                <div class="border rounded p-4 bg-white shadow-sm">
                    <div class="fs-5 lh-lg">
                        {!! nl2br(e($post->content)) !!}
                    </div>
                    <div class="text-end mt-4">
                        <a href="{{ route('blog.home') }}" class="btn btn-outline-primary">← Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer (same as home.blade.php) -->
    <!-- Footer -->
    <footer class="text-center">
    <div class="container">
        <p>&copy; {{ date('Y') }} My Laravel Blog. All rights reserved.</p>
    </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
