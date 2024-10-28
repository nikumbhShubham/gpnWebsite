<?php
include 'admin/conn.php';
error_reporting(0);
?>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center bg-light header-transparent">
    <div class="container-fluid">

        <div class="row justify-content-center align-items-center">
            <div class="col-xl-11 d-flex align-items-center justify-content-between">
                <a href="index.php" class="logo"><img src="framework-assets/img/logo_entire.png" alt="" class="img-fluid"></a>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
                        <li class="dropdown"><a href="#"><span>About</span> <i class=""></i></a>
                            <ul>
                                <li><a href="navbar/about.php">Institute</a></li>
                                <li><a href="navbar/about.php#principal">Principal Desk</a></li>
                                <li><a href="navbar/about.php#governing">Governing body</a></li>
                                <li><a href="navbar/about.php#organizational">Organizational chart</a></li>
                                <li><a href="navbar/notice.php">Notices</a></li>
                                <li><a href="navbar/about.php#bos">Board of studies</a></li>
                                <li><a href="navbar/about.php#photogallery">Photo Gallery</a></li>

                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Department</span> <i class=""></i></a>
                            <ul>


                                <li class="dropdown"><a href="#"><span>Civil Engineering </span> <i class="bi bi-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="departments/civil.php">HOD Desk</a></li>
                                        <li><a href="departments/civil.php#lab">Laboratory</a></li>
                                        <li><a href="departments/civil.php#study_material">Study Material</a></li>
                                        <li><a href="departments/civil.php#profile">profile</a></li>
                                        <li><a href="departments/civil.php#faculty">Faculty</a></li>
                                        <li><a href="departments/civil.php#achievement">Achievement</a></li>
                                        <li><a href="departments/civil.php#futureplan">Future Plans</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="#"><span>Mechanical Engineering</span> <i class="bi bi-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="departments/mechanical.php">HOD Desk</a></li>
                                        <li><a href="departments/mechanical.php#lab">Laboratory</a></li>
                                        <li><a href=".departments/mechanical.php#study_material">Study Material</a></li>
                                        <li><a href="departments/mechanical.php#profile">profile</a></li>
                                        <li><a href="departments/mechanical.php#faculty">Faculty</a></li>
                                        <li><a href="departments/mechanical.php#achievement">Achievement</a>
                                        </li>
                                        <li><a href="departments/mechanical.php#futureplan">Future Plans</a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="dropdown"><a href="#"><span>Electrical</span> <i class="bi bi-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="departments/electrical.php">HOD Desk</a></li>
                                        <li><a href="departments/electrical.php#lab">Laboratory</a></li>
                                        <li><a href="departments/electrical.php#study_material">Study Material</a></li>
                                        <li><a href="departments/electrical.php#profile">profile</a></li>
                                        <li><a href="departments/electrical.php#faculty">Faculty</a></li>
                                        <li><a href="departments/electrical.php#achievement">Achievement</a></li>
                                        <li><a href="departments/electrical.php#futureplan">Future Plans</a></li>
                                    </ul>
                                </li>


                                <li class="dropdown"><a href="#"><span>Mechatronics</span> <i class="bi bi-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="departments/mechatronics.php">HOD Desk</a></li>
                                        <li><a href="departments/mechatronics.php#study_material">Study Material</a>
                                        </li>
                                        <li><a href="departments/mechatronics.php#profile">profile</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="#"><span>Computer Technology</span> <i class="bi bi-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="departments/comtechnology.php">HOD Desk</a></li>
                                        <li><a href="departments/comtechnology.php#lab">Laboratory</a></li>
                                        <li><a href="departments/comtechnology.php#study_material">Study Material</a>
                                        </li>
                                        <li><a href="departments/comtechnology.php#profile">profile</a></li>
                                        <li><a href="departments/comtechnology.php#faculty">Faculty</a></li>
                                        <li><a href="departments/comtechnology.php#achievement">Achievement</a></li>
                                        <li><a href="departments/comtechnology.php#futureplan">Future Plans</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="#"><span>Information Technology</span> <i class="bi bi-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="departments/infotechnology.php">HOD Desk</a></li>
                                        <li><a href="departments/infotechnology.php#lab">Laboratory</a></li>
                                        <li><a href="departments/infotechnology.php#study_material">Study Material</a>
                                        </li>
                                        <li><a href="departments/infotechnology.php#profile">profile</a></li>
                                        <li><a href="departments/infotechnology.php#faculty">Faculty</a></li>
                                        <li><a href="departments/infotechnology.php#achievement">Achievement</a></li>
                                        <li><a href="departments/infotechnology.php#futureplan">Future Plans</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#"><span>Plastic Engineering</span> <i class="bi bi-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="departments/plastic.php">HOD Desk</a></li>
                                        <li><a href="departments/plastic.php#lab">Laboratory</a></li>
                                        <li><a href="departments/plastic.php#study_material">Study Material</a></li>
                                        <li><a href="departments/plastic.php#profile">profile</a></li>
                                        <li><a href="departments/plastic.php#faculty">Faculty</a></li>
                                        <li><a href="departments/plastic.php#achievement">Achievement</a></li>
                                        <li><a href="departments/plastic.php#futureplan">Future Plans</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="#"><span>Electronics and Telecommunication</span> <i class="bi bi-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="departments/entc.php">HOD Desk</a></li>
                                        <li><a href="departments/entc.php#lab">Laboratory</a></li>
                                        <li><a href="departments/entc.php#study_material">Study Material</a></li>
                                        <li><a href="departments/entc.php#profile">profile</a></li>
                                        <li><a href="departments/entc.php#faculty">Faculty</a></li>
                                        <li><a href="departments/entc.php#achievement">Achievement</a></li>
                                        <li><a href="departments/entc.php#futureplan">Future Plans</a></li>
                                    </ul>
                                </li>



                                <li class="dropdown"><a href="#"><span>Automobile</span> <i class="bi bi-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="departments/ae.php">HOD Desk</a></li>
                                        <li><a href="departments/ae.php#lab">Laboratory</a></li>
                                        <li><a href="departments/ae.php#study_material">Study Material</a></li>
                                        <li><a href="departments/ae.php#profile">profile</a></li>
                                        <li><a href="departments/ae.php#faculty">Faculty</a></li>
                                        <li><a href="departments/ae.php#achievement">Achievement</a></li>
                                        <li><a href="departments/ae.php#futureplan">Future Plans</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="#"><span>Dress Design and Garment Management</span> <i class="bi bi-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="departments/ddgm.php">HOD Desk</a></li>
                                        <li><a href="departments/ddgm.php#lab">Laboratory</a></li>
                                        <li><a href="departments/ddgm.php#study_material">Study Material</a></li>
                                        <li><a href="departments/ddgm.php#profile">profile</a></li>
                                        <li><a href="departments/ddgm.php#faculty">Faculty</a></li>
                                        <li><a href="departments/ddgm.php#achievement">Achievement</a></li>
                                        <li><a href="departments/ddgm.php#futureplan">Future Plans</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="#"><span>Interior Design and Decoration</span> <i class="bi bi-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="departments/idd.php">HOD Desk</a></li>
                                        <li><a href="departments/idd.php#lab">Laboratory</a></li>
                                        <li><a href="departments/idd.php#study_material">Study Material</a></li>
                                        <li><a href="departments/idd.php#profile">profile</a></li>
                                        <li><a href="departments/idd.php#faculty">Faculty</a></li>
                                        <li><a href="departments/idd.php#futureplan">Future Plans</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="#"><span>Other</span> <i class="bi bi-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="departments/other.php#science">Science</a></li>
                                        <li><a href="departments/other.php#study_material">Study Material</a></li>
                                        <li><a href="departments/other.php#workshop">Workshop</a></li>
                                        <li><a href="departments/other.php#am">Applied Mechanics</a></li>
                                        <li><a href="departments/other.php#office">office</a></li>
                                    </ul>
                                </li>


                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Academic</span> <i class=""></i></a>
                            <ul>
                                <li class="dropdown"><a href="#">Curriculum Development Cell <i class="bi bi-chevron-down"></i> </a>
                                    <!-- <a href="navbar/academic.php"></a> -->
                                    <ul>
                                        <li><a href="navbar/academic.php">Profile</a></li>
                                        <li><a href="navbar/academic.php#cdcDesk">CDC Head Desk</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Examination Cell <i class="bi bi-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="navbar/academic.php#examinationcell">Profile</a></li>
                                        <li><a href="navbar/academic.php#coe">COE Head Desk</a></li>
                                        <li><a href="navbar/academic.php#exam_faculty">Faculty</a></li>
                                        <li><a href="navbar/academic.php#exam_fp">Future Plan</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Curriculum <i class="bi bi-chevron-down"></i></a>
                                    <!-- <a href="navbar/academic.php"></a> -->
                                    <ul>
                                        <li><a href="navbar/academic.php#curriculum16">Curriculum 2016</a></li>
                                        <li><a href="navbar/academic.php#curriculum21">Curriculum 2021</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Library <i class="bi bi-chevron-down"></i> </a>
                                    <ul>
                                        <li><a href="navbar/academic.php#library">Profile</a></li>
                                        <li><a href="navbar/academic.php#lib_gallery">Library Gallery</a></li>
                                        <li><a href="navbar/academic.php#lib_glance">Library at glance</a></li>
                                        <li><a href="navbar/academic.php#lib_head">Librarian Desk</a></li>
                                        <li><a href="navbar/academic.php#lib_faculty">Faculty</a></li>
                                        <li><a href="navbar/academic.php#lib_fp">Future Plan</a></li>
                                    </ul>
                                </li>
                                <li><a href="navbar/academic.php#academicCalender">Academic Calender</a></li>
                                <li><a href="result/">Result</a></li>
                                <!-- <li><a href="https://mahadbt.maharashtra.gov.in/" target="_blank">Scholarship</a></li> -->

                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Admission</span> <i class=""></i></a>
                            <ul>
                                <li><a href="navbar/admission.php">Program Offered</a></li>
                                <li><a href="navbar/admission.php#info_broucher">Information Broucher</a></li>
                                <li class="dropdown"><a href="#">Fees<i class="bi bi-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="https://www.onlinesbi.sbi/sbicollect/icollecthome.htm" target="_blank">SBI Payment Portal</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Admission Details <i class="bi bi-chevron-down"></i></a>

                                    <ul>
                                        <li><a href="navbar/admission.php#ssc">After SSC</a></li>
                                        <li><a href="navbar/admission.php#hsc">After HSC</a></li>

                                    </ul>
                                </li>
                                <li><a href="navbar/admission.php#Bhostel">Boy's Hostel</a></li>
                                <li><a href="navbar/admission.php#Ghostel">Girl's Hostel</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Information</span> <i class=""></i></a>
                            <ul>
                                <li><a href="navbar/information.php">Mandatory Disclosure</a></li>
                                <li><a href="navbar/information.php#rtia">Right to information Act</a></li>
                                <li><a href="navbar/information.php#ac">Antiragging Committee</a></li>
                                <li><a href="navbar/information.php#gc">Grievances Committee</a></li>
                                <li><a href="navbar/information.php#cc">Citizen Charter</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Placement</span> <i class=""></i></a>
                            <ul>
                                <li><a href="placement/placement.php#faq">Placement overview</a></li>
                                <li><a href="placement/placement.php#faq">Our recruiters</a></li>
                                <li><a href="placement/placement.php#faq">Vacancy</a></li>
                                <li><a href="placement/form_2.php">Upload Offer Letter</a></li>
                                <li><a href="placement/placement.php#faqModal">FAQ</a></li>
                                <li><a href="placement/login/login.php">TPO Login</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Student Corner</span> <i class=""></i></a>
                            <ul>
                                <li><a href="navbar/student_corner.php">Student Section</a></li>
                                <li><a href="navbar/student_corner.php#application">Application Form</a></li>
                                <!-- <li><a href="navbar/alumni.php">Alumni Portal</a></li> -->
                                <li><a href="https://mahadbt.maharashtra.gov.in/" target="_blank">Scholarship</a></li>
                                <li><a href="navbar/student_corner.php#gymkhana">Gymkhana</a></li>
                                <li><a href="navbar/student_corner.php#examrules">Examination rules</a></li>
                                <li><a href="navbar/student_corner.php#alumni">Alumni House</a></li>
                                <li><a href="navbar/student_corner.php#grievances">Student Grievance</a></li>
                            </ul>   
                        </li>

                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
            </div>
        </div>

    </div>
