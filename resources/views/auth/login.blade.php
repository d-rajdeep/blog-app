<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EchoMag - Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
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
                <div class="header-top py-3 bg-white shadow-sm">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <div class="logo text-center">
                                    <a href="{{route('blog.home')}}">
                                        <img src="assets/img/logo/logo.png" alt="Logo" class="img-fluid"
                                            style="max-height: 60px;">
                                    </a>
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
                                            <li><a href="{{ route('blog.home') }}">Home</a></li>
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
        <!-- breadcrumb Start-->
        <div class="page-notification">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Login</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb End -->
        <!-- login Area Start -->
        <div class="login-form-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="login-form">
                            <!-- Login Heading -->
                            <div class="login-heading">
                                <span>Login</span>
                                <p>Enter Login details to get access</p>
                            </div>

                            <!-- Laravel Form -->
                            <form method="POST" action="{{ route('login.store') }}">
                                @csrf

                                {{-- Success Message --}}
                                @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif

                                {{-- Login Error --}}
                                @if ($errors->has('phone'))
                                    <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
                                @endif

                                <!-- Input Fields -->
                                <div class="input-box">
                                    <div class="single-input-fields">
                                        <label>Mobile Number</label>
                                        <input type="text" id="phone" name="phone"
                                            value="{{ old('phone') }}" placeholder="Enter your mobile number"
                                            required>
                                        @error('phone')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="single-input-fields position-relative">
                                        <label>Password</label>

                                        <input type="password" id="password" name="password"
                                            class="form-control pe-5" placeholder="Enter Password" required>

                                        <!-- Visible eye icon inside input -->
                                        <i class="bi bi-eye" id="togglePasswordIcon"
                                            style="
                                                    position: absolute;
                                                    top: 70%;
                                                    right: 15px;
                                                    transform: translateY(-50%);
                                                    cursor: pointer;
                                                    color: #6c757d;
                                                "
                                            onclick="togglePassword()"></i>

                                        @error('password')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="single-input-fields login-check">
                                        <input type="checkbox" id="keep-log" name="keep-log">
                                        <label for="keep-log">Keep me logged in</label>
                                        <a href="#" class="f-right">Forgot Password?</a>
                                    </div>
                                </div>

                                <!-- Footer -->
                                <div class="login-footer">
                                    <p>Don’t have an account?
                                        <a href="{{ route('register.page') }}">Sign Up</a> here
                                    </p>
                                    <button type="submit" class="submit-btn3">Login</button>

                                    {{-- <div class="text-center mt-3">
                                        <a href="{{ route('blog.home') }}" class="btn btn-outline-primary btn-sm">
                                            ← Back to Home
                                        </a>
                                    </div> --}}
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Password Toggle Script -->
        <script>
            function togglePassword() {
                const password = document.getElementById('password');
                const icon = document.getElementById('togglePasswordIcon');
                if (password.type === 'password') {
                    password.type = 'text';
                    icon.classList.replace('bi-eye', 'bi-eye-slash');
                } else {
                    password.type = 'password';
                    icon.classList.replace('bi-eye-slash', 'bi-eye');
                }
            }
        </script>

        <!-- login Area End -->
    </main>
    <!-- Footer Bottom -->
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

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>
