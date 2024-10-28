<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GPN | Admission</title>
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

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <h1><a href="../index.php">Admission</a></h1>
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
    <section class="hero-section admission_hero">
        <div class="mt-5">
            <div class="text-center" data-aos="zoom-in">
                <h1>Every success is usually an admission ticket </h1>
                <h2>to a new set of decision</h2>

            </div>
        </div>
    </section>

    <main id="main">
        <!-- Curriculum Developement cell -->
        <section id="programOffered">
            <section class="container services">
                <div class="table-responsive">

                    <table class="container table table-bordered">
                        <h3 class="container text-center mb-5">PROGRAMS OFFERED</h3>

                        <tr>
                            <td>Sr.No</td>
                            <td>Program Name</td>
                            <td>Year of Commencement</td>
                            <td>Intake Capacity</td>
                        </tr>
                        <?php
                        include '../admin/conn.php';
                        $program = $conn->query("SELECT * FROM programs WHERE 1");
                        $srn = 0;
                        while ($row = $program->fetch(PDO::FETCH_OBJ)) :
                            $srn++;
                        ?>
                            <tr>
                                <th scope="row"><?php echo $srn; ?></th>
                                <td><?php echo $row->name; ?></td>
                                <td><?php echo $row->year; ?></td>
                                <td><?php echo $row->intake; ?></td>

                            </tr>

                        <?php
                        endwhile;
                        ?>

                    </table>
                </div>

            </section>
        </section>

        <!-- ======= Academic Calender Section ======= -->
        <section id="info_broucher" class="cta mt-4">
            <div class="container">

                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Information Broucher</h3>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="./navbar-assets/img/admission/broucher.pdf" target="_blank">Download</a>
                    </div>
                </div>

            </div>
        </section><!-- End of academic calender Section -->


        <!-- ======= institute Section ======= -->
        <section id="admission" class="about">
            <div class="container">

                <div class="row" id="ssc">
                    <h3 class="text-center pb-4">ADMISSION DETAILS</h3>
                    <div class="col-lg-6" data-aos="zoom-in">

                        <img src="navbar-assets/img/admission/ssc.webp" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0">

                            <ul>
                                <h4>After SSC</h4>
                                <li><i class="bi bi-check-circle"></i><a href="https://dte.maharashtra.gov.in/" class="fs-4" target="_blank">तंत्रशिक्षण पदविका प्रवेश माहिती </a> <br>

                                <li><i class="bi bi-check-circle"></i><a href="https://dte.maharashtra.gov.in/" class="fs-4" target="_blank">Post SSC Diploma Admission 2022-23</a> <br>

                                <li><i class="bi bi-check-circle"></i><a href="https://dte.maharashtra.gov.in/" class="fs-4" target="_blank">प्रथम वर्ष पोस्ट एसएससी पदविका अभियांत्रिकी व तंत्रज्ञान अभ्यासक्रम प्रवेश प्रक्रिया सन २०२२-२3</a> <br>
                            </ul>

                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row" id="hsc">

                    <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-right">
                        <div class="content pt-4 pt-lg-0">

                            <ul>
                                <h4>After HSC</h4>
                                <li><i class="bi bi-check-circle"></i><a href="https://dte.maharashtra.gov.in/" class="fs-4" target="_blank">तंत्रशिक्षण पदविका प्रवेश माहिती </a> <br>

                                <li><i class="bi bi-check-circle"></i><a href="https://dte.maharashtra.gov.in/" class="fs-4" target="_blank">Post HSC Diploma Admission 2022-23</a> <br>

                                <li><i class="bi bi-check-circle"></i><a href="https://dte.maharashtra.gov.in/" class="fs-4" target="_blank">प्रथम वर्ष पोस्ट एचएससी पदविका औषधनिर्माणशास्त्र, हॉटेल व्यवस्थापन व खाद्यपेय व्यवस्था तंत्रज्ञान, सरफेस कोटींग तंत्रज्ञान अभ्यासक्रम प्रवेश प्रक्रिया सन २०२२-२3</a> <br>
                            </ul>


                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="zoom-in">
                        <img src="navbar-assets/img/admission/hsc.webp" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </section><!-- End institute Section -->


        <!-- Examination cell -->
        <section id="Bhostel" class="mt-0 pt-0">

            <section id="" class="about">
                <div class="container">

                    <div class="row">
                        <h3 class="text-center pb-4">BOY'S HOSTEL</h3>
                        <div class="col-lg-6" data-aos="zoom-in">

                            <img src="navbar-assets/img/admission/hostel.webp" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                            <div class="content pt-4 pt-lg-0">

                                <ul>
                                    <h4>Intake Capacity</h4>
                                    <li>
                                        <div class="table-responsive">

                                            <table class="table table-bordered">
                                                <tr>
                                                    <td></td>
                                                    <td>Boy's wing (A) &amp; (B)</td>
                                                    <td>Boy's wing (B)</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Intake Capacity</td>
                                                    <td>104</td>
                                                    <td>120</td>
                                                </tr>
                                            </table>
                                        </div>

                                        <h4>Rector's Desk</h4>
                                    <li>
                                        <div class="table-responsive">

                                            <table class="table table-bordered">
                                                <tr>
                                                    <td>Name of Rector</td>
                                                    <td>Hostel Allocated</td>
                                                </tr>
                                                <tr>
                                                    <td>Shri.S.A.Padwal <br> Science and Humanity Department</td>
                                                    <td>Boy's Hostel wing (A) &amp; (B)</td>
                                                </tr>

                                            </table>
                                        </div>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">

                        <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-right">
                            <div class="content pt-4 pt-lg-0">


                                <ul>
                                    <h4>Facilities Provided</h4>
                                    <li><i class="bi bi-check-circle"></i> Daily Newspaper <br>
                                        <i class="bi bi-check-circle"></i> Green Gym <br>
                                        <i class="bi bi-check-circle"></i> Solar Water Heater<br>
                                        <i class="bi bi-check-circle"></i> Aqua guard Water Filter <br>
                                        <i class="bi bi-check-circle"></i> Mess Facility<br>
                                        <i class="bi bi-check-circle"></i> Indoor Stadium<br>
                                        <i class="bi bi-check-circle"></i> Cottage System<br>
                                        <h4>Admission Process & Future Plans</h4>
                                    <li>
                                        Hostel Admissions are done according to Marks Secured in Previous Academic year such as SSC board exam ,first year,second year.
                                        <br>

                                        <i class="bi bi-check-circle"></i> CCTV Camera
                                        <i class="bi bi-check-circle"></i> Wi-Fi campus
                                        <i class="bi bi-check-circle"></i> TV with setup box
                                    </li>
                                    </li>

                                </ul>


                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="zoom-in">
                            <img src="navbar-assets/img/admission/hostel-1.webp" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>
            </section><!-- End institute Section -->
            <!-- ======= photogallery Section ======= -->
            <section id="photogallery" class="portfolio">
                <div class="container">

                    <div class="section-title" data-aos="fade-up">
                        <h2>Boy's Hostel Images</h2>

                    </div>

                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="navbar-assets/img/admission/boys hostel/i1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">

                                </div>
                                <div class="portfolio-links">
                                    <a href="navbar-assets/img/admission/boys hostel/i1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="navbar-assets/img/admission/boys hostel/i2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">

                                </div>
                                <div class="portfolio-links">
                                    <a href="navbar-assets/img/admission/boys hostel/i2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="navbar-assets/img/admission/boys hostel/i3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">

                                </div>
                                <div class="portfolio-links">
                                    <a href="navbar-assets/img/admission/boys hostel/i3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="navbar-assets/img/admission/boys hostel/i4.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">

                                </div>
                                <div class="portfolio-links">
                                    <a href="navbar-assets/img/admission/boys hostel/i4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="navbar-assets/img/admission/boys hostel/i5.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">

                                </div>
                                <div class="portfolio-links">
                                    <a href="navbar-assets/img/admission/boys hostel/i5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="navbar-assets/img/admission/boys hostel/i6.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">

                                </div>
                                <div class="portfolio-links">
                                    <a href="navbar-assets/img/admission/boys hostel/i6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="navbar-assets/img/admission/boys hostel/i7.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">

                                </div>
                                <div class="portfolio-links">
                                    <a href="navbar-assets/img/admission/boys hostel/i7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="navbar-assets/img/admission/boys hostel/i8.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">

                                </div>
                                <div class="portfolio-links">
                                    <a href="navbar-assets/img/admission/boys hostel/i8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen"></i></a>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </section><!-- End photogallery Section -->
        </section>
        <section id="Ghostel" class="mt-0 pt-0">

            <section id="" class="about">
                <div class="container">

                    <div class="row">
                        <h3 class="text-center pb-4">GIRL'S HOSTEL</h3>
                        <div class="col-lg-6" data-aos="zoom-in">

                            <img src="navbar-assets/img/admission/hostel-2.jpg" class="img-fluid" alt="">
                            <!-- <img src="navbar-assets/img/about.jpg" class="img-fluid" alt=""> -->
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                            <div class="content pt-4 pt-lg-0">

                                <ul>
                                    <h4>Intake Capacity</h4>
                                    <li>
                                        <div class="table-responsive">

                                            <table class="table table-bordered">
                                                <tr>
                                                    <td></td>
                                                    <td>Girl's wing (A)</td>
                                                    <td>Girl's wing (B)</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Intake Capacity</td>
                                                    <td>56</td>
                                                    <td>112</td>
                                                </tr>
                                            </table>
                                        </div>

                                        <h4>Rector's Desk</h4>
                                    <li>
                                        <div class="table-responsive">

                                            <table class="table table-bordered">
                                                <tr>
                                                    <td>Name of Rector</td>
                                                    <td>Hostel Allocated</td>
                                                </tr>
                                                <tr>
                                                    <td>Smt. M.M. Shinde <br>
                                                        Electronic & Telecommunication Engg. Department</td>
                                                    <td>Girl's Hostel wing (A) &amp; (B)</td>
                                                </tr>

                                            </table>
                                        </div>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">

                        <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-right">
                            <div class="content pt-4 pt-lg-0">


                                <ul>
                                    <h4>Facilities Provided</h4>
                                    <li><i class="bi bi-check-circle"></i> Daily Newspaper <br>
                                        <i class="bi bi-check-circle"></i> Green Gym <br>
                                        <i class="bi bi-check-circle"></i> Solar Water Heater<br>
                                        <i class="bi bi-check-circle"></i> CCTV Camera<br>
                                        <i class="bi bi-check-circle"></i> Aqua guard Water Filter <br>
                                        <i class="bi bi-check-circle"></i> Mess Facility<br>
                                        <i class="bi bi-check-circle"></i> Indoor Stadium<br>
                                        <i class="bi bi-check-circle"></i> Cottage System<br>
                                        <h4>Admission Process & Future Plans</h4>
                                    <li>
                                        Hostel Admissions are done according to Marks Secured in Previous Academic year such as SSC board exam ,first year,second year.

                                        <br>

                                        <i class="bi bi-check-circle"></i> Wi-Fi campus
                                        <i class="bi bi-check-circle"></i> 24 hours warm water availability
                                        <i class="bi bi-check-circle"></i> TV with setup box
                                    </li>
                                    </li>

                                </ul>


                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="zoom-in">
                            <img src="navbar-assets/img/admission/hostel-3.webp" class="img-fluid" alt="">
                            <!-- <img src="navbar-assets/img/about.jpg" class="img-fluid" alt=""> -->
                        </div>
                    </div>

                </div>
            </section><!-- End institute Section -->
            <!-- ======= photogallery Section ======= -->
            <section id="photogallery" class="portfolio">
                <div class="container">

                    <div class="section-title" data-aos="fade-up">
                        <h2>Girl's Hostel Images</h2>

                    </div>


                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="navbar-assets/img/admission/girls hostel/i1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">

                                </div>
                                <div class="portfolio-links">
                                    <a href="navbar-assets/img/admission/girls hostel/i1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="navbar-assets/img/admission/girls hostel/i2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">

                                </div>
                                <div class="portfolio-links">
                                    <a href="navbar-assets/img/admission/girls hostel/i2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="navbar-assets/img/admission/girls hostel/i3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">

                                </div>
                                <div class="portfolio-links">
                                    <a href="navbar-assets/img/admission/girls hostel/i3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="navbar-assets/img/admission/girls hostel/i4.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">

                                </div>
                                <div class="portfolio-links">
                                    <a href="navbar-assets/img/admission/girls hostel/i4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="navbar-assets/img/admission/girls hostel/i5.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">

                                </div>
                                <div class="portfolio-links">
                                    <a href="navbar-assets/img/admission/girls hostel/i5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="navbar-assets/img/admission/girls hostel/i6.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">

                                </div>
                                <div class="portfolio-links">
                                    <a href="navbar-assets/img/admission/girls hostel/i6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="navbar-assets/img/admission/girls hostel/i7.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">

                                </div>
                                <div class="portfolio-links">
                                    <a href="navbar-assets/img/admission/girls hostel/i7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="navbar-assets/img/admission/girls hostel/i8.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">

                                </div>
                                <div class="portfolio-links">
                                    <a href="navbar-assets/img/admission/girls hostel/i8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen"></i></a>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </section><!-- End photogallery Section -->
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