</header>
<!-- End Header -->



<!-- ======= hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-ride="true" data-bs-interval="5000">

            <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox" data-aos="fade-in">

                <?php
                $carousel = $conn->query("SELECT * FROM carousel WHERE 1");

                $count = 0;
                while ($row = $carousel->fetch(PDO::FETCH_OBJ)) :
                    $count++;
                    if ($count == 1) : ?>
                        <div class="carousel-item active" style="background-image: url(<?php echo $row->image; ?>);  background-attachment: fixed;">
                            <div class="carousel-container">
                                <div class="container">
                                    <h2 class="animate__animated animate__fadeInDown"><?php echo $row->title; ?></h2>
                                    <p class="animate__animated animate__fadeInUp"><?php echo $row->description; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php else :
                    ?>
                        <div class="carousel-item" style="background-image: url(<?php echo $row->image; ?>);   background-attachment: fixed;">
                            <div class="carousel-container">
                                <div class="container">
                                    <h2 class="animate__animated animate__fadeInDown"><?php echo $row->title; ?></h2>
                                    <p class="animate__animated animate__fadeInUp"><?php echo $row->description; ?></p>
                                </div>
                            </div>
                        </div>


                <?php
                    endif;
                endwhile;
                ?>

            </div>
        </div>
    </div>
