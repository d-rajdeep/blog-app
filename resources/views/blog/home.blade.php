<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
        }
        body {
            height: 100%;
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        .navbar {
            background: linear-gradient(to right, #001f3f, #003366);
        }
        .navbar-brand, .nav-link, .btn-outline-danger {
            color: #fff !important;
        }
        .carousel-item img {
            height: 500px;
            object-fit: cover;
        }
        .category-box {
            background: #fff;
            border-radius: 12px;
            padding: 1rem;
            text-align: center;
            transition: 0.3s;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(0,0,0,0.07);
        }
        .category-box:hover {
            background: #003366;
            color: white;
        }
        .card {
            border: none;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .card-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.25rem;
        }
        footer {
            background: #001f3f;
            color: #fff;
            padding: 1.5rem 0;
            margin-top: auto;
        }
        .view-more-btn {
            background: #003366;
            color: white;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s;
        }
        .view-more-btn:hover {
            background: #001f3f;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        main {
        flex: 1;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('blog.home') }}">My Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon bg-white"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="{{ route('blog.home') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('all.blogs') }}" class="nav-link">Blogs</a></li>
                @auth
                    <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
                    <li class="nav-item">
                        <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">@csrf
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

<!-- Main Content -->
<main>

    <!-- Hero Slider -->
    <div id="heroSlider" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('dashboard_assets/image/slider1.jpg') }}" class="d-block w-100" alt="Slider">
            </div>
        </div>
    </div>

    <!-- Categories -->
    <div class="container mb-5">
        <h3 class="text-center mb-4">Explore Categories</h3>
        <div class="row g-4">
            <div class="col-md-3 col-6"><div class="category-box">Technology</div></div>
            <div class="col-md-3 col-6"><div class="category-box">Health</div></div>
            <div class="col-md-3 col-6"><div class="category-box">Travel</div></div>
            <div class="col-md-3 col-6"><div class="category-box">Lifestyle</div></div>
        </div>
    </div>

    <!-- Blog Posts -->
    <div class="container mb-5">
        <h3 class="text-center mb-4">Latest Blog Posts</h3>
        @if ($posts->isEmpty())
            <p class="text-center text-muted">No blog posts available.</p>
        @else
            <div class="row">
                @foreach($posts->take(6) as $post)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text text-muted">{{ Str::limit($post->content, 120) }}</p>
                                <p class="text-muted mt-auto mb-2 small">
                                    By <strong>{{ $post->user->name }}</strong> on {{ $post->created_at->format('d M Y') }}
                                    @if(!$post->is_published)
                                        {{-- <span class="badge bg-warning text-dark ms-2">Pending Approval</span> --}}
                                    @endif
                                </p>
                                <a href="{{ route('post.readmore', $post->id) }}" class="btn btn-sm btn-outline-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- View More Button -->
            @if($posts->count() > 6)
                <div class="text-center mt-4">
                    <a href="{{ route('all.blogs') }}" class="view-more-btn">
                        View All Posts <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            @endif
        @endif
    </div>

</main>
<!-- Latest Articles -->
<div class="container mb-5">
    <h3 class="text-center mb-4">Latest Articles</h3>
    <div class="row">
        <!-- Article 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="dashboard_assets/image/The social Media.jpg" class="card-img-top" alt="Article Image" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">The social Media</h5>
                    <p class="card-text text-muted"> A Double-Edged Sword Social media has changed the world— for better and for worse.</p>
                    <a href="https://app.prideofapen.in/post/13" class="btn btn-sm btn-outline-primary mt-auto">Read More</a>
                </div>
            </div>
        </div>

        <!-- Article 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="dashboard_assets/image/The social Anxiety.png" class="card-img-top" alt="Article Image" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">The social Anxiety</h5>
                    <p class="card-text text-muted">Living with Social Anxiety: The Silent Struggle Social anxiety isn’t just “being shy.” It’s a constant battle wit...</p>
                    <a href="https://app.prideofapen.in/post/10" class="btn btn-sm btn-outline-primary mt-auto">Read More</a>
                </div>
            </div>
        </div>

        <!-- Article 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="dashboard_assets/image/Reality of Our Life.jpg" class="card-img-top" alt="Article Image" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Reality of Our Life</h5>
                    <p class="card-text text-muted">The Reality of Life: A Journey Through Light, Shadow, and Growth Life is a beautiful paradox — full of contradict...</p>
                    <a href="https://app.prideofapen.in/post/14" class="btn btn-sm btn-outline-primary mt-auto">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="bg-white">
    <div class="container py-5">
        <div class="row">
            <!-- Column 1: About -->
            <div class="col-md-3 mb-4">
                <h5 class="text-dark mb-4">My Blog</h5>
                <p class="text-secondary">A platform for sharing knowledge, ideas, and experiences about technology, design, and development.</p>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="col-md-3 mb-4">
                <h5 class="text-dark mb-4">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('blog.home') }}" class="text-secondary">Home</a></li>
                    <li class="mb-2"><a href="{{ route('all.blogs') }}" class="text-secondary">All Blogs</a></li>
                    <li class="mb-2"><a href="{{ route('login.store') }}" class="text-secondary">Login</a></li>
                    <li class="mb-2"><a href="{{ route('register.store') }}" class="text-secondary">Register</a></li>
                </ul>
            </div>

            <!-- Column 3: Categories -->
            <div class="col-md-3 mb-4">
                <h5 class="text-dark mb-4">Categories</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-secondary">Technology</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary">Web Development</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary">UI/UX Design</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary">Programming</a></li>
                </ul>
            </div>

            <!-- Column 4: Contact & Social -->
            <div class="col-md-3 mb-4">
                <h5 class="text-dark mb-4">Contact Us</h5>
                <ul class="list-unstyled text-secondary">
                    <li class="mb-2"><i class="fas fa-envelope me-2"></i> contact@myblog.com</li>
                    <li class="mb-2"><i class="fas fa-phone me-2"></i> +1 (123) 456-7890</li>
                    <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> New York, USA</li>
                </ul>
                <div class="mt-4">
                    <a href="#" class="text-dark me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-dark me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-dark me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-dark me-3"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Section - Removed extra padding -->
    <div class="bg-dark py-3">
        <div class="container">
            <div class="text-center text-white">
                <p class="mb-0">&copy; {{ date('Y') }} My Blog. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
