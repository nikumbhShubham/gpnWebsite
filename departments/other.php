<?php
// error_reporting(0);
include '../admin/conn.php';

$dept = $conn->query("SELECT * FROM staff_admin WHERE dept = 'SCI'");
$dept_data = $dept->fetch(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GPN | Other Department</title>
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
                <h1><a href="../index.php">Other</a></h1>
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
    <section class="hero-section other_hero">
        <div class="mt-5">
            <div class="text-center" data-aos="zoom-in">
                <h1>Science is a magic, </h1>
                <h2> it works.</h2>

            </div>
        </div>
    </section>
    <!-- End Hero -->


    <main id="main">
        <section id="lab">
            <div class="section-title" id="science" data-aos="fade-up">
                <h2>Science Department</h2>
            </div>

            <div class="container">
                <div class="row">
                    <h3 class="container text-center mb-5">Laboratory </h3>

                    <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                        <div>
                            <p class="h3">
                                Laboratory of science Department <br><br> </p>
                            <ol>
                                <li>Physics Lab</li>
                                <li>Chemistry Lab</li>
                                <li>Language lab</li>

                            </ol>

                            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                        <div id="carouselExampleControls" class="carousel slide carousel-fade " data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="navbar-assets/img/science/l1.jfif" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/science/l2.jfif" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/science/l3.jfif" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/science/l4.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/science/l5.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/science/l6.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/science/l7.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/science/l8.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <section class="container services">
            <div class="table-responsive">

                <table class="container table table-bordered ">
                    <h3 class="container text-center mb-5">Laboratory Details</h3>
                    <tr>
                        <td>Sr.No</td>
                        <td>Name of Laboratory</td>
                        <td>Area of Lab Sq. m.</td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Physics</td>
                        <td>149.20</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Chemistry</td>
                        <td>157.00</td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Language Lab</td>
                        <td>66.00</td>
                    </tr>
                </table>
            </div>
        </section>


        <section id="study_material" class="section-bg pb-0">

            <h2 class="container text-center ">Study Material</h2>


            <!-- ======= Services Section ======= -->
            <section id="services" class="services">
                <div class="container" data-aos="fade-up">


                    <div class="row g-5">

                        <div class="me-service col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                            <a href="study.php?id=<?php echo $dept_data->id; ?>#notes" target="blank">
                                <div class="box shadow">
                                    <div class="icon" style="background: #fff0da;"><i class="bi bi-card-checklist" style="color: #e98e06;"></i></div>
                                    <h4 class="title" style="color:black">Lecture Notes
                                    </h4>
                                </div>
                            </a>
                        </div>

                        <div class="me-service col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
                            <a href="study.php?id=<?php echo $dept_data->id; ?>#paper">
                                <div class="box shadow">
                                    <div class="icon" style="background: #fceef3;"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                                    <h4 class="title" style="color:black">Last Year Question Paper
                                    </h4>
                                </div>
                            </a>
                        </div>

                        <div class="me-service col-md-6 col-lg-4 wow" data-aos="zoom-in" data-aos-delay="100">
                            <a href="study.php?id=<?php echo $dept_data->id; ?>#video">
                                <div class="box shadow">
                                    <div class="icon" style="background: #eafde7;"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
                                    <h4 class="title" style="color:black">Video Lectures
                                    </h4>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>

            </section><!-- End Services Section -->

        </section>

        <section id="profile" class="faq section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Profile</h2>
                </div>

                <ul class="faq-list">

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Vision<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                To be the best Science and Humanities Department in the state to develop scientific applications, to achieve excellence in the technical education.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Mission <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>Department of Science & Humanities is committed <br><br>
                                M1. To lay the foundation of engineering education by building the professional strengths of the students in basic Sciences and soft skills. <br><br>
                                M2. To inculcate ethical values and promote social responsibilities through learning process in basic Science and Humanities. <br><br>
                                M3. To upgrade the quality of technical education and produce dynamic engineers and entrepreneurs for the country.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>
        </section>

        <section id="faculty" class="container services ">
            <div class="table-responsive">

                <table class="table table-bordered ">
                    <h3 class="container text-center mb-5">Faculty</h3>
                    <tr>
                        <!-- <td>Sr. No.</td> -->
                        <td>Name</td>
                        <td>Profile</td>
                        <td>Designation</td>
                        <td>Qualification</td>
                        <td>Experience</td>
                    </tr>
                    <?php
                    $faculty = $conn->query("SELECT * FROM faculty WHERE dept_id = $dept_data->id");

                    while ($faculty_data = $faculty->fetch(PDO::FETCH_OBJ)) :

                    ?>
                        <tr>
                            <!-- <td>1</td> -->
                            <td><?php echo $faculty_data->name; ?></td>
                            <td style="width:8%;">
                                <div>
                                    <img src=<?php echo "../departments/$faculty_data->image" ?> alt="Can't Load the Image" style="width:100%;">
                                    <?php
                                    if ($faculty_data->resume != "") : ?>
                                        <a href="<?php echo "../departments/$faculty_data->resume" ?>" target="_blank">
                                            View Profile
                                        </a>
                                    <?php
                                    endif;
                                    ?>
                                </div>

                            </td>
                            <td style="width:25%"><?php echo $faculty_data->designation; ?></td>
                            <td><?php echo $faculty_data->qualification; ?></td>
                            <td><?php echo $faculty_data->experience; ?></td>
                        </tr>
                    <?php
                    endwhile;
                    ?>

                </table>
            </div>
        </section>

        <div class="section-title" id="workshop" data-aos="fade-up">
            <h2>Workshop Department</h2>
        </div>

        <section id="profile" class="faq section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Profile</h2>
                </div>

                <ul class="faq-list">



                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Vision<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                To be a vibrant department of skill Development focuses on quality Education ,Skills that prepares Professionals and Entrepreneurs to lead social, economic and technical development of the region
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Mission <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                M1. To Provide quality Education , training, and innovative engineering solutions to advance skills and productivity. <br><br>
                                M2. To Provide platform to the learner towards attaining quality Education and skills of manufacturing sector. <br><br>
                                M3. To Educate learners about Professional ,Ethical responsibilities and train them to leadership qualities for their career Development. <br><br>
                                M4. To create opportunities and guide students in acquiring career oriented jobs in manufacturing sector. <br><br>
                                M5. To provide professional skills of manufacturing sector to learner.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">information <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>

                                Year of Establishment : 1980 <br><br>
                                Academic Programs : Civil Engineering, Mechanical Engineering, Electrical Engineering <br><br>
                                Automobile Engineering, Plastic Engineering, Electronics & Telecommunication Technology <br><br>
                                Intake Capacity : 1 Shift 60+6, 2 Shift 60+6 <br><br>
                                Workshop InCharge : Shri. P. G. Kochure
                            </p>
                        </div>
                    </li>
                    <li>
                        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Programme Educational Objectives(PEO's) <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Produce quality and skilled manpower through practical training <br><br>

                                To establish a Skill development centre in manufacturing Sector<br><br>

                                To establish a production centre of utility articles for institute<br><br>

                                To facilitate other Faculty / Department to play their rightful role in line with the mission and vision of the institute<br><br>

                                To generate internal Revenue to supplement government funding to the Institute
                            </p>
                        </div>
                    </li>
                    <li>
                        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Laboratories/Sections Details <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                            <div class="table-responsive">

                                <table class="table table-bordered table-responsive table-striped">
                                    <tr>
                                        <td>Sr.No</td>
                                        <td>Name of Laboratory/Section</td>
                                        <td>Area of Lab/Section Sq.m</td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Turning Section</td>
                                        <td>300</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>CNC Lab(Turning)</td>
                                        <td>80</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Machine Section</td>
                                        <td>260</td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>CNC Lab (machinist)</td>
                                        <td>80</td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>Fitting Section</td>
                                        <td>200</td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>Sheet Metal Section</td>
                                        <td>200</td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>Carpentry Section and Patterning Section</td>
                                        <td>260</td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>Welding Section</td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>09</td>
                                        <td>Plumbing section</td>
                                        <td>75</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>blacksmith Section and Mounding Section</td>
                                        <td>180</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Maintenance section</td>
                                        <td>75</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Electrical Maintenance Section</td>
                                        <td>75</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </section>

        <section id="faculty" class="container services ">
            <div class="table-responsive">

                <table class="table table-bordered ">
                    <h3 class="container text-center mb-5">Faculty</h3>
                    <tr>
                        <!-- <td>Sr. No.</td> -->
                        <td>Name</td>
                        <td>Profile</td>
                        <td>Designation</td>
                        <td>Qualification</td>
                        <td>Experience</td>
                    </tr>
                    <?php
                    $dept = $conn->query("SELECT * FROM staff_admin WHERE dept = 'WS'");
                    $dept_data = $dept->fetch(PDO::FETCH_OBJ);
                    $faculty = $conn->query("SELECT * FROM faculty WHERE dept_id = $dept_data->id");

                    while ($faculty_data = $faculty->fetch(PDO::FETCH_OBJ)) :

                    ?>
                        <tr>
                            <!-- <td>1</td> -->
                            <td><?php echo $faculty_data->name; ?></td>
                            <td style="width:8%;">
                                <div>
                                    <img src=<?php echo "../departments/$faculty_data->image" ?> alt="Can't Load the Image" style="width:100%;">
                                    <?php
                                    if ($faculty_data->resume != "") : ?>
                                        <a href="<?php echo "../departments/$faculty_data->resume" ?>" target="_blank">
                                            View Profile
                                        </a>
                                    <?php
                                    endif;
                                    ?>
                                </div>

                            </td>
                            <td style="width:25%"><?php echo $faculty_data->designation; ?></td>
                            <td><?php echo $faculty_data->qualification; ?></td>
                            <td><?php echo $faculty_data->experience; ?></td>
                        </tr>
                    <?php
                    endwhile;
                    ?>

                </table>
            </div>
        </section>


        <section id="futureplan" class="">

            <div class="container">
                <!-- <h1 class="text-center">Future Plans</h1> -->
                <h2 class="container text-center mb-5">Future Plans </h2>

                <div class="row">

                    <div class="col-lg-6 order-1 order-lg-1 hero-img" data-aos="fade-right">
                        <!-- <img src="navbar-assets/img/hero-img.png" class="img-fluid" alt=""> -->
                        <img src="navbar-assets/img/electrical/future_plans.jpeg" class="img-fluid rounded shadow" alt="">
                        <!-- <img src="navbar-assets/Pexels Videos 4624.mp4" class="img-fluid" alt=""> -->
                    </div>
                    <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-2 d-flex flex-column justify-content-center" data-aos="fade-up">
                        <div>
                            To establish virtual CNC lab. <br><br>
                            To establish Manufacturing Automation Lab. <br><br>
                            To establish as a lead training and skill development center in Manufacturing Sector for other technical institute in region and society at large.

                        </div>
                    </div>

                </div>
            </div>

        </section>

        <div class="section-title" id="am" data-aos="fade-up">
            <h2>Applied mechanics</h2>
        </div>

        <section id="lab">

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-2 d-flex flex-column justify-content-center" data-aos="fade-up">
                        <div>
                            <div class="table-responsive">

                                <table class="table table-bordered table-responsive table-striped">
                                    <tr>
                                        <td>Sr.No</td>
                                        <td>Name of Laboratory</td>
                                        <td>Area of Lab Sq. m.</td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Applied Mechanics-Lab1</td>
                                        <td>72</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Applied Mechanics-Lab2</td>
                                        <td>72</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Material Testing</td>
                                        <td>120</td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>Concrete Technology and Geotech Lab</td>
                                        <td>113.12</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-2 order-lg-1 hero-img" data-aos="fade-right">
                        <div id="carouselExampleControls" class="carousel slide carousel-fade " data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="navbar-assets/img/other/a1.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/other/a2.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/other/a3.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/other/a4.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/other/a5.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/other/a6.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/other/a10.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/other/a11.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/other/a12.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/other/a13.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/other/a14.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/other/a15.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/other/a16.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <section id="faculty" class="container services ">
            <div class="table-responsive">

                <table class="table table-bordered ">
                    <h3 class="container text-center mb-5">Faculty</h3>
                    <tr>
                        <!-- <td>Sr. No.</td> -->
                        <td>Name</td>
                        <td>Profile</td>
                        <td>Designation</td>
                        <td>Qualification</td>
                        <td>Experience</td>
                    </tr>
                    <?php
                    $dept = $conn->query("SELECT * FROM staff_admin WHERE dept = 'AM'");
                    $dept_data = $dept->fetch(PDO::FETCH_OBJ);
                    $faculty = $conn->query("SELECT * FROM faculty WHERE dept_id = $dept_data->id");

                    while ($faculty_data = $faculty->fetch(PDO::FETCH_OBJ)) :

                    ?>
                        <tr>
                            <!-- <td>1</td> -->
                            <td><?php echo $faculty_data->name; ?></td>
                            <td style="width:8%;">
                                <div>
                                    <img src=<?php echo "../departments/$faculty_data->image" ?> alt="Can't Load the Image" style="width:100%;">
                                    <?php
                                    if ($faculty_data->resume != "") : ?>
                                        <a href="<?php echo "../departments/$faculty_data->resume" ?>" target="_blank">
                                            View Profile
                                        </a>
                                    <?php
                                    endif;
                                    ?>
                                </div>

                            </td>
                            <td style="width:25%"><?php echo $faculty_data->designation; ?></td>
                            <td><?php echo $faculty_data->qualification; ?></td>
                            <td><?php echo $faculty_data->experience; ?></td>
                        </tr>
                    <?php
                    endwhile;
                    ?>

                </table>
            </div>
        </section>

        <div class="section-title" id="office" data-aos="fade-up">
            <h2>Office</h2>
        </div>

        <section id="lab">
            <h3 class="text-center pb-4">
                Registrar Desk (Establishment Section)
            </h3>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-2 d-flex flex-column justify-content-center" data-aos="fade-up">
                        <div>
                            <p>
                                <b>Name:</b>
                                Shri. M. T. Gangurde <br><br>
                                <b>Designation:</b>
                                Registrar <br><br>
                                <b>Qualification:</b>
                                M.Com <br><br>
                                <b>Experience:</b>
                                32 Years
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 order-2 order-lg-1 hero-img" data-aos="fade-right">
                        <div id="carouselExampleControls" class="carousel slide carousel-fade " data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="navbar-assets/img/other/reg1.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <section id="faculty" class="container services ">
            <div class="table-responsive">

                <table class="table table-bordered table-responsive table-striped">
                    <h3 class="container text-center mb-5">Establishment Section Staff</h3>
                    <tr>
                        <td>Sr.No.</td>
                        <td>Name of Staff</td>
                        <td>Designation</td>
                        <td>Joining Date</td>
                        <td>Experience</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Shri. Meghraj Tukaram Gangurde</td>
                        <td>Registrar</td>
                        <td>20-09-1990</td>
                        <td>32 Years</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Sau. Latika Suresh Gaikwad</td>
                        <td>Office Supdt.</td>
                        <td>22-01-1996</td>
                        <td>26 Years</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Shri. Pandurang Laxman Ghode</td>
                        <td>Steno</td>
                        <td>07-08-1997</td>
                        <td>21 years</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Shri. Devidas Ukhaji Kasare</td>
                        <td>Head Clerk</td>
                        <td>20-05-1997</td>
                        <td>25 years</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Sau. Hemangi Anil Sasane</td>
                        <td>Head Clerk</td>
                        <td>24-06-2008</td>
                        <td>13 years</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Shri. Manoj Ganpatrao Kahar</td>
                        <td>Senior Clerk</td>
                        <td>14-08-2007</td>
                        <td>14 years</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Shri. Gautam Bhaskar Palve</td>
                        <td>Senior Clerk</td>
                        <td>11-04-2007</td>
                        <td>14 years</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Shri. Narayan Mansaram Gaikwad</td>
                        <td>Senior Clerk</td>
                        <td>05-02-2013</td>
                        <td>9 years</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Shri. Kailas Keshav Dhatrak</td>
                        <td>Senior Clerk</td>
                        <td>13-08-2007</td>
                        <td>14 years</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Smt. Maya Dhyanesh Pagare</td>
                        <td>Junior Clerk</td>
                        <td>08-02-2013</td>
                        <td>09 years</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Shri. Macchindra Pandurang Dhakne</td>
                        <td>Junior Clerk</td>
                        <td>01-01-2015</td>
                        <td>07 Years</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Smt. Nalini Mohan Chavan</td>
                        <td>Junior Clerk</td>
                        <td>19-03-2020</td>
                        <td>2 years</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Shri. Gokul Ganpat Hire</td>
                        <td>Junior Clerk</td>
                        <td>01-01-2015</td>
                        <td>07 Years</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Shri. Raghunath Deoram Patole</td>
                        <td>Peon</td>
                        <td>06-08-1987</td>
                        <td>34 years</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Shri. Ashok Jaggnath Dahale</td>
                        <td>Peon</td>
                        <td>25-09-1992</td>
                        <td>30 years</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Asifkhan Sherkhan Khan</td>
                        <td>Peon</td>
                        <td>16-05-1997</td>
                        <td>25 years</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Shri. Suresh Mogal Pagare</td>
                        <td>Hamal</td>
                        <td>26-02-1996</td>
                        <td>24 years</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Smt. Manda Vitthal Bachkar</td>
                        <td>Hamal</td>
                        <td>08-05-2015</td>
                        <td>6 years</td>
                    </tr>
                </table>
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