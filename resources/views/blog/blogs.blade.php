<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Our Magazine</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ 'assets/img/favicon.png' }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('assets/img/logo/loder.png') }}" alt="Loading...">
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header>
        <div class="header-area">
            <div class="main-header">
                <div class="header-top py-3 bg-white shadow-sm">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <div class="logo text-center">
                                    <a href="{{ route('blog.home') }}">
                                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo"
                                            class="img-fluid" style="max-height: 60px;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="header-bottom header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="main-menu text-center d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ route('blog.home') }}">Home</a></li>
                                            <li><a href="{{ route('all.blogs') }}">Blogs</a></li>
                                            @auth
                                                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                                <li>
                                                    <form action="{{ route('admin.logout') }}" method="POST"
                                                        class="d-inline">@csrf
                                                        <button type="submit"
                                                            class="btn btn-sm btn-danger text-white ms-2">Logout</button>
                                                    </form>
                                                </li>
                                            @else
                                                <li><a href="{{ route('login.page') }}">Login</a></li>
                                                <li><a href="{{ route('register.page') }}">Register</a></li>
                                            @endauth
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Breadcrumb -->
        <div class="page-notification">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('blog.home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Blogs</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest Posts Area -->
        <div class="container mb-5">
            <div class="col-12">
                <div class="section-tittle mb-35">
                    <h2>Latest Posts</h2>
                </div>
            </div>

            @if ($posts->isEmpty())
                <p class="text-center text-muted">No blog posts available.</p>
            @else
                <div class="row">
                    @foreach ($posts->take(12) as $post)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm border-0">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top"
                                        alt="{{ $post->title }}" style="height: 200px; object-fit: cover;">
                                @else
                                    <img src="{{ asset('images/blog.png') }}" class="card-img-top"
                                        alt="Default Image" style="height: 200px; object-fit: cover;">
                                @endif

                                <div class="card-body d-flex flex-column">
                                    @if ($post->category)
                                        <p class="text-uppercase text-primary small fw-semibold mb-1">
                                            {{ $post->category->name }}</p>
                                    @endif

                                    <h5 class="card-title mb-2">{{ $post->title }}</h5>

                                    <p class="card-text text-muted">{{ Str::limit($post->content, 120) }}</p>

                                    <p class="text-muted mt-auto mb-2 small">
                                        By <strong>{{ $post->user->name }}</strong> on
                                        {{ $post->created_at->format('d M Y') }}
                                        @if (!$post->is_published)
                                            {{-- <span class="badge bg-warning text-dark ms-2">Pending Approval</span> --}}
                                        @endif
                                    </p>

                                    <a href="{{ route('post.readmore', $post->id) }}"
                                        class="btn btn-sm btn-outline-primary mt-auto">
                                        Read More
                                    </a>
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
    <div class="footer-area footer-padding">
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-lg-block d-none">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left d-flex justify-content-center">
                                    <!-- Social -->
                                    <div class="header-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                                <div class="header-info-mid">
                                    <!-- logo -->
                                    <div class="logo">
                                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="header-info-right d-flex align-items-center">
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-bottom2 ">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <!-- Main-menu -->
                                <div class="main-menu text-center">
                                    <nav>
                                        <ul>
                                            <li><a href="{{route('all.blogs')}}">Current Affairs</a></li>
                                            <li><a href="{{route('all.blogs')}}">Lifestyle & Culture</a></li>
                                            <li><a href="{{route('all.blogs')}}">Technology & Innovation</a></li>
                                            <li><a href="{{route('all.blogs')}}">Health & Wellness</a></li>
                                            <li><a href="{{route('all.blogs')}}">Business & Economy</a></li>
                                            <li><a href="{{route('all.blogs')}}">Travel & Exploration</a></li>
                                            <li><a href="{{route('all.blogs')}}">Arts & Entertainment</a></li>
                                            <li><a href="{{route('all.blogs')}}">Science & Environment</a></li>
                                            <li><a href="{{route('all.blogs')}}">Opinion & Editorials</a></li>
                                            <li><a href="{{route('all.blogs')}}">People & Stories</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-bottom py-3 mt-5 bg-light border-top">
        <div class="container text-center">
            <strong>
                © 2025
                <a href="https://d-rajdeep.in/" class="text-decoration-none text-primary fw-semibold"
                    target="_blank">
                    Rajdeep
                </a>
                . All Rights Reserved.
            </strong>
        </div>
    </footer>

    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/gijgo.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/hover-direction-snake.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
