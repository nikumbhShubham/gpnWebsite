<?php

include('dbconnect.php');
// $con = mysqli_connect("localhost", "root", "", "gpnweb");
$form = true;

// if (mysqli_connect_error()) {

//     echo "cannot connect to database";
//     exit();
// } else {
//     // echo "connected";
//     echo "<script>console.log(connnected)</script>";
// }


// print_r($_FILES["uploadcv"] );
// echo $folder;

if (isset($_POST["submit"])) {



    $filename = $_FILES["uploadcv"]["name"];
    $tempname = $_FILES["uploadcv"]["tmp_name"];
    $folder = "cv/" . $filename;
    move_uploaded_file($tempname, $folder);


    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "pdf") {
        $uploadOk = 1;
        // echo "ok format";
    } else {
        $_SESSION["file_format_error"] = true;
        $uploadOk = 0;
        header("location:form1.php");
    }
    if ($uploadOk != 0) {
        $errors = [];

        if (empty($_POST['fname'])) {
          $errors[] = 'First name is required.';
        }
      
        if (empty($_POST['mname'])) {
            $errors[] = 'Middle name is required.';
          }   if (empty($_POST['lname'])) {
            $errors[] = 'last name is required.';
          }   if (empty($_POST['dob'])) {
            $errors[] = 'dob is required.';
          }   if (empty($_POST['roll'])) {
            $errors[] = 'rollno is required.';
          }   if (empty($_POST['department'])) {
            $errors[] = 'department name is required.';
          }   if (empty($_POST['mno'])) {
            $errors[] = 'Mobile no is required.';
          } if (empty($_POST['address'])) {
            $errors[] = 'address is required.';
          } if (empty($_POST['mno'])) {
            $errors[] = 'Mobile no is required.';
          } if (empty($_POST['email'])) {
            $errors[] = 'email is required.';
          }if (empty($_POST['city'])) {
            $errors[] = 'city is required.';
          }if (empty($_POST['compname'])) {
            $errors[] = 'company name is required.';
          }if (empty($_POST['ssc'])) {
            $errors[] = 'ssc is required.';
          }if (empty($_POST['sem1'])) {
            $errors[] = 'sem1 is required.';
          }if (empty($_POST['sem2'])) {
            $errors[] = 'sem2 is required.';
          }if (empty($_POST['sem3'])) {
            $errors[] = 'sem3 is required.';
          }if (empty($_POST['sem4'])) {
            $errors[] = 'sem4 is required.';
          }if (empty($_POST['sem5'])) {
            $errors[] = 'sem5 is required.';
          }if (empty($_POST['gender'])) {
            $errors[] = 'gender is required.';
          }



        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $dob = $_POST['dob'];
        $roll = $_POST['roll'];
        $department = $_POST['department'];
        $mno = $_POST['mno'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $compname = $_POST['compname'];
        $ssc = $_POST['ssc'];
        $hsc = $_POST['hsc'];
        $sem1 = $_POST['sem1'];
        $sem2 = $_POST['sem2'];
        $sem3 = $_POST['sem3'];
        $sem4 = $_POST['sem4'];
        $sem5 = $_POST['sem5'];
        $gender = $_POST['gender'];
        // $uploadcv=$_POST['uploadcv'];


        $query = "INSERT INTO `applied` ( `firstaname`, `middlename`, `lastname`, `dob`, `rollno`, `department`, `mobile`, `address`, `email`, `city`, `companyname`, `ssc`, `hsc`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `gender`, `cv`)
     VALUES ( ' $fname', '$mname', '$lname', '$dob', ' $roll', '$department', '$mno', '$address', '$email', '$city', '$compname', ' $ssc', ' $hsc', '$sem1', '$sem2', '$sem3', '$sem4', '$sem5', '$gender', ' $folder');";



        $result = mysqli_query($con, $query);

        if ($result) {
            // header("Location:");
            // echo "inserted";
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your apllication has been submitted successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="closeAlert()"></button>
          </div>';

        } else {
            // echo "not inserted";
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Failed!</strong> Your apllication has not been submitted successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="closeAlert()"></button>
          </div>';
        }



    }

}
?>

<script>
    $('.alert').alert()
    function closeAlert() {
        // document.getElementById("myAlert").classList.remove("show");
        window.location = "placement.php";
    }

</script>

<!-- <th scope='row'>" . $Sno . "</th>
                                <td>" . $row['firstaname'] . "</td>
                                <td>" . $row['middlename'] . "</td>
                                <td>" . $row['lastname'] . "</td>
                                <td>" . $row['dob'] . "</td>
                                <td>" . $row['rollno'] . "</td>
                                <td>" . $row['department'] . "</td>
                                <td>" . $row['mobile'] . "</td>
                                <td>" . $row['address'] . "</td>
                                <td>" . $row['email'] . "</td>
                                <td>" . $row['companyname'] . "</td>
                                <td>" . $row['ssc'] . "</td>
                                <td>" . $row['hsc'] . "</td>
                                <td>" . $row['sem1'] . "</td>
                                <td>" . $row['sem2'] . "</td>
                                <td>" . $row['sem3'] . "</td>
                                <td>" . $row['sem4'] . "</td>
                                <td>" . $row['sem5'] . "</td>
                                <td>" . $row['gender'] . "</td> -->