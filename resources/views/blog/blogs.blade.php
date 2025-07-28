<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Blog</title>
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
            margin-bottom: 10px;
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
                <li class="nav-item"><a href="{{ route('blog.home') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{route('all.blogs')}}" class="nav-link active">Blogs</a></li>
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

{{-- Main Content --}}

<!-- Blog Posts -->
<br>
<div class="container mb-5">
    <h3 class="mb-4 text-center">Latest Blog Posts</h3>

    @if ($posts->isEmpty())
        <p class="text-center">No blog posts available.</p>
    @else
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ Str::limit($post->content, 150) }}</p>
                            <p class="text-muted mt-auto">By {{ $post->user->name }} on {{ $post->created_at->format('d M Y') }}</p>
                            <a href="{{ route('post.readmore', $post->id) }}" class="btn btn-sm btn-outline-primary mt-2">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

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