</section><!-- End Hero Section -->

<script src="framework-assets/js/bizpage-main.js"></script>

<!-- ======= Notice Section ======= -->

<div id="row notice" style="margin: 0 5%;">

    <div class="col">

        <marquee class="mb-3" scrollamount="15" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
            <section id="counts" class="counts section-bg" style="background:#fff; width:max-content;">
                <section id="features" class="features" style="padding:0px;">
                    <div class="row" style="width:max-content">
                        <?php

                        $notice = $conn->query("SELECT * FROM news ORDER BY id DESC LIMIT 5");
                        $current_date = date("Y-m-d");

                        while ($notice_data = $notice->fetch(PDO::FETCH_OBJ)) :
                            // if ($current_date <= $notice_data->date) :
                            if ($current_date) :
                        ?>
                                <div class="col">
                                    <div class="icon-box" style="width:max-content">
                                        <i class="fa fa-bullhorn"></i>
                                        <h3><a href="<?php echo $notice_data->file_link ?>" target="_blank">
                                                <?php echo $notice_data->news_name ?></a></h3>
                                    </div>
                                </div>
                        <?php
                            endif;
                        endwhile;
                        ?>

                    </div>
                </section>
            </section>
        </marquee>
        <style>
            .view_all:hover {
                border-bottom: 1px solid #05579E;
                transition: all;
            }
        </style>
        <!--  -->

    </div>

    <script src="https://kit.fontawesome.com/252d014bb4.js" crossorigin="anonymous"></script>
