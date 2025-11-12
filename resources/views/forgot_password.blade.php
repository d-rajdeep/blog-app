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
    <main class="container py-5" style="min-height: 75vh;">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg border-0" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">

                        <div class="text-center mb-4">
                            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="EchoMag" width="100">
                            <h4 class="mt-3 fw-bold text-primary">Forgot Your Password?</h4>
                            <p class="text-muted small">
                                Enter your registered email and we’ll send you a link to reset your password.
                            </p>
                        </div>

                        <!-- Forgot Password Form -->
                        <form method="POST" action="#">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control shadow-sm"
                                    placeholder="Enter your email" required autofocus>
                            </div>

                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary py-2 fw-semibold">
                                    Send Reset Link
                                </button>
                            </div>

                            <div class="text-center mt-3">
                                <a href="{{ route('login.page') }}"
                                    class="text-decoration-none text-primary fw-semibold">
                                    <i class="fa-solid fa-arrow-left me-1"></i> Back to Login
                                </a>
                            </div>
                        </form>

                        <!-- Divider -->
                        <hr class="my-4">

                        <!-- Admin Contact Info -->
                        <div class="text-center">
                            <h6 class="fw-semibold mb-2 text-dark">Need Help?</h6>
                            <p class="mb-1 text-muted small">
                                <i class="fa-solid fa-phone text-primary me-2"></i> +91 8638116318
                            </p>
                            <p class="mb-0 text-muted small">
                                <i class="fa-solid fa-envelope text-primary me-2"></i> designme.rajdeep@gmail.com
                            </p>
                        </div>

                    </div>
                </div>
            </div>
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
