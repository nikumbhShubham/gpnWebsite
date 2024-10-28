<?php

// 404 error page 

// header("location: ../admin/404_error_page.php");

error_reporting(0);
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Result | GPN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="../admin/assets/img/favicon.png" rel="icon"> -->
    <!-- <link href="../admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../admin/assets/css/style.css" rel="stylesheet">

</head>

<body>
    <div class="container pt-4">
        <div class="d-flex justify-content-center">

            <div class="d-flex justify-content-center">
                <a href="../index.php" class="d-flex align-items-center w-50">
                    <img src="assets/img/logo.png" alt="">
                    <!-- <span class="d-lg-block"> Government Polytechnic nashik</span> -->
                    <span class="d-lg-block"><img src="../framework-assets/img/logo_entire.png" alt="" class="img-fluid rounded bordered"></span>
                </a>
            </div>
            <!-- <img src="../framework-assets/img/logo_entire.png" alt="" class="img-fluid rounded bordered"> -->

        </div>
    </div>

    <div class="container col-xl-10 col-xxl-8 px-4">
        <div class="row align-items-center g-lg-5 py-5">
            <!-- <div class="col-lg-7 text-center text-lg-start">
                <img src="../admin/assets/img/hero-img1.png" alt="" class="img-fluid rounded bordered">
            </div> -->
            <div class="card col-md-10 mx-auto col-lg-5">

                <div class="d-flex justify-content-center py-4">
                    <a href="#" class="logo d-flex align-items-center w-auto">
                        <span class="d-lg-block">Examination Result</span>
                    </a>
                </div>
                <?php

                if ($_SESSION["invalid_rollno"] == 1) {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Invalid Roll Number!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
                }
                if ($_SESSION["result_not_found"] == 1) {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      Result not found!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
                }

                ?>
                <form action="<?php echo htmlspecialchars("result.php") ?>" method="post" class="row g-3 needs-validation mb-2" novalidate>

                    <div class="col-md-12">
                        <label for="user id" class="form-label">Student Roll Number</label>
                        <div class="input-group has-validation">
                            <input type="number" class="form-control" name="rollno" aria-describedby="inputGroupPrepend" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please enter roll number.
                            </div>

                        </div>
                    </div>
                    <!-- <button class="btn btn-danger mx-2 col-lg-4" type="submit">reset</button> -->
                    <div class="col-md-12 pb-3">
                        <button class="btn btn-primary w-100" type="submit" name="result">View Result</button>
                    </div>
                </form>
            </div>
            <div class="d-flex justify-content-center">
                <a href="../index.php" class="logo d-flex align-items-center w-auto">
                    <img src="assets/img/logo.png" alt="">
                    <span class="d-lg-block">Back to Home</span>
                </a>
            </div>
        </div>
    </div>




    <?php
    unset($_SESSION["invalid_rollno"]);
    unset($_SESSION["result_not_found"]);

    ?>
    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../admin/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../admin/assets/vendor/echarts/echarts.min.js"></script>
    <script src="../admin/assets/vendor/quill/quill.min.js"></script>
    <script src="../admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../admin/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../admin/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../admin/assets/js/main.js"></script>

</body>

</html>