</div>
<!-- End Notice Section -->

<!-- ======= Director Profile ======= -->
<section id="team" class="team section-bg pt-4">
    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h3>Head</h3>
        </header>

        <div class="row">

            <?php
            $head = $conn->query("SELECT * FROM head WHERE 1");

            while ($row = $head->fetch(PDO::FETCH_OBJ)) : ?>
                <div class="me-head col-lg-3 mt-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="member d-flex flex-column align-items-center">
                        <div class="pic"><img src="<?php echo $row->image; ?>" class="img-fluid" alt="" style="width: 200px; height:180px;"></div>

                        <div class="member-info mt-2">
                            <h4 class="text-start"><?php echo $row->name; ?></h4>
                            <span><?php echo $row->designation; ?></span>
                            <p><?php echo $row->description; ?></p>

                        </div>
                    </div>
                </div>
            <?php
            endwhile;

            ?>

        </div>

    </div>
</section><!-- End Director Profile -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container" data-aos="fade-up">

        <!-- <header class="section-header">
            <h3>Services</h3>
        </header> -->

        <div class="row g-5">
            <div class="me-service col-md-6 col-lg-3 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
                <a href="./navbar/Technical_Education_Diploma_Admission.php">
                    <div class="box shadow">
                        <div class="icon" style="background: #fceef3;"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                        <h4 class="title" style="color:black">Admission
                        </h4>
                    </div>
                </a>
            </div>

            <div class="me-service col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                <a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm?corpID=903094" target="blank">
                    <div class="box shadow">
                        <div class="icon" style="background: #fff0da;"><i class="bi bi-card-checklist" style="color: #e98e06;"></i></div>
                        <h4 class="title" style="color:black">Fees Payment
                        </h4>
                    </div>
                </a>
            </div>

            <div class="me-service col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                <a href="result/">
                    <div class="box shadow">
                        <div class="icon" style="background: #e6fdfc;"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
                        <h4 class="title" style="color:black">Exam Result
                        </h4>
                    </div>
                </a>
            </div>
            <div class="me-service col-md-6 col-lg-3 wow" data-aos="zoom-in" data-aos-delay="100">
                <a href="https://msbte.org.in/applied_mechanics.html">
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

