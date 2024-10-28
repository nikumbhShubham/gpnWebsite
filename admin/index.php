<?php
error_reporting(0);
include 'conn.php';
session_start();
// $admin = $conn->prepare("SELECT * FROM staff_admin WHERE dept = :uname");
// $admin->execute([":uname" => $_SESSION["uname"]]);

// if ($users = $admin->fetch(PDO::FETCH_OBJ)) {
//   $_SESSION["dept_id"] = $users->id;
// }

if (isset($_POST["department"])) {
  $_SESSION["dept_id"] = $_POST["department"];
} else if (isset($_SESSION["uname"])) {
  $admin = $conn->prepare("SELECT * FROM staff_admin WHERE dept = :uname");
  $admin->execute([":uname" => $_SESSION["uname"]]);

  if ($users = $admin->fetch(PDO::FETCH_OBJ)) {
    $_SESSION["dept_id"] = $users->id;
  }
}


if (isset($_GET["srn"])) {
  $_SESSION["timetable_srn"] = $_GET["srn"];
}
if (isset($_GET["ind_srn"])) {
  $_SESSION["ind_srn"] = $_GET["ind_srn"];
}

if (isset($_GET["result_analysis_srn"])) {
  $_SESSION["result_analysis_srn"] = $_GET["result_analysis_srn"];
}

if (isset($_GET["notes_srn"])) {
  $_SESSION["notes_srn"] = $_GET["notes_srn"];
}

if (isset($_GET["paper_srn"])) {
  $_SESSION["paper_srn"] = $_GET["paper_srn"];
}

if (isset($_GET["video_srn"])) {
  $_SESSION["video_srn"] = $_GET["video_srn"];
}

if (isset($_GET["academic_performance_srn"])) {
  $_SESSION["academic_performance_srn"] = $_GET["academic_performance_srn"];
}
if (isset($_GET["notice_srn"])) {
  $_SESSION["notice_srn"] = $_GET["notice_srn"];
}

if (isset($_GET["staff_ach_srn"])) {
  $_SESSION["staff_ach_srn"] = $_GET["staff_ach_srn"];
}
if (isset($_GET["mou_srn"])) {
  $_SESSION["mou_srn"] = $_GET["mou_srn"];
}
if (isset($_GET["achad_ach_srn"])) {
  $_SESSION["achad_ach_srn"] = $_GET["achad_ach_srn"];
}
if (isset($_GET["other_ach_srn"])) {
  $_SESSION["other_ach_srn"] = $_GET["other_ach_srn"];
}
if (isset($_GET["faculty_srn"])) {
  $_SESSION["faculty_srn"] = $_GET["faculty_srn"];
}

if (isset($_GET["new_admin_srn"])) {
  $_SESSION["new_admin_srn"] = $_GET["new_admin_srn"];
}

if (isset($_GET["dept_srn"])) {
  $_SESSION["dept_srn"] = $_GET["dept_srn"];
}

if (isset($_GET["carousel_srn"])) {
  $_SESSION["carousel_srn"] = $_GET["carousel_srn"];
}

if (isset($_GET["scholarship_srn"])) {
  $_SESSION["scholarship_srn"] = $_GET["scholarship_srn"];
}

if (isset($_GET["form_srn"])) {
  $_SESSION["form_srn"] = $_GET["form_srn"];
}

if (isset($_GET["head_srn"])) {
  $_SESSION["head_srn"] = $_GET["head_srn"];
}

if (isset($_GET["prn_desk_srn"])) {
  $_SESSION["prn_desk_srn"] = $_GET["prn_desk_srn"];
}

if (isset($_GET["ac_srn"])) {
  $_SESSION["ac_id"] = $_GET["ac_srn"];
}

if (isset($_GET["program_srn"])) {
  $_SESSION["program_id"] = $_GET["program_srn"];
}




if (isset($_GET["srn_d"])) {
  $_SESSION["timetable_srn_d"] = $_GET["srn_d"];
}

if (isset($_GET["ac_srn_d"])) {
  $_SESSION["ac_srn_d"] = $_GET["ac_srn_d"];
}
if (isset($_GET["ind_srn_d"])) {
  $_SESSION["ind_srn_d"] = $_GET["ind_srn_d"];
}

