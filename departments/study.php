<?php
error_reporting(0);
include '../admin/conn.php';

$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GPN | Study Material</title>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

    <!-- Template Main CSS File -->
    <link href="navbar-assets/css/style.css" rel="stylesheet">



</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <h1><a href="../index.php" class="fs-4">Study Material</a></h1>

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




    <main id="main">
        <link href="../admin/assets/css/style.css" rel="stylesheet">

        <div class="dashboard">

            <!-- Recent Sales -->

            <div class="card recent-sales" id="notes">

                <div class="card-body table-responsive">
                    <h5 class="card-title">Lecture Notes</h5>

                    <table class="table table-borderless datatable" id="NotesTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Subject </th>
                                <th scope="col">Details</th>
                                <th scope="col">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php



                            $notes = $conn->prepare("SELECT * FROM notes WHERE dept_id = '$id' ORDER BY notes.id DESC");
                            $notes->execute();

                            $srn = 0;

                            // while ($srn < 5) {
                            while ($row = $notes->fetch(PDO::FETCH_OBJ)) :
                                $srn++;
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $srn; ?></th>
                                    <td><?php echo $row->subject; ?></td>
                                    <td><?php echo $row->description; ?></td>
                                    <td><a href="<?php echo $row->link; ?>" target="_blank"><button class="btn btn-primary">View</button></a></td>
                                </tr>
                            <?php
                            endwhile;

                            ?>



                        </tbody>
                    </table>

                </div>

            </div><!-- End Recent Sales -->


            <!-- Recent Sales -->
            <div class="card recent-sales" id="paper">

                <div class="card-body table-responsive">
                    <h5 class="card-title">Last Year Question Paper</h5>
                    <table class="table table-borderless datatable" id="PaperTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Subject </th>
                                <th scope="col">Details</th>
                                <th scope="col">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php



                            $notes = $conn->prepare("SELECT * FROM question_papers WHERE dept_id = '$id' ORDER BY question_papers.id DESC");
                            $notes->execute();

                            $srn = 0;

                            // while ($srn < 5) {
                            while ($row = $notes->fetch(PDO::FETCH_OBJ)) :
                                $srn++;
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $srn; ?></th>
                                    <td><?php echo $row->subject; ?></td>
                                    <td><?php echo $row->description; ?></td>
                                    <td><a href="<?php echo $row->link; ?>" target="_blank"><button class="btn btn-primary">View</button></a></td>
                                </tr>
                            <?php
                            endwhile;

                            ?>



                        </tbody>
                    </table>

                </div>

            </div><!-- End Recent Sales -->


            <!-- Recent Sales -->
            <div class="card recent-sales" id="video">

                <div class="card-body table-responsive">
                    <h5 class="card-title">Video Lectures</h5>

                    <table class="table table-borderless datatable" id="VideoTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Subject </th>
                                <th scope="col">Details</th>
                                <th scope="col">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php



                            $notes = $conn->prepare("SELECT * FROM video_lectures WHERE dept_id = '$id' ORDER BY video_lectures.id DESC");
                            $notes->execute();

                            $srn = 0;

                            // while ($srn < 5) {
                            while ($row = $notes->fetch(PDO::FETCH_OBJ)) :
                                $srn++;
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $srn; ?></th>
                                    <td><?php echo $row->subject; ?></td>
                                    <td><?php echo $row->description; ?></td>
                                    <td><a href="<?php echo $row->link; ?>" target="_blank"><button class="btn btn-primary">View</button></a></td>
                                </tr>
                            <?php
                            endwhile;

                            ?>



                        </tbody>
                    </table>

                </div>

            </div><!-- End Recent Sales -->

        </div>
    </main>


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

    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>


    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        let ntable = new DataTable('#NotesTable');
        let ptable = new DataTable('#PaperTable');
        let vtable = new DataTable('#VideoTable');
    </script>


</body>

</html>