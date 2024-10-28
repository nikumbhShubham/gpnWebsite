 <!-- admin of department  -->


 <?php
    if ($users->dept) :
    ?>
     <!-- ======= Header ======= -->
     <header id="header" class="header fixed-top d-flex align-items-center">

         <div class="d-flex align-items-center justify-content-between">
             <a href="index.php" class="logo d-flex align-items-center">
                 <!-- <img src="../framework-assets/logo_entire.png" alt=""> -->
                 <span class="d-none d-lg-block">DashBoard</span>
             </a>
             <i class="bi bi-list toggle-sidebar-btn"></i>
         </div><!-- End Logo -->

         <nav class="header-nav ms-auto">
             <ul class="d-flex align-items-center">

                 <li class="nav-item dropdown pe-3">

                     <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                         <!-- <img src="assets/img/profile-img.jpg" alt="profile" class="rounded-circle"> -->
                         <span class=" dropdown-toggle ps-2">
                             <?php
                                echo $users->dept;
                                ?>

                         </span>
                     </a><!-- End Profile Iamge Icon -->

                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                         <li class="dropdown-header">
                             <h6><?php echo $users->dept; ?></h6>
                         </li>
                         <li>
                             <hr class="dropdown-divider">
                         </li>

                         <li>
                             <a class="dropdown-item d-flex align-items-center" href="login/logout.php">
                                 <i class="bi bi-box-arrow-right"></i>
                                 <span>Sign Out</span>
                             </a>
                         </li>

                     </ul><!-- End Profile Dropdown Items -->
                 </li><!-- End Profile Nav -->

             </ul>
         </nav><!-- End Icons Navigation -->

     </header><!-- End Header -->

     <!-- ======= Sidebar ======= -->
     <aside id="sidebar" class="sidebar">

         <ul class="sidebar-nav" id="sidebar-nav">

             <li class="nav-item">
                 <a class="nav-link " href="index.php">
                     <i class="bi bi-grid"></i>
                     <span>Dashboard</span>
                 </a>
             </li><!-- End Dashboard Nav -->
             <?php
                if ($users->id == "22" || $users->id == "23" || $users->id == "24") :
                ?>
                 <ul id="forms-nav" class="nav-content">
                     <li>
                         <a href="index.php#faculty" onclick="faculty()">
                             <i class="bi bi-circle"></i><span>Faculty</span>
                         </a>
                     </li>
                 </ul>

             <?php
                elseif ($users->id == "25") :
                ?>
                 <ul id="forms-nav" class="nav-content">
                     <li>
                         <a href="index.php#notice" onclick="notice()">
                             <i class="bi bi-circle"></i><span>Notice</span>
                         </a>
                     </li>

                 </ul>
             <?php else : ?>
                 <ul id="forms-nav" class="nav-content">
                     <li>
                         <a href="index.php#hod_desk" onclick="hod_desk()">
                             <i class="bi bi-circle"></i><span>HOD Desk</span>
                         </a>
                     </li>
                     <li>
                         <a href="index.php#notice" onclick="notice()">
                             <i class="bi bi-circle"></i><span>Notice</span>
                         </a>
                     </li>
                     <li>
                         <a href="index.php#timetable_d" onclick="timetable_details()">
                             <i class="bi bi-circle"></i><span>Timetable & Newsletter</span>
                         </a>
                     </li>
                     <li>
                         <a href="index.php#study" onclick="study()">
                             <i class="bi bi-circle"></i><span>Study Material</span>
                         </a>
                     </li>
                     <li>
                         <a href="index.php#faculty" onclick="faculty()">
                             <i class="bi bi-circle"></i><span>Faculty</span>
                         </a>
                     </li>
                     <li>
                         <a href="index.php#staff_ach" onclick="staff_ach()">
                             <i class="bi bi-circle"></i><span>Staff Achievements</span>
                         </a>
                     </li>
                     <li>
                         <a href="index.php#ind_visit" onclick="ind_visit()">
                             <i class="bi bi-circle"></i><span>Industrial Visits</span>
                         </a>
                     </li>
                     <li>
                         <a href="index.php#mou" onclick="mou()">
                             <i class="bi bi-circle"></i><span>MOU</span>
                         </a>
                     </li>
                     <li>
                         <a href="index.php#result_analysis" onclick="result_analysis()">
                             <i class="bi bi-circle"></i><span>Result Analysis</span>
                         </a>
                     </li>
                     <li>
                         <a href="index.php#achad_ach" onclick="achad_ach()">
                             <i class="bi bi-circle"></i><span>Academic Achievements</span>
                         </a>
                     </li>
                     <li>
                         <a href="index.php#other_ach" onclick="other_ach()">
                             <i class="bi bi-circle"></i><span>Other Achievements</span>
                         </a>
                     </li>

                 </ul>
             <?php endif; ?>


         </ul>

     </aside>
     <!-- End Sidebar-->


 <?php
    endif;
    ?>


 <!-- Aditya ////////////////////////////////////////////////////////////////////////////////////////////////-->

 <section class="section dashboard hod_desk" style="display: none;" id="hod_desk">
     <div class="card">

         <div class="col-lg-12 card-body">
             <form action="insert.php" method="post" enctype="multipart/form-data" class="row g-3 needs-validation mt-2 mb-2 px-4 pb-4" novalidate>
                 <div class="d-flex justify-content-center py-4">
                     <a href="#" class="logo d-flex align-items-center w-auto">
                         <span class="d-lg-block">HOD Desk</span>
                     </a>
                 </div>
                 <?php
                    $hod_desk = $conn->prepare("SELECT * FROM hod_desk WHERE dept_id = :id");
                    $hod_desk->execute(array(
                        ":id" => $_SESSION["dept_id"]
                    ));
                    $hod_desk_fetch = $hod_desk->fetch(PDO::FETCH_OBJ);
                    ?>
                 <div class="col-md-12">
                     <label for="department" class="form-label">HOD Profile</label> <br>
                     <img src="<?php echo "../" . $hod_desk_fetch->image; ?>" alt="" class="img-fluid" width="200px" height="200px"><br><br>
                     <input type="file" name="hod_image" id="" placeholder="HOD image" required>
                     <div class="valid-feedback">
                         Looks good!
                     </div>
                     <div class="invalid-feedback">
                         Please choose HOD Profile Image.
                     </div>
                 </div>
                 <div class="col-md-6">
                     <label for="department" class="form-label">HOD Name</label>
                     <input type="text" class="form-control" name="name" value="<?php echo $hod_desk_fetch->name ?>" aria-describedby="inputGroupPrepend" required>

                     <div class="valid-feedback">
                         Looks good!
                     </div>
                     <div class="invalid-feedback">
                         Please select a valid state.
                     </div>
                 </div>

                 <div class="col-md-6">
                     <label for="user id" class="form-label">Date of Appointment</label>
                     <div class="input-group has-validation">
                         <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                         <input type="date" class="form-control" name="appointment_date" value="<?php echo $hod_desk_fetch->appointment_date; ?>" aria-describedby="inputGroupPrepend" required>
                         <div class="valid-feedback">
                             Looks good!
                         </div>
                         <div class="invalid-feedback">
                             Please choose a username.
                         </div>

                     </div>
                 </div>
                 <div class="col-md-6">
                     <label for="user id" class="form-label">Qualification</label>
                     <div class="input-group has-validation">
                         <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                         <input type="text" class="form-control" name="qualification" value="<?php echo $hod_desk_fetch->qualification ?>" aria-describedby="inputGroupPrepend" required>
                         <div class="valid-feedback">
                             Looks good!
                         </div>
                         <div class="invalid-feedback">
                             Please choose a username.
                         </div>

                     </div>
                 </div>
                 <div class="col-md-6">
                     <label for="user id" class="form-label">Experience</label>
                     <div class="input-group has-validation">
                         <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                         <input type="number" class="form-control" name="experience" value="<?php echo $hod_desk_fetch->experience ?>" aria-describedby="inputGroupPrepend" required>
                         <div class="valid-feedback">
                             Looks good!
                         </div>
                         <div class="invalid-feedback">
                             Please choose a username.
                         </div>

                     </div>
                 </div>

                 <div class="col-md-12">
                     <button class="btn btn-primary w-100" type="submit" name="hod_desk_update">Update</button>
                 </div>
             </form>
         </div>
     </div>

 </section>

 <section class="section dashboard timetable_d" style="display: none;" id="timetable_d">
     <div class="row">

         <div class="col-lg-12">
             <!-- Recent Sales -->
             <div class="card recent-sales overflow-auto">

                 <div class="card-body">
                     <div style="display:flex; align-items:center; justify-content:space-between;">
                         <h5 class="card-title">Timetable & News Letter Details</h5>
                         <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#timetable_add_modal">
                             Add
                         </button>
                     </div>

                     <!-- Modal for timetable add -->
                     <div class="modal fade" id="timetable_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Add Timetable & NewsLetter</h5>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                     <form class="w-60 p-4" action="insert.php" method="post" enctype="multipart/form-data">
                                         <div class="mb-3">
                                             <label for="file" class="form-label"><strong>Add PDF</strong></label>
                                             <input type="file" class="form-control" name="timetable_add_upload" required>
                                         </div>
                                         <div class="mb-3">
                                             <label for="title" class="form-label"><strong>Title of PDF</strong></label>
                                             <input type="text" class="form-control" aria-describedby="emailHelp" name="title" placeholder="PDF Title" required>
                                         </div>
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-success" name="timetable_add">Add</button>
                                 </div>
                                 </form>
                             </div>
                         </div>
                     </div>

                     <table class="table table-borderless datatable">
                         <thead>
                             <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Title</th>
                                 <th scope="col" colspan="2">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $timetable = $conn->prepare("SELECT * FROM timetable WHERE dept_id = :id");
                                $timetable->execute(array(
                                    ":id" => $_SESSION["dept_id"]
                                ));
                                $srn = 0;
                                while ($row = $timetable->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                 <tr>
                                     <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                     <td><?php echo $row->title; ?></td>
                                     <td>
                                         <a href="index.php?srn=<?php echo $row->id; ?>">
                                             <button class="btn btn-primary">Update</button>
                                         </a>
                                     </td>
                                     <td>
                                         <a href="index.php?srn_d=<?php echo $row->id; ?>">
                                             <button class="btn btn-danger">Delete</button>
                                         </a>
                                     </td>
                                 </tr>

                             <?php
                                endwhile;
                                ?>

                         </tbody>
                     </table>

                 </div>

             </div>
         </div>

     </div>

 </section>

 <section class="section dashboard ind_visit" style="display: none;" id="ind_visit">
     <div class="row">

         <div class="col-lg-12">
             <!-- Recent Sales -->
             <div class="card recent-sales overflow-auto">

                 <div class="card-body">
                     <div style="display:flex; align-items:center; justify-content:space-between;">
                         <h5 class="card-title">Industrial Visit</h5>
                         <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ind_visit_add_modal">
                             Add
                         </button>
                     </div>

                     <!-- Modal for timetable add -->
                     <div class="modal fade" id="ind_visit_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Add Industrial Visit</h5>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                     <form class="w-60 p-4" action="insert.php" method="post">
                                         <div class="mb-3">
                                             <label for="name" class="form-label"><strong>Industry Name</strong></label>
                                             <input type="text" class="form-control" name="name" placeholder="Industry Name" required>
                                         </div>
                                         <div class="mb-3">
                                             <label for="date" class="form-label"><strong>Date</strong></label>
                                             <input type="date" class="form-control" name="date" placeholder="Visit Date" required>
                                         </div>
                                         <div class="mb-3">
                                             <label for="class" class="form-label"><strong>Class</strong></label>
                                             <input type="number" class="form-control" name="class" placeholder="class" required>
                                         </div>
                                         <div class="mb-3">
                                             <label for="student" class="form-label"><strong>No. of student</strong></label>
                                             <input type="number" class="form-control" name="student" placeholder="student" required>
                                         </div>
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-success" name="ind_visit_add">Add</button>
                                 </div>
                                 </form>
                             </div>
                         </div>
                     </div>

                     <table class="table table-borderless datatable">
                         <thead>
                             <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Industry Name</th>
                                 <th scope="col">Date</th>
                                 <th scope="col">class</th>
                                 <th scope="col">No. of student</th>
                                 <th scope="col" colspan="2">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $ind_visit = $conn->prepare("SELECT * FROM industrial_visit WHERE dept_id = :id");
                                $ind_visit->execute(array(
                                    ":id" => $_SESSION["dept_id"]
                                ));
                                $srn = 0;
                                while ($row = $ind_visit->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                 <tr>
                                     <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                     <td><?php echo $row->industry_name; ?></td>
                                     <td><?php echo $row->date; ?></td>
                                     <td><?php echo $row->class; ?></td>
                                     <td><?php echo $row->total_stud; ?></td>
                                     <td>
                                         <a href="index.php?ind_srn=<?php echo $row->id; ?>">
                                             <button class="btn btn-primary">Update</button>
                                         </a>
                                     </td>
                                     <td>
                                         <a href="index.php?ind_srn_d=<?php echo $row->id; ?>">
                                             <button class="btn btn-danger">Delete</button>
                                         </a>
                                     </td>
                                 </tr>

                             <?php
                                endwhile;
                                ?>

                         </tbody>
                     </table>

                 </div>

             </div>
         </div>

     </div>

 </section>

 <section class="section dashboard result_analysis" style="display: none;" id="result_analysis">
     <div class="card row">

         <div class="col-lg-12">
             <!-- Recent Sales -->
             <div class="recent-sales overflow-auto">

                 <div class="card-body">
                     <div style="display:flex; align-items:center; justify-content:space-between;">
                         <h5 class="card-title">Result Analysis</h5>
                         <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#result_analysis_add_modal">
                             Add
                         </button>
                     </div>

                     <!-- Modal for timetable add -->
                     <div class="modal fade" id="result_analysis_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Add Result Analysis</h5>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                     <form class="w-60 p-4" action="insert.php" method="post">
                                         <div class="mb-3">
                                             <label for="entry" class="form-label"><strong>Entry</strong></label>
                                             <input type="text" class="form-control" name="name" placeholder="Entry name" required>
                                         </div>
                                         <div class="mb-3">
                                             <label for="student" class="form-label"><strong>No. of student</strong></label>
                                             <input type="number" class="form-control" name="student" placeholder="No. of student" required>
                                         </div>
                                         <div class="mb-3">
                                             <label for="year 1" class="form-label"><strong>I Year</strong></label>
                                             <input type="number" class="form-control" name="y1" placeholder="I Year" required>
                                         </div>
                                         <div class="mb-3">
                                             <label for="year 2" class="form-label"><strong>2 Year</strong></label>
                                             <input type="number" class="form-control" name="y2" placeholder="II Year" required>
                                         </div>
                                         <div class="mb-3">
                                             <label for="year 3" class="form-label"><strong>3 Year</strong></label>
                                             <input type="number" class="form-control" name="y3" placeholder="III Year" required>
                                         </div>
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-success" name="result_analysis_add">Add</button>
                                 </div>
                                 </form>
                             </div>
                         </div>
                     </div>

                     <table class="table table-borderless datatable">
                         <thead>
                             <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Entry</th>
                                 <th scope="col">No. of student</th>
                                 <th scope="col">I Year</th>
                                 <th scope="col">II Year</th>
                                 <th scope="col">III Year</th>
                                 <th scope="col" colspan="2">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $result_analysis = $conn->prepare("SELECT * FROM result_analysis WHERE dept_id = :id");
                                $result_analysis->execute(array(
                                    ":id" => $_SESSION["dept_id"]
                                ));
                                $srn = 0;
                                while ($row = $result_analysis->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                 <tr>
                                     <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                     <td><?php echo $row->entry; ?></td>
                                     <td><?php echo $row->total_stud; ?></td>
                                     <td><?php echo $row->first_year; ?></td>
                                     <td><?php echo $row->second_year; ?></td>
                                     <td><?php echo $row->third_year; ?></td>
                                     <td>
                                         <a href="index.php?result_analysis_srn=<?php echo $row->id; ?>">
                                             <button class="btn btn-primary">Update</button>
                                         </a>
                                     </td>
                                     <td>
                                         <a href="index.php?result_analysis_srn_d=<?php echo $row->id; ?>">
                                             <button class="btn btn-danger">Delete</button>
                                         </a>
                                     </td>
                                 </tr>

                             <?php
                                endwhile;
                                ?>

                         </tbody>
                     </table>

                 </div>

             </div>
         </div>
         <div class="col-lg-12">
             <!-- Recent Sales -->
             <div class="recent-sales overflow-auto">

                 <div class="card-body">
                     <div style="display:flex; align-items:center; justify-content:space-between;">
                         <h5 class="card-title">Academic Performance of Final Year</h5>
                         <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#academic_performance_add_modal">
                             Add
                         </button>
                     </div>

                     <!-- Modal for timetable add -->
                     <div class="modal fade" id="academic_performance_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Add Academic Performance of Final Year</h5>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                     <form class="w-60 p-4" action="insert.php" method="post">
                                         <div class="mb-3">
                                             <label for="name" class="form-label"><strong>Academic Performance</strong></label>
                                             <input type="text" class="form-control" name="name" placeholder="Title" required>
                                         </div>
                                         <div class="mb-3">
                                             <label for="student" class="form-label"><strong>CAY</strong></label>
                                             <input type="number" class="form-control" name="cay" placeholder="CAY" required>
                                         </div>
                                         <div class="mb-3">
                                             <label for="year 1" class="form-label"><strong>CAYm1</strong></label>
                                             <input type="number" class="form-control" name="m1" placeholder="CAY m1" required>
                                         </div>
                                         <div class="mb-3">
                                             <label for="year 2" class="form-label"><strong>CAYm2</strong></label>
                                             <input type="number" class="form-control" name="m2" placeholder="CAY m2" required>
                                         </div>
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-success" name="academic_performance_add">Add</button>
                                 </div>
                                 </form>
                             </div>
                         </div>
                     </div>

                     <table class="table table-borderless datatable">
                         <thead>
                             <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Academic Performance</th>
                                 <th scope="col">CAY</th>
                                 <th scope="col">CAYm1</th>
                                 <th scope="col">CAYm2</th>
                                 <th scope="col" colspan="2">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $academic_performance = $conn->prepare("SELECT * FROM result_analysis2 WHERE dept_id = :id");
                                $academic_performance->execute(array(
                                    ":id" => $_SESSION["dept_id"]
                                ));
                                $srn = 0;
                                while ($row = $academic_performance->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                 <tr>
                                     <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                     <td><?php echo $row->academic_perform; ?></td>
                                     <td><?php echo $row->cay; ?></td>
                                     <td><?php echo $row->caym1; ?></td>
                                     <td><?php echo $row->caym2; ?></td>
                                     <td>
                                         <a href="index.php?academic_performance_srn=<?php echo $row->id; ?>">
                                             <button class="btn btn-primary">Update</button>
                                         </a>
                                     </td>
                                     <td>
                                         <a href="index.php?academic_performance_srn_d=<?php echo $row->id; ?>">
                                             <button class="btn btn-danger">Delete</button>
                                         </a>
                                     </td>
                                 </tr>

                             <?php
                                endwhile;
                                ?>

                         </tbody>
                     </table>

                 </div>

             </div>
         </div>

     </div>

 </section>

 <section class="section dashboard notice" style="display: none;" id="notice">
     <div class="row">

         <div class="col-lg-12">
             <!-- Recent Sales -->
             <div class="card recent-sales overflow-auto">

                 <div class="card-body">
                     <div style="display:flex; align-items:center; justify-content:space-between;">
                         <h5 class="card-title">Notice</h5>
                         <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#notice_add_modal">
                             Add
                         </button>
                     </div>

                     <!-- Modal for timetable add -->
                     <div class="modal fade" id="notice_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Add Notice</h5>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                     <form class="w-60 p-4" action="insert.php" method="post" enctype="multipart/form-data">
                                         <div class="mb-3">
                                             <label for="name" class="form-label"><strong>Notice Name</strong></label>
                                             <input type="text" class="form-control" name="name" placeholder="Notice Name" required>
                                         </div>
                                         <div class="mb-3">
                                             <label for="date" class="form-label"><strong>Notice End Date</strong></label>
                                             <input type="date" class="form-control" min="<?php $current_date = date("Y-m-d");
                                                                                            echo $current_date; ?>" name="date" placeholder="Till date to notice will be displayed" required>
                                         </div>
                                         <div class="mb-3">
                                             <label for="class" class="form-label"><strong>URL link</strong></label>
                                             <input type="text" class="form-control" name="notice_link" placeholder="Notice Link">
                                         </div>
                                         <div class="text-center">
                                             <label for="class" class="form-label"><strong>OR</strong></label>
                                         </div>

                                         <div class="mb-3">
                                             <label for="class" class="form-label"><strong>File Link</strong></label>
                                             <input type="file" class="form-control" name="notice_upload" placeholder="Notice Upload">
                                         </div>
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-success" name="notice_add">Add</button>
                                 </div>
                                 </form>
                             </div>
                         </div>
                     </div>

                     <table class="table table-borderless datatable">
                         <thead>
                             <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Notice Name</th>
                                 <th scope="col">End Date</th>
                                 <th scope="col" colspan="2">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $current_date = date("Y-m-d");
                                $notice = $conn->query("SELECT * FROM news WHERE 1");
                                $srn = 0;
                                while ($row = $notice->fetch(PDO::FETCH_OBJ)) :
                                    if ($current_date <= $row->date) :
                                        $srn++;
                                ?>
                                     <tr>
                                         <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                         <td><?php echo $row->news_name; ?></td>
                                         <td><?php echo $row->date; ?></td>
                                         <td>
                                             <a href="index.php?notice_srn=<?php echo $row->id; ?>">
                                                 <button class="btn btn-primary">Update</button>
                                             </a>
                                         </td>
                                         <td>
                                             <a href="index.php?notice_srn_d=<?php echo $row->id; ?>">
                                                 <button class="btn btn-danger">Delete</button>
                                             </a>
                                         </td>
                                     </tr>

                             <?php
                                    endif;
                                endwhile;
                                ?>

                         </tbody>
                     </table>

                 </div>

             </div>
         </div>

     </div>
     <?php
        if ($_SESSION["login_destination"] == "admin") : ?>
         <div class="row">

             <div class="col-lg-12">
                 <!-- Recent Sales -->
                 <div class="card recent-sales overflow-auto">

                     <div class="card-body">
                         <div style="display:flex; align-items:center; justify-content:space-between;">
                             <h5 class="card-title">Previous Notice</h5>
                             <!-- <a href="index.php?delete_all_notice=true">
                                  <button type="submit" class="btn btn-danger" name="delete_all_notice">
                                      Delete All
                                  </button>
                              </a> -->
                         </div>



                         <table class="table table-borderless datatable">
                             <thead>
                                 <tr>
                                     <th scope="col">#</th>
                                     <th scope="col">Notice Name</th>
                                     <th scope="col">End Date</th>
                                     <th scope="col" colspan="2">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $current_date = date("Y-m-d");
                                    $notice = $conn->query("SELECT * FROM news ORDER BY id DESC");
                                    $srn = 0;
                                    while ($row = $notice->fetch(PDO::FETCH_OBJ)) :
                                        if ($current_date >= $row->date) :
                                            $srn++;
                                    ?>
                                         <tr>
                                             <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                             <td><?php echo $row->news_name; ?></td>
                                             <td><?php echo $row->date; ?></td>
                                             <!-- <td>
                                                  <a href="index.php?notice_srn=<?php echo $row->id; ?>">
                                                      <button class="btn btn-primary">Update</button>
                                                  </a>
                                              </td> -->
                                             <td>
                                                 <a href="index.php?notice_srn_d=<?php echo $row->id; ?>">
                                                     <button class="btn btn-danger">Delete</button>
                                                 </a>
                                             </td>
                                         </tr>

                                 <?php
                                        endif;
                                    endwhile;
                                    ?>

                             </tbody>
                         </table>

                     </div>

                 </div>
             </div>

         </div>
     <?php
        endif;
        ?>

 </section>

 <section class="section dashboard study" style="display: none;" id="study">
     <div class="card row">

         <div class="col-lg-12">
             <!-- Recent Sales -->
             <div class="recent-sales overflow-auto">
                 <h5 class="card-title">Study Material</h5>

                 <div class="card-body">
                     <div style="display:flex; align-items:center; justify-content:space-between;">
                         <h5 class="card-title">Lecture Notes</h5>
                         <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#notes_add_modal">
                             Add
                         </button>
                     </div>

                     <!-- Modal for timetable add -->
                     <div class="modal fade" id="notes_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Add Lecture Notes</h5>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                     <form class="w-60 p-4" action="insert.php" method="post">
                                         <div class="mb-3">
                                             <label for="entry" class="form-label"><strong>Subject Name</strong></label>
                                             <input type="text" class="form-control" name="name" placeholder="Subject" required>
                                         </div>
                                         <div class="mb-3">
                                             <label for="student" class="form-label"><strong>Description about notes</strong></label>
                                             <input type="text" class="form-control" name="desc" placeholder="description" required>
                                         </div>
                                         <div class="mb-3">
                                             <label for="year 1" class="form-label"><strong>Link</strong></label>
                                             <input type="url" class="form-control" name="link" placeholder="Link" required>
                                         </div>
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-success" name="notes_add">Add</button>
                                 </div>
                                 </form>
                             </div>
                         </div>
                     </div>

                     <table class="table table-borderless datatable">
                         <thead>
                             <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Subject Name</th>
                                 <th scope="col">Description</th>
                                 <th scope="col">Link</th>
                                 <th scope="col" colspan="2">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $notes = $conn->prepare("SELECT * FROM notes WHERE dept_id = :id");
                                $notes->execute(array(
                                    ":id" => $_SESSION["dept_id"]
                                ));
                                $srn = 0;
                                while ($row = $notes->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                 <tr>
                                     <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                     <td><?php echo $row->subject; ?></td>
                                     <td><?php echo $row->description; ?></td>
                                     <td><a href="<?php echo $row->link; ?>" target="_blank"><?php echo $row->link; ?></a></td>
                                     <td>
                                         <a href="index.php?notes_srn=<?php echo $row->id; ?>">
                                             <button class="btn btn-primary">Update</button>
                                         </a>
                                     </td>
                                     <td>
                                         <a href="index.php?notes_srn_d=<?php echo $row->id; ?>">
                                             <button class="btn btn-danger">Delete</button>
                                         </a>
                                     </td>
                                 </tr>

                             <?php
                                endwhile;
                                ?>

                         </tbody>
                     </table>

                 </div>

             </div>
         </div>
         <div class="col-lg-12">
             <!-- Recent Sales -->
             <div class="recent-sales overflow-auto">

                 <div class="card-body">
                     <div style="display:flex; align-items:center; justify-content:space-between;">
                         <h5 class="card-title">Last Year Question Paper</h5>
                         <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#paper_add_modal">
                             Add
                         </button>
                     </div>

                     <!-- Modal for timetable add -->
                     <div class="modal fade" id="paper_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Add Last Year Question Papers</h5>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                     <form class="w-60 p-4" action="insert.php" method="post">
                                         <div class="mb-3">
                                             <label for="entry" class="form-label"><strong>Subject Name</strong></label>
                                             <input type="text" class="form-control" name="name" placeholder="Subject" required>
                                         </div>
                                         <div class="mb-3">
                                             <label for="student" class="form-label"><strong>Description about Question Papers</strong></label>
                                             <input type="text" class="form-control" name="desc" placeholder="description" required>
                                         </div>
                                         <div class="mb-3">
                                             <label for="year 1" class="form-label"><strong>Link</strong></label>
                                             <input type="url" class="form-control" name="link" placeholder="Link" required>
                                         </div>
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-success" name="paper_add">Add</button>
                                 </div>
                                 </form>
                             </div>
                         </div>
                     </div>

                     <table class="table table-borderless datatable">
                         <thead>
                             <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Subject Name</th>
                                 <th scope="col">Description</th>
                                 <th scope="col">Link</th>
                                 <th scope="col" colspan="2">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $paper = $conn->prepare("SELECT * FROM question_papers WHERE dept_id = :id");
                                $paper->execute(array(
                                    ":id" => $_SESSION["dept_id"]
                                ));
                                $srn = 0;
                                while ($row = $paper->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                 <tr>
                                     <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                     <td><?php echo $row->subject; ?></td>
                                     <td><?php echo $row->description; ?></td>
                                     <td><a href="<?php echo $row->link; ?>" target="_blank"><?php echo $row->link; ?></a></td>
                                     <td>
                                         <a href="index.php?paper_srn=<?php echo $row->id; ?>">
                                             <button class="btn btn-primary">Update</button>
                                         </a>
                                     </td>
                                     <td>
                                         <a href="index.php?paper_srn_d=<?php echo $row->id; ?>">
                                             <button class="btn btn-danger">Delete</button>
                                         </a>
                                     </td>
                                 </tr>

                             <?php
                                endwhile;
                                ?>

                         </tbody>
                     </table>

                 </div>

             </div>
             <div class="col-lg-12">
                 <!-- Recent Sales -->
                 <div class="recent-sales overflow-auto">

                     <div class="card-body">
                         <div style="display:flex; align-items:center; justify-content:space-between;">
                             <h5 class="card-title">Video Lectures</h5>
                             <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#video_add_modal">
                                 Add
                             </button>
                         </div>

                         <!-- Modal for timetable add -->
                         <div class="modal fade" id="video_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                             <div class="modal-dialog">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <h5 class="modal-title" id="exampleModalLabel">Add Video Lectures</h5>
                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                     </div>
                                     <div class="modal-body">
                                         <form class="w-60 p-4" action="insert.php" method="post">
                                             <div class="mb-3">
                                                 <label for="entry" class="form-label"><strong>Subject Name</strong></label>
                                                 <input type="text" class="form-control" name="name" placeholder="Subject" required>
                                             </div>
                                             <div class="mb-3">
                                                 <label for="student" class="form-label"><strong>Description about Video Lecture</strong></label>
                                                 <input type="text" class="form-control" name="desc" placeholder="description" required>
                                             </div>
                                             <div class="mb-3">
                                                 <label for="year 1" class="form-label"><strong>Link</strong></label>
                                                 <input type="url" class="form-control" name="link" placeholder="Link" required>
                                             </div>
                                     </div>
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                         <button type="submit" class="btn btn-success" name="video_add">Add</button>
                                     </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                         <table class="table table-borderless datatable">
                             <thead>
                                 <tr>
                                     <th scope="col">#</th>
                                     <th scope="col">Subject Name</th>
                                     <th scope="col">Description</th>
                                     <th scope="col">Link</th>
                                     <th scope="col" colspan="2">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $video = $conn->prepare("SELECT * FROM video_lectures WHERE dept_id = :id");
                                    $video->execute(array(
                                        ":id" => $_SESSION["dept_id"]
                                    ));
                                    $srn = 0;
                                    while ($row = $video->fetch(PDO::FETCH_OBJ)) :
                                        $srn++;
                                    ?>
                                     <tr>
                                         <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                         <td><?php echo $row->subject; ?></td>
                                         <td><?php echo $row->description; ?></td>
                                         <td><a href="<?php echo $row->link; ?>" target="_blank"><?php echo $row->link; ?></a></td>
                                         <td>
                                             <a href="index.php?video_srn=<?php echo $row->id; ?>">
                                                 <button class="btn btn-primary">Update</button>
                                             </a>
                                         </td>
                                         <td>
                                             <a href="index.php?video_srn_d=<?php echo $row->id; ?>">
                                                 <button class="btn btn-danger">Delete</button>
                                             </a>
                                         </td>
                                     </tr>

                                 <?php
                                    endwhile;
                                    ?>

                             </tbody>
                         </table>

                     </div>

                 </div>
             </div>

         </div>

 </section>
 <?php
    if (isset($_GET["srn"])) : ?>


     <div id="simpleModal" class="modal" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Time table & News Letter Update</h5>

                     <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="closemodal()">
                         <i class="bi bi-x-lg"></i>
                     </button>
                 </div>
                 <form action="insert.php" method="post" enctype="multipart/form-data" class="row g-3 needs-validation mt-2 mb-2 px-4 pb-4" novalidate>
                     <div class="modal-body">

                         <?php
                            $srn = $_GET["srn"];

                            $timetable = $conn->query("SELECT * FROM timetable WHERE id = $srn");
                            $timetable_fetch = $timetable->fetch(PDO::FETCH_OBJ);
                            ?>

                         <div class="col-md-12">
                             <label for="department" class="form-label">PDF</label>
                             <iframe src="<?php echo "../" . $timetable_fetch->timetable ?>" frameborder="0" width="100%" height="50%" class="img-fluid"></iframe>
                             <input type="file" name="timetable_upload" id="" placeholder="timetable pdf" required>
                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="department" class="form-label">File Title</label>
                             <input type="text" class="form-control" name="title" value="<?php echo $timetable_fetch->title ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>

                         <div class="modal-footer">
                             <button type="submit" class="btn btn-primary" name="timetable_update">Update</button>
                             <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closemodal()">Close</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>

 <?php
    endif;
    ?>

 <?php
    if (isset($_GET["notice_srn"])) : ?>


     <div id="notice_update_modal" class="modal" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Notice Update</h5>

                     <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="notice_closemodal()">
                         <i class="bi bi-x-lg"></i>
                     </button>
                 </div>
                 <form action="insert.php" method="post" enctype="multipart/form-data" class="row g-3 needs-validation mt-2 mb-2 px-4 pb-4" novalidate>
                     <div class="modal-body">

                         <?php
                            $srn = $_GET["notice_srn"];

                            $notice = $conn->query("SELECT * FROM news WHERE id = $srn");
                            $notice_fetch = $notice->fetch(PDO::FETCH_OBJ);
                            ?>

                         <div class="col-md-12">
                             <label for="name" class="form-label">News Name</label>
                             <input type="text" class="form-control" name="name" value="<?php echo $notice_fetch->news_name ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="date" class="form-label">End Date</label>
                             <input type="date" class="form-control" name="date" value="<?php echo $notice_fetch->date ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>

                         <?php
                            if (str_contains($notice_fetch->file_link, 'upload/')) :
                            ?>
                             <div class="col-md-12">
                                 <label for="department" class="form-label">File PDF</label>
                                 <iframe src="<?php echo "../" . $notice_fetch->file_link ?>" frameborder="0" width="100%" height="50%" class="img-fluid"></iframe>
                                 <input type="file" name="notice_upload" placeholder="Notice Upload">
                                 <div class="valid-feedback">
                                     Looks good!
                                 </div>
                                 <div class="invalid-feedback">
                                     Please select a valid state.
                                 </div>
                             </div>
                         <?php
                            else :
                            ?>
                             <div class="col-md-12">
                                 <label for="department" class="form-label">URL Link</label>
                                 <input type="text" class="form-control" name="notice_link" value="<?php echo $notice_fetch->file_link ?>" aria-describedby="inputGroupPrepend" required>
                                 <div class="valid-feedback">
                                     Looks good!
                                 </div>
                                 <div class="invalid-feedback">
                                     Please select a valid state.
                                 </div>
                             </div>
                         <?php
                            endif;
                            ?>

                         <div class="modal-footer">
                             <button type="submit" class="btn btn-primary" name="notice_update">Update</button>
                             <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="notice_closemodal()">Close</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>

 <?php
    endif;
    ?>

 <?php
    if (isset($_GET["ind_srn"])) : ?>

     <div id="ind_visit_update_modal" class="modal" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Industrial Visit Update</h5>
                     <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="ind_closemodal()">
                         <i class="bi bi-x-lg"></i>
                     </button>
                 </div>
                 <form action="insert.php" method="post" class="row g-3 needs-validation mt-2 mb-2 px-4 pb-4" novalidate>
                     <div class="modal-body">

                         <?php
                            $srn = $_GET["ind_srn"];

                            $ind_visit = $conn->query("SELECT * FROM industrial_visit WHERE id = $srn");
                            $ind_visit_fetch = $ind_visit->fetch(PDO::FETCH_OBJ);
                            ?>

                         <div class="col-md-12">
                             <label for="name" class="form-label">Industry Name</label>
                             <input type="text" class="form-control" name="name" value="<?php echo $ind_visit_fetch->industry_name ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="date" class="form-label">Date</label>
                             <input type="date" class="form-control" name="date" value="<?php echo $ind_visit_fetch->date ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="class" class="form-label">Class</label>
                             <input type="number" class="form-control" name="class" value="<?php echo $ind_visit_fetch->class ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="student" class="form-label">No. of Student</label>
                             <input type="number" class="form-control" name="student" value="<?php echo $ind_visit_fetch->total_stud ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                     </div>
                     <div class="modal-footer">
                         <button type="submit" class="btn btn-primary" name="ind_visit_update">Update</button>
                         <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="ind_closemodal()">Close</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>

 <?php
    endif;
    ?>

 <?php
    if (isset($_GET["result_analysis_srn"])) : ?>

     <div id="result_analysis_update_modal" class="modal" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Result Analysis Update</h5>
                     <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="result_analysis_closemodal()">
                         <i class="bi bi-x-lg"></i>
                     </button>
                 </div>
                 <form action="insert.php" method="post" class="row g-3 needs-validation mt-2 mb-2 px-4 pb-4" novalidate>
                     <div class="modal-body">

                         <?php
                            $srn = $_GET["result_analysis_srn"];

                            $result_analysis = $conn->query("SELECT * FROM result_analysis WHERE id = $srn");
                            $result_analysis_fetch = $result_analysis->fetch(PDO::FETCH_OBJ);
                            ?>

                         <div class="col-md-12">
                             <label for="name" class="form-label">Entry</label>
                             <input type="text" class="form-control" name="name" value="<?php echo $result_analysis_fetch->entry ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="date" class="form-label">No. of student</label>
                             <input type="number" class="form-control" name="student" value="<?php echo $result_analysis_fetch->total_stud ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="class" class="form-label"> I Year</label>
                             <input type="number" class="form-control" name="y1" value="<?php echo $result_analysis_fetch->first_year ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="student" class="form-label"> II Year</label>
                             <input type="number" class="form-control" name="y2" value="<?php echo $result_analysis_fetch->second_year ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="student" class="form-label"> III Yaer</label>
                             <input type="number" class="form-control" name="y3" value="<?php echo $result_analysis_fetch->third_year ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                     </div>
                     <div class="modal-footer">
                         <button type="submit" class="btn btn-primary" name="result_analysis_update">Update</button>
                         <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="result_analysis_closemodal()">Close</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>

 <?php
    endif;
    ?>

 <?php
    if (isset($_GET["notes_srn"])) : ?>

     <div id="notes_update_modal" class="modal" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Lecture Notes Update</h5>
                     <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="notes_closemodal()">
                         <i class="bi bi-x-lg"></i>
                     </button>
                 </div>
                 <form action="insert.php" method="post" class="row g-3 needs-validation mt-2 mb-2 px-4 pb-4" novalidate>
                     <div class="modal-body">

                         <?php
                            $srn = $_GET["notes_srn"];

                            $notes = $conn->query("SELECT * FROM notes WHERE id = $srn");
                            $notes_fetch = $notes->fetch(PDO::FETCH_OBJ);
                            ?>

                         <div class="col-md-12">
                             <label for="name" class="form-label">Entry</label>
                             <input type="text" class="form-control" name="name" value="<?php echo $notes_fetch->subject ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="date" class="form-label">Description about Lecture Notes</label>
                             <input type="text" class="form-control" name="desc" value="<?php echo $notes_fetch->description ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="class" class="form-label">Link</label>
                             <input type="text" class="form-control" name="link" value="<?php echo $notes_fetch->link ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>

                     </div>
                     <div class="modal-footer">
                         <button type="submit" class="btn btn-primary" name="notes_update">Update</button>
                         <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="notes_closemodal()">Close</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>

 <?php
    endif;
    ?>

 <?php
    if (isset($_GET["paper_srn"])) : ?>

     <div id="paper_update_modal" class="modal" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Last Year Question Paper Update</h5>
                     <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="paper_closemodal()">
                         <i class="bi bi-x-lg"></i>
                     </button>
                 </div>
                 <form action="insert.php" method="post" class="row g-3 needs-validation mt-2 mb-2 px-4 pb-4" novalidate>
                     <div class="modal-body">

                         <?php
                            $srn = $_GET["paper_srn"];

                            $paper = $conn->query("SELECT * FROM question_papers WHERE id = $srn");
                            $paper_fetch = $paper->fetch(PDO::FETCH_OBJ);
                            ?>

                         <div class="col-md-12">
                             <label for="name" class="form-label">Entry</label>
                             <input type="text" class="form-control" name="name" value="<?php echo $paper_fetch->subject ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="date" class="form-label">Description about Last year question paper</label>
                             <input type="text" class="form-control" name="desc" value="<?php echo $paper_fetch->description ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="class" class="form-label">Link</label>
                             <input type="text" class="form-control" name="link" value="<?php echo $paper_fetch->link ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>

                     </div>
                     <div class="modal-footer">
                         <button type="submit" class="btn btn-primary" name="paper_update">Update</button>
                         <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="paper_closemodal()">Close</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>


 <?php
    endif;
    ?>

 <?php
    if (isset($_GET["video_srn"])) : ?>

     <div id="video_update_modal" class="modal" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Video Lecture Update</h5>
                     <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="video_closemodal()">
                         <i class="bi bi-x-lg"></i>
                     </button>
                 </div>
                 <form action="insert.php" method="post" class="row g-3 needs-validation mt-2 mb-2 px-4 pb-4" novalidate>
                     <div class="modal-body">

                         <?php
                            $srn = $_GET["video_srn"];

                            $video = $conn->query("SELECT * FROM video_lectures WHERE id = $srn");
                            $video_fetch = $video->fetch(PDO::FETCH_OBJ);
                            ?>

                         <div class="col-md-12">
                             <label for="name" class="form-label">Entry</label>
                             <input type="text" class="form-control" name="name" value="<?php echo $video_fetch->subject ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="date" class="form-label">Description about Video Lecture</label>
                             <input type="text" class="form-control" name="desc" value="<?php echo $video_fetch->description ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="class" class="form-label">Link</label>
                             <input type="text" class="form-control" name="link" value="<?php echo $video_fetch->link ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>

                     </div>
                     <div class="modal-footer">
                         <button type="submit" class="btn btn-primary" name="video_update">Update</button>
                         <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="video_closemodal()">Close</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>


 <?php
    endif;
    ?>

 <?php
    if (isset($_GET["academic_performance_srn"])) : ?>

     <div id="academic_performance_update_modal" class="modal" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Academic Performance Update</h5>
                     <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="academic_performance_closemodal()">
                         <i class="bi bi-x-lg"></i>
                     </button>
                 </div>
                 <form action="insert.php" method="post" class="row g-3 needs-validation mt-2 mb-2 px-4 pb-4" novalidate>
                     <div class="modal-body">

                         <?php
                            $srn = $_GET["academic_performance_srn"];

                            $academic_performance = $conn->query("SELECT * FROM result_analysis2 WHERE id = $srn");
                            $academic_performance_fetch = $academic_performance->fetch(PDO::FETCH_OBJ);
                            ?>

                         <div class="col-md-12">
                             <label for="name" class="form-label">Academic Performance</label>
                             <input type="text" class="form-control" name="name" value="<?php echo $academic_performance_fetch->academic_perform ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="date" class="form-label">CAY</label>
                             <input type="number" class="form-control" name="cay" value="<?php echo $academic_performance_fetch->cay ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="class" class="form-label">CAY M1</label>
                             <input type="number" class="form-control" name="m1" value="<?php echo $academic_performance_fetch->caym1 ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="student" class="form-label">CAY M2</label>
                             <input type="number" class="form-control" name="m2" value="<?php echo $academic_performance_fetch->caym2 ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                     </div>
                     <div class="modal-footer">
                         <button type="submit" class="btn btn-primary" name="academic_performance_update">Update</button>
                         <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="academic_performance_closemodal()">Close</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>

 <?php
    endif;
    ?>

 <!-- End of Aditya ////////////////////////////////////////////////////////////////////////////////////////////////-->


 <!-- Krishna ////////////////////////////////////////////////////////////////////////////////////////////////-->

 <section class="section dashboard faculty" style="display: none;" id="faculty">
     <div class="row">

         <div class="col-lg-12">
             <!-- Recent Sales -->
             <div class="card recent-sales overflow-auto">
                 <div class="card-body">
                     <div style="display:flex; align-items:center; justify-content:space-between;">
                         <h5 class="card-title">Faculty </h5>
                         <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#faculty_add_modal">
                             Add
                         </button>
                     </div>

                     <!-- Modal for Addition -->
                     <div class="modal fade" id="faculty_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Add Faculty</h5>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                     <form class="w-60 p-4" action="insert.php" method="post" enctype="multipart/form-data">
                                         <div class="mb-3">
                                             <label for="mou_f" class="form-label"><strong>Enter Name</strong></label>
                                             <input type="text" class="form-control mb-3" id="mou_f" aria-describedby="emailHelp" name="name" placeholder="Name" required>
                                             <label for="mou_f" class="form-label"><strong>Upload Image</strong></label>
                                             <input type="file" class="form-control mb-3" id="mou_f" aria-describedby="emailHelp" name="image" placeholder="Image" required>
                                             <label for="mou_f" class="form-label"><strong>Upload Resume</strong></label>
                                             <input type="file" class="form-control mb-3" id="mou_f" aria-describedby="emailHelp" name="resume" placeholder="Resume">
                                             <label for="mou_f" class="form-label"><strong>Enter Designation</strong></label>
                                             <input type="text" class="form-control mb-3" id="mou_f" aria-describedby="emailHelp" name="designation" placeholder="Designation" required>
                                             <label for="mou_f" class="form-label"><strong>Enter Qualification</strong></label>
                                             <input type="text" class="form-control mb-3" id="mou_f" aria-describedby="emailHelp" name="qualification" placeholder="Qualification" required>
                                             <label for="mou_f" class="form-label"><strong>Enter Experience</strong></label>
                                             <input type="number" class="form-control mb-3" id="mou_f" aria-describedby="emailHelp" name="experience" placeholder="Experience" required>
                                         </div>

                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-success" name="faculty_sub">Add</button>
                                 </div>
                                 </form>
                             </div>
                         </div>
                     </div>

                     <table class="table table-borderless datatable">
                         <thead>
                             <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Image</th>
                                 <th scope="col">Designation</th>
                                 <th scope="col">Qualification</th>
                                 <th scope="col">Experience</th>
                                 <th scope="col" colspan="2">Actions</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $faculty = $conn->prepare("SELECT * FROM faculty WHERE dept_id = :id");
                                $faculty->execute(array(
                                    ":id" => $_SESSION["dept_id"]
                                ));
                                $srn = 0;
                                while ($row = $faculty->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                 <tr>
                                     <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                     <td><?php echo $row->name; ?></td>
                                     <td style="width:10%">
                                         <div>
                                             <img src=<?php echo "../departments/$row->image" ?> alt="Can't Load the Image | Please Upload the Image without spaces in its name" style="width:100%;">
                                             <a href="<?php echo "../departments/$row->resume" ?>" download>
                                                 View Profile
                                             </a>
                                         </div>
                                     </td>
                                     <td><?php echo $row->designation; ?></td>
                                     <td><?php echo $row->qualification; ?></td>
                                     <td><?php echo $row->experience ?></td>
                                     <td>
                                         <a href="index.php?faculty_srn=<?php echo $row->id; ?>">
                                             <button class="btn btn-primary">Update</button>
                                         </a>
                                     </td>
                                     <td>
                                         <a href="index.php?faculty_id=<?php echo $row->id; ?>">
                                             <button type="button" class="btn btn-danger">
                                                 Delete
                                             </button>
                                         </a>
                                     </td>
                                 </tr>

                             <?php
                                endwhile;
                                ?>

                         </tbody>
                     </table>

                 </div>

             </div>
         </div>

     </div>

 </section>

 <?php
    if (isset($_GET["faculty_srn"])) : ?>

     <div id="faculty_update_modal" class="modal" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Faculty Update</h5>
                     <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="faculty_closemodal()">
                         <i class="bi bi-x-lg"></i>
                     </button>
                 </div>
                 <form action="insert.php" method="post" enctype="multipart/form-data" class="row g-3 needs-validation mt-2 mb-2 px-4 pb-4" novalidate>
                     <div class="modal-body">

                         <?php
                            $srn = $_GET["faculty_srn"];

                            $faculty = $conn->query("SELECT * FROM faculty WHERE id = $srn");
                            $faculty_fetch = $faculty->fetch(PDO::FETCH_OBJ);
                            ?>

                         <div class="col-md-12">
                             <label for="name" class="form-label">Name</label>
                             <input type="text" class="form-control mb-3" name="name" value="<?php echo $faculty_fetch->name ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="name" class="form-label">Image</label>
                             <iframe src="<?php echo "../departments/$faculty_fetch->image" ?>" frameborder="0" width="100%" height="50%" class="img-fluid"></iframe>
                             <input type="file" class="form-control mb-3" id="mou_f" value="<?php echo $faculty_fetch->image ?>" aria-describedby="emailHelp" name="image" required>
                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="name" class="form-label">Resume</label><br>
                             <?php
                                if ($faculty_fetch->resume) :
                                ?>
                                 <?php echo substr($faculty_fetch->resume, 16); ?>
                             <?php else :
                                    echo 'No Resume File Uploaded <br><br>';
                                endif;
                                ?>
                             <input type="file" class="form-control mb-3" id="mou_f" value="<?php $faculty_fetch->resume ?>" aria-describedby="emailHelp" name="resume" required>
                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="number" class="form-label">Designation</label>
                             <input type="text" class="form-control mb-3" name="designation" value="<?php echo $faculty_fetch->designation ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="text" class="form-label">Qualification</label>
                             <input type="text" class="form-control mb-3" name="qualification" value="<?php echo $faculty_fetch->qualification ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="text" class="form-label">Experience</label>
                             <input type="text" class="form-control mb-3" name="experience" value="<?php echo $faculty_fetch->experience ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>

                     </div>
                     <div class="modal-footer">
                         <button class="btn btn-primary" type="submit" name="faculty_update">Update</button>
                         <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="faculty_closemodal()">Close</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>

 <?php
    endif;
    ?>

 <section class="section dashboard staff_ach" style="display: none;" id="staff_ach">
     <div class="row">

         <div class="col-lg-12">
             <!-- Recent Sales -->
             <div class="card recent-sales overflow-auto">
                 <div class="card-body">
                     <div style="display:flex; align-items:center; justify-content:space-between;">
                         <h5 class="card-title">Staff Achievements </h5>
                         <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staff_ach_add_modal">
                             Add
                         </button>
                     </div>

                     <!-- Modal for Addition -->
                     <div class="modal fade" id="staff_ach_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Staff Achievements</h5>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                     <form class="w-60 p-4" action="insert.php" method="post">
                                         <div class="mb-3">
                                             <label for="mou_f" class="form-label"><strong>Add a new Staff Achievement</strong></label>
                                             <input type="text" class="form-control" id="mou_f" aria-describedby="emailHelp" name="name" placeholder="Enter Name" required>
                                             <input type="number" class="form-control my-3" id="mou_f" aria-describedby="emailHelp" name="conference" placeholder="Enter number of Conference" required>
                                             <input type="number" class="form-control" id="mou_f" aria-describedby="emailHelp" name="training" placeholder="Enter number of Training" required>
                                         </div>

                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-success" name="staff_ach_sub">Add</button>
                                 </div>
                                 </form>
                             </div>
                         </div>
                     </div>

                     <table class="table table-borderless datatable">
                         <thead>
                             <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Conference</th>
                                 <th scope="col">Training</th>
                                 <th scope="col" colspan="2">Actions</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $staff_ach = $conn->prepare("SELECT * FROM staff_achievements WHERE dept_id = :id");
                                $staff_ach->execute(array(
                                    ":id" => $_SESSION["dept_id"]
                                ));
                                $srn = 0;
                                while ($row = $staff_ach->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                 <tr>
                                     <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                     <td><?php echo $row->name; ?></td>
                                     <td><?php echo $row->conference; ?></td>
                                     <td><?php echo $row->training; ?></td>
                                     <td>
                                         <a href="index.php?staff_ach_srn=<?php echo $row->id; ?>">
                                             <button class="btn btn-primary">Update </button>
                                         </a>
                                     </td>
                                     <td>
                                         <a href="index.php?staff_ach_id=<?php echo $row->id; ?>">
                                             <button type="button" class="btn btn-danger">
                                                 Delete
                                             </button>
                                         </a>
                                     </td>
                                 </tr>

                             <?php
                                endwhile;
                                ?>

                         </tbody>
                     </table>

                 </div>

             </div>
         </div>

     </div>

 </section>

 <?php
    if (isset($_GET["staff_ach_srn"])) : ?>

     <div id="staff_ach_update_modal" class="modal" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Staff Achievements Update</h5>
                     <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="staff_ach_closemodal()">
                         <i class="bi bi-x-lg"></i>
                     </button>
                 </div>
                 <form action="insert.php" method="post" class="row g-3 needs-validation mt-2 mb-2 px-4 pb-4" novalidate>
                     <div class="modal-body">

                         <?php
                            $srn = $_GET["staff_ach_srn"];

                            $staff_ach = $conn->query("SELECT * FROM staff_achievements WHERE id = $srn");
                            $staff_ach_fetch = $staff_ach->fetch(PDO::FETCH_OBJ);
                            ?>

                         <div class="col-md-12">
                             <label for="name" class="form-label">Name</label>
                             <input type="text" class="form-control mb-3" name="name" value="<?php echo $staff_ach_fetch->name ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="number" class="form-label">Conference</label>
                             <input type="number" class="form-control mb-3" name="conference" value="<?php echo $staff_ach_fetch->conference ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="number" class="form-label">Training</label>
                             <input type="number" class="form-control mb-3" name="training" value="<?php echo $staff_ach_fetch->training ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>

                     </div>
                     <div class="modal-footer">
                         <button class="btn btn-primary" type="submit" name="staff_ach_update">Update</button>
                         <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="staff_ach_closemodal()">Close</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>

 <?php
    endif;
    ?>

 <section class="section dashboard mou" style="display: none;" id="mou">
     <div class="row">

         <div class="col-lg-12">
             <!-- Recent Sales -->
             <div class="card recent-sales overflow-auto">
                 <div class="card-body">
                     <div style="display:flex; align-items:center; justify-content:space-between;">
                         <h5 class="card-title">MOU </h5>
                         <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#mou_add_modal">
                             Add
                         </button>
                     </div>

                     <!-- Modal for Addition -->
                     <div class="modal fade" id="mou_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">MOU</h5>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                     <form class="w-60 p-4" action="insert.php" method="post">
                                         <div class="mb-3">
                                             <label for="mou_f" class="form-label"><strong>Add a new MOU</strong></label>
                                             <input type="text" class="form-control" id="mou_f" aria-describedby="emailHelp" name="title" placeholder="Enter MOU" required>
                                         </div>

                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-success" name="mou_sub">Add</button>
                                 </div>
                                 </form>
                             </div>
                         </div>
                     </div>

                     <table class="table table-borderless datatable">
                         <thead>
                             <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Title</th>
                                 <th scope="col" colspan="2">Actions</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $mou = $conn->prepare("SELECT * FROM mou WHERE dept_id = :id");
                                $mou->execute(array(
                                    ":id" => $_SESSION["dept_id"]
                                ));
                                $srn = 0;
                                while ($row = $mou->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                 <tr>
                                     <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                     <td><?php echo $row->title; ?></td>
                                     <td>
                                         <a href="index.php?mou_srn=<?php echo $row->id; ?>">
                                             <button class="btn btn-primary">Update</button>
                                         </a>
                                     </td>
                                     <td>
                                         <a href="index.php?mou_id=<?php echo $row->id; ?>">
                                             <button type="button" class="btn btn-danger">
                                                 Delete
                                             </button>
                                         </a>
                                     </td>
                                 </tr>

                             <?php
                                endwhile;
                                ?>

                         </tbody>
                     </table>

                 </div>

             </div>
         </div>

     </div>

 </section>
 <?php

    if (isset($_GET["mou_srn"])) : ?>

     <div id="mou_update_modal" class="modal" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">MOU Update</h5>
                     <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="mou_closemodal()">
                         <i class="bi bi-x-lg"></i>
                     </button>
                 </div>
                 <form action="insert.php" method="post" class="row g-3 needs-validation mt-2 mb-2 px-4 pb-4" novalidate>
                     <div class="modal-body">

                         <?php
                            $srn = $_GET["mou_srn"];

                            $mou = $conn->query("SELECT * FROM mou WHERE id = $srn");
                            $moufetch = $mou->fetch(PDO::FETCH_OBJ);
                            ?>

                         <div class="col-md-12">
                             <label for="name" class="form-label">Title</label>
                             <input type="text" class="form-control" name="title" value="<?php echo $moufetch->title ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>

                     </div>
                     <div class="modal-footer">
                         <button class="btn btn-primary" type="submit" name="mou_update">Update</button>
                         <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="mou_closemodal()">Close</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>

 <?php
    endif;
    ?>

 <section class="section dashboard achad_ach" style="display: none;" id="achad_ach">
     <div class="row">

         <div class="col-lg-12">
             <!-- Recent Sales -->
             <div class="card recent-sales overflow-auto">
                 <div class="card-body">
                     <div style="display:flex; align-items:center; justify-content:space-between;">
                         <h5 class="card-title">Achademic Achievements </h5>
                         <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#achad_ach_add_modal">
                             Add
                         </button>
                     </div>

                     <!-- Modal for Addition -->
                     <div class="modal fade" id="achad_ach_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Achademic Achievements</h5>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                     <form class="w-60 p-4" action="insert.php" method="post">
                                         <div class="mb-3">
                                             <label for="mou_f" class="form-label"><strong>Add a new Achademic Achievement</strong></label>
                                             <input type="text" class="form-control" id="mou_f" aria-describedby="emailHelp" name="name" placeholder="Enter Name" required>
                                             <input type="number" class="form-control my-3" id="mou_f" aria-describedby="emailHelp" name="year" placeholder="Enter Year" required>
                                             <input type="text" class="form-control" id="mou_f" aria-describedby="emailHelp" name="status" placeholder="Enter Status" required>
                                         </div>

                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-success" name="achad_ach_sub">Add</button>
                                 </div>
                                 </form>
                             </div>
                         </div>
                     </div>

                     <table class="table table-borderless datatable">
                         <thead>
                             <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Name of the Student</th>
                                 <th scope="col">Year</th>
                                 <th scope="col">Status</th>
                                 <th scope="col" colspan="2">Actions</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $stud_achie = $conn->prepare("SELECT * FROM stud_achievement WHERE dept_id = :id");
                                $stud_achie->execute(array(
                                    ":id" => $_SESSION["dept_id"]
                                ));
                                $srn = 0;
                                while ($row = $stud_achie->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                 <tr>
                                     <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                     <td><?php echo $row->name; ?></td>
                                     <td><?php echo $row->year; ?></td>
                                     <td><?php echo $row->status; ?></td>
                                     <td>
                                         <a href="index.php?achad_ach_srn=<?php echo $row->id; ?>">
                                             <button class="btn btn-primary">Update</button>
                                         </a>
                                     </td>
                                     <td>
                                         <a href="index.php?achad_ach_id=<?php echo $row->id; ?>">
                                             <button type="button" class="btn btn-danger">
                                                 Delete
                                             </button>
                                         </a>
                                     </td>
                                 </tr>


                             <?php
                                endwhile;
                                ?>

                         </tbody>
                     </table>

                 </div>

             </div>
         </div>

     </div>

 </section>

 <?php
    if (isset($_GET["achad_ach_srn"])) : ?>

     <div id="achad_ach_update_modal" class="modal" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Achademic Achievements Update</h5>
                     <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="achad_ach_closemodal()">
                         <i class="bi bi-x-lg"></i>
                     </button>
                 </div>
                 <form action="insert.php" method="post" class="row g-3 needs-validation mt-2 mb-2 px-4 pb-4" novalidate>
                     <div class="modal-body">

                         <?php
                            $srn = $_GET["achad_ach_srn"];

                            $achad_ach = $conn->query("SELECT * FROM stud_achievement WHERE id = $srn");
                            $achad_ach_fetch = $achad_ach->fetch(PDO::FETCH_OBJ);
                            ?>

                         <div class="col-md-12">
                             <label for="name" class="form-label">Name</label>
                             <input type="text" class="form-control mb-3" name="name" value="<?php echo $achad_ach_fetch->name ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="number" class="form-label">Year</label>
                             <input type="number" class="form-control mb-3" name="year" value="<?php echo $achad_ach_fetch->year ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="text" class="form-label">Status</label>
                             <input type="text" class="form-control mb-3" name="status" value="<?php echo $achad_ach_fetch->status ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>

                     </div>
                     <div class="modal-footer">
                         <button class="btn btn-primary" type="submit" name="achad_ach_update">Update</button>
                         <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="achad_ach_closemodal()">Close</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>

 <?php
    endif;
    ?>

 <section class="section dashboard other_ach" style="display: none;" id="other_ach">
     <div class="row">

         <div class="col-lg-12">
             <!-- Recent Sales -->
             <div class="card recent-sales overflow-auto">
                 <div class="card-body">
                     <div style="display:flex; align-items:center; justify-content:space-between;">
                         <h5 class="card-title">Other Achievements </h5>
                         <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#other_ach_add_modal">
                             Add
                         </button>
                     </div>

                     <!-- Modal for Addition -->
                     <div class="modal fade" id="other_ach_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Other Achievements</h5>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                     <form class="w-60 p-4" action="insert.php" method="post">
                                         <div class="mb-3">
                                             <label for="mou_f" class="form-label"><strong>Add a new Other Achievement</strong></label>
                                             <input type="text" class="form-control my-3" id="mou_f" aria-describedby="emailHelp" name="name" placeholder="Enter Name of the Student" required>
                                             <input type="text" class="form-control" id="mou_f" aria-describedby="emailHelp" name="competition" placeholder="Enter Competition" required>
                                             <input type="number" class="form-control my-3" id="mou_f" aria-describedby="emailHelp" name="year" placeholder="Enter Year" required>
                                             <input type="text" class="form-control" id="mou_f" aria-describedby="emailHelp" name="status" placeholder="Enter Status" required>
                                         </div>

                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-success" name="other_ach_sub">Add</button>
                                 </div>
                                 </form>
                             </div>
                         </div>
                     </div>

                     <table class="table table-borderless datatable">
                         <thead>
                             <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Competition</th>
                                 <th scope="col">Year</th>
                                 <th scope="col">Status</th>
                                 <th scope="col" colspan="2">Actions</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $other_ach = $conn->prepare("SELECT * FROM other_achievement WHERE dept_id = :id");
                                $other_ach->execute(array(
                                    ":id" => $_SESSION["dept_id"]
                                ));
                                $srn = 0;
                                while ($row = $other_ach->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                 <tr>
                                     <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                     <td><?php echo $row->name; ?></td>
                                     <td><?php echo $row->competition; ?></td>
                                     <td><?php echo $row->year; ?></td>
                                     <td><?php echo $row->status; ?></td>
                                     <td>
                                         <a href="index.php?other_ach_srn=<?php echo $row->id; ?>">
                                             <button class="btn btn-primary">Update</button>
                                         </a>
                                     </td>
                                     <td>
                                         <a href="index.php?other_ach_id=<?php echo $row->id; ?>">
                                             <button type="button" class="btn btn-danger">
                                                 Delete
                                             </button>
                                         </a>
                                     </td>
                                 </tr>

                             <?php
                                endwhile;
                                ?>

                         </tbody>
                     </table>

                 </div>

             </div>
         </div>

     </div>

 </section>

 <?php
    if (isset($_GET["other_ach_srn"])) : ?>

     <div id="other_ach_update_modal" class="modal" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Other Achievements Update</h5>
                     <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="other_ach_closemodal()">
                         <i class="bi bi-x-lg"></i>
                     </button>
                 </div>
                 <form action="insert.php" method="post" class="row g-3 needs-validation mt-2 mb-2 px-4 pb-4" novalidate>
                     <div class="modal-body">

                         <?php
                            $srn = $_GET["other_ach_srn"];

                            $other_ach = $conn->query("SELECT * FROM other_achievement WHERE id = $srn");
                            $other_ach_fetch = $other_ach->fetch(PDO::FETCH_OBJ);
                            ?>

                         <div class="col-md-12">
                             <label for="name" class="form-label">Name</label>
                             <input type="text" class="form-control mb-3" name="name" value="<?php echo $other_ach_fetch->name ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="name" class="form-label">Competition</label>
                             <input type="text" class="form-control mb-3" name="competition" value="<?php echo $other_ach_fetch->competition ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="number" class="form-label">Year</label>
                             <input type="number" class="form-control mb-3" name="year" value="<?php echo $other_ach_fetch->year ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>
                         <div class="col-md-12">
                             <label for="text" class="form-label">Status</label>
                             <input type="text" class="form-control mb-3" name="status" value="<?php echo $other_ach_fetch->status ?>" aria-describedby="inputGroupPrepend" required>

                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                             <div class="invalid-feedback">
                                 Please select a valid state.
                             </div>
                         </div>

                     </div>
                     <div class="modal-footer">
                         <button class="btn btn-primary" type="submit" name="other_ach_update">Update</button>
                         <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="other_ach_closemodal()">Close</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>

 <?php
    endif;
    ?>

 <?php
    if (isset($_GET["srn_d"]) || isset($_GET["ind_srn_d"]) || isset($_GET["result_analysis_srn_d"]) || isset($_GET["notes_srn_d"]) || isset($_GET["paper_srn_d"]) || isset($_GET["video_srn_d"]) || isset($_GET["academic_performance_srn_d"]) || isset($_GET["notice_srn_d"]) || isset($_GET["staff_ach_id"]) || isset($_GET["mou_id"]) || isset($_GET["achad_ach_id"]) || isset($_GET["other_ach_id"]) || isset($_GET["faculty_id"])) : ?>
     <div id="delete_modal" class="modal" tabindex="-1" role="dialog">
         <div class="modal-dialog modal-dialog-center" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Delete Confirmation</h5>

                     <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="del_closemodal()">
                         <i class="bi bi-x-lg"></i>
                     </button>
                 </div>
                 <div class="row g-3 needs-validation mx-2">
                     <div class="modal-body">
                         <div class="col-md-12 py-2">
                             <label for="delete" class="form-label">Are you sure to delete the records?</label> <br>
                         </div>

                     </div>
                     <div class="modal-footer">
                         <a href="index.php?aclose=true">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="del_closemodal()">Close</button>
                         </a>
                         <a href="delete.php?delete_confirm=1">
                             <button class="btn btn-danger">Delete</button>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 <?php
    endif;
    ?>

 <!-- end of Krishna ////////////////////////////////////////////////////////////////////////////////////////////////-->

 <script>
     let a = document.querySelector('.hod_desk');
     let b = document.querySelector('.notice');
     let c = document.querySelector('.timetable_d');
     let d = document.querySelector('.faculty');
     let e = document.querySelector('.staff_ach');
     let f = document.querySelector('.ind_visit');
     let g = document.querySelector('.mou');
     let h = document.querySelector('.result_analysis');
     let i = document.querySelector('.achad_ach');
     let j = document.querySelector('.other_ach');
     let k = document.querySelector('.study');


     function which_to_open() {
         //   window.location.reload();
         if (a.classList.contains("active")) {
             a.style.display = 'block';
             b.style.display = 'none';
             c.style.display = 'none';
             d.style.display = 'none';
             e.style.display = 'none';
             f.style.display = 'none';
             g.style.display = 'none';
             h.style.display = 'none';
             i.style.display = 'none';
             j.style.display = 'none';
             k.style.display = 'none';
         } else if (b.classList.contains("active")) {
             b.style.display = 'block';
             a.style.display = 'none';
             c.style.display = 'none';
             d.style.display = 'none';
             e.style.display = 'none';
             f.style.display = 'none';
             g.style.display = 'none';
             h.style.display = 'none';
             i.style.display = 'none';
             j.style.display = 'none';
             k.style.display = 'none';
         } else if (c.classList.contains("active")) {
             c.style.display = 'block';
             a.style.display = 'none';
             b.style.display = 'none';
             d.style.display = 'none';
             e.style.display = 'none';
             f.style.display = 'none';
             g.style.display = 'none';
             h.style.display = 'none';
             i.style.display = 'none';
             j.style.display = 'none';
             k.style.display = 'none';
         } else if (d.classList.contains("active")) {
             d.style.display = 'block';
             a.style.display = 'none';
             b.style.display = 'none';
             c.style.display = 'none';
             e.style.display = 'none';
             f.style.display = 'none';
             g.style.display = 'none';
             h.style.display = 'none';
             i.style.display = 'none';
             j.style.display = 'none';
             k.style.display = 'none';
         } else if (e.classList.contains("active")) {
             e.style.display = 'block';
             a.style.display = 'none';
             b.style.display = 'none';
             c.style.display = 'none';
             d.style.display = 'none';
             f.style.display = 'none';
             g.style.display = 'none';
             h.style.display = 'none';
             i.style.display = 'none';
             j.style.display = 'none';
             k.style.display = 'none';
         } else if (f.classList.contains("active")) {
             f.style.display = 'block';
             a.style.display = 'none';
             b.style.display = 'none';
             c.style.display = 'none';
             d.style.display = 'none';
             e.style.display = 'none';
             g.style.display = 'none';
             h.style.display = 'none';
             i.style.display = 'none';
             j.style.display = 'none';
             k.style.display = 'none';
         } else if (g.classList.contains("active")) {
             g.style.display = 'block';
             a.style.display = 'none';
             b.style.display = 'none';
             c.style.display = 'none';
             d.style.display = 'none';
             e.style.display = 'none';
             f.style.display = 'none';
             h.style.display = 'none';
             i.style.display = 'none';
             j.style.display = 'none';
             k.style.display = 'none';
         } else if (h.classList.contains("active")) {
             h.style.display = 'block';
             a.style.display = 'none';
             b.style.display = 'none';
             c.style.display = 'none';
             d.style.display = 'none';
             e.style.display = 'none';
             f.style.display = 'none';
             g.style.display = 'none';
             i.style.display = 'none';
             j.style.display = 'none';
             k.style.display = 'none';
         } else if (i.classList.contains("active")) {
             i.style.display = 'block';
             a.style.display = 'none';
             b.style.display = 'none';
             c.style.display = 'none';
             d.style.display = 'none';
             e.style.display = 'none';
             f.style.display = 'none';
             g.style.display = 'none';
             h.style.display = 'none';
             j.style.display = 'none';
             k.style.display = 'none';
         } else if (j.classList.contains("active")) {
             j.style.display = 'block';
             a.style.display = 'none';
             b.style.display = 'none';
             c.style.display = 'none';
             d.style.display = 'none';
             e.style.display = 'none';
             f.style.display = 'none';
             g.style.display = 'none';
             h.style.display = 'none';
             i.style.display = 'none';
             k.style.display = 'none';
         } else if (k.classList.contains("active")) {
             k.style.display = 'block';
             a.style.display = 'none';
             b.style.display = 'none';
             c.style.display = 'none';
             d.style.display = 'none';
             e.style.display = 'none';
             f.style.display = 'none';
             g.style.display = 'none';
             h.style.display = 'none';
             i.style.display = 'none';
             j.style.display = 'none';
         }
     }

     function hod_desk() {
         a.classList.add("active");
         b.classList.remove("active");
         c.classList.remove("active");
         d.classList.remove("active");
         e.classList.remove("active");
         f.classList.remove("active");
         g.classList.remove("active");
         h.classList.remove("active");
         i.classList.remove("active");
         j.classList.remove("active");
         which_to_open();
     }

     function notice() {
         b.classList.add('active');
         a.classList.remove('active');
         c.classList.remove('active');
         d.classList.remove('active');
         e.classList.remove('active');
         f.classList.remove('active');
         g.classList.remove('active');
         h.classList.remove('active');
         i.classList.remove('active');
         j.classList.remove('active');
         which_to_open();
     }

     function timetable_details() {
         c.classList.add('active');
         a.classList.remove('active');
         b.classList.remove('active');
         d.classList.remove("active");
         e.classList.remove("active");
         f.classList.remove('active');
         g.classList.remove('active');
         h.classList.remove('active');
         i.classList.remove('active');
         j.classList.remove('active');
         which_to_open();
     }

     function faculty() {
         d.classList.add('active');
         a.classList.remove('active');
         b.classList.remove('active');
         c.classList.remove('active');
         e.classList.remove("active");
         f.classList.remove("active");
         g.classList.remove('active');
         h.classList.remove('active');
         i.classList.remove('active');
         j.classList.remove('active');
         which_to_open();
     }

     function staff_ach() {
         e.classList.add('active');
         a.classList.remove('active');
         b.classList.remove('active');
         c.classList.remove('active');
         d.classList.remove('active');
         f.classList.remove('active');
         g.classList.remove('active');
         h.classList.remove('active');
         i.classList.remove('active');
         j.classList.remove('active');
         which_to_open();
     }

     function ind_visit() {
         f.classList.add('active');
         a.classList.remove('active');
         b.classList.remove('active');
         c.classList.remove('active');
         d.classList.remove('active');
         e.classList.remove('active');
         g.classList.remove('active');
         h.classList.remove('active');
         i.classList.remove('active');
         j.classList.remove('active');
         which_to_open();
     }

     function mou() {
         g.classList.add('active');
         a.classList.remove('active');
         b.classList.remove('active');
         c.classList.remove('active');
         d.classList.remove('active');
         e.classList.remove('active');
         f.classList.remove('active');
         h.classList.remove('active');
         i.classList.remove('active');
         j.classList.remove('active');
         which_to_open();
     }

     function result_analysis() {
         h.classList.add('active');
         a.classList.remove('active');
         b.classList.remove('active');
         c.classList.remove('active');
         d.classList.remove('active');
         e.classList.remove('active');
         f.classList.remove('active');
         g.classList.remove('active');
         i.classList.remove('active');
         j.classList.remove('active');
         which_to_open();
     }


     function achad_ach() {
         i.classList.add('active');
         a.classList.remove('active');
         b.classList.remove('active');
         c.classList.remove('active');
         d.classList.remove('active');
         e.classList.remove('active');
         f.classList.remove('active');
         g.classList.remove('active');
         h.classList.remove('active');
         j.classList.remove('active');
         which_to_open();
     }

     function other_ach() {
         j.classList.add('active');
         a.classList.remove('active');
         b.classList.remove('active');
         c.classList.remove('active');
         d.classList.remove('active');
         e.classList.remove('active');
         f.classList.remove('active');
         g.classList.remove('active');
         i.classList.remove('active');
         which_to_open();
     }

     function study() {
         k.classList.add('active');
         a.classList.remove('active');
         b.classList.remove('active');
         c.classList.remove('active');
         d.classList.remove('active');
         e.classList.remove('active');
         f.classList.remove('active');
         g.classList.remove('active');
         i.classList.remove('active');
         j.classList.remove('active');
         which_to_open();
     }
 </script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>



 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" /> -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script type="text/javascript">
     window.onload = function() {
         OpenBootstrapPopup();
     };

     function OpenBootstrapPopup() {
         $("#simpleModal").modal('show');
         $("#ind_visit_update_modal").modal('show');
         $("#staff_ach_update_modal").modal('show');
         $("#mou_update_modal").modal('show');
         $("#achad_ach_update_modal").modal('show');
         $("#other_ach_update_modal").modal('show');
         $("#result_analysis_update_modal").modal('show');
         $("#notes_update_modal").modal('show');
         $("#paper_update_modal").modal('show');
         $("#video_update_modal").modal('show');
         $("#academic_performance_update_modal").modal('show');
         $("#notice_update_modal").modal('show');
         $("#faculty_update_modal").modal('show');
         $("#delete_modal").modal('show');
     }

     function closemodal() {
         $("#simpleModal").modal('hide');
         timetable_details();
     }

     function ind_closemodal() {
         $("#ind_visit_update_modal").modal('hide');
         ind_visit();
     }

     function result_analysis_closemodal() {
         $("#result_analysis_update_modal").modal('hide');
         result_analysis();
     }

     function notes_closemodal() {
         $("#notes_update_modal").modal('hide');
         study();
     }

     function paper_closemodal() {
         $("#paper_update_modal").modal('hide');
         study();
     }

     function video_closemodal() {
         $("#video_update_modal").modal('hide');
         study();
     }

     function academic_performance_closemodal() {
         $("#academic_performance_update_modal").modal('hide');
         result_analysis();
     }

     function notice_closemodal() {
         $("#notice_update_modal").modal('hide');
         notice();
     }

     function staff_ach_closemodal() {
         $("#staff_ach_update_modal").modal('hide');
         staff_ach();
     }

     function mou_closemodal() {
         $("#mou_update_modal").modal('hide');
         mou();
     }

     function achad_ach_closemodal() {
         $("#achad_ach_update_modal").modal('hide');
         achad_ach();
     }

     function other_ach_closemodal() {
         $("#other_ach_update_modal").modal('hide');
         other_ach();
     }

     function faculty_closemodal() {
         $("#faculty_update_modal").modal('hide');
         faculty();
     }

     function del_closemodal() {
         $("#delete_modal").modal('hide');
     }
 </script>