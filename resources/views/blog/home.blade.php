<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Laravel Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
            background: #f8f9fa;
            font-family: 'Segoe UI', sans-serif;
        }
        main {
            flex: 1;
        }
        .navbar-brand {
            font-weight: bold;
            color: #343a40;
            padding: 10px, 10px;
        }
        .card {
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        footer {
            background: #343a40;
            color: white;
            padding: 1rem 0;
        }
        .category-box {
            background: #fff;
            border-radius: 8px;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 0 8px rgba(0,0,0,0.05);
        }
        .slider-img {
        max-height: 550px;
        object-fit: cover;
        width: 100%;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('blog.home') }}">My Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a href="{{ route('blog.home') }}" class="nav-link active">Home</a></li>
                <li class="nav-item"><a href="{{route('all.blogs')}}" class="nav-link">Blogs</a></li>
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
    </div>
</nav>

<main>

    <!-- Slider -->
    <div id="heroSlider" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('dashboard_assets/image/slider1.jpg') }}" class="d-block w-100 slider-img" alt="Slider">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Categories -->
    <div class="container mb-5">
        <h3 class="mb-3 text-center">Categories</h3>
        <div class="row g-3">
            <div class="col-md-3 col-sm-6">
                <div class="category-box">Technology</div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="category-box">Health</div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="category-box">Travel</div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="category-box">Lifestyle</div>
            </div>
        </div>
    </div>

    <!-- Blog Posts -->
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


</main>

<!-- Footer -->
<footer class="text-center">
    <div class="container">
        <p>&copy; {{ date('Y') }} My Laravel Blog. All rights reserved.</p>
    </div>
</footer>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
