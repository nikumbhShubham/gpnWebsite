<?php
require("../../admin/conn.php");
ob_start();
session_start();
// ob_flush();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TPO Login | GPN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../navbar-assets/img/logofav.png" rel="icon">
    <link href="../navbar-assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../navbar-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../navbar-assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../navbar-assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../navbar-assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../navbar-assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../navbar-assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../navbar-assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../navbar-assets/css/style.css" rel="stylesheet">

</head>

<body>


    <div class="container pt-4 align-items-center">


        <div class="d-flex justify-content-center">

            <div class="d-flex justify-content-center">


                <a href="#" class="d-flex align-items-center ">
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <!-- <span c> Government Polytechnic nashik</span> -->
                <img src="logo.png" width="375px" height="95px"  alt="placement" srcset="">

                    <!-- <span class="d-lg-block"><img src="../../framework-assets/img/logo_entire.png" alt=""
                            class="img-fluid rounded bordered"></span> -->
                           
                </a>
            </div>


        </div>
    </div>

    <div class="container mt-5">
                   

        <div class="d-flex row g-3 align-items-center justify-content-center p-4">
            <div class="card col-md-10 mx-auto col-lg-5 mb-auto mt-auto">

                <div class="d-flex justify-content-center py-4">
                    <a href="#" class="logo d-flex align-items-center w-auto">
                        <h1 class="d-lg-block">TPO Login</h1>
                    </a>
                </div>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST"
                    class="row g-3 needs-validation mt-2 mb-2 px-3 mb-0" novalidate>


                    <div class="col-md-12">

                        <label for="email" class="form-label">Email</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="email" class="form-control" id="email" name="email"
                                aria-describedby="inputGroupPrepend" required>
                            <!-- <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div> -->
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="validationCustom03" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <!-- <div class="invalid-feedback">
                            Please provide a valid password.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div> -->
                    </div>

                    <!-- <button class="btn btn-danger mx-2 col-lg-4" type="submit">reset</button> -->
                    <div class="col-md-12 my-5">
                        <button class="btn btn-primary w-100" type="submit" id="login" name="login">Login</button>
                    </div>


                </form>

            </div>
            <a href="../placement.php" class="text-center mt-4">Back to home</a>
        </div>
    </div>



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../navbar-assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../navbar-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../navbar-assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../navbar-assets/vendor/echarts/echarts.min.js"></script>
    <script src="../navbar-assets/vendor/quill/quill.min.js"></script>
    <script src="../navbar-assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../navbar-assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../navbar-assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../navbar-assets/js/main.js"></script>

    <!-- php script -->
    <?php

    function ip_filter($data)
    {

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (isset($_POST['login'])) {
        //filtering user ip
        $adminEmail = $_POST['email'];
        $adminEmail = ip_filter($_POST['email']);
        $adminPass = $_POST['password'];
        $adminPass = ip_filter($_POST['password']);

        //escaping special symbol (sql injection)
        $adminEmail = mysqli_real_escape_string($con, $adminEmail);
        $adminPass = mysqli_real_escape_string($con, $adminPass);

        //  $query = "SELECT * FROM `adminlogin` WHERE `adminemail `=?  AND `password`=?";
        $query = "SELECT * FROM `adminlogin` WHERE `adminemail`=? AND `password`=?";

        //prepared statement (prevents sql injection)
    
        if ($stmt = mysqli_prepare($con, $query)) {
            mysqli_stmt_bind_param($stmt, "ss", $adminEmail, $adminPass); //binding values to templates
            mysqli_stmt_execute($stmt); //execute prepared stmt
            mysqli_stmt_store_result($stmt); //transfering the result of execution in stmt
            if (mysqli_stmt_num_rows($stmt) == 1) {
                $bool=true;
                // $_SESSION['loggedIn'] = true;
                echo "details matched";
                session_start();
                $_SESSION['AdminLoginID'] = $adminEmail;
                header("location:dashboard/dist/index.php");
            } else {
                echo "<script>alert('invalid username and password')<script/>";

            } 


            mysqli_stmt_close($stmt);
        } else {
            echo "sql query cannot be prepared";
        }
    }

    // if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    //     // user is logged in
    //   } else {
    //     // user is not logged in
    //   }



    ob_flush();





    ?>





</body>

</html>