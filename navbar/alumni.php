<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GPN | Alumni Portal</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../framework-assets/img/logo.jpg" rel="icon">
    <link href="../framework-assets/img/logo.jpg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="navbar-assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="navbar-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="navbar-assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="navbar-assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="navbar-assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="navbar-assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="navbar-assets/css/style.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <h1><a href="../index.php">Alumni Portal</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="navbar-assets/img/logo.png" alt="" class="img-fluid"></a> -->
            </div>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <?php
                include 'navbar.php';
                ?>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->


        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                    <div>
                        <h1>Nobody is bothered about an institute, </h1>
                        <h2> more than its alumni.</h2>
                        <a href="#hod" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                    <!-- <img src="navbar-assets/img/hero-img.png" class="img-fluid" alt=""> -->
                    <img src="navbar-assets/img/alumni/alumni-hero.avif" class="img-fluid rounded shadow-lg"></img>
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">
        <div class="section-title" id="alumni" data-aos="fade-up">
            <h2>Alumni House</h2>
        </div>
        <section id="lab">

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                        <div>
                            <ol>
                                <li><a href="./navbar-assets/img/alumni/Alumni Association Details of Office Bearers.pdf" target="_blank">Alumni Association Details of Office Bearers</a></li>
                                <li><a href="./navbar-assets/img/alumni/Alumni Registration Certificate.pdf" target="_blank">Alumni Association Registration Certificate</a></li>
                                <li><a href="./navbar-assets/img/alumni/Alumni Registration Form.pdf" target="_blank">Alumni Association Registration Form</a></li>

                            </ol>

                            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                        <div id="carouselExampleControls" class="carousel slide carousel-fade " data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="navbar-assets/img/alumni/i1.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/alumni/i2.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/alumni/i3.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/alumni/i4.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/alumni/i5.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/alumni/i6.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>





    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container">
            <div class="copyright">
                <?php
                $year = date("Y");
                echo $year;
                ?> &copy; Copyright <strong><span>Government Polytechnic, Nashik.</span></strong> All Rights Reserved.
                <div class="credits text-center">
                    Designed & Developed by <a href="mailto:adityagawali044@gmail.com">Aditya Gawali </a> and <a href="mailto:patel.krishna.t@gmail.com "> Krishna Patel</a> (Information Technology 2020-23)</a>
                </div>
            </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader">

    <!-- Vendor JS Files -->
    <script src="navbar-assets/vendor/aos/aos.js"></script>
    <script src="navbar-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="navbar-assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="navbar-assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="navbar-assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="navbar-assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="navbar-assets/js/main.js"></script>

</body>

</html>