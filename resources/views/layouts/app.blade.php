<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
      
        <title>Tradecraft Printers</title>
        <meta content="#1 printing, photocopying, binding and lamination shop in Kenya" name="description">
        <meta content="" name="keywords">
      
        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
       
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
      
        <meta name="twitter:title" content="Tradecraft Printers">
        <meta name="twitter:description" content="<p>#1 printing, photocopying, binding and lamination shop in Kenya</p>">
        <meta name="twitter:image" content="https://tradecraft.co.ke/assets/img/twitter-card.png">
        <meta name="twitter:site" content="tradecraft.co.ke">
        <meta name="twitter:card" content="summary_large_image">    
        <meta name="twitter:creator" content="@tradecraft2017">
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Tradecraft Printers"/>
        <meta property="og:description" content="<p>#1 printing, photocopying, binding and lamination shop in Kenya</p>" />
        <meta property="og:image" content="https://tradecraft.co.ke/assets/img/twitter-card.png" />
        <meta property="og:url" content="https://tradecraft.co.ke" />
        <meta property="og:site_name" content="Tradecraft Printers"/>
        <!-- Template Main CSS File -->

        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('build/assets/app-DHBATib1.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/remixicon-bMSTyo6R.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/style-CrzLyF-k.css') }}">

    <link rel="stylesheet" href="{{ asset('build/assets/variables-DBBMD_mi.css') }}">
    <script src="{{ asset('bui1ld/assets/app-7q1JrtwP.js') }}"></script>
    <script src="{{ asset('build/assets/app-l0sNRNKZ.js') }}"></script>

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
      <!-- Bootstrap JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
    </head>
    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top ">
          <div class="container d-flex align-items-center justify-content-lg-between">
         
            <a href="index.html" class="logo me-auto me-lg-0"><img src="storage/img/logo.webp" alt="logo" class="img-fluid"></a>
      
            <nav id="navbar" class="navbar .navbar-mobile order-last order-lg-0">
              <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                    @foreach($services as $service)
                    <li><a href="{{ route('service', $service->slug) }}">{{ $service->service_type }}</a></li>
                    @endforeach
                  </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a href="#" data-toggle="modal" data-target="#exampleModal" class="get-started-btn scrollto">Request Quote</a>
      
          </div>
        </header><!-- End Header -->
      
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('storage/img/hero-bg.jpg') }}');">
          <div class="container" data-aos="fade-up">
      
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
              <div class="col-xl-6 col-lg-8">
                <h1>Tradecraft Printers<span>.</span></h1>
                <h2>#1 printing <i class="bx bx-file"></i>, photocopying <i class='bx bx-copy-alt'></i>, binding <i class='bx bx-book'></i> and lamination <i class='bx bx-detail' ></i> shop in Kenya</h2>
              </div>
            </div>
      
            <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
              <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                  <i class="ri-store-line"></i>
                  <h3><a href="">Flexible hours</a></h3>
                </div>
              </div>
              <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                  <i class="ri-bar-chart-box-line"></i>
                  <h3><a href="">Quality service</a></h3>
                </div>
              </div>
              <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                  <i class="bi bi-buildings"></i>
                  <h3><a href="">Two offices</a></h3>
                </div>
              </div>
              <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                  <i class="bi bi-journal-bookmark-fill"></i>
                  <h3><a href="">Custom services</a></h3>
                </div>
              </div>
              <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                  <i class="bi bi-people"></i>
                  <h3><a href="">Dedicated team</a></h3>
                </div>
              </div>
            </div>
      
          </div>
        </section><!-- End Hero -->

        <main id="main">
            @yield('content')
        </main>
        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                <div class="row">
        
                    <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <a href="index.html" class="logo me-auto me-lg-0"><img src="storage/img/logo.png" alt="logo" class="img-fluid"></a>
        
                        <p>
                        Mfangano Trade Centre <br>
                        Ground floor,shop G3, Nairobi, Kenya<br><br>
                        <strong>Phone:</strong> +254 713 445 339<br>
                        <strong>Email:</strong> info@tradecraft.co.ke<br>
                        </p>
                        <div class="social-links mt-3">
                        <a href="https://twitter.com/tradecraft2017?t=mU46xsfHkLv8ClJuMWyd2A&s=09" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="https://www.facebook.com/tradecraftenterprises?mibextid=ZbWKwL" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="https://www.tiktok.com/@tradecraft_enterprises?_t=8kS394fMXI5&_r=1" class="tiktok"><i class="bx bxl-tiktok"></i></a>
                        </div>
                    </div>
                    </div>
        
                    <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                    </ul>
                    </div>
        
                    <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        @foreach($services as $service)
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('service', $service->slug) }}">{{ $service->service_type }}</a</li>
                        @endforeach
    
                    </ul>
                    </div>
        
            
        
                </div>
                </div>
            </div>
        
            <div class="container">
                <div class="copyright">
                &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                Designed by <a href="https://sansa.digital/">Sansa Digital</a>
                </div>
            </div>
            </footer><!-- End Footer -->
        
            <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        
            <!-- Vendor JS Files -->
            <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
            <script src="assets/vendor/aos/aos.js"></script>
            <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
            <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        
            <!-- Template Main JS File -->
            <script src="assets/js/main.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
            <script>
            var swiper = new Swiper('.swiper', {
                // Optional parameters
                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
    
                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
    
                // Adding space between slides
                spaceBetween: 0,
    
                // Adding slide visibility check
                watchSlidesVisibility: true,
    
                // Adjusting slide transition
                speed: 600,
    
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: true,
                },
                    // Responsive breakpoints
                breakpoints: {
                    // when window width is >= 320px
                    320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    },
                    // when window width is >= 640px
                    640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                    },
                    // when window width is >= 1024px
                    1024: {
                    slidesPerView: 7,
                    spaceBetween: 30,
                    },
                }
            });
            var swiper1 = new Swiper('.swiper1', {
                pagination: {
                    el: '.swiper-pagination1',
                    clickable: true,
                },
    
                navigation: {
                    nextEl: '.swiper-button-next1',
                    prevEl: '.swiper-button-prev1',
                },
    
                autoplay: {
                    delay: 6000,
                    disableOnInteraction: true,
                },
    
                speed: 600,
            });
    
        </script>
        <script>
            $(document).ready(function () {
                $('#exampleModal').modal();
            });
        </script>
        
        <script type="application/ld+json">
            {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "Tradecraft Printers",
            "description": "#1 printing, photocopying, binding and lamination shop in Kenya",
            "url": "https://tradecraft.co.ke",
            "telephone": "+254 713 445 339",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Mfangano Trade Centre",
                "addressLocality": "Nairobi",
                "addressRegion": "Kenya",
                "postalCode": "00100",
                "addressCountry": "Kenya"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 1.240695
                "longitude": 36.8079746
            },
            "openingHours": "Mo-Sa 07:00-19:00",
            "paymentAccepted": ["Cash", "Mpesa"],
            "priceRange": "KES",
            "image": "https://tradecraft.co.ke/assets/img/twitter-card.png",
            "logo": "https://tradecraft.co.ke/assets/img/logo.png",
            }
            </script>
            
        
        </body>
    </html>
    </div>
</body>
</html>