<!-- ======= Vision Mission Section ======= -->
<!-- <section id="features" class="features vis_mis"> -->
<section id="features" class="features section-bg">
    <div class="container" data-aos="fade-up">

        <div class="row feature-item">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <h4 class="text-center">Vision</h4>
                <p class="text-start" style="text-align: justify;">
                    <img src="framework-assets/img/vision.jpg" alt="" class="img-fluid mx-4 mb-2" style="width: 45%; height: 45%; float: left;">
                    To be a premier Technical Training and Development Institute catering to the skill and
                    professional development in multi-domain for Successful employment/self-employment by offering
                    certified and accrsedited NSQF compliant programmes.

                    The Institute shall be the center for Excellence in skill development and community development
                    through different training programmes, business incubation and Entrepreneurship development.
                </p>
            </div>
            <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0" data-aos="fade-left" data-aos-delay="150">
                <h4 class="text-center">Mission</h4>
                <p class="text-start" style="text-align: justify;">
                    <img src="framework-assets/img/mission.jpg" alt="" class="img-fluid mx-4 mb-2" style="width: 35%; height: 35%; float: right; ">
                    The Government Polytechnic, Nashik, an Autonomous Institute of Government of Maharashtra has the
                    Mission to provide Education for skill Development, Engineering Diploma and continuing education
                    Programmes for enhancement of employability skills of the aspirants in the job/self-employment
                    through continually developing quality learning systems.

                    The Institute aims at holistic and the student centric education in collaboration with business,
                    industry and having practice based education.
                </p>
            </div>
        </div>
    </div>
</section><!-- End Vision Mission Section -->


<!-- ======= Institute Overview Section ======= -->
<section id="about" class="about">
    <div class="container">

        <header class="section-header">
            <h3>Institute Overview</h3>
        </header>
        <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
                <img src="framework-assets/img/7.jpg" class="img-fluid mx-4 my-2" alt="" style="float:left; width:250px;">
                <p class="text-end" style="text-align: justify;">
                    Government Polytechnic, Nashik was established in the year 1980. The Government of Maharashtra
                    allotted 30 Acres of land on which stands the majestic & sprawling Government Polytechnic campus.
                    The Institute is located at Samangaon Road at 1.5 Km. from Nashik-Pune Highway, about 3 Km. from
                    Nashik-Road Railway Station & 12 Km. from Central Bus Stand, Nashik. Initially Diploma programme in
                    Civil Engineering with 60 intake was introduced in 1980 & now the institute conducts 10 (Ten)
                    regular Diploma programmes in conventional and diversified areas in two shifts with total intake of
                    780+66 (Fee waiver scheme). Apart from this, the Institute conducts Staff Development Programmes for
                    working employees.
                </p>
            </div>

        </div>

    </div>
</section><!-- End Institute Overview Section -->

<!-- ======= Department Section ======= -->

