<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - GPNAdmin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>


<?php
include('dbconnect.php');
$form = true;
// $con = mysqli_connect("localhost", "root", "", "gpnweb");

// if (mysqli_connect_error()) {

//     echo "cannot connect to database";
//     exit();
// } else {
//     // echo "connected";
//     echo "<script>console.log('connnected')</script>";
// }


// print_r($_FILES["uploadcv"] );
// echo $folder;

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



