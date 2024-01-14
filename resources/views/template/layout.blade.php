<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{!! $title !!}</title>
    <meta name="description" content="{{ $description }}" >
    <meta name="keywords" content="{{ $keywords }}" >

    <!-- Favicons -->
    <link href="/img/favicon.png" rel="icon">
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    

    <!-- Vendor CSS Files -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>

    @include('template.navbar')

    @yield('content')


    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">

            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h3>PT. Toguma Plastik Cikarang</h3>
                        <p>
                            {{ $contact->address }}
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/#about">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/category-parts">Plastic Part</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/category-materials">Plastic Material</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Contact</h4>
                        <ul>
                            <li><i class="bx bxl-whatsapp"></i> <a href="https://api.whatsapp.com/send/?phone={{ $contact->whatsapp }}&text&type=phone_number&app_absent=0"> {{ $contact->whatsapp }}</a></li>
                            <li><i class="bi-phone"></i> <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></li>
                            <li><i class="bi bi-envelope"></i> <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <ul>
                            <li>
                                <a href="{{ $contact->link_twitter }}" class="twitter"><i class="bx bxl-twitter"></i>Twitter</a>
                            </li>
                            <li>
                                <a href="{{ $contact->link_facebook }}" class="facebook"><i class="bx bxl-facebook"></i>Facebook</a>
                            </li>
                            <li>
                                <a href="{{ $contact->link_instagram }}" class="instagram"><i class="bx bxl-instagram"></i>Instagram</a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>2023 PT. Toguma Plastik Cikarang</span></strong>.
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/vendor/php-email-form/validate.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Template Main JS File -->
    <script src="/js/main.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
      </script>

</body>

</html>