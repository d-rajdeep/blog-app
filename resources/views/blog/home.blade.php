<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EchoMag</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
                                <div class="header-info-left d-none d-lg-block">
                                    <div class="text-dark fw-semibold small">
                                        <span id="currentDateTime"></span>
                                    </div>
                                </div>

                                <script>
                                    function updateDateTime() {
                                        const now = new Date();
                                        const options = {
                                            weekday: 'long',
                                            year: 'numeric',
                                            month: 'long',
                                            day: 'numeric',
                                            hour: '2-digit',
                                            minute: '2-digit',
                                        };
                                        document.getElementById('currentDateTime').textContent = now.toLocaleString('en-IN', options);
                                    }

                                    updateDateTime();
                                    setInterval(updateDateTime, 60000); // updates every minute
                                </script>

                                <div class="header-info-mid">
                                    <!-- logo -->
                                    <div class="logo">
                                        <a href="{{ route('blog.home') }}"><img src="assets/img/logo/logo.png"
                                                alt=""></a>
                                    </div>
                                </div>
                                <div class="header-info-right d-flex align-items-center">
                                    <ul>
                                        @auth
                                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                        @else
                                            <li><a href="{{ route('login.page') }}">Log In or Sign Up</a></li>
                                        @endauth
                                    </ul>

                                    <!-- Social -->
                                    <div class="header-social d-flex align-items-center gap-3">
                                        <a href="https://www.facebook.com/" target="_blank"
                                            class="text-decoration-none">
                                            <i class="fab fa-facebook-f" style="color: #1877F2; font-size: 18px;"></i>
                                        </a>
                                        <a href="https://www.instagram.com/" target="_blank"
                                            class="text-decoration-none">
                                            <i class="fab fa-instagram" style="color: #E4405F; font-size: 18px;"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/" target="_blank"
                                            class="text-decoration-none">
                                            <i class="fab fa-linkedin-in" style="color: #0A66C2; font-size: 18px;"></i>
                                        </a>
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
                                    <a href="{{ route('blog.home') }}"><img src="assets/img/logo/logo.png"
                                            alt=""></a>
                                </div>
                                <!-- logo 3 -->
                                <div class="logo3 d-block d-sm-none">
                                    <a href="{{ route('blog.home') }}"><img src="assets/img/logo/logo-mobile.png"
                                            alt=""></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu text-center d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ route('all.blogs') }}">Current Affairs</a></li>
                                            <li><a href="{{ route('all.blogs') }}">Lifestyle & Culture</a></li>
                                            <li><a href="{{ route('all.blogs') }}">Technology & Innovation</a></li>
                                            <li><a href="{{ route('all.blogs') }}">Health & Wellness</a></li>
                                            <li><a href="{{ route('all.blogs') }}">Business & Economy</a></li>
                                            <li><a href="{{ route('all.blogs') }}">Travel & Exploration</a></li>
                                            <li><a href="{{ route('all.blogs') }}">Arts & Entertainment</a></li>
                                            <li><a href="{{ route('all.blogs') }}">Science & Environment</a></li>
                                            <li><a href="{{ route('all.blogs') }}">Opinion & Editorials</a></li>
                                            <li><a href="{{ route('all.blogs') }}">People & Stories</a></li>
                                            <div class="col-12 d-block d-lg-none text-center mt-2">
                                                @auth
                                                    <a href="{{ route('dashboard') }}" class="btn btn-primary px-4 py-2"
                                                        style="border-radius: 20px;">
                                                        <i class="bi bi-speedometer2 me-1"></i> Dashboard
                                                    </a>
                                                @else
                                                    <a href="{{ route('login.page') }}"
                                                        class="btn btn-outline-primary px-4 py-2"
                                                        style="border-radius: 20px;">
                                                        <i class="bi bi-box-arrow-in-right me-1"></i> Log In / Sign Up
                                                    </a>
                                                @endauth
                                            </div>
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
                                <div class="card-img-container"
                                    style="width: 370px; height: 200px; background-color: #fff; display: flex; align-items: center; justify-content: center; overflow: hidden; border-radius: 6px;">
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                            style="max-width: 100%; max-height: 100%; object-fit: contain;">
                                    @else
                                        <img src="{{ asset('images/blog.png') }}" alt="Default Image"
                                            style="max-width: 100%; max-height: 100%; object-fit: contain;">
                                    @endif
                                </div>

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

        <!-- Nwes slider Start -->
        <div class="nes-slider-area pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="news-slider-active">
                            <!-- Current Affairs -->
                            <div class="single-news-slider">
                                <div class="news-img position-relative">
                                    <a href="{{ route('all.blogs') }}">
                                        <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201909/current_affairs_new_0.png?w=800&q=80"
                                            alt="Current Affairs"
                                            style="width:100%; height:250px; object-fit:cover; border-radius:10px;">
                                        <span class="category-overlay">Current Affairs</span>
                                    </a>
                                </div>
                            </div>

                            <!-- Technology & Innovation -->
                            <div class="single-news-slider">
                                <div class="news-img position-relative">
                                    <a href="{{ route('all.blogs') }}">
                                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=800&q=80"
                                            alt="Technology & Innovation"
                                            style="width:100%; height:250px; object-fit:cover; border-radius:10px;">
                                        <span class="category-overlay">Technology & Innovation</span>
                                    </a>
                                </div>
                            </div>

                            <!-- Lifestyle & Culture -->
                            <div class="single-news-slider">
                                <div class="news-img position-relative">
                                    <a href="{{ route('all.blogs') }}">
                                        <img src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?w=800&q=80"
                                            alt="Lifestyle & Culture"
                                            style="width:100%; height:250px; object-fit:cover; border-radius:10px;">
                                        <span class="category-overlay">Lifestyle & Culture</span>
                                    </a>
                                </div>
                            </div>

                            <!-- Health & Wellness -->
                            <div class="single-news-slider">
                                <div class="news-img position-relative">
                                    <a href="{{ route('all.blogs') }}">
                                        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=800&q=80"
                                            alt="Health & Wellness"
                                            style="width:100%; height:250px; object-fit:cover; border-radius:10px;">
                                        <span class="category-overlay">Health & Wellness</span>
                                    </a>
                                </div>
                            </div>

                            <!-- Travel & Exploration -->
                            <div class="single-news-slider">
                                <div class="news-img position-relative">
                                    <a href="{{ route('all.blogs') }}">
                                        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=800&q=80"
                                            alt="Travel & Exploration"
                                            style="width:100%; height:250px; object-fit:cover; border-radius:10px;">
                                        <span class="category-overlay">Travel & Exploration</span>
                                    </a>
                                </div>
                            </div>

                            <!-- Business & Economy -->
                            <div class="single-news-slider">
                                <div class="news-img position-relative">
                                    <a href="{{ route('all.blogs') }}">
                                        <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?w=800&q=80"
                                            alt="Business & Economy"
                                            style="width:100%; height:250px; object-fit:cover; border-radius:10px;">
                                        <span class="category-overlay">Business & Economy</span>
                                    </a>
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
                    @foreach ($posts->take(6) as $post)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-img-container"
                                    style="width: 370px; height: 200px; background-color: #fff; display: flex; align-items: center; justify-content: center; overflow: hidden; border-radius: 6px;">
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                            style="max-width: 100%; max-height: 100%; object-fit: contain;">
                                    @else
                                        <img src="{{ asset('images/blog.png') }}" alt="Default Image"
                                            style="max-width: 100%; max-height: 100%; object-fit: contain;">
                                    @endif
                                </div>

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
            <div class="main-header">
                <!-- Top Section -->
                <div class="header-top d-lg-block d-none">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left d-flex justify-content-center">
                                    <!-- (empty section for now) -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Section -->
                <div class="header-bottom header-bottom2">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <!-- Main-menu -->
                                <div class="main-menu text-center mb-3">
                                    <nav>
                                        <ul>
                                            <li><a href="{{ route('all.blogs') }}">Current Affairs</a></li>
                                            <li><a href="{{ route('all.blogs') }}">Lifestyle & Culture</a></li>
                                            <li><a href="{{ route('all.blogs') }}">Technology & Innovation</a></li>
                                            <li><a href="{{ route('all.blogs') }}">Health & Wellness</a></li>
                                            <li><a href="{{ route('all.blogs') }}">Business & Economy</a></li>
                                            <li><a href="{{ route('all.blogs') }}">Travel & Exploration</a></li>
                                            <li><a href="{{ route('all.blogs') }}">Arts & Entertainment</a></li>
                                            <li><a href="{{ route('all.blogs') }}">Science & Environment</a></li>
                                            <li><a href="{{ route('all.blogs') }}">Opinion & Editorials</a></li>
                                            <li><a href="{{ route('all.blogs') }}">People & Stories</a></li>
                                        </ul>
                                    </nav>
                                </div>

                                <!-- Social Icons -->
                                <div class="header-social d-flex justify-content-center align-items-center gap-3 mb-3">
                                    <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none">
                                        <i class="fab fa-facebook-f" style="color: #1877F2; font-size: 18px;"></i>
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank"
                                        class="text-decoration-none">
                                        <i class="fab fa-instagram" style="color: #E4405F; font-size: 18px;"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/" target="_blank" class="text-decoration-none">
                                        <i class="fab fa-linkedin-in" style="color: #0A66C2; font-size: 18px;"></i>
                                    </a>
                                </div>

                                <!-- Centered Logo -->
                                <div class="footer-logo text-center mt-3">
                                    <a href="{{ route('blog.home') }}">
                                        <img src="assets/img/logo/logo.png" alt="Logo" style="max-height: 80px;">
                                    </a>
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
                © 2026
                <a href="https://d-rajdeep.github.io/" class="text-decoration-none text-primary fw-semibold"
                    target="_blank">
                    EchoMag
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
    <style>
        .footer-area {
            background: #f9f9f9;
            padding: 40px 0;
        }

        .footer-logo img {
            transition: transform 0.3s ease;
        }

        .footer-logo img:hover {
            transform: scale(1.05);
        }

        .main-menu ul li a {
            font-weight: 500;
            text-transform: capitalize;
        }

        .header-social a i {
            transition: transform 0.2s ease;
        }

        .header-social a:hover i {
            transform: scale(1.2);
        }

        .category-overlay {
            position: absolute;
            bottom: 15px;
            left: 15px;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            text-transform: capitalize;
        }
    </style>
</body>

</html>