if (isset($_GET["result_analysis_srn_d"])) {
  $_SESSION["result_analysis_srn_d"] = $_GET["result_analysis_srn_d"];
}

if (isset($_GET["notes_srn_d"])) {
  $_SESSION["notes_srn_d"] = $_GET["notes_srn_d"];
}

if (isset($_GET["paper_srn_d"])) {
  $_SESSION["paper_srn_d"] = $_GET["paper_srn_d"];
}

if (isset($_GET["video_srn_d"])) {
  $_SESSION["video_srn_d"] = $_GET["video_srn_d"];
}

if (isset($_GET["academic_performance_srn_d"])) {
  $_SESSION["academic_performance_srn_d"] = $_GET["academic_performance_srn_d"];
}
if (isset($_GET["notice_srn_d"])) {
  $_SESSION["notice_srn_d"] = $_GET["notice_srn_d"];
}

if (isset($_GET["staff_ach_id"])) {
  $_SESSION["staff_ach_id"] = $_GET["staff_ach_id"];
}
if (isset($_GET["mou_id"])) {
  $_SESSION["mou_id"] = $_GET["mou_id"];
}
if (isset($_GET["achad_ach_id"])) {
  $_SESSION["achad_ach_id"] = $_GET["achad_ach_id"];
}
if (isset($_GET["other_ach_id"])) {
  $_SESSION["other_ach_id"] = $_GET["other_ach_id"];
}
if (isset($_GET["faculty_id"])) {
  $_SESSION["faculty_id"] = $_GET["faculty_id"];
}

if (isset($_GET["new_admin_srn_d"])) {
  $_SESSION["new_admin_srn_d"] = $_GET["new_admin_srn_d"];
}

if (isset($_GET["dept_srn_d"])) {
  $_SESSION["dept_srn_d"] = $_GET["dept_srn_d"];
}

if (isset($_GET["carousel_srn_d"])) {
  $_SESSION["carousel_srn_d"] = $_GET["carousel_srn_d"];
}

if (isset($_GET["scholarship_srn_d"])) {
  $_SESSION["scholarship_srn_d"] = $_GET["scholarship_srn_d"];
}

if (isset($_GET["form_srn_d"])) {
  $_SESSION["form_srn_d"] = $_GET["form_srn_d"];
}

if (isset($_GET["head_srn_d"])) {
  $_SESSION["head_srn_d"] = $_GET["head_srn_d"];
}

if (isset($_GET["grievances_d"])) {
  $_SESSION["grievances_d"] = $_GET["grievances_d"];
}

if (isset($_GET["delete_all_notice"])) {
  $_SESSION["delete_all_notice"] = $_GET["delete_all_notice"];
}


if (isset($_GET["aclose"]) == true) {
  unset($_SESSION["new_admin_srn_d"]);
  unset($_SESSION["dept_srn_d"]);
  unset($_SESSION["carousel_srn_d"]);
  unset($_SESSION["scholarship_srn_d"]);
  unset($_SESSION["form_srn_d"]);
  unset($_SESSION["head_srn_d"]);
  unset($_SESSION["grievances_d"]);
  unset($_SESSION["delete_all_notice"]);
}