<section id="testimonials" class="testimonials dept_sec">
    <!-- <section id="testimonials" class="testimonials section-bg"> -->
    <div data-aos="fade-up">
        <video autoplay muted loop id="myVideo">
            <source src="framework-assets/img/depTestimonials/rain.mp4" type="video/mp4">
        </video>
        <div class="container">
            <header class="section-header">
                <h3 style="color: white;">Departments</h3>
            </header>


            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="departments/civil.php">

                            <div class="testimonial-item">
                                <p class="pt-4">
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    We shape our buildings, thereafter they shape us.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img style="background:black;" src="framework-assets/img/depTestimonials/civil.png" class="testimonial-img" alt=""><br>
                                <h3>Civil Engineering</h3>
                            </div>
                        </a>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                        <a href="departments/electrical.php">

                            <div class="testimonial-item">
                                <p class="pt-4">
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Million cells communicate through electrical signals.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img style="background:black;" src="framework-assets/img/depTestimonials/electrical.png" class="testimonial-img" alt=""><br>
                                <h3>Electrical Engineering</h3>
                            </div>
                        </a>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <a href="departments/mechanical.php">

                            <div class="testimonial-item">
                                <p class="pt-4">
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    freedom from mechanical conditioning is there simplicity.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img style="background:black;" src="framework-assets/img/depTestimonials/mechanical.png" class="testimonial-img" alt=""><br>
                                <h3>Mechanical Engineering</h3>
                            </div>
                        </a>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                        <a href="departments/comtechnology.php">

                            <div class="testimonial-item">
                                <p class="pt-4">
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Technology is best when it brings people together.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img style="background:black;" src="framework-assets/img/depTestimonials/computer.png" class="testimonial-img" alt=""><br>
                                <h3>Computer Technology</h3>
                            </div>
                        </a>
                    </div><!-- End testimonial item-->
                    <div class="swiper-slide">
                        <a href="departments/infotechnology.php">

                            <div class="testimonial-item">
                                <p class="pt-4">
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Technology is best when it brings people together.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img style="background:black;" src="framework-assets/img/depTestimonials/information.png" width=500 class="testimonial-img" alt=""><br>
                                <h3>Information Technology</h3>
                            </div>
                        </a>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                        <a href="departments/entc.php">

                            <div class="testimonial-item">
                                <p class="pt-4">
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Electrical Engineer do it with More frequency.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img style="background:black;" src="framework-assets/img/depTestimonials/electronic.png" class="testimonial-img" alt=""><br>
                                <h3>Electronics and Telecommunication</h3>
                            </div>
                        </a>
                    </div><!-- End testimonial item -->


                    <div class="swiper-slide">
                        <a href="departments/ae.php">

                            <div class="testimonial-item">
                                <p class="pt-4">
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Your mind is an automobile,
                                    And words are the wheels.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img style="background:black;" src="framework-assets/img/depTestimonials/automobile.png" class="testimonial-img" alt=""><br>
                                <h3>Automobile Engineering</h3>
                        </a>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <a href="departments/ddgm.php">

                        <div class="testimonial-item">
                            <p class="pt-4">
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                The fashion is the armor to survive.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img style="background:black;" src="framework-assets/img/depTestimonials/dress-design.png" class="testimonial-img" alt=""><br>
                            <h3>Dress Design & Garment Manu.</h3>
                        </div>
                    </a>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <a href="departments/idd.php">

                        <div class="testimonial-item">
                            <p class="pt-4">
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                A room is not a room,
                                without natural light.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img style="background:black;" src="framework-assets/img/depTestimonials/interior.png" class="testimonial-img" alt=""><br>
                            <h3>Interior Design & Decoration</h3>
                    </a>
                </div>
            </div><!-- End testimonial item -->


            <div class="swiper-slide">
                <a href="departments/plastic.php">
                    <div class="testimonial-item">
                        <p class="pt-4">
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Plastic is an ingredient of grandchildren's recipes.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img style="background:black;" src="framework-assets/img/depTestimonials/plastic.png" class="testimonial-img" alt=""><br>
                        <h3>Plastic Engineering</h3>
                    </div>
                </a>
            </div><!-- End testimonial item -->
        </div>


    </div>

</section><!-- End Department Section -->
<!-- End Department Section -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients pt-0 mt-0">
    <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center ">
                <div class="swiper-slide px-2"><img src="framework-assets/img/clients/c2.jpg" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide px-2"><img src="framework-assets/img/clients/c1.jpg" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide px-2"><img src="framework-assets/img/clients/c3.jpg" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide px-2"><img src="framework-assets/img/clients/c4.jpg" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide px-2"><img src="framework-assets/img/clients/c5.jpg" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide px-2"><img src="framework-assets/img/clients/c6.jpg" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide px-2"><img src="framework-assets/img/clients/c7.jpg" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide px-2"><img src="framework-assets/img/clients/c8.jpg" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide px-2"><img src="framework-assets/img/clients/c9.jpg" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide px-2"><img src="framework-assets/img/clients/c10.jpg" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide px-2"><img src="framework-assets/img/clients/c11.jpg" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide px-2"><img src="framework-assets/img/clients/c12.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </div>
