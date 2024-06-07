<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>knsms</title>

<link href="assets/img/favicon.png" rel="icon">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<!-- Styles -->
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/style.css">
</head>
<body class="antialiased">
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="/"> <img src="/images/kibulogo.png" alt="logo" style="width: 75px;"></a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-links-active" href="/">Home</a></li>
          <li><a class="nav-links" href="/about">About</a></li>
          <li><a class="nav-links" href="/service">Services</a></li>
          <li><a class="nav-link scrollto" href="/contact/create">Contact</a></li>
          <li><a class="nav-link scrollto" href="/help">Help</a></li>
          @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="color: #fff">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="color: #fff">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="color: #fff">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
    @yield('content')
      <footer id="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 footer-contact">
                <h3>KNSMS</h3>
                <p>
                  Kibabii University<br>
                  P.O BOX 1699-5200, Bungoma<br>
                  Kenya<br><br>
                  <strong>Phone:</strong> +254745828667<br>
                  <strong>Email: </strong>needysupport@gmail.com<br>
                </p>
              </div>
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="/about">About us</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="/service">Services</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="/">Terms of service</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="/admin/login">Admin</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="/staff/login">staff</a></li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Financial Assistance</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Needy Student Support</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Academic Assistance</a></li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Networks</h4>
                <p>You can contact us through the following links:</p>
                <div class="social-links mt-3">
                  <a href="https://twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="https://www.facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="https://support.google.com/answer/2451065?hl=en" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="https://www.linkedin.com/login" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div> 
              </div>
            </div>
          </div>
        </div>
        <div class="container footer-bottom clearfix">
          <div class="copyright">
            &copy; Copyright <strong><span>KNSMS</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            Designed by Group One
          </div>
        </div>
      </footer>
</body>
</html>