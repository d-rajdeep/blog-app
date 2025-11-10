<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $post->title }} | EchoMag</title>
    <meta name="description" content="{{ Str::limit(strip_tags($post->content), 160) }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- CSS -->
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:description" content="{{ Str::limit(strip_tags($post->content), 150) }}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:image" content="{{ asset('storage/' . $post->image) }}">
    <meta property="article:author" content="{{ $post->user->name }}">
    <meta property="article:published_time" content="{{ $post->created_at->toIso8601String() }}">

    <!-- Twitter Card for better preview -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $post->title }}">
    <meta name="twitter:description" content="{{ Str::limit(strip_tags($post->content), 150) }}">
    <meta name="twitter:image" content="{{ asset('storage/' . $post->image) }}">
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
                                <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Post Details -->
        <div class="psot-details pb-80 mt-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <!-- Post Image -->
                        <div class="details-img mb-40 text-center">
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}"
                                    alt="{{ $post->title }}"
                                    style="max-width: 100%; max-height: 100%; object-fit: contain;">
                            @else
                                <img src="{{ asset('images/blog.png') }}" alt="Default Image"
                                    style="max-width: 100%; max-height: 100%; object-fit: contain;">
                            @endif
                        </div>

                        <!-- Post Title -->
                        <div class="about-details-cap mb-4">
                            @if ($post->category)
                                <p class="text-uppercase text-primary small fw-semibold mb-1">
                                    {{ $post->category->name }}</p>
                            @endif
                            <h2 class="fw-bold">{{ $post->title }}</h2>
                            <p class="text-muted mb-4">
                                By <strong>{{ $post->user->name }}</strong> on
                                {{ $post->created_at->format('d M Y') }}
                            </p>
                            <div class="fs-5 lh-lg text-dark mb-4" style="text-align: justify;">
                                {!! nl2br(e($post->content)) !!}
                            </div>
                        </div>

                        <!-- Social Icons -->
                        <div class="social-iocn pt-20 pb-20 text-center">
                            <!-- Facebook -->
                            <a href="https://facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}"
                                target="_blank" title="Share on Facebook" class="me-2">
                                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/facebook.svg"
                                    alt="Facebook" width="28" height="28" style="fill: #1877F2;">
                            </a>

                            <!-- Twitter (X) -->
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::url()) }}&text={{ $post->title }}"
                                target="_blank" title="Share on Twitter" class="me-2">
                                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/x.svg"
                                    alt="Twitter" width="28" height="28" style="fill: #000000;">
                            </a>

                            <!-- LinkedIn -->
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(Request::url()) }}"
                                target="_blank" title="Share on LinkedIn" class="me-2">
                                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/linkedin.svg"
                                    alt="LinkedIn" width="28" height="28" style="fill: #0A66C2;">
                            </a>

                            <!-- WhatsApp -->
                            <a href="https://wa.me/?text={{ urlencode($post->title . ' ' . Request::url()) }}"
                                target="_blank" title="Share on WhatsApp">
                                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/whatsapp.svg"
                                    alt="WhatsApp" width="28" height="28" style="fill: #25D366;">
                            </a>
                        </div>

                        <style>
                            .social-iocn a img {
                                width: 32px;
                                height: 32px;
                                margin: 8px;
                                transition: transform 0.3s ease;
                            }

                            .social-iocn a:hover img {
                                transform: scale(1.15);
                            }
                        </style>

                        <!-- Back to Home -->
                        <div class="text-center mt-4">
                            <a href="{{ route('blog.home') }}" class="btn btn-outline-primary">← Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
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
