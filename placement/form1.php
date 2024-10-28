<?php
error_reporting(0);

include "../admin/conn.php";

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
    }
    if (empty($_POST['lname'])) {
      $errors[] = 'last name is required.';
    }
    if (empty($_POST['dob'])) {
      $errors[] = 'dob is required.';
    }
    if (empty($_POST['roll'])) {
      $errors[] = 'rollno is required.';
    }
    if (empty($_POST['department'])) {
      $errors[] = 'department name is required.';
    }
    if (empty($_POST['mno'])) {
      $errors[] = 'Mobile no is required.';
    }
    if (empty($_POST['address'])) {
      $errors[] = 'address is required.';
    }
    if (empty($_POST['mno'])) {
      $errors[] = 'Mobile no is required.';
    }
    if (empty($_POST['email'])) {
      $errors[] = 'email is required.';
    }
    if (empty($_POST['city'])) {
      $errors[] = 'city is required.';
    }
    if (empty($_POST['compname'])) {
      $errors[] = 'company name is required.';
    }
    if (empty($_POST['ssc'])) {
      $errors[] = 'ssc is required.';
    }
    if (empty($_POST['sem1'])) {
      $errors[] = 'sem1 is required.';
    }
    if (empty($_POST['sem2'])) {
      $errors[] = 'sem2 is required.';
    }
    if (empty($_POST['sem3'])) {
      $errors[] = 'sem3 is required.';
    }
    if (empty($_POST['sem4'])) {
      $errors[] = 'sem4 is required.';
    }
    if (empty($_POST['sem5'])) {
      $errors[] = 'sem5 is required.';
    }
    if (empty($_POST['gender'])) {
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



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style1.css">
  <title>Form</title>

  <!-- Favicons -->
  <link href="../navbar-assets/img/logofav.png" rel="icon">
  <link href="../navbar-assets/img/apple-touch-icon.png" rel="apple-touch-icon">


</head>

<body>
  <div class="container-fluid text-dark p-4">
    <header class="text-center">
      <h1>Placement Form</h1>
    </header>
  </div>
  <section class="container my-2 w-50 text-dark mb-4 shadow-lg p-4">
    <form class="row g-3" action="form1.php" method="POST" enctype="multipart/form-data">
      <div class="col-md-4">
        <label for="inputName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstaname" name="fname" required>
      </div>
      <div class="col-md-4">
        <label for="inputMiddleName" class="form-label">Middle Name</label>
        <input type="text" class="form-control" id="middlename" name="mname" required>
      </div>
      <div class="col-md-4">
        <label for="inputLastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lname" required>
      </div>
      <div class="col-md-6">
        <label for="inputDOB" class="form-label">DOB</label>
        <input type="date" class="form-control" id="dob" name="dob" required>
      </div>
      <div class="col-md-6">
        <label for="inputRollNo" class="form-label">Roll No</label>
        <input type="interger" class="form-control" id="rollno" name="roll" required>
      </div>
      <div class="col-md-6">
        <label for="inputDepartment" class="form-label">Department</label>
        <select class="form-select" aria-label="Default select example" name="department" id="department" required>
          <option selected>Choose Department</option>
          <option value="CE">Civil Engineering</option>
          <option value="ME">Mechanical Engineering</option>
          <option value="EE">Electrical Engineering</option>
          <option value="IF">Information Technology</option>
          <option value="CM">Computer Engineering</option>
          <option value="ENTC">Electronics And Telecommunication Engineering</option>
          <option value="PE">Polymer Engineering</option>
          <option value="DDGM">Dress Design And Garment Engineering</option>
          <option value="IDD">Interior Designing Engineering</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="inputNumber" class="form-label">Mobile Number</label>
        <input type="interger" class="form-control" id="mobile" name="mno" required>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" required>
      </div>
      <div class="mb-3">
        <label for="inputEmail" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" required>
      </div>

      <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="city" name="city" required>
      </div>

      <div class="col-md-6">

        <label for="input5sem" class="form-label">Company Name</label>
        <input type="interger" class="form-control" id="companyname" name="compname" required>

      </div>

      <div class="col-md-6">
        <label for="inputSSC" class="form-label">SSC Percentage </label>
        <input type="interger" class="form-control" id="ssc" name="ssc" required>
      </div>

      <div class="col-md-6">
        <label for="inputHSC" class="form-label">HSC Percentage</label> <span> (enter NA if not applicable)</span>
        <input type="interger" class="form-control" id="hsc" name="hsc">
      </div>

      <div class="col-md-6">
        <label for="input1sem" class="form-label">1st Sem Percentage</label>
        <input type="interger" class="form-control" id="sem1" name="sem1" required>

      </div>
      <div class="col-md-6">

        <label for="input2sem" class="form-label">2nd Sem Percentage</label>
        <input type="interger" class="form-control" id="sem2" name="sem2" required>

      </div>
      <div class="col-md-6">

        <label for="input3sem" class="form-label">3rd Sem Percentage</label>
        <input type="interger" class="form-control" id="sem3" name="sem3" required>

      </div>
      <div class="col-md-6">

        <label for="input4sem" class="form-label">4th Sem Percentage</label>
        <input type="interger" class="form-control" id="sem4" name="sem4" required>

      </div>
      <div class="col-md-6">

        <label for="input5sem" class="form-label">5th Sem Percentage</label>
        <input type="interger" class="form-control" id="sem5" name="sem5" required>

      </div>

      <div class="col-md-6">
        <label for="inputGender" class="form-label">Gender</label> <br>
        <div class="form-check form-check-inline  " required>
          <label class="radio-inline px-2">
            <input type="radio" name="gender" value="Male">Male
          </label>

          <label class="radio-inline px-2">
            <input type="radio" name="gender" value="Female">Female
          </label>

          <label class="radio-inline px-2">
            <input type="radio" name="gender" value="Female">Other
          </label>
        </div>
      </div>
      <div class="col-md-6">

        <div class="col-md-12 ">
          <label for="inputDiploma" class="form-label">Upload CV</label>
          <input type="file" class="form-control" name="uploadcv" required>
        </div>


        <div class="col-md-12 px-2 p-4 ">
          <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
        </div>
    </form>
  </section>

  <script>
    $('.alert').alert()

    function closeAlert() {
      // document.getElementById("myAlert").classList.remove("show");
      window.location = "placement.php";
    }
  </script>
</body>

</html>