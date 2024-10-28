<?php

// include "login/dashboard/dist/formconn2.php";
include('../admin/conn.php');
$form = true;

if (isset($_POST["submit"])) {



    $filename = $_FILES["oletter"]["name"];
    $tempname = $_FILES["oletter"]["tmp_name"];
    $folder = "offerletter/" . $filename;
    if (move_uploaded_file($tempname, $folder)) {
        echo "
        <script>console.log('done');</script>";
    }


    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    if ($imageFileType == "jpg" || $imageFileType == "jpeg" || $imageFileType == "pdf") {
        $uploadOk = 1;
        // echo "ok format";
    } else {
        $_SESSION["file_format_error"] = true;
        $uploadOk = 0;
        header("location:form_2.php");
    }
    if ($uploadOk != 0) {
        $errors = [];

        if (empty($_POST['fname'])) {
            $errors[] = 'First name is required.';
        }

        if (empty($_POST['mname'])) {
            $errors[] = 'Middle name is required.';
        }

        // Validate other fields...
        if (empty($_POST['lname'])) {
            $errors[] = 'last name is required.';
        }
        if (empty($_POST['roll'])) {
            $errors[] = 'roll no is required.';
        }
        if (empty($_POST['compname'])) {
            $errors[] = 'company name is required.';
        }
        if (empty($_POST['department'])) {
            $errors[] = 'department name is required.';
        }
        if (empty($_POST['mno'])) {
            $errors[] = 'mobile no is required.';
        }
        if (empty($_POST['email'])) {
            $errors[] = 'email is required.';
        }
        // if (empty($_POST['$folder'])) {
        //     $errors[] = ' offerletter is required.';
        // }

        if (!empty($errors)) {
            // Display errors and prevent further processing
            foreach ($errors as $error) {
                echo $error . '<br>';
            }
            exit;
        }


        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $roll = $_POST['roll'];
        $compname = $_POST['compname'];
        $department = $_POST['department'];
        $mno = $_POST['mno'];
        $email = $_POST['email'];


        $query = "INSERT INTO `offerletter` ( `firstname`, `middlename`, `lastname`, `roll`, `company`, `department`, `mno`, `email`, `offerletter`) 
        VALUES ('$fname', ' $mname', ' $lname', '$roll', ' $compname', '$department', ' $mno', ' $email', '$folder')";


        $result = mysqli_query($con, $query);

        if ($result) {
            // header("Location:");
            // echo "inserted";
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your form is submitted successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="closeAlert()"></button>
          </div>';
            // header("Location:placement.php");



        } else {
            // echo "not inserted";
            echo '<div class="alert alert-alert alert-dismissible fade show" role="alert">
            <strong>Failed !</strong> Your form is not submitted.pls contact 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="closeAlert()"></button>
          </div>';
        }
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title> Offerletter Form</title>




    <!-- Favicons -->
    <link href="../navbar-assets/img/logofav.png" rel="icon">
    <link href="../navbar-assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>

<body>
    <div class="container-fluid text-dark p-4">
        <header class="text-center">
            <h1>Upload Offerletter</h1>
        </header>
    </div>
    <section class="container my-2 w-50 text-dark mb-4 shadow-lg p-4">
        <form class="row g-3" action="form_2.php" method="POST" enctype="multipart/form-data">
            <div class="col-md-4">
                <label for="inputName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="inputName" name="fname" required>
            </div>
            <div class="col-md-4">
                <label for="inputMiddleName" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="inputMiddleName" name="mname" required>
            </div>
            <div class="col-md-4">
                <label for="inputLastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="inputLastName" name="lname" required>
            </div>

            <div class="col-md-6">
                <label for="inputRollNo" class="form-label">Roll No</label>
                <input type="interger" class="form-control" id="inputRollNo" name="roll" required>
            </div>
            <div class="col-md-6">
                <label for="inputCompany" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="inputCompany" name="compname" required>
            </div>
            <div class="col-md-6">
                <label for="inputDepartment" class="form-label">Department</label>
                <select class="form-select" aria-label="Default select example" name="department" required>
                    <option selected>Choose Department</option>
                    <option value="CE">Civil Engineering</option>
                    <option value="ME">Mechanical Engineering</option>
                    <option value="EE">Electrical Engineering</option>
                    <option value="IF">Information Technology</option>
                    <option value="CM">Computer Engineering</option>
                    <option value="ENTC">Electronic And Telecommunication Engineering</option>
                    <option value="PE">Polymer Engineering</option>
                    <option value="DDGM">Dress Design And Garment Engineering</option>
                    <option value="IDD">Interior Designing Engineering</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="inputNumber" class="form-label">Mobile Number</label>
                <input type="interger" class="form-control" id="inputNumber" name="mno" required>
            </div>

            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="name@example.com" name="email" required>
            </div>

            <div class="col-md-12 ">
                <label for="upload_OffLet" class="form-label mr-2">Upload Offer Letter (JPG or PDF format only): <label>
                        <input type="file" class="form-control" name="oletter" required>

            </div>


            <div class="col-md-12 px-2 p-4  ">
                <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
            </div>
        </form>
    </section>


    <script>
        $('.alert').alert()
        // $(".alert").alert('close')

        // Close the alert and redirecting the user to landing page
        function closeAlert() {
            // document.getElementById("myAlert").classList.remove("show");
            window.location = "placement.php";
        }
    </script>
</body>

</html>