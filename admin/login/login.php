<?php
error_reporting(0);

session_start();

include '../conn.php';

function ip_filter($data)
{

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST["login"])) {

    $uname = ip_filter($_POST["uname"]);
    $password = ip_filter($_POST["password"]);
    $login_designtion = ip_filter($_POST["login_designtion"]);

    $_SESSION["uname"] = $uname;
    $_SESSION["login_destination"] = $login_designtion;

    if ($login_designtion == "admin") {
        $login = $conn->prepare("SELECT * FROM $login_designtion where username = :uname");
        $login->bindParam(":uname", $uname, PDO::PARAM_STR, 50);
        $login->execute();

        $result = $login->fetch(PDO::FETCH_OBJ);

        if ($result->username == $uname) {
            if (password_verify($password, $result->password)) {
                header("location:../index.php");
            } else {
                $login_details_error = true;
                session_unset();
            }
        } else {
            $email_auth_error = true;
            session_unset();
        }
    }
    if ($login_designtion == "staff_admin") {
        $login = $conn->prepare("SELECT * FROM $login_designtion where dept = :uname");
        $login->bindParam(":uname", $uname, PDO::PARAM_STR, 50);
        $login->execute();

        $result = $login->fetch(PDO::FETCH_OBJ);

        if ($result->dept == $uname) {
            if ($result->password == $password) {
                header("location:../index.php");
                echo "success";
            } else {
                $login_details_error = true;
                session_unset();
            }
        } else {
            $email_auth_error = true;
            session_unset();
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login | GPN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../../framework-assets/img/logo.jpg" rel="icon">
    <link href="../../framework-assets/img/logo.jpg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

    <div class="container pt-4">
        <div class="d-flex justify-content-center">

            <div class="d-flex justify-content-center">
                <a href="../../index.php" class="d-flex align-items-center w-50">
                    <img src="assets/img/logo.png" alt="">
                    <span class="d-lg-block"><img src="../../framework-assets/img/logo_entire.png" alt="" class="img-fluid rounded bordered"></span>
                </a>
            </div>

        </div>
    </div>

    <div class="container col-xl-10 col-xxl-8 px-4">
        <div class="d-flex flex-column align-items-center g-lg-5 py-5">

            <div class="card col-md-10 mx-auto col-lg-5">

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="row g-3 needs-validation mt-2 mb-2 p-3 px-4" novalidate>

                    <div class="d-flex justify-content-center py-2">
                        <a class="logo d-flex align-items-center w-auto">
                            <img src="assets/img/logo.png" alt="">
                            <span class="d-lg-block">User Login</span>
                        </a>
                    </div>
                    <?php

                    if ($login_details_error) {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Invalid Credentials! Please enter the valid username & password.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    }

                    if ($email_auth_error) {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Error ! username is not valid.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    }


                    ?>
                    <div class="col-md-12">
                        <label for="department" class="form-label">Choose Designation</label>
                        <select class="form-select" id="department" name="login_designtion" required>
                            <option selected disabled value="">Choose...</option>
                            <option value="admin" name="login_designtion">Admin</option>
                            <option value="staff_admin" name="login_designtion">Department</option>

                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>

                    <div class="col-md-12">

                        <label for="email" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" id="username" name="uname" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please provide valid username.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="password" class="form-label">Password</label>
                        <div class="d-flex has-validation">
                            <input type="password" class="form-control" id="password" name="password" required />
                            <i class="bi bi-eye-slash text-start pt-2" id="togglePassword" style=" margin-left: -30px; cursor: pointer;"></i>
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid password.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>




                    <div class="col-md-12 pb-2">
                        <button class="btn btn-primary w-100" type="submit" id="login" name="login">Login</button>
                    </div>

                    <!-- <div class="col-md-12">
                        <label for="login-auth">Don't Authenticate yet? <a href="login_auth.php">Authenticate Email</a></label>
                    </div> -->

                </form>
            </div>
            <div class="d-flex justify-content-center py-4">
                <a href="../../index.php" class="logo d-flex align-items-center w-auto">
                    <img src="assets/img/logo.png" alt="">
                    <span class="d-lg-block">Back to Home</span>
                </a>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document
            .querySelector('#togglePassword');

        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', () => {

            // Toggle the type attribute using
            // getAttribure() method
            const type = password
                .getAttribute('type') === 'password' ?
                'text' : 'password';

            password.setAttribute('type', type);

            // Toggle the eye and bi-eye icon
            this.classList.toggle('bi-eye');
        });
    </script>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../assets/vendor/quill/quill.min.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>