<?php
error_reporting(0);
// include 'auth_config.php';
// include 'authenticate.php';
// include 'dbconnect.php';

include 'conn.php';
if (isset($_POST["authenticate"])) {

    // $usermode = $_POST["mode"];
    $id = $_POST["id"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $_SESSION['id'] = $id;
    $_SESSION['hod_email'] = $email;
    $_SESSION['hod_pass'] = $password;


    $auth = $conn->prepare("SELECT * FROM users WHERE id = :id");
    $auth->execute(array(
        ":id" => $id
    ));
    $data = $auth->fetch(PDO::FETCH_OBJ);

    if ($auth->rowCount() == 1 and $data->email == "") {
        // $redirect_to_google = true;
        $procced_login = true;
        echo "valid ID";
    } else if ($auth->rowCount() != 1) {
        $login_details_error = true;
    } else {
        $user_auth_error = true;
    }
}



if (isset($procced_login)) {

    $check_email = $conn->prepare("SELECT email FROM users WHERE email = :email");
    $check_email->execute([":email" => $_SESSION["hod_email"]]);
    $check_email->fetch(PDO::FETCH_OBJ);

    if ($check_email->rowCount() > 0) {
        $email_auth_error = true;
        session_unset();
        session_destroy();
    } else {
        $insert = $conn->prepare("UPDATE users SET email = :email, password = :password WHERE id = :id");
        $insert->execute(array(
            ":email" => $_SESSION["hod_email"],
            ":password" => $_SESSION["hod_pass"],
            ":id" => $_SESSION["id"]
        ));
        $auth_success = true;
        session_unset();
        session_destroy();
        header("location:login.php");
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login Authentication | GPN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <style>
        .wrong .bi-check-lg {
            display: none;
        }

        .good .bi-x-lg {
            display: none;
        }
    </style>

</head>

<body>
    <div class="container pt-4">
        <div class="d-flex justify-content-center">

            <div class="d-flex justify-content-center">
                <a href="#" class="d-flex align-items-center w-50">
                    <img src="assets/img/logo.png" alt="">
                    <span class="d-lg-block"><img src="../framework-assets/img/logo_entire.png" alt="" class="img-fluid rounded bordered"></span>
                </a>
            </div>

        </div>
    </div>



    <div class="container col-xl-10 col-xxl-8 px-4">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="card col-md-10 mx-auto col-lg-5">

                <div class="d-flex justify-content-center py-4">
                    <a href="#" class="logo d-flex align-items-center w-auto">
                        <span class="d-lg-block">Login Authentication</span>
                    </a>

                </div>
                <?php
                if ($user_auth_error) {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Error! The user is already authenticated.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                }

                if ($login_details_error) {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Invalid Credentials! Please enter the valid user Id.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
                }

                if ($email_auth_error) {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error ! Email is already authenticated with another user account.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
                }
                if ($auth_success) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success ! Email is now authenticated with your user account.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
                }
                if ($auth_fail) {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error ! Some erroe occured.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
                }
                ?>

                <form class="row g-3 needs-validation mt-2 mb-2" novalidate action="login_auth.php" method="post">
                    <div class="col-md-12">
                        <label for="user id" class="form-label">User ID</label>
                        <div class="input-group has-validation">
                            <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                            <input type="number" class="form-control" id="id" name="id" placeholder="User ID" aria-describedby="inputGroupPrepend" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please enter valid ID.
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email address" aria-describedby="inputGroupPrepend" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please enter valid email.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password-input" name="password" placeholder="set a strong password" required>
                        <i class="bi bi-eye-slash text-start pt-2" id="togglePassword" style=" margin-left: -30px; cursor: pointer;"></i>
                        <div class="invalid-feedback">
                            Please provide a valid password.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="alert px-4 py-3 mb-0 d-none alert-warning" role="alert" data-mdb-color="warning" id="password-alert">
                        <ul class="list-unstyled mb-0">
                            <li class="requirements leng">
                                <i class="bi bi-check-lg text-success me-2"></i>
                                <i class="bi bi-x-lg text-danger me-3"></i>
                                Password must have at least 8 chars
                            </li>
                            <li class="requirements big-letter">
                                <i class="bi bi-check-lg text-success me-2"></i>
                                <i class="bi bi-x-lg text-danger me-3"></i>
                                Password must have at least 1 big letter.
                            </li>
                            <li class="requirements num">
                                <i class="bi bi-check-lg text-success me-2"></i>
                                <i class="bi bi-x-lg text-danger me-3"></i>
                                Password must have at least 1 number.
                            </li>
                            <li class="requirements special-char">
                                <i class="bi bi-check-lg text-success me-2"></i>
                                <i class="bi bi-x-lg text-danger me-3"></i>
                                password must have at least 1 special char.
                            </li>
                        </ul>
                    </div>

                    <!-- <button class="btn btn-danger mx-2 col-lg-4" type="submit">reset</button> -->
                    <div class="col-md-12">
                        <button class="btn btn-primary w-100" type="submit" id="authenticate" name="authenticate">
                            Authenticate Email
                        </button>
                    </div>

                    <?php
                    if ($redirect_to_index == true) {
                        echo '<script type="text/javascript">
                        location.replace("../index.php"); </script>';
                    } else {
                        echo '<div align="center" class="d-none">' . $login_button . '</div>';
                    }
                    // echo $login_button;
                    ?>



                    <div class="col-md-12 mb-4">
                        <p class="small mb-0">Already Authenticated? <a href="login.php">Login now</a></p>
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
    <script>
        addEventListener("DOMContentLoaded", (event) => {
            const password = document.getElementById("password-input");
            const passwordAlert = document.getElementById("password-alert");
            const requirements = document.querySelectorAll(".requirements");
            let lengBoolean, bigLetterBoolean, numBoolean, specialCharBoolean;
            let leng = document.querySelector(".leng");
            let bigLetter = document.querySelector(".big-letter");
            let num = document.querySelector(".num");
            let specialChar = document.querySelector(".special-char");
            const specialChars = "!@#$%^&*()-_=+[{]}\\|;:'\",<.>/?`~";
            const numbers = "0123456789";

            requirements.forEach((element) => element.classList.add("wrong"));

            password.addEventListener("focus", () => {
                passwordAlert.classList.remove("d-none");
                if (!password.classList.contains("is-valid")) {
                    password.classList.add("is-invalid");
                }
            });

            password.addEventListener("input", () => {
                let value = password.value;
                if (value.length < 8) {
                    lengBoolean = false;
                } else if (value.length > 7) {
                    lengBoolean = true;
                }

                if (value.toLowerCase() == value) {
                    bigLetterBoolean = false;
                } else {
                    bigLetterBoolean = true;
                }

                numBoolean = false;
                for (let i = 0; i < value.length; i++) {
                    for (let j = 0; j < numbers.length; j++) {
                        if (value[i] == numbers[j]) {
                            numBoolean = true;
                        }
                    }
                }

                specialCharBoolean = false;
                for (let i = 0; i < value.length; i++) {
                    for (let j = 0; j < specialChars.length; j++) {
                        if (value[i] == specialChars[j]) {
                            specialCharBoolean = true;
                        }
                    }
                }

                if (lengBoolean == true && bigLetterBoolean == true && numBoolean == true && specialCharBoolean == true) {
                    password.classList.remove("is-invalid");
                    password.classList.add("is-valid");

                    requirements.forEach((element) => {
                        element.classList.remove("wrong");
                        element.classList.add("good");
                    });
                    passwordAlert.classList.remove("alert-warning");
                    passwordAlert.classList.add("alert-success");
                } else {
                    password.classList.remove("is-valid");
                    password.classList.add("is-invalid");

                    passwordAlert.classList.add("alert-warning");
                    passwordAlert.classList.remove("alert-success");

                    if (lengBoolean == false) {
                        leng.classList.add("wrong");
                        leng.classList.remove("good");
                    } else {
                        leng.classList.add("good");
                        leng.classList.remove("wrong");
                    }

                    if (bigLetterBoolean == false) {
                        bigLetter.classList.add("wrong");
                        bigLetter.classList.remove("good");
                    } else {
                        bigLetter.classList.add("good");
                        bigLetter.classList.remove("wrong");
                    }

                    if (numBoolean == false) {
                        num.classList.add("wrong");
                        num.classList.remove("good");
                    } else {
                        num.classList.add("good");
                        num.classList.remove("wrong");
                    }

                    if (specialCharBoolean == false) {
                        specialChar.classList.add("wrong");
                        specialChar.classList.remove("good");
                    } else {
                        specialChar.classList.add("good");
                        specialChar.classList.remove("wrong");
                    }
                }
            });

            password.addEventListener("blur", () => {
                passwordAlert.classList.add("d-none");
            });
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

    <?php
    if ($redirect_to_google == true) {
        echo '<script type="text/javascript">
            document.getElementById("GoogleButton").click(); </script>';
    }
    ?>

</body>

</html>