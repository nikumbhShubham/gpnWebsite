<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GPN | About us</title>
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
                <h1><a href="../index.php" class="fs-4">About Us</a></h1>

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

    <section class="hero-section hero-sec">
        <div class="ab-hero">
            <div class="text-center" data-aos="zoom-in">
                <h1>About Us</h1>
                <h2>Government Polytechnic Nashik</h2>
            </div>

        </div>


    </section>


    <main id="main">

        <!-- ======= institute Section ======= -->
        <section id="institute" class="about">
            <div class="container">

                <div class="row">
                    <h3 class="text-center p-4">Institute Information</h3>
                    <div class="col-lg-4" data-aos="zoom-in">

                        <!-- <img src="imageVectors/institute2.jpg" style="height: 60vh; width: 80vw;" class="img-fluid" alt=""> -->
                        <img src="navbar-assets/img/about/institute.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 d-flex flex-column justify-contents-center" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0">

                            <ul>
                                <li style="text-align: justify;"><i class="bi bi-check-circle"></i> Government Polytechnic, Nashik was established in the year 1980. The Government of Maharashtra allotted 30 Acres of land on which stands the majestic & sprawling Government Polytechnic campus.</li>

                                <li style="text-align: justify;"><i class="bi bi-check-circle"></i> The Institute is located at Samangaon Road at 1.5 Km. from Nashik-Pune Highway, about 3 Km. from Nashik-Road Railway Station & 12 Km. from Central Bus Stand, Nashik. Rickshaw facilities are available from Nashik-Road to the Institute. Initially Diploma programme in Civil Engineering with 60 intake was introduced in 1980 & now the institute conducts 10 (Ten) regular Diploma programmes in conventional and diversified areas in two shifts with total intake of 780+66 (Fee waiver scheme).</li>

                            </ul>

                        </div>
                    </div>

                    <div class="col-lg-8 d-flex flex-column justify-contents-center" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0">

                            <ul>

                                <li style="text-align: justify;"><i class="bi bi-check-circle"></i>Apart from this, the Institute conducts Staff Development Programmes & Continuing Education Programmes for working employees. Government of Maharashtra Awarded Academic Autonomy to this Institute from the Academic Year 1995-96. and by taking the Advantage of this Golden facility the Institute Aims to grown up the Engineers as per the changing needs of Local Industry, Business & Community using need base Curriculum & as a Result of this the Government of Maharashtra Awarded as Best Polytechnic for the year 2001. </li>

                                <li style="text-align: justify;"><i class="bi bi-check-circle"></i>Government Polytechnic, Nashik is an Autonomous Institute committed to provide Engineering and Technology Diploma, post Diploma and Certificate Program that cater to the changing need of Industry, Business and Community at large using need based Curriculum, delivered in dynamic learning environment, to mobilize the required resources by providing continuing Education, Testing and Consultancy to Industry, Business and Community.</li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="zoom-in">

                        <!-- <img src="imageVectors/institute2.jpg" style="height: 60vh; width: 80vw;" class="img-fluid" alt=""> -->
                        <img src="../framework-assets/img/7.jpg" class="img-fluid" alt="">
                    </div>
                </div>


            </div>
        </section><!-- End institute Section -->


        <!-- ======= Principal desk Section ======= -->
        <section id="principal" class="about">
            <div class="container">

                <div class="row">
                    <h3 class="text-center text-xl-center pb-2">Principal's Desk</h3>

                    <?php
                    include '../admin/conn.php';
                    $desk = $conn->query("SELECT * FROM head WHERE principal_desk_desc != ''");
                    while ($row = $desk->fetch(PDO::FETCH_OBJ)) :
                    ?>
                        <div class="col-lg-5 text-center" data-aos="zoom-in">

                            <img src="<?php echo "../" . $row->image; ?>" class=" img-fluid shadow-lg rounded" alt="" style="width:300px; height: 250px;">
                            <p class="text-center pt-2 fs-5 "><?php echo $row->name; ?></p>

                            <!-- <img src="navbar-assets/img/about.jpg" class="img-fluid" alt=""> -->
                        </div>
                        <div class="col-lg-5     d-flex flex-column justify-contents-center" data-aos="fade-left">
                            <div class="content pt-4 pt-lg-0">

                                <ul class="pt-4 text-start" style="text-align: justify; font-size: 20px;">

                                    <?php echo  $row->principal_desk_desc; ?>

                                </ul>

                            </div>
                        </div>

                    <?php
                    endwhile;
                    ?>


                </div>
                <br><br>

            </div>
        </section><!-- End Principal desk Section -->

        <!-- ======= governing body  Section ======= -->
        <section id="governing" class="cta mt-4">
            <div class="container">

                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Governing Body</h3>
                        <p> A governing body is the group of people given the power and authority to form the policy and steer the overall direction of an organisation. Its members can be elected to that position of power by voting, or selected through nomination by Aboriginal and Torres Strait Islander decision-making processes.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="./navbar-assets/img/about/governing_body.pdf" target="_blank">Governing Body</a>
                    </div>
                </div>

            </div>
        </section><!-- End governing body Section -->

        <!-- ======= origanizational chart Section ======= -->
        <section id="organizational" class="about">
            <div class="container">

                <div class="row">
                    <h3 class="text-center text-xl-center pb-4">Oraganizational chart</h3>

                    <div class="col-lg-12" data-aos="zoom-in">

                        <img src="navbar-assets/img/about/organization chart-1.jpg" class="img-fluid" alt="">

                    </div>
                </div>
                <br><br>

            </div>
        </section><!-- End organizational chart Section -->

        <!-- ======= board of studies Section ======= -->
        <section id="bos" class="cta mt-4">
            <div class="container">

                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Board of Studies</h3>
                        <p>an Advisory Body of school of Archival Studies is appointed by the Director General of Archives, to examine the courses contents of the new curriculum taking into account the latest modern archival trends and training needs of the archival institutions in India and abroad.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="./navbar-assets/img/about/board_of_studies.pdf" target="_blank">Board of Studies</a>
                    </div>
                </div>

            </div>
        </section><!-- End board of studies Section -->



        <!-- ======= photogallery Section ======= -->
        <section id="photogallery" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Photo Gallery</h2>
                    <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem h
                        ic quas.</p> -->
                </div>

                <div class="row">
                    <!-- <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div> -->
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="navbar-assets/img/about/Photo gallery/1.jpeg" class="img-fluid" alt="">

                            <div class="portfolio-links">
                                <a href="navbar-assets/img/about/Photo gallery/1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen px-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="navbar-assets/img/about/Photo gallery/2.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <!-- <h4>about</h4> -->
                                <!-- <p>App</p> -->
                            </div>
                            <div class="portfolio-links">
                                <a href="navbar-assets/img/about/Photo gallery/2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen px-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="navbar-assets/img/about/Photo gallery/3.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <!-- <h4>about</h4> -->
                                <!-- <p>App</p> -->
                            </div>
                            <div class="portfolio-links">
                                <a href="navbar-assets/img/about/Photo gallery/3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen px-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="navbar-assets/img/about/Photo gallery/4.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <!-- <h4>about</h4> -->
                                <!-- <p>App</p> -->
                            </div>
                            <div class="portfolio-links">
                                <a href="navbar-assets/img/about/Photo gallery/4.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen px-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="navbar-assets/img/about/Photo gallery/5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <!-- <h4>about</h4> -->
                                <!-- <p>App</p> -->
                            </div>
                            <div class="portfolio-links">
                                <a href="navbar-assets/img/about/Photo gallery/5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen px-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="navbar-assets/img/about/Photo gallery/6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <!-- <h4>about</h4> -->
                                <!-- <p>App</p> -->
                            </div>
                            <div class="portfolio-links">
                                <a href="navbar-assets/img/about/Photo gallery/6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen px-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="navbar-assets/img/about/Photo gallery/7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <!-- <h4>about</h4> -->
                                <!-- <p>App</p> -->
                            </div>
                            <div class="portfolio-links">
                                <a href="navbar-assets/img/about/Photo gallery/7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen px-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="navbar-assets/img/about/Photo gallery/8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <!-- <h4>about</h4> -->
                                <!-- <p>App</p> -->
                            </div>
                            <div class="portfolio-links">
                                <a href="navbar-assets/img/about/Photo gallery/8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen px-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="navbar-assets/img/about/Photo gallery/9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <!-- <h4>about</h4> -->
                                <!-- <p>App</p> -->
                            </div>
                            <div class="portfolio-links">
                                <a href="navbar-assets/img/about/Photo gallery/9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen px-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="navbar-assets/img/about/Photo gallery/10.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <!-- <h4>about</h4> -->
                                <!-- <p>App</p> -->
                            </div>
                            <div class="portfolio-links">
                                <a href="navbar-assets/img/about/Photo gallery/10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen px-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="navbar-assets/img/about/Photo gallery/11.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <!-- <h4>about</h4> -->
                                <!-- <p>App</p> -->
                            </div>
                            <div class="portfolio-links">
                                <a href="navbar-assets/img/about/Photo gallery/11.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen px-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="navbar-assets/img/about/Photo gallery/12.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <!-- <h4>about</h4> -->
                                <!-- <p>App</p> -->
                            </div>
                            <div class="portfolio-links">
                                <a href="navbar-assets/img/about/Photo gallery/12.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen px-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="navbar-assets/img/about/Photo gallery/13.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <!-- <h4>about</h4> -->
                                <!-- <p>App</p> -->
                            </div>
                            <div class="portfolio-links">
                                <a href="navbar-assets/img/about/Photo gallery/13.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen px-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="navbar-assets/img/about/Photo gallery/14.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <!-- <h4>about</h4> -->
                                <!-- <p>App</p> -->
                            </div>
                            <div class="portfolio-links">
                                <a href="navbar-assets/img/about/Photo gallery/14.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen px-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="navbar-assets/img/about/Photo gallery/15.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <!-- <h4>about</h4> -->
                                <!-- <p>App</p> -->
                            </div>
                            <div class="portfolio-links">
                                <a href="navbar-assets/img/about/Photo gallery/15.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen px-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="navbar-assets/img/about/Photo gallery/16.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <!-- <h4>about</h4> -->
                                <!-- <p>App</p> -->
                            </div>
                            <div class="portfolio-links">
                                <a href="navbar-assets/img/about/Photo gallery/16.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen px-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="navbar-assets/img/about/Photo gallery/17.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <!-- <h4>about</h4> -->
                                <!-- <p>App</p> -->
                            </div>
                            <div class="portfolio-links">
                                <a href="navbar-assets/img/about/Photo gallery/17.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen px-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="navbar-assets/img/about/Photo gallery/18.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <!-- <h4>about</h4> -->
                                <!-- <p>App</p> -->
                            </div>
                            <div class="portfolio-links">
                                <a href="navbar-assets/img/about/Photo gallery/18.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-arrows-fullscreen px-2"></i></a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section><!-- End photogallery Section -->




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
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- <div class="preloader"> -->


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