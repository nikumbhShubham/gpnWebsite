<?php
// error_reporting(0);
include '../admin/conn.php';

$dept = $conn->query("SELECT * FROM staff_admin WHERE dept = 'PS'");
$dept_data = $dept->fetch(PDO::FETCH_OBJ);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GPN | Plastic Engineering</title>
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
                <h1><a href="../index.php">PS</a></h1>
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

    <section class="hero-section plastic_hero">
        <div class="mt-5">
            <div class="text-center" data-aos="zoom-in">
                <h1>Technology is best when it brings people together. </h1>
                <h2> -Matt Mullenweg</h2>
            </div>
        </div>
    </section>

    <!-- End Hero -->

    <main id="main">
        <!-- ======= HOD Section ======= -->
        <section id="hod" class="about">
            <div class="container">

                <div class="row">
                    <?php
                    $hod_desk = $conn->query("SELECT * FROM hod_desk WHERE dept_id = '$dept_data->id'");
                    $hod_desk_data = $hod_desk->fetch(PDO::FETCH_OBJ);
                    ?>

                    <div class="col-lg-6" data-aos="zoom-in">
                        <?php
                        $image_path = substr($hod_desk_data->image, 12);
                        ?>
                        <img src="<?php echo $image_path; ?>" class="img-fluid shadow-lg rounded" width=300 alt="">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0">

                            <h3>HOD's Desk</h3>
                            <h4 class="fst-italic pt-4">
                                <b>Name: </b><?php echo $hod_desk_data->name; ?> <br> <br>
                                <b>Date of Appointment: </b> <?php echo $hod_desk_data->appointment_date; ?> <br> <br>
                                <b>Qualification:</b> <?php echo $hod_desk_data->qualification; ?> <br> <br>
                                <b>Experience:</b><?php echo $hod_desk_data->experience; ?> <br> <br>
                            </h4>

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End HOD Section -->

        <section id="lab">

            <div class="container">
                <div class="row">
                    <h3 class="container text-center mb-5">Laboratory </h3>

                    <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                        <div>
                            <h3>
                                Plastic Testing Laboratory<br>
                                Computer Laboratory<br>
                                Plastic Processing Laboratory I<br>
                                Plastic Processing Laboratory II<br>
                                Polymer Chemistry Laboratory
                            </h3>
                            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                        <div id="carouselExampleControls" class="carousel slide carousel-fade " data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="navbar-assets/img/plastic/lab1.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/plastic/lab2.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/plastic/lab3.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/plastic/lab4.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/plastic/lab5.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/plastic/lab6.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/plastic/lab7.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="navbar-assets/img/plastic/lab8.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
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
                        <td>SR.NO.</td>
                        <td>Name of Laboratory</td>
                        <td>Area of Lab in Sq. m.</td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Plastic Testing Laboratory</td>
                        <td>153</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Computer Laboratory</td>
                        <td>102</td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Plastic Processing Laboratory I</td>
                        <td>153</td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>Plastic Processing Laboratory II</td>
                        <td>102</td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>Polymer Chemistry Lab</td>
                        <td>100.38</td>
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

                <div class="row d-flex">
                    <div class="col-lg-9">
                        <ul class="faq-list">

                            <li>
                                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Vision<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        To develop a centre for excellence in the field of Plastic Engineering for the development of need based manpower for business and industry. The department shall have training and development activities in collaboration with industry to address the emerging technology domain in the field of Plastic Engineering.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Mission <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Department of Plastic Engineering is committed<br>
                                        M1. To develop employable Diploma Plastic Technicians.<br>
                                        M2. To create problem based learning environment for achieving academic excellence.<br>
                                        M3. M3. To inculcate ethical values, entrepreneurial, environmental concern and life learning skills for sustainable development of plastics and allied industries.<br>
                                        M4. To provide quality learning systems through development of academic processes, projects, consultancy and industry collaboration.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Programme Educational Objectives(PEO's)<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                    <p class="description text-start">
                                        To provide the Polymer engineering technicians for meeting the current and future demands of technical manpower in plastics industry/self-employment.<br>

                                        To build the fundamental knowledge in mathematical, scientific and engineering fundamentals required to formulate, analyze and solve plastic engineering and related problems.<br>

                                        To enable plastic engineering diploma technicians to undertake design, development, production, managerial and entrepreneurial activities in the fields of plastics engineering.<br>

                                        To inculcate ethical practices, leadership skills, innovation, integrity, life-long learning skills and sensitivity to the needs of the society.<br>
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Programme Specific Outcomes(PSOs)<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                    <p class="description text-start">
                                        Synthesize, characterize and select the polymer materials.<br>

                                        Manufacture plastics products using suitable processing technique and suggest appropriate recycling method.<br>

                                        Assess the quality of plastics products and design mould.<br>
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Strength <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                    <p class="description text-start">
                                        100 % placement to students<br>

                                        Highly qualified & experience faculties<br>

                                        State of art infrastructure and laboratories<br>

                                        Good interaction with industries<br>

                                        All faculties are Post-Graduate
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Programme Outcomes(POs)<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                    <p class="description text-start">
                                        On successful completion Diploma pass out student's will be able to<br>

                                        <strong>Basic and Discipline specific knowledge:</strong> Apply knowledge of basic mathematics, science and engineering fundamentals and engineering specialization to solve the engineering problems.<br>

                                        <strong>Problem analysis:</strong> Identify and analyses well-defined engineering problems using codified standard methods.<br>

                                        <strong>Design/ development of solutions:</strong> Design solutions for well-defined technical problems and assist with the design of systems components or processes to meet specified needs.<br>

                                        <strong>Engineering Tools, Experimentation and Testing:</strong> Apply modern engineering tools and appropriate technique to conduct standard tests and measurements.<br>

                                        <strong>Engineering practices for society, sustainability and environment:</strong> Apply appropriate technology in context of society , sustainability, environment and ethical practices.<br>

                                        <strong>Project Management:</strong> Use engineering management principles individually, as a team member or a leader to manage projects and effectively communicate about well-defined engineering activities.<br>

                                        <strong>Life-long learning:</strong> Ability to analyses individual needs and engage in updating in the context of technological changes.<br>

                                    </p>
                                </div>
                            </li>
                            <li>
                                <div data-bs-toggle="collapse" href="#faq7" class="collapsed question">Staff Achievements <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq7" class="collapse" data-bs-parent=".faq-list">
                                    <div class="table-responsive">

                                        <table class="container table table-bordered table-responsive description table-fluid w-full">
                                            <tr>
                                                <td>Name of Faculty</td>
                                                <td>No. of Paper Published/Conference Attended</td>
                                                <td>No. of Training attended</td>
                                            </tr>
                                            <?php
                                            $staff_ach = $conn->query("SELECT * FROM staff_achievements WHERE dept_id = $dept_data->id");
                                            while ($staff_ach_data = $staff_ach->fetch(PDO::FETCH_OBJ)) :
                                            ?>
                                                <tr>
                                                    <td><?php echo $staff_ach_data->name; ?></td>
                                                    <td><?php echo $staff_ach_data->conference; ?></td>
                                                    <td><?php echo $staff_ach_data->training; ?></td>
                                                </tr>
                                            <?php
                                            endwhile;
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div data-bs-toggle="collapse" href="#faq8" class="collapsed question">Industrial Visits <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq8" class="collapse" data-bs-parent=".faq-list">
                                    <div class="table-responsive">

                                        <table class=" table table-bordered table-responsive description table-fluid w-full">
                                            <tr>
                                                <td>Name of Industry or Location</td>
                                                <td>Date</td>
                                                <td>Class</td>
                                                <td>No. of Students</td>
                                            </tr>
                                            <?php
                                            $ind_visit = $conn->query("SELECT * FROM industrial_visit WHERE dept_id = $dept_data->id");
                                            while ($ind_visit_data = $ind_visit->fetch(PDO::FETCH_OBJ)) :
                                            ?>
                                                <tr>
                                                    <td><?php echo $ind_visit_data->industry_name; ?></td>
                                                    <td><?php echo $ind_visit_data->date; ?></td>
                                                    <td><?php echo $ind_visit_data->class; ?></td>
                                                    <td><?php echo $ind_visit_data->total_stud; ?></td>
                                                </tr>
                                            <?php
                                            endwhile;
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div data-bs-toggle="collapse" href="#faq9" class="collapsed question">Memorandum of Understanding (MOU) <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq9" class="collapse" data-bs-parent=".faq-list">
                                    <?php
                                    $mou = $conn->query("SELECT * FROM mou WHERE dept_id = $dept_data->id");
                                    while ($mou_data = $mou->fetch(PDO::FETCH_OBJ)) :
                                    ?>
                                        <p class="description text-start">
                                            <?php echo $mou_data->title; ?><br>
                                        </p>
                                    <?php
                                    endwhile;
                                    ?>
                                </div>
                            </li>
                            <li>
                                <div data-bs-toggle="collapse" href="#faq10" class="collapsed question">Result Analysis <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq10" class="collapse" data-bs-parent=".faq-list">
                                    <div class="table-responsive">

                                        <table class="table table-bordered table-responsive description table-fluid w-full">
                                            <tr>
                                                <td>Entry</td>
                                                <td>No. of Students</td>
                                                <td>I Year(pass)</td>
                                                <td>II Year(pass)</td>
                                                <td>III Year(pass)</td>
                                            </tr>
                                            <?php
                                            $res_ana = $conn->query("SELECT * FROM result_analysis WHERE dept_id = $dept_data->id");
                                            while ($res_ana_data = $res_ana->fetch(PDO::FETCH_OBJ)) :
                                            ?>
                                                <tr>
                                                    <td><?php echo $res_ana_data->entry; ?></td>
                                                    <td><?php echo $res_ana_data->total_stud; ?></td>
                                                    <td><?php echo $res_ana_data->first_year; ?></td>
                                                    <td><?php echo $res_ana_data->second_year; ?></td>
                                                    <td><?php echo $res_ana_data->third_year; ?></td>
                                                </tr>

                                            <?php
                                            endwhile;
                                            ?>

                                        </table>
                                    </div>
                                    <p class="h5">Academic Performance of Final Year</p>
                                    <div class="table-responsive">

                                        <table class="table table-bordered table-responsive description table-fluid w-full">
                                            <tr>
                                                <td>Entry</td>
                                                <td>I Year(pass)</td>
                                                <td>II Year(pass)</td>
                                                <td>III Year(pass)</td>
                                            </tr>
                                            <?php
                                            $res2_ana = $conn->query("SELECT * FROM result_analysis2 WHERE dept_id = $dept_data->id");
                                            while ($res2_ana_data = $res2_ana->fetch(PDO::FETCH_OBJ)) :
                                            ?>
                                                <tr>
                                                    <td><?php echo $res2_ana_data->academic_perform; ?></td>
                                                    <td><?php echo $res2_ana_data->cay; ?></td>
                                                    <td><?php echo $res2_ana_data->caym1; ?></td>
                                                    <td><?php echo $res2_ana_data->caym2; ?></td>
                                                </tr>

                                            <?php
                                            endwhile;
                                            ?>

                                        </table>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div data-bs-toggle="collapse" href="#faq11" class="collapsed question">Program Wise Committee (PWC) <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq11" class="collapse" data-bs-parent=".faq-list">
                                    <div class="table-responsive">

                                        <table class="table table-bordered table-responsive description table-fluid w-full">
                                            <tr>
                                                <td>Sr.No.</td>
                                                <td>Name</td>
                                                <td>PWC Designation</td>
                                            </tr>
                                            <tr>
                                                <td>01</td>
                                                <td>Dr. A. D. Palsodkar<br>Head of Plastic Engineering Department</td>
                                                <td>Chairman</td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td> Mr. Manoj Jaiswal<br>Industry Expert</td>
                                                <td>Member</td>
                                            </tr>
                                            <tr>
                                                <td>03</td>
                                                <td> Mr. Rahul S Patil<br>Industry Expert</td>
                                                <td>Member</td>
                                            </tr>
                                            <tr>
                                                <td>04</td>
                                                <td>Mr. Abhijeet Chandra<br>Industrial Expert</td>
                                                <td>Member</td>
                                            </tr>
                                            <tr>
                                                <td>05</td>
                                                <td>Shri. N. G. Deshmukh<br>Programme Expert From Neighboring Institute</td>
                                                <td>Member</td>
                                            </tr>
                                            <tr>
                                                <td>06</td>
                                                <td> Shri.N. N. Thakare<br>Senior Lecturer from Programme</td>
                                                <td>Member</td>
                                            </tr>
                                            <tr>
                                                <td>07</td>
                                                <td>Smt. S. P. Chaudhari<br>Senior Lecturer from Programme
                                                </td>
                                                <td>Co-opted Member</td>
                                            </tr>
                                            <tr>
                                                <td>08</td>
                                                <td>Mr. A. D. Joshi<br>MSBTE Representative
                                                </td>
                                                <td>Member</td>
                                            </tr>
                                            <tr>
                                                <td>09</td>
                                                <td> Shri. S. P. Dikshit<br>Incharge Curriculum Development Cell</td>
                                                <td>Member Secretary</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-3 d-flex flex-column">

                        <h1>Timetable - newsletter</h1>

                        <?php
                        $timetable =  $conn->query("SELECT * FROM timetable WHERE dept_id = $dept_data->id");

                        while ($timetable_data = $timetable->fetch(PDO::FETCH_OBJ)) :

                        ?>

                            <a href="<?php echo substr($timetable_data->timetable, 12) ?>" target="_blank">
                                <button class="btn btn-primary my-2 ">
                                    <?php echo $timetable_data->title; ?>
                                </button>
                            </a>

                        <?php
                        endwhile;
                        ?>

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

        <section id="achievement" class="faq section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Achievements</h2>
                </div>

                <ul class="faq-list">

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq12">Academic Achievements<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq12" class="collapse" data-bs-parent=".faq-list">
                            <div class="table-responsive">

                                <table class="container table table-bordered table-responsive">

                                    <tr>
                                        <td>Name of the Student</td>
                                        <td>Year</td>
                                        <td>Status</td>
                                    </tr>
                                    <?php
                                    $achad_ach = $conn->query("SELECT * FROM stud_achievement WHERE dept_id = $dept_data->id");
                                    while ($achad_ach_data = $achad_ach->fetch(PDO::FETCH_OBJ)) :
                                    ?>
                                        <tr>
                                            <td><?php echo $achad_ach_data->name; ?></td>
                                            <td><?php echo $achad_ach_data->year; ?></td>
                                            <td><?php echo $achad_ach_data->status; ?></td>
                                        </tr>
                                    <?php
                                    endwhile;
                                    ?>
                                </table>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq13" class="collapsed question">Other Achievements <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq13" class="collapse" data-bs-parent=".faq-list">
                            <div class="table-responsive">

                                <table class="container table table-bordered table-responsive">

                                    <tr>
                                        <td>Name of the Student</td>
                                        <td>Name of the Competition</td>
                                        <td>Year</td>
                                        <td>Status</td>
                                    </tr>
                                    <?php
                                    $other_ach = $conn->query("SELECT * FROM other_achievement WHERE dept_id = $dept_data->id");
                                    while ($other_ach_data = $other_ach->fetch(PDO::FETCH_OBJ)) :
                                    ?>
                                        <tr>
                                            <td><?php echo $other_ach_data->name; ?></td>
                                            <td> <?php echo $other_ach_data->competition; ?></td>
                                            <td><?php echo $other_ach_data->year; ?></td>
                                            <td><?php echo $other_ach_data->status; ?></td>
                                        </tr>
                                    <?php
                                    endwhile;
                                    ?>
                                </table>
                            </div>
                        </div>
                    </li>

                </ul>

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
                            <h3>Modernization of survey lab, environmental lab.<br>
                                Development of transportation engineering lab.<br>
                                Inplant training for final year students in vacation period.
                            </h3>


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