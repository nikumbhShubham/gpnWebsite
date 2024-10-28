<?php
error_reporting(0);
include "../admin/conn.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GPN | Student Corner</title>
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
    <script src="https://kit.fontawesome.com/252d014bb4.js" crossorigin="anonymous"></script>

</head>

<body>



    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <h1><a href="../index.php">Student Corner</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.php"><img src="navbar-assets/img/logo.png" alt="" class="img-fluid"></a> -->
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
    <section class="hero-section student_hero">
        <div class="mt-5">
            <div class="text-center" data-aos="zoom-in">
                <h1>Wisdom comes not from age, </h1>
                <h2>But from imagination and learning.</h2>

            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <section class="section-bg">
            <div class="container">

                <section id="s1" class="services section-bg" data-aos="fade">
                    <div class="container">

                        <div class="section-title p-0 mb-0" data-aos="fade">
                            <h2>Student Section</h2>
                        </div>
                        <div class="row">
                            <h4>Functions of Student Section</h4>
                            <br>
                            <p class="pb-4">
                                Enroll all students who are admitted in first year.<br>
                                Issue roll number to every admitted student.<br>
                                Issue I-card of the institute.<br>
                                Take Entry on General Register of Institute of every admitted student.<br>
                                For fees collection define category wise fee structure and do course registration process.<br>
                                Issue Bonafide.<br>
                                Issue bus pass concession.<br>
                                Issue railway pass concession.<br>
                                Issue covering letter & sign on caste validity proposal.<br>
                                Display notice for all reserve and open category for eligible scholarship form process and do further needful process for recieving the scholarship and institute fee from appropriate authority.<br>
                                Issue L.C. and duplicate L.C. to passout students.<br>
                                Issue the board certificate to passout students.<br>
                                Giving information about admitted student to higher authority(Ex-Category wise,General wise,Course wise)
                            </p>



                            <section id="study_material" class="section-bg">

                                <h2 class="container text-center ">Application Forms</h2>


                                <!-- ======= Services Section ======= -->
                                <section id="application" class="application">
                                    <div class="container" data-aos="fade-up">


                                        <div class="row g-5">

                                            <?php


                                            $form = $conn->prepare("SELECT * FROM form ORDER BY form.id DESC");
                                            $form->execute();

                                            $srn = 0;

                                            while ($row = $form->fetch(PDO::FETCH_OBJ)) :
                                            ?>

                                                <div class="me-service col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                                                    <a href="<?php echo $row->link; ?>" target="blank">
                                                        <div class="box shadow">
                                                            <h2 class="title"><?php echo $row->name; ?></h2>
                                                            <!-- <div class="icon" style="background: #fff0da;"> -->
                                                            <!-- <i class="bi bi-card-checklist" style="color: #e98e06;"></i> -->
                                                            <!-- </div> -->
                                                            <h4 class="title" style="color:black"><?php echo $row->details; ?>
                                                            </h4>

                                                            <button class="btn btn-primary">
                                                                Download Now
                                                            </button>
                                                        </div>
                                                    </a>
                                                </div>
                                            <?php
                                            endwhile;
                                            # code...

                                            ?>




                                        </div>
                                    </div>

                                </section><!-- End Services Section -->

                            </section>

                            <section id="hod" class="about">
                                <div class="container">
                                    <div class="section-title">
                                        <h2>Registrar Desk (Student Section)</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <img src="navbar-assets/img/student_corner/img1.jpg" class="img-fluid shadow-lg rounded" width=400 alt="">
                                        </div>
                                        <div class="col-lg-6 d-flex flex-column " data-aos="fade">
                                            <div class="content pt-lg-0">

                                                <h4 class="fst-italic pt-4 fs-4">
                                                    <b>Name: </b> Shri. M. T. Gangurde <br> <br>
                                                    <b>Designation: </b> Registrar <br> <br>
                                                    <b>Qualification:</b> M.Com <br> <br>
                                                    <b>Experience:</b>32 Years <br> <br>
                                                </h4>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </section>
                            <!-- End HOD Section -->



                            <div class="section-title">
                                <h2>Student Section Staff</h2>
                            </div>
                            <div class="table-responsive">

                                <table class=" table table-bordered table-responsive description table-fluid w-full">
                                    <tr>
                                        <td>Sr.No.</td>
                                        <td>Name of Staff</td>
                                        <td>Designation </td>
                                        <td>Joining Date</td>
                                        <td>Experience</td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Shri. Meghraj Tukaram Gangurde</td>
                                        <td>Registrar</td>
                                        <td>20-09-1990</td>
                                        <td> 32 Years</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Shri. Manoj Ganpatrao Kahar</td>
                                        <td>Senior Clerk</td>
                                        <td>14-08-2007</td>
                                        <td> 14 Years</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Shri. Rajendra Namdeo Sonawane</td>
                                        <td>Junior Clerk</td>
                                        <td>17-03-2001</td>
                                        <td>21 Years</td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>Smt. Vaishali Dattatry Shinde</td>
                                        <td>Junior Clerk</td>
                                        <td> 31-07-2014</td>
                                        <td>07 Years</td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td> Shri. Dashrath Sharad Zade</td>
                                        <td>Junior Clerk</td>
                                        <td> 7-10-2013</td>
                                        <td>08 Years</td>
                                    </tr>

                                </table>
                            </div>

                        </div>

                    </div>
                </section>

                <section id="gymkhana" class="services section-bg" data-aos="fade">
                    <div class="container">
                        <div class="section-title p-0 mb-0" data-aos="fade">
                            <h2>Gymkhana</h2>
                        </div>

                        <div class="row">

                            <h2 class="title"><a href="">Profile of Gymkhana</a></h2>
                            <p>
                                A acoustically designed auditorium of 500 seating capacity is available for various Cultural programmes.Various functions and cultural activities are promoted for overall developments of the students.To expose the inbuilt writing quality among the students we publish the annual magazine.Gymkhana is well equipped with sport facilities for various outdoor games like Cricket,Volley ball, Basket ball and other indoor games like Table tennis,Badminton,Chess etc.
                            </p>

                            <h4 class="title pt-4"><a href="">Committee Members</a></h4>
                            <div class="table-responsive">

                                <table class=" table table-bordered table-responsive description table-fluid w-full" style="text-align:left">
                                    <tr>
                                        <td> <strong>President</strong> </td>
                                        <td>Shri. D. P. Nathe</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Vice President</strong></td>
                                        <td> Shri. R. M. Nafade</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Gymkhana Assistant</strong></td>
                                        <td>Shri. Y. V. Adangale</td>
                                    </tr>

                                </table>
                            </div>


                        </div>

                    </div>
                </section>

                <section id="examrules" class="services section-bg">
                    <div class="container">

                        <div class="section-title" data-aos="fade">
                            <h2>Examination Rules</h2>
                        </div>

                        <section id="application" class="application">
                            <div class="container" data-aos="fade-up">

                                <div class="row g-5">

                                    <div class="me-service col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                                        <a href="<?php echo $row->link; ?>" target="blank">
                                            <div class="box shadow">
                                                <h2 class="title">Examination</h2>
                                                <!-- <div class="icon" style="background: #fff0da;"> -->
                                                <!-- <i class="bi bi-card-checklist" style="color: #e98e06;"></i> -->
                                                <!-- </div> -->
                                                <h4 class="title" style="color:black">Examination Rules</h4>
                                                <a href="./navbar-assets/img/student_corner/exam_rules.pdf" target="_blank">

                                                    <button class="btn btn-primary">
                                                        Download Now
                                                    </button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>

                                </div>

                            </div>
                        </section>

                    </div>
                </section>

                <section id="alumni" class="services section-bg">
                    <div class="container">

                        <div class="section-title" data-aos="fade">
                            <h2>Alumni House</h2>
                        </div>

                        <div class="row">

                            <!-- ======= Services Section ======= -->
                            <section id="application" class="application">
                                <div class="container" data-aos="fade-up">


                                    <div class="row g-5">

                                        <div class="me-service col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                                            <a href="<?php echo $row->link; ?>" target="blank">
                                                <div class="box shadow">
                                                    <h2 class="title">Alumni Association</h2>
                                                    <!-- <div class="icon" style="background: #fff0da;"> -->
                                                    <!-- <i class="bi bi-card-checklist" style="color: #e98e06;"></i> -->
                                                    <!-- </div> -->
                                                    <h4 class="title" style="color:black">Registration Form</h4>
                                                    <a href="./navbar-assets/img/student_corner/alumni3.pdf" target="_blank">

                                                        <button class="btn btn-primary">
                                                            Download Now
                                                        </button>
                                                    </a>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="me-service col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                                            <a href="<?php echo $row->link; ?>" target="blank">
                                                <div class="box shadow">
                                                    <h2 class="title">Alumni Association</h2>
                                                    <!-- <div class="icon" style="background: #fff0da;"> -->
                                                    <!-- <i class="bi bi-card-checklist" style="color: #e98e06;"></i> -->
                                                    <!-- </div> -->
                                                    <h4 class="title" style="color:black">Registration Certificate</h4>
                                                    <a href="./navbar-assets/img/student_corner/alumni2.pdf" target="_blank">

                                                        <button class="btn btn-primary">
                                                            Download Now
                                                        </button>
                                                    </a>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="me-service col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                                            <a href="<?php echo $row->link; ?>" target="blank">
                                                <div class="box shadow">
                                                    <h2 class="title">Alumni Association</h2>
                                                    <!-- <div class="icon" style="background: #fff0da;"> -->
                                                    <!-- <i class="bi bi-card-checklist" style="color: #e98e06;"></i> -->
                                                    <!-- </div> -->
                                                    <h4 class="title" style="color:black">Details of Office Bearers</h4>
                                                    <a href="./navbar-assets/img/student_corner/alumni1.pdf" target="_blank">
                                                        <button class="btn btn-primary">
                                                            Download Now
                                                        </button>
                                                    </a>
                                                </div>
                                            </a>
                                        </div>




                                    </div>
                                </div>

                            </section><!-- End Services Section -->
                        </div>

                    </div>
                </section>

                <section id="services" class="services section-bg">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" style="display:flex; justify-content:center;">
                                <div class="icon-box icon-box-pink">
                                    <div class="icon"><img src="navbar-assets/img/student_corner/alu1.jpg" alt="" class="img-fluid"></div><br>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                                <div class="icon-box icon-box-cyan">
                                    <div class="icon"><img src="navbar-assets/img/student_corner/alu2.jpg" alt="" class="img-fluid"></div><br>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" style="display:flex; justify-content:center;">
                                <div class="icon-box icon-box-green">
                                    <div class="icon"><img src="navbar-assets/img/student_corner/alu3.jpg" alt="" class="img-fluid"></div><br>
                                </div>
                            </div>

                        </div>

                        <div class="row my-3">

                            <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                                <div class="icon-box icon-box-blue">
                                    <div class="icon"><img src="navbar-assets/img/student_corner/alu4.jpg" alt="" class="img-fluid"></div><br>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" style="display:flex; justify-content:center;">
                                <div class="icon-box icon-box-pink">
                                    <div class="icon"><img src="navbar-assets/img/student_corner/alu5.jpg" alt="" class="img-fluid"></div><br>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                                <div class="icon-box icon-box-cyan">
                                    <div class="icon"><img src="navbar-assets/img/student_corner/alu6.jpg" alt="" class="img-fluid"></div><br>
                                </div>
                            </div>

                        </div>
                </section>

                <section id="grievances" class="services section-bg">
                    <div class="container  shadow p-4 card">

                        <div class="section-title">
                            <h2>Grievances for Student/ Faculty/ StakeHolder</h2>
                        </div>
                        <?php
                        include '../admin/conn.php';
                        if (isset($_POST["submit"])) {
                            $name = $_POST["name"];
                            $mobile = $_POST["mobile"];
                            $email = $_POST["email"];
                            $compliant = $_POST["compliant"];

                            $conn->query("INSERT INTO grievances (name,mobile,email,compliant) VALUES ('$name','$mobile','$email','$compliant')");

                            if ($conn) : ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success!</strong> Your grievance added successfully.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php

                            else :

                            ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Error!</strong> Your grievance not added successfully.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        <?php
                            endif;
                        }
                        ?>


                        <form class="col-lg-12 " action="student_corner.php#grievances" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">Student/Faculty/Stakeholder Name:</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile No.</label>
                                <input type="number" class="form-control" name="mobile" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="compliant" class="form-label">Any Compliant</label>
                                <textarea class="form-control" placeholder="Leave a Compliant here" name="compliant" style="height: 100px"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>

                    </div>
                </section>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

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