</section><!-- End Clients Section -->


<!-- ======= Footer ======= -->
<footer id="footer" class="footer" style="position:static; bottom:0;">

    <div class="footer-content">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-12 footer-info">
                    <a href="index.php" class="logo d-flex align-items-center">
                        <h2>Government Polytechnic Nashik.</h2>
                    </a>
                    <p>
                        Chehedi (B), Samangaon Road, Nashik-Road,
                        Nashik- 422 101, Maharashtra (India)<br><br>
                        <strong>DTE Institute Code:</strong> 5010<br>
                        <strong>Phone:</strong><a href="tel:+91 253 2461221"> +91 253 2461221</a><br>
                        <strong>Email:</strong><a href="mailto:office.gpnashik@dtemaharashtra.gov.in">
                            office.gpnashik@dtemaharashtra.gov.in</a><br> </a>


                        <?php
                        include 'admin/conn.php';

                        $last_update = "";
                        $visit = $conn->query("SELECT * FROM visitor_count WHERE 1");
                        $visit->execute();
                        $visit_fetch = $visit->fetch(PDO::FETCH_OBJ);
                        $count = $visit_fetch->count;

                        $count = $count + 1;

                        $visited = $conn->query("UPDATE visitor_count SET count = $count, datetime = now() where id = '1'");
                        $visited->execute();
                        $last_update = $visit_fetch->datetime;


                        ?>

                        <strong>Visitor Count: </strong><?php echo $count; ?><br> </a>
                        <strong>Last Updated: </strong><?php echo $last_update; ?><br> </a>
                    </p>

                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>About US</h4>
                    <ul>
                        <li> <a href="navbar/about.php">Institute</a></li>
                        <li> <a href="navbar/about.php#principal">Principal's Desk</a></li>
                        <li> <a href="navbar/about.php#governing">Governing Body</a></li>
                        <li> <a href="navbar/about.php#organizational">Organizational Chart</a></li>
                        <li> <a href="navbar/about.php#bos">Board Of Studies</a></li>
                        <li> <a href="navbar/about.php#photogallery">Photogallery</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Admission</h4>
                    <ul>
                        <li> <a href="navbar/admission.php">Programs Offered</a></li>
                        <li> <a href="navbar/admission.php#info_broucher">Information Broucher</a></li>
                        <li> <a href="https://www.onlinesbi.sbi/sbicollect/icollecthome.htm">Fees Payment</a></li>
                        <li> <a href="navbar/admission.php#ssc">Admission Details</a></li>
                        <li> <a href="navbar/admission.php#Bhostel">Hostel</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Student Corner</h4>
                    <ul>
                        <li> <a href="navbar/student_corner.php">Student Section</a></li>
                        <li> <a href="navbar/student_corner.php#gymkhana">Gymkhana</a></li>
                        <li> <a href="navbar/student_corner.php#examrules">Examination Rules</a></li>
                        <li> <a href="navbar/student_corner.php#alumni">Alumni House</a></li>
                        <li> <a href="navbar/student_corner.php#grievances">Grievance Form</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Academic</h4>
                    <ul>
                        <li> <a href="navbar/academic.php#curriculumDevCell">Curriculum Development Cell</a></li>
                        <li> <a href="navbar/academic.php#exminationcell">Examination Cell</a></li>
                        <li> <a href="navbar/academic.php#library">Library</a></li>
                        <li> <a href="result/index.php">Result</a></li>
                        <li> <a href="navbar/academic.php#academicCalender">Academic Calendar</a></li>
                        <li> <a href="https://mahadbt.maharashtra.gov.in/">Scholarship</a></li>
                        <li> <a href="admin/login/login.php">Login</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-legal">
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
        </div>
    </div>
</footer><!-- End Footer -->


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>