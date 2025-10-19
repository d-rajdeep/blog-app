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
        html,
        body {
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

        .navbar-brand,
        .nav-link,
        .btn-outline-danger {
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
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.07);
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
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
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
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        main {
            flex: 1;
        }

        :root {
            --primary-color: #002C58;
            --secondary-color: #3a0ca3;
            --accent-color: #4cc9f0;
            --text-dark: #212529;
            --text-light: #6c757d;
            --bg-light: #f8f9fa;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .footer-main {
            background-color: var(--bg-light);
            padding: 3rem 0 0;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }

        .footer-heading {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .footer-heading:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background-color: var(--accent-color);
            border-radius: 2px;
        }

        .footer-links a {
            color: var(--text-light);
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .footer-links a:hover {
            color: var(--primary-color);
            transform: translateX(5px);
        }

        .footer-contact li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1rem;
        }

        .footer-contact i {
            color: var(--primary-color);
            margin-right: 10px;
            margin-top: 3px;
            width: 16px;
        }

        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background-color: white;
            border-radius: 50%;
            color: var(--primary-color);
            margin-right: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .social-icons a:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }

        .footer-bottom {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 1.5rem 0;
            margin-top: 2rem;
        }

        .newsletter-form {
            display: flex;
            margin-top: 1rem;
        }

        .newsletter-input {
            flex: 1;
            padding: 0.5rem 1rem;
            border: 1px solid #ddd;
            border-radius: 4px 0 0 4px;
            outline: none;
        }

        .newsletter-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .newsletter-btn:hover {
            background-color: var(--secondary-color);
        }

        .category-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 1rem;
        }

        .category-tag {
            background-color: white;
            color: var(--primary-color);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            transition: all 0.3s;
            text-decoration: none;
            border: 1px solid #e9ecef;
        }

        .category-tag:hover {
            background-color: var(--primary-color);
            color: white;
        }

        /* Custom styles for the hero slider */
        .hero-slider {
            margin-bottom: 3rem;
            overflow: hidden;
            border-radius: 0 0 12px 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .carousel-item {
            position: relative;
            height: 70vh;
            /* Default height for larger screens */
        }

        .carousel-item img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        /* Mobile-first responsive adjustments */
        @media (max-width: 768px) {
            .carousel-item {
                height: 50vh;
                /* Reduced height for tablets */
            }

            .carousel-caption {
                bottom: 20px;
                padding: 0 15px;
            }

            .carousel-caption h3 {
                font-size: 1.5rem;
                margin-bottom: 0.5rem;
            }

            .carousel-caption p {
                font-size: 0.9rem;
                margin-bottom: 0.75rem;
            }

            .btn-slider {
                padding: 0.4rem 1rem;
                font-size: 0.85rem;
            }
        }

        @media (max-width: 576px) {
            .carousel-item {
                height: 40vh;
                /* Further reduced height for mobile */
            }

            .carousel-caption {
                bottom: 10px;
            }

            .carousel-caption h3 {
                font-size: 1.25rem;
            }

            .carousel-caption p {
                font-size: 0.8rem;
                display: none;
                /* Hide description on very small screens */
            }

            .hero-slider {
                margin-bottom: 2rem;
                border-radius: 0;
            }
        }

        /* Optional: Add captions for better UX */
        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            padding: 20px;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            max-width: 600px;
        }

        .btn-slider {
            background-color: #4361ee;
            border: none;
            border-radius: 4px;
            padding: 0.5rem 1.5rem;
            transition: all 0.3s ease;
        }

        .btn-slider:hover {
            background-color: #3a0ca3;
            transform: translateY(-2px);
        }

        /* Carousel control styling */
        .carousel-control-prev,
        .carousel-control-next {
            width: 8%;
        }

        @media (max-width: 576px) {

            .carousel-control-prev,
            .carousel-control-next {
                width: 15%;
            }
        }

        /* Carousel indicator styling */
        .carousel-indicators {
            bottom: 10px;
        }

        @media (max-width: 576px) {
            .carousel-indicators {
                bottom: 5px;
            }

            .carousel-indicators button {
                width: 8px;
                height: 8px;
                border-radius: 50%;
                margin: 0 4px;
            }
        }

        /* Custom styles for the hero slider */
        .hero-slider {
            margin-bottom: 3rem;
            overflow: hidden;
            border-radius: 0 0 12px 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .carousel-item {
            position: relative;
            height: 70vh;
            /* Default height for larger screens */
        }

        .carousel-item img {
            object-fit: cover;
            width: 100%;
            height: 100%;
            filter: brightness(0.7);
        }

        .hero-slider {
            margin-bottom: 3rem;
            overflow: hidden;
            border-radius: 0 0 12px 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
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
        <div id="heroSlider" class="carousel slide hero-slider" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="dashboard_assets/image/slider1.jpg" class="d-block w-100" alt="Web Development">
                    <div class="carousel-caption">
                        <span class="blog-category">Web Development</span>
                        <h1 class="blog-title">The Future of React: What's New in 2024</h1>
                        <p class="blog-excerpt">Explore the latest features and best practices in React.</p>
                        <div class="blog-meta">
                            <span><i class="fas fa-user"></i> Sarah Johnson</span>
                            <span><i class="far fa-clock"></i> 8 min read</span>
                        </div>
                        <button class="btn btn-primary btn-read-more">Read Article</button>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="images/slider2.jpg" class="d-block w-100" alt="JavaScript">
                    <div class="carousel-caption">
                        <span class="blog-category">Programming</span>
                        <h1 class="blog-title">Mastering JavaScript Patterns</h1>
                        <p class="blog-excerpt">Advanced JavaScript concepts for efficient development.</p>
                        <div class="blog-meta">
                            <span><i class="fas fa-user"></i> Michael Chen</span>
                            <span><i class="far fa-clock"></i> 12 min read</span>
                        </div>
                        <button class="btn btn-primary btn-read-more">Read Article</button>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="images/slider3.jpg" class="d-block w-100" alt="UI/UX Design">
                    <div class="carousel-caption">
                        <span class="blog-category">UI/UX Design</span>
                        <h1 class="blog-title">Designing for Accessibility</h1>
                        <p class="blog-excerpt">Create inclusive digital experiences for everyone.</p>
                        <div class="blog-meta">
                            <span><i class="fas fa-user"></i> Emily Rodriguez</span>
                            <span><i class="far fa-clock"></i> 10 min read</span>
                        </div>
                        <button class="btn btn-primary btn-read-more">Read Article</button>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Categories -->
        <div class="container mb-5">
            <h3 class="text-center mb-4">Explore Categories</h3>
            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="category-box">Technology</div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="category-box">Health</div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="category-box">Travel</div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="category-box">Lifestyle</div>
                </div>
            </div>
        </div>

        <!-- Blog Posts -->
        <div class="container mb-5">
            <h3 class="text-center mb-4">Latest Blog Posts</h3>
            @if ($posts->isEmpty())
                <p class="text-center text-muted">No blog posts available.</p>
            @else
                <div class="row">
                    @foreach ($posts->take(6) as $post)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text text-muted">{{ Str::limit($post->content, 120) }}</p>
                                    <p class="text-muted mt-auto mb-2 small">
                                        By <strong>{{ $post->user->name }}</strong> on
                                        {{ $post->created_at->format('d M Y') }}
                                        @if (!$post->is_published)
                                            {{-- <span class="badge bg-warning text-dark ms-2">Pending Approval</span> --}}
                                        @endif
                                    </p>
                                    <a href="{{ route('post.readmore', $post->id) }}"
                                        class="btn btn-sm btn-outline-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- View More Button -->
                @if ($posts->count() > 6)
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
                    <img src="dashboard_assets/image/The social Media.jpg" class="card-img-top" alt="Article Image"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">The social Media</h5>
                        <p class="card-text text-muted"> A Double-Edged Sword Social media has changed the world— for
                            better and for worse.</p>
                        <a href="https://app.prideofapen.in/post/13"
                            class="btn btn-sm btn-outline-primary mt-auto">Read
                            More</a>
                    </div>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="dashboard_assets/image/The social Anxiety.png" class="card-img-top" alt="Article Image"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">The social Anxiety</h5>
                        <p class="card-text text-muted">Living with Social Anxiety: The Silent Struggle Social anxiety
                            isn’t just “being shy.” It’s a constant battle wit...</p>
                        <a href="https://app.prideofapen.in/post/10"
                            class="btn btn-sm btn-outline-primary mt-auto">Read
                            More</a>
                    </div>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="dashboard_assets/image/Reality of Our Life.jpg" class="card-img-top"
                        alt="Article Image" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Reality of Our Life</h5>
                        <p class="card-text text-muted">The Reality of Life: A Journey Through Light, Shadow, and
                            Growth Life is a beautiful paradox — full of contradict...</p>
                        <a href="https://app.prideofapen.in/post/14"
                            class="btn btn-sm btn-outline-primary mt-auto">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer-main">
        <div class="container py-5">
            <div class="row">
                <!-- Column 1: About & Newsletter -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="footer-heading">My Blog</h5>
                    <p class="text-secondary mb-4">It is a very impressive blog app where people can express their
                        thougts or feelings as a post with just a very simple steps</p>

                    <h6 class="text-dark mb-3">Stay Updated</h6>
                    <div class="newsletter-form">
                        <input type="email" class="newsletter-input" placeholder="Your email address">
                        <button class="newsletter-btn">Subscribe</button>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="footer-heading">Quick Links</h5>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="{{ route('blog.home') }}">Home</a></li>
                        <li class="mb-2"><a href="{{ route('all.blogs') }}">All Articles</a></li>
                        <li class="mb-2"><a href="{{ route('login.store') }}">Login</a></li>
                        <li class="mb-2"><a href="{{ route('register.store') }}">Register</a></li>
                        <li class="mb-2"><a href="#">About Us</a></li>
                    </ul>
                </div>

                <!-- Column 3: Categories -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="footer-heading">Categories</h5>
                    <div class="category-tags">
                        <a href="#" class="category-tag">Article</a>
                        <a href="#" class="category-tag">Features</a>
                        <a href="#" class="category-tag">Poem</a>
                        <a href="#" class="category-tag">News</a>
                        <a href="#" class="category-tag">Biography</a>
                        <a href="#" class="category-tag">POV</a>
                    </div>
                </div>

                <!-- Column 4: Contact & Social -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="footer-heading">Get In Touch</h5>
                    <ul class="list-unstyled text-secondary footer-contact">
                        <li class="mb-2">
                            <i class="fas fa-envelope"></i>
                            <span>hello@codecanvas.dev</span>
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-phone"></i>
                            <span>+1 (555) 123-4567</span>
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Chandmari, Guwahati</span>
                        </li>
                    </ul>

                    <div class="mt-4">
                        <h6 class="text-dark mb-3">Follow Us</h6>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-dev"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="footer-bottom">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center text-center">
                    <p class="mb-2 mb-md-0">&copy; {{ date('Y') }} My Blog. All rights reserved.</p>
                    <div>
                        <a href="#" class="text-white me-3 text-decoration-none">Privacy Policy</a>
                        <a href="#" class="text-white text-decoration-none">Terms of Service</a>
                    </div>
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