if (isset($_GET["dclose"]) == true) {
  unset($_SESSION["srn_d"]);
  unset($_SESSION["ind_srn_d"]);
  unset($_SESSION["result_analysis_srn_d"]);
  unset($_SESSION["notes_srn_d"]);
  unset($_SESSION["paper_srn_d"]);
  unset($_SESSION["video_srn_d"]);
  unset($_SESSION["academic_performance_srn_d"]);
  unset($_SESSION["notice_srn_d"]);
  unset($_SESSION["staff_ach_id"]);
  unset($_SESSION["mou_id"]);
  unset($_SESSION["achad_ach_id"]);
  unset($_SESSION["other_ach_id"]);
  unset($_SESSION["faculty_id"]);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard | GPN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../framework-assets/img/logo.jpg" rel="icon">
  <link href="../framework-assets/img/logo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>


  <main id="main" class="main">
    <!-- Button trigger modal -->

    <!--password Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Set password to your account</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="insert.php" method="POST" class="row g-3 needs-validation mt-2 mb-2" novalidate>

              <div class="col-md-12">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please enter your password.
                </div>
              </div>

              <div class="col-md-12">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please Confirm your password.
                </div>
              </div>

              <!-- <button class="btn btn-danger mx-2 col-lg-4" type="submit">reset</button> -->
              <div class="col-md-12">
                <button class="btn btn-primary w-100" type="submit" id="passwordbtn" name="passwordbtn">
                  Set Password
                </button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
            <!-- <button type="button" class="btn btn-primary">Understood</button> -->
          </div>
        </div>
      </div>
    </div>

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->




    <?php

    // password alert
    if ($password_result == true) {
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-triangle me-1"></i>
      Set a password to your account <a href="" class="alert-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Setup your password now!</a>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_GET["pass_not_matched"] == "true") {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Password you entered not matched.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    //end of password alert

    //hod alert
    if ($_SESSION["hod_inserted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! New HOD added successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["hod_desk_updated"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! HOD desk updated successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["hod_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! New HOD is not added.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["hod_desk_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! HOD desk is not updated.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["hod_file_format_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! only JPG, JPEG, PNG & GIF files are allowed.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    // end of hod alert

    //timetable alert
    if ($_SESSION["timetable_updated"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Timetable updated successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["timetable_inserted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Timetable Added successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["timetable_deleted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Timetable deleted successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["timetable_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Timetable is not updated.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["timetable_insert_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Timetable is not inserted.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["timetable_delete_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Timetable is not deleted.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    // end of timetable alert

    //ind_visit alert
    if ($_SESSION["ind_inserted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Industrial Visit Added successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["ind_updated"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Industrial Visit updated successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["ind_deleted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Industrial Visit deleted successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["ind_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Industrial Visit is not inserted.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["ind_update_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Industrial Visit is not updated.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["ind_delete_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Industrial Visit is not deleted.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    //end of ind_visit

    //notice alert
    if ($_SESSION["notice_inserted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Notice Added successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["notice_updated"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Notice updated successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["notice_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Notice is not inserted.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["notice_update_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Notice is not updated.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["notice_delete_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Notice is not deleted.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["notice_deleted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Notice deleted successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["notice_date_error"] == true) {
      echo '<div class="alert alert-alert alert-dismissible fade show" role="alert">
      Error! Invalid Date.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    //end of notice alert

    //result_analysis alert
    if ($_SESSION["result_analysis_inserted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Result Analysis Added successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["result_analysis_updated"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Result Analysis updated successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["result_analysis_deleted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Result Analysis deleted successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["result_analysis_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Result Analysis is not inserted.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["result_analysis_update_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Result Analysis is not updated.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["result_analysis_delete_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Result Analysis is not deleted.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    //end of result analysis alert

    //academic ache alert
    if ($_SESSION["academic_performance_inserted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Analysis Performance Added successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["academic_performance_updated"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Analysis Performance updated successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["academic_performance_deleted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Analysis Performance deleted successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["academic_performance_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Analysis Performance is not inserted.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["academic_performance_update_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Analysis Performance is not updated.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["academic_performance_delete_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Analysis Performance is not deleted.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    //end of academic ache aert

    // basic file upload error
    if ($_SESSION["file_move_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! There was an error while uploading a file.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["file_upload_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! The new file was not uploaded.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    // end of basic file upload error


    if ($dept_added == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! New department added successfully.New department name = ' . $name . '.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($dept_not_added == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error!New deparment is not added.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    //mou alert
    if ($_SESSION["mou_add_success"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! MOU Added Succesfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($_SESSION["mou_delete_success"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! MOU Deleted Succesfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($_SESSION["mou_update_success"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! MOU Updated Succesfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    // end of mou alert

    //staff ach alert
    if ($_SESSION["staff_ach_add_success"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Staff Achievement Added Succesfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($_SESSION["staff_ach_delete_success"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Staff Achievement Deleted Succesfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($_SESSION["staff_ach_update_success"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Staff Achievement Updated Succesfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    //end of staff ach alert

    //achad ach alert
    if ($_SESSION["achad_ach_add_success"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Achademic Achievement Added Succesfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($_SESSION["achad_ach_delete_success"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Achademic Achievement Deleted Succesfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($_SESSION["achad_ach_update_success"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Achademic Achievement Updated Succesfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    //end of achad ach alert

    //other ach alert
    if ($_SESSION["other_ach_add_success"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Other Achievement Added Succesfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["other_ach_delete_success"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Other Achievement Deleted Succesfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["other_ach_update_success"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Other Achievement Updated Succesfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    //end of other ach alert

    // faculty alert
    if ($_SESSION["faculty_file_format_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! only JPG, JPEG, PNG & GIF files are allowed.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($_SESSION["faculty_add_success"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Faculty Added Successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($_SESSION["faculty_add_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Faculty is not Added.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($_SESSION["faculty_file_format_error_p"] == true) {
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      Error!  Resume is not uploaded | Only PDF or DOCX files are allowed.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($_SESSION["faculty_delete_success"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Faculty Deleted Succesfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($_SESSION["faculty_update_success"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Faculty Updated Successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($_SESSION["faculty_update_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Faculty is not Updated.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }


    //new admin alert

    if ($_SESSION["admin_created"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! New Admin User created Successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["admin_create_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Admin user not created.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["admin_exist"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Admin username already exist.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["admin_deleted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Admin user deleted successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["admin_delete_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Admin user delete error.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["admin_update_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Admin user update error.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["admin_password_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Invalid Current Password.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["admin_password_match_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Password not matched.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["admin_updated"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Admin user updated successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["dept_created"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! New Department User created Successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["dept_create_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Department user not created.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["dept_deleted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Department user deleted successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["dept_delete_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Department user delete error.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }


    if ($_SESSION["dept_update_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Department user update error.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["dept_password_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Invalid Current Password.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["dept_password_match_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Password not matched.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["dept_updated"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Department user updated successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }


    if ($_SESSION["scholarship_inserted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Scholarship added Successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["scholarship_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Scholarship  not added.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["scholarship_deleted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Scholarship deleted successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["scholarship_delete_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Scholarship delete error.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["scholarship_updated"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Scholarship updated successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["scholarship_update_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Scholarship update error.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["form_inserted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Application Form added Successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["form_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Application Form not added.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["form_deleted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Application Form deleted successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["form_delete_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Application Form delete error.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["form_updated"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Application Form updated successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["form_update_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Application Form update error.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["carousel_inserted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Carousel created Successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["carousel_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Carousel not created.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["carousel_deleted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Carousel deleted successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["carousel_delete_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Carousel delete error.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["carousel_updated"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Carousel updated successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["carousel_update_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Carousel update error.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }


    if ($_SESSION["head_inserted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! New Head created Successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["head_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! New Head not created.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["head_deleted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Head deleted successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["head_delete_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Head delete error.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["grievances_deleted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Grievances deleted successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["grievances_delete_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! grievances delete error.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["head_updated"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Head updated successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["head_update_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Head update error.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["prn_desk_updated"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! principal Desk updated successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["prn_desk_update_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Principal Desk update error.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["ac_inserted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Academic Calender Added successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($_SESSION["ac_updated"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Success! Academic Calender updated successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["ac_deleted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Academic Calender deleted successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["ac_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Academic Calender updated error.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["notes_update_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Academic Calender is not updated.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }


    if ($_SESSION["ac_delete_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Academic Calender is not deleted.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["ac_file_format_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! only PDF files are allowed.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }

    if ($_SESSION["program_updated"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Success! Program updated successfully.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }

    if ($_SESSION["program_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Error! Program updated error.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }


    //Notes alert
    if ($_SESSION["notes_inserted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Lecture Notes Added successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["notes_updated"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Lecture Notes updated successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["notes_deleted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Lecture Notes deleted successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["notes_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Lecture Notes is not inserted.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["notes_update_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Lecture Notes is not updated.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["notes_delete_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Lecture Notes is not deleted.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    //end of Notes alert


    //Paper alert
    if ($_SESSION["paper_inserted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Question Paper Added successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["paper_updated"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Question Paper updated successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["paper_deleted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Question Paper deleted successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["paper_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Question Paper is not inserted.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["paper_update_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Question Paper is not updated.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["paper_delete_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Question Paper is not deleted.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    //end of Paper alert


    //video alert
    if ($_SESSION["video_inserted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Video Lectures Added successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["video_updated"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Lecture Notes updated successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["video_deleted"] == true) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      success! Video Lectures deleted successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["video_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Video Lectures is not inserted.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["video_update_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Video Lectures is not updated.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($_SESSION["video_delete_error"] == true) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Error! Video Lectures is not deleted.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    //end of Video alert


    //end of admin alert


    if ($_SESSION["login_destination"] == "admin") {
      include 'admin.php';
      if (isset($_SESSION["dept_id"])) {
        include 'admin_d.php';
        include 'delete.php';
      }
    ?>
      <section class="section dashboard pt-4">
        <div class="row">

          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">

              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">



                  <div class="card-body">
                    <h5 class="card-title">Student </h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-mortarboard"></i>
                      </div>

                      <?php
                      $student = $conn->prepare("SELECT * FROM studmast WHERE 1");
                      $student->execute();

                      $total_student = $student->rowCount();

                      ?>
                      <div class="ps-3">
                        <h6>
                          <?php echo $total_student; ?>
                        </h6>
                        <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Sales Card -->

              <!-- Revenue Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">



                  <div class="card-body">
                    <h5 class="card-title">Faculty </h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>

                      <?php
                      $faculty = $conn->prepare("SELECT * FROM faculty WHERE 1");
                      $faculty->execute();

                      $total_faculty = $faculty->rowCount();
                      // if ($users = $student->fetch(PDO::FETCH_OBJ)) {
                      // }
                      ?>

                      <div class="ps-3">
                        <h6>
                          <?php echo $total_faculty; ?>
                        </h6>
                        <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Revenue Card -->

              <!-- Customers Card -->
              <div class="col-xxl-4 col-xl-12">

                <div class="card info-card customers-card">

                  <div class="card-body">
                    <h5 class="card-title">Courses</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-book-half"></i>
                      </div>
                      <?php
                      $course = $conn->prepare("SELECT * FROM coursema WHERE 1");
                      $course->execute();

                      $total_course = $course->rowCount();
                      ?>
                      <div class="ps-3">
                        <h6>
                          <?php echo $total_course; ?>
                        </h6>
                        <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->

                      </div>
                    </div>

                  </div>
                </div>

              </div><!-- End Customers Card -->


              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Program Offered</h5>

                    <?php
                    $program = $conn->prepare("SELECT * FROM programs WHERE 1");
                    $program->execute();
                    $labels = "[";
                    $data = "[";
                    // $programs = array();
                    // $intake = array();
                    while ($rows = $program->fetch(PDO::FETCH_OBJ)) {
                      $labels .= "'$rows->name',";
                      $data .= "$rows->intake,";
                    }

                    $labels .= " ]";
                    $data .= " ]";




                    ?>
                    <!-- Pie Chart -->
                    <canvas id="pieChart" style="max-height: 400px;"></canvas>
                    <script>
                      document.addEventListener("DOMContentLoaded", () => {
                        new Chart(document.querySelector('#pieChart'), {
                          type: 'pie',
                          data: {
                            labels: <?php echo $labels ?>,
                            datasets: [{
                              label: 'Intake',
                              data: <?php echo $data ?>,
                              hoverOffset: 4
                            }]
                          }
                        });
                      });
                    </script>
                    <!-- End Pie CHart -->

                  </div>
                </div>
              </div>




            </div>
          </div><!-- End Left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-4">

            <!-- student Analysis -->
            <div class="card">

              <div class="card-body pb-0">
                <h5 class="card-title">Student Analysis <span>| Today</span></h5>

                <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                <?php
                $bstudent = $conn->prepare("SELECT * FROM studmast WHERE s_sex = 'M'");
                $bstudent->execute();
                $total_boys = $bstudent->rowCount();

                $gstudent = $conn->prepare("SELECT * FROM studmast WHERE s_sex = 'F'");
                $gstudent->execute();
                $total_girls = $gstudent->rowCount();


                ?>
                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    echarts.init(document.querySelector("#trafficChart")).setOption({
                      tooltip: {
                        trigger: 'item'
                      },
                      legend: {
                        top: '5%',
                        left: 'center'
                      },
                      series: [{
                        name: 'Analysis',
                        type: 'pie',
                        radius: ['40%', '70%'],
                        avoidLabelOverlap: false,
                        label: {
                          show: false,
                          position: 'center'
                        },
                        emphasis: {
                          label: {
                            show: true,
                            fontSize: '18',
                            fontWeight: 'bold'
                          }
                        },
                        labelLine: {
                          show: false
                        },
                        data: [{
                            value: <?php echo $total_boys; ?>,
                            name: 'Boys'
                          },
                          {
                            value: <?php echo $total_girls; ?>,
                            name: 'Girls'
                          }

                        ]
                      }]
                    });
                  });
                </script>

              </div>
            </div>
            <!-- End student Analysis -->


          </div><!-- End Right side columns -->


        </div>
        </div>
      </section>
    <?php
      // echo "user: " . $users->dept;
    }
    if ($users->dept) {
      include 'admin_d.php';
      include 'delete.php';
    ?>
      <section class="section dashboard pt-4">
        <div class="row">

          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">

              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">



                  <div class="card-body">
                    <h5 class="card-title">Student </h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-mortarboard"></i>
                      </div>

                      <?php
                      $student = $conn->prepare("SELECT * FROM studmast WHERE  s_program = '$users->dept'");
                      $student->execute();

                      $total_student = $student->rowCount();

                      ?>
                      <div class="ps-3">
                        <h6>
                          <?php echo $total_student; ?>
                        </h6>
                        <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Sales Card -->

              <!-- Revenue Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">



                  <div class="card-body">
                    <h5 class="card-title">Faculty </h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>

                      <?php
                      $faculty = $conn->prepare("SELECT * FROM faculty WHERE dept_id = :id");
                      $faculty->execute(
                        array(
                          ":id" => $_SESSION["dept_id"]
                        )
                      );

                      $total_faculty = $faculty->rowCount();
                      // if ($users = $student->fetch(PDO::FETCH_OBJ)) {
                      // }
                      ?>

                      <div class="ps-3">
                        <h6>
                          <?php echo $total_faculty; ?>
                        </h6>
                        <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Revenue Card -->

              <!-- Customers Card -->
              <div class="col-xxl-4 col-xl-12">

                <div class="card info-card customers-card">

                  <div class="card-body">
                    <h5 class="card-title">Courses</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-book-half"></i>
                      </div>
                      <?php
                      $course = $conn->prepare("SELECT * FROM coursema WHERE prog = '$users->dept'");
                      $course->execute();

                      $total_course = $course->rowCount();
                      ?>
                      <div class="ps-3">
                        <h6>
                          <?php echo $total_course; ?>
                        </h6>
                        <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->

                      </div>
                    </div>

                  </div>
                </div>

              </div><!-- End Customers Card -->



            </div>
          </div><!-- End Left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-4">

            <!-- student Analysis -->
            <div class="card">

              <div class="card-body pb-0">
                <h5 class="card-title">Student Analysis <span>| Today</span></h5>

                <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                <?php
                $bstudent = $conn->prepare("SELECT * FROM studmast WHERE s_sex = 'M' and s_program = '$users->dept'");
                $bstudent->execute();
                $total_boys = $bstudent->rowCount();

                $gstudent = $conn->prepare("SELECT * FROM studmast WHERE s_sex = 'F' and s_program = '$users->dept'");
                $gstudent->execute();
                $total_girls = $gstudent->rowCount();


                ?>
                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    echarts.init(document.querySelector("#trafficChart")).setOption({
                      tooltip: {
                        trigger: 'item'
                      },
                      legend: {
                        top: '5%',
                        left: 'center'
                      },
                      series: [{
                        name: 'Analysis',
                        type: 'pie',
                        radius: ['40%', '70%'],
                        avoidLabelOverlap: false,
                        label: {
                          show: false,
                          position: 'center'
                        },
                        emphasis: {
                          label: {
                            show: true,
                            fontSize: '18',
                            fontWeight: 'bold'
                          }
                        },
                        labelLine: {
                          show: false
                        },
                        data: [{
                            value: <?php echo $total_boys; ?>,
                            name: 'Boys'
                          },
                          {
                            value: <?php echo $total_girls; ?>,
                            name: 'Girls'
                          }

                        ]
                      }]
                    });
                  });
                </script>

              </div>
            </div>
            <!-- End student Analysis -->





          </div><!-- End Right side columns -->


        </div>
        </div>
      </section>
    <?php

    }


    ?>





  </main><!-- End #main -->


  <div style="margin-top: 15vh;">

  </div>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer m-0 fixed-bottom bg-white">
    <div class="copyright">
      <!-- <?php
            $year = date("Y");
            echo $year;
            ?> &copy; Copyright <strong><span>Government Polytechnic, Nashik.</span></strong> All Rights Reserved. -->
      <div class="credits text-center">
        Designed & Developed by <a href="mailto:adityagawali044@gmail.com">Aditya Gawali </a> and <a href="mailto:patel.krishna.t@gmail.com ">Krishna Patel </a> (Information Technology 2020-23)</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



  <?Php

  unset($_SESSION["hod_inserted"]);
  unset($_SESSION["hod_error"]);
  unset($_SESSION["hod_desk_updated"]);
  unset($_SESSION["hod_desk_error"]);
  unset($_SESSION["hod_file_format_error"]);
  unset($_SESSION["hod_file_exist_error"]);

  unset($_SESSION["file_move_error"]);
  unset($_SESSION["file_upload_error"]);

  unset($_SESSION["timetable_file_format_error"]);
  unset($_SESSION["timetable_error"]);
  unset($_SESSION["timetable_updated"]);
  unset($_SESSION["timetable_deleted"]);
  unset($_SESSION["timetable_delete_error"]);
  unset($_SESSION["timetable_inserted"]);
  unset($_SESSION["timetable_insert_error"]);

  unset($_SESSION["ind_inserted"]);
  unset($_SESSION["ind_error"]);
  unset($_SESSION["ind_updated"]);
  unset($_SESSION["ind_update_error"]);
  unset($_SESSION["ind_deleted"]);
  unset($_SESSION["ind_delete_error"]);

  unset($_SESSION["result_analysis_inserted"]);
  unset($_SESSION["result_analysis_error"]);
  unset($_SESSION["result_analysis_updated"]);
  unset($_SESSION["result_analysis_update_error"]);
  unset($_SESSION["result_analysis_deleted"]);
  unset($_SESSION["result_analysis_delete_error"]);
  unset($_SESSION["result_analysis_inserted"]);

  unset($_SESSION["notes_inserted"]);
  unset($_SESSION["notes_error"]);
  unset($_SESSION["notes_updated"]);
  unset($_SESSION["notes_update_error"]);
  unset($_SESSION["notes_deleted"]);
  unset($_SESSION["notes_delete_error"]);
  unset($_SESSION["notes_inserted"]);

  unset($_SESSION["paper_inserted"]);
  unset($_SESSION["paper_error"]);
  unset($_SESSION["paper_updated"]);
  unset($_SESSION["paper_update_error"]);
  unset($_SESSION["paper_deleted"]);
  unset($_SESSION["paper_delete_error"]);
  unset($_SESSION["paper_inserted"]);

  unset($_SESSION["video_inserted"]);
  unset($_SESSION["video_error"]);
  unset($_SESSION["video_updated"]);
  unset($_SESSION["video_update_error"]);
  unset($_SESSION["video_deleted"]);
  unset($_SESSION["video_delete_error"]);
  unset($_SESSION["video_inserted"]);

  unset($_SESSION["academic_performance_inserted"]);
  unset($_SESSION["academic_performance_error"]);
  unset($_SESSION["academic_performance_updated"]);
  unset($_SESSION["academic_performance_update_error"]);
  unset($_SESSION["academic_performance_deleted"]);
  unset($_SESSION["academic_performance_delete_error"]);

  unset($_SESSION["notice_inserted"]);
  unset($_SESSION["notice_error"]);
  unset($_SESSION["notice_updated"]);
  unset($_SESSION["notice_update_error"]);
  unset($_SESSION["notice_deleted"]);
  unset($_SESSION["notice_delete_error"]);
  unset($_SESSION["notice_date_error"]);


  unset($_SESSION["mou_add_success"]);
  unset($_SESSION["mou_delete_success"]);
  unset($_SESSION["mou_update_success"]);

  unset($_SESSION["staff_ach_add_success"]);
  unset($_SESSION["staff_ach_delete_success"]);
  unset($_SESSION["staff_ach_update_success"]);

  unset($_SESSION["achad_ach_add_success"]);
  unset($_SESSION["achad_ach_delete_success"]);
  unset($_SESSION["achad_ach_update_success"]);

  unset($_SESSION["other_ach_add_success"]);
  unset($_SESSION["other_ach_delete_success"]);
  unset($_SESSION["other_ach_update_success"]);

  unset($_SESSION["faculty_file_format_error"]);
  unset($_SESSION["faculty_file_format_error_p"]);
  unset($_SESSION["faculty_add_success"]);
  unset($_SESSION["faculty_add_error"]);
  unset($_SESSION["faculty_delete_success"]);
  unset($_SESSION["faculty_update_success"]);
  unset($_SESSION["faculty_update_error"]);

  unset($_SESSION["admin_created"]);
  unset($_SESSION["admin_create_error"]);
  unset($_SESSION["admin_exist"]);
  unset($_SESSION["admin_deleted"]);
  unset($_SESSION["admin_delete_error"]);
  unset($_SESSION["admin_update_error"]);
  unset($_SESSION["admin_password_error"]);
  unset($_SESSION["admin_password_match_error"]);
  unset($_SESSION["admin_updated"]);

  unset($_SESSION["dept_created"]);
  unset($_SESSION["dept_create_error"]);
  unset($_SESSION["dept_deleted"]);
  unset($_SESSION["dept_delete_error"]);
  unset($_SESSION["dept_update_error"]);
  unset($_SESSION["dept_password_error"]);
  unset($_SESSION["dept_password_match_error"]);
  unset($_SESSION["dept_updated"]);

  unset($_SESSION["carousel_inserted"]);
  unset($_SESSION["carousel_error"]);
  unset($_SESSION["carousel_deleted"]);
  unset($_SESSION["carousel_delete_error"]);
  unset($_SESSION["carousel_updated"]);
  unset($_SESSION["carousel_update_error"]);

  unset($_SESSION["scholarship_inserted"]);
  unset($_SESSION["scholarship_error"]);
  unset($_SESSION["scholarship_deleted"]);
  unset($_SESSION["scholarship_delete_error"]);
  unset($_SESSION["scholarship_updated"]);
  unset($_SESSION["scholarship_update_error"]);

  unset($_SESSION["form_inserted"]);
  unset($_SESSION["form_error"]);
  unset($_SESSION["form_deleted"]);
  unset($_SESSION["form_delete_error"]);
  unset($_SESSION["form_updated"]);
  unset($_SESSION["form_update_error"]);

  unset($_SESSION["head_inserted"]);
  unset($_SESSION["head_error"]);
  unset($_SESSION["head_deleted"]);
  unset($_SESSION["head_delete_error"]);
  unset($_SESSION["head_updated"]);
  unset($_SESSION["head_update_error"]);


  unset($_SESSION["grievances_deleted"]);
  unset($_SESSION["grievances_delete_error"]);

  unset($_SESSION["ac_inserted"]);
  unset($_SESSION["ac_error"]);
  unset($_SESSION["ac_deleted"]);
  unset($_SESSION["ac_delete_error"]);
  unset($_SESSION["ac_updated"]);
  unset($_SESSION["ac_update_error"]);
  unset($_SESSION["ac_file_format_error"]);

  unset($_SESSION["program_updated"]);
  unset($_SESSION["program_error"]);

  unset($_SESSION["prn_desk_updated"]);
  unset($_SESSION["prn_desk_update_error"]);

  ?>

</body>

</html>