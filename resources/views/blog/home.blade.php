<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Our Magazine</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ 'assets/img/favicon.ico' }}">

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
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top ">
                    <div class="container-fluid">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-lg-between align-items-center">
                                <div class="header-info-left">
                                    <li class="d-none d-lg-block">
                                        <div class="form-box f-right ">
                                            <input type="text" name="Search" placeholder="Search your interest...">
                                            <div class="search-icon">
                                                <i class="ti-search"></i>
                                            </div>
                                        </div>
                                    </li>
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

                                        @auth
                                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                        @else
                                            <li><a href="{{ route('login.page') }}">Log In or Sign Up</a></li>
                                        @endauth
                                    </ul>

                                    <!-- Social -->
                                    <div class="header-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <!-- logo 2 -->
                                <div class="logo2">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                                <!-- logo 3 -->
                                <div class="logo3 d-block d-sm-none">
                                    <a href="index.html"><img src="assets/img/logo/logo-mobile.png" alt=""></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu text-center d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="category.html">Lifestyle</a></li>
                                            <li><a href="category.html">Business</a></li>
                                            <li><a href="category.html">Fashion</a></li>
                                            <li><a href="category.html">Design</a></li>
                                            <li><a href="category.html">Health</a></li>
                                            <li><a href="category.html">Harmful</a></li>
                                            <li><a href="category.html">Technology</a></li>
                                            <li><a href="category.html">Travel</a></li>
                                            <li><a href="category.html">Food</a></li>
                                            <li><a href="category.html">Creative</a></li>
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
        <!-- Header End -->
    </header>
    <main>
        <!-- Banner News Area Start -->
        <div class="banner-news">
            <div class="container-fluid p-0">
                <div class="banner-slider-active no-gutters ">
                    <div class="single-sliders">
                        <div class="single-baner-nw mb-30 text-center">
                            <div class="banner-img-cap">
                                <div class="banner-img">
                                    <img src="assets/img/gallery/banner-cap1.png" alt="">
                                    <!--video iocn -->
                                    <div class="video-icon">
                                        <a class="popup-video btn-icon"
                                            href="https://www.youtube.com/watch?v=up68UAfH0d0"
                                            data-animation="bounceIn" data-delay=".4s"><i
                                                class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="banner-cap">
                                    <p>Trending</p>
                                    <h3><a href="#">Calling time on irresponsible junk food advertising to
                                            children</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-sliders">
                        <div class="single-baner-nw mb-30 text-center">
                            <div class="banner-img-cap">
                                <div class="banner-img">
                                    <img src="assets/img/gallery/banner-cap2.png" alt="">
                                </div>
                                <div class="banner-cap">
                                    <p>Trending</p>
                                    <h3><a href="post_details.html">The pomelo case: scope of plant variety rights in
                                            China</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-sliders">
                        <div class="single-baner-nw mb-30 text-center">
                            <div class="banner-img-cap">
                                <div class="banner-img">
                                    <img src="assets/img/gallery/banner-cap3.png" alt="">
                                    <!--video iocn -->
                                    <div class="video-icon">
                                        <a class="popup-video btn-icon"
                                            href="https://www.youtube.com/watch?v=up68UAfH0d0"
                                            data-animation="bounceIn" data-delay=".4s"><i
                                                class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="banner-cap">
                                    <p>Trending</p>
                                    <h3><a href="#">Valuable lessons to take away from COVID-19</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-sliders">
                        <div class="single-baner-nw mb-30 text-center">
                            <div class="banner-img-cap">
                                <div class="banner-img">
                                    <img src="assets/img/gallery/banner-cap4.png" alt="">
                                </div>
                                <div class="banner-cap">
                                    <p>Trending</p>
                                    <h3><a href="#">Building on consumer preferences shaped by the pandemic</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-sliders">
                        <div class="single-baner-nw mb-30 text-center">
                            <div class="banner-img-cap">
                                <div class="banner-img">
                                    <img src="assets/img/gallery/banner-cap2.png" alt="">
                                    <!--video iocn -->
                                    <div class="video-icon">
                                        <a class="popup-video btn-icon"
                                            href="https://www.youtube.com/watch?v=up68UAfH0d0"
                                            data-animation="bounceIn" data-delay=".4s"><i
                                                class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="banner-cap">
                                    <p>Trending</p>
                                    <h3><a href="#">Building on consumer preferences shaped by the pandemic</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner News Area End -->
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
                    @foreach ($posts->take(6) as $post)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm border-0">
                                @if ($post->image)
                                    <img src="{{ asset('storage/blog_images' . $post->image) }}" class="card-img-top"
                                        alt="{{ $post->title }}" style="height: 200px; object-fit: cover;">
                                @else
                                    <img src="{{ asset('images/blog.png') }}" class="card-img-top"
                                        alt="Default Image" style="height: 200px; object-fit: cover;">
                                @endif

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

        <!-- Nwes slider Start -->
        <div class="nes-slider-area pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="news-slider-active">
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="assets/img/gallery/news-slider1.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="assets/img/gallery/news-slider2.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="assets/img/gallery/news-slider3.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="assets/img/gallery/news-slider4.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="assets/img/gallery/news-slider1.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="assets/img/gallery/news-slider2.png"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nwes slider End -->
        <!-- Top Posts Start -->
        <div class="top-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-tittle mb-35">
                            <h2>Top Posts</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-lg-between">
                    <div class="col-lg-8 col-md-8">
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="#"><img src="assets/img/gallery/top-psot1.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <span>Trending</span>
                                    <a href="post_details.html">
                                        <h4>The pomelo case: scope of plant variety rights in China</h4>
                                    </a>
                                    <p>We present things in a way that isn’t sensational, said Ms. Cham mavanijakul, 20,
                                        whose family has roots...</p>
                                </div>
                            </div>
                        </div>
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="#"><img src="assets/img/gallery/top-psot2.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <span>Trending</span>
                                    <a href="post_details.html">
                                        <h4>The pomelo case:scope of plant variety rights in China</h4>
                                    </a>
                                    <p>We present things in a way that isn’t sensational, said Ms. Cham mavanijakul, 20,
                                        whose family has roots...</p>
                                </div>
                            </div>
                        </div>
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="#"><img src="assets/img/gallery/top-psot3.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <span>Trending</span>
                                    <a href="post_details.html">
                                        <h4>The pomelo case:scope of plant variety rights in China</h4>
                                    </a>
                                    <p>We present things in a way that isn’t sensational, said Ms. Cham mavanijakul, 20,
                                        whose family has roots...</p>
                                </div>
                            </div>
                        </div>
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="#"><img src="assets/img/gallery/top-psot4.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <span>Trending</span>
                                    <a href="post_details.html">
                                        <h4>The pomelo case:scope of plant variety rights in China</h4>
                                    </a>
                                    <p>We present things in a way that isn’t sensational, said Ms. Cham mavanijakul, 20,
                                        whose family has roots...</p>
                                </div>
                            </div>
                        </div>
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="#"><img src="assets/img/gallery/top-psot5.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <span>Trending</span>
                                    <a href="post_details.html">
                                        <h4>The pomelo case:scope of plant variety rights in China</h4>
                                    </a>
                                    <p>We present things in a way that isn’t sensational, said Ms. Cham mavanijakul, 20,
                                        whose family has roots...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="google-add mb-40">
                            <img src="assets/img/gallery/Ad.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div><br></br>
        <!-- Top Posts End -->
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
                    @foreach ($posts->take(3) as $post)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm border-0">
                                @if ($post->image)
                                    <img src="{{ asset('storage/blog_images' . $post->image) }}" class="card-img-top"
                                        alt="{{ $post->title }}" style="height: 200px; object-fit: cover;">
                                @else
                                    <img src="{{ asset('images/blog.png') }}" class="card-img-top"
                                        alt="Default Image" style="height: 200px; object-fit: cover;">
                                @endif

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

    <!-- JS here -->

    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Date Picker -->
    <script src="{{ asset('assets/js/gijgo.min.js') }}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <!-- Progress -->
    <script src="{{ asset('assets/js/jquery.barfiller.js') }}"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/hover-direction-snake.min.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('assets/js/contact.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
