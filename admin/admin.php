  <!-- main admin page -->


  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
          <a href="index.php" class="logo d-flex align-items-center">
              <!-- <img src="assets/img/logo.png" alt=""> -->
              <!-- <img src="../framework-assets/img/logo_entire.png" alt="" style="width: 10vw;"> -->

              <span class="d-none d-lg-block">DashBoard</span>
          </a>
          <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->

      <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">

              <li class="nav-item dropdown pe-3">

                  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                      <!-- <img src="assets/img/profile-img.jpg" alt="profile" class="rounded-circle"> -->
                      <span class="dropdown-toggle ps-2">

                          admin

                      </span>
                  </a><!-- End Profile Iamge Icon -->

                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                      <li class="dropdown-header">
                          <h6>Admin</h6>
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
              <ul id="forms-nav" class="nav-content">
                  <li>
                      <a href="index.php#new_admin" onclick="new_admin()">
                          <i class="bi bi-circle"></i><span>New Admin User</span>
                      </a>
                  </li>

              </ul>


          </li><!-- End Dashboard Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#hp-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
                  <i class="bi bi-menu-button-wide"></i><span>Home Page</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="hp-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="index.php#carousel" onclick="carousel()">
                          <i class="bi bi-circle"></i><span>Home Page Carousel</span>
                      </a>
                  </li>
                  <li>
                      <a href="index.php#head_section" onclick="head_section()">
                          <i class="bi bi-circle"></i><span>Home Page Head</span>
                      </a>
                  </li>

              </ul>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#about-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
                  <i class="bi bi-menu-button-wide"></i><span>About Page</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="about-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="index.php#principal_desk" onclick="principal_desk()">
                          <i class="bi bi-circle"></i><span>Principal desk</span>
                      </a>
                  </li>



              </ul>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#as-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
                  <i class="bi bi-menu-button-wide"></i><span>Academic</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="as-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">

                  <li>
                      <a href="index.php#ac" onclick="ac()">
                          <i class="bi bi-circle"></i><span>Academic Calender</span>
                      </a>
                  </li>


              </ul>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#ad-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
                  <i class="bi bi-menu-button-wide"></i><span>Admission</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="ad-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="index.php#program" onclick="program()">
                          <i class="bi bi-circle"></i><span>Program Offered</span>
                      </a>
                  </li>

              </ul>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#ss-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
                  <i class="bi bi-menu-button-wide"></i><span>Student Section</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="ss-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">

                  <li>
                      <a href="index.php#grievances" onclick="grievances()">
                          <i class="bi bi-circle"></i><span>Grievances</span>
                      </a>
                  </li>

                  <li>
                      <a href="index.php#scholarship" onclick="scholarship()">
                          <i class="bi bi-circle"></i><span>Scholarship</span>
                      </a>
                  </li>

                  <li>
                      <a href="index.php#form" onclick="form()">
                          <i class="bi bi-circle"></i><span>Application Form</span>
                      </a>
                  </li>

              </ul>
          </li>

          <li class="nav-item">
              <a class="nav-link " href="index.php">
                  <i class="bi bi-grid"></i>
                  <span>Department Updates</span>
              </a>

              <ul id="forms-nav" class="nav-content">
                  <li>
                      <a href="index.php#a_dept" onclick="a_dept()">
                          <i class="bi bi-circle"></i><span>Select Department</span>
                      </a>
                  </li>
                  <li>
                      <a href="index.php#dept_password" onclick="dept_password()">
                          <i class="bi bi-circle"></i><span>Update Password</span>
                      </a>
                  </li>
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

                  <!-- <li>
                <a href="index.php#hod" onclick="pwc()">
                    <i class="bi bi-circle"></i><span>Program Wise Committee (PWC)</span>
                </a>
            </li> -->
              </ul>

              <div style="margin-top: 10vh;">
              </div>


          </li><!-- End Dashboard Nav -->

      </ul>

  </aside>
  <!-- End Sidebar-->


  <section class="section dashboard a_dept" style="display: none;" id="a_dept">
      <div class="row">

          <div class="col-lg-6">
              <form action="index.php" method="post" class="card row g-3 needs-validation mt-2 mb-2 px-4 pb-4" novalidate>
                  <div class="d-flex justify-content-center py-4">
                      <a href="#" class="logo d-flex align-items-center w-auto">
                          <span class="d-lg-block">Department Updates</span>
                      </a>
                  </div>
                  <div class="col-md-12">
                      <label for="department" class="form-label">Department</label>
                      <select class="form-select" id="department" name="department" required>
                          <option selected disabled value="">Choose...</option>
                          <?php
                            $department = $conn->query("SELECT * FROM staff_admin");
                            while ($rows = $department->fetch(PDO::FETCH_ASSOC)) {
                                echo '<option value="' . $rows['id'] . '" name="department">' . $rows['dept'] . '</option>';
                            }
                            ?>

                      </select>
                      <div class="valid-feedback">
                          Looks good!
                      </div>
                      <div class="invalid-feedback">
                          Please select a valid state.
                      </div>
                  </div>

                  <div class="col-md-12">
                      <button class="btn btn-primary w-100" type="submit" name="admin_notice">Update Department</button>
                  </div>
              </form>
          </div>
      </div>


  </section>

  <section class="section dashboard new_admin" style="display: none;" id="new_admin">

      <div class="row">

          <div class="col-lg-12">
              <!-- Recent Sales -->
              <div class="card recent-sales overflow-auto">

                  <div class="card-body">
                      <div style="display:flex; align-items:center; justify-content:space-between;">
                          <h5 class="card-title">Admin User</h5>
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#admin_add_modal">
                              Add
                          </button>
                      </div>

                      <!-- Modal for timetable add -->
                      <div class="modal fade" id="admin_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">New Admin</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <form class="w-60 p-4" action="insert.php" method="post" novalidate>
                                          <div class="mb-3">
                                              <label for="name" class="form-label"><strong>Username</strong></label>
                                              <input type="text" class="form-control" name="name" placeholder="username" required>
                                          </div>

                                          <style>
                                              .wrong .bi-check-lg {
                                                  display: none;
                                              }

                                              .good .bi-x-lg {
                                                  display: none;
                                              }
                                          </style>

                                          <div class="col-md-12">
                                              <label for="password" class="form-label">Password</label>
                                              <div class="d-flex">

                                                  <input type="password" class="form-control" id="password-input" name="password" placeholder="set a strong password" required>
                                              </div>
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

                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-success" name="new_admin">Add</button>
                                  </div>
                                  </form>
                              </div>
                          </div>
                      </div>

                      <table class="table table-borderless datatable">
                          <thead>
                              <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Username</th>
                                  <th scope="col" colspan="2">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                $new_admin = $conn->query("SELECT * FROM admin WHERE 1");
                                $srn = 0;
                                while ($row = $new_admin->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                  <tr>
                                      <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                      <td><?php echo $row->username; ?></td>
                                      <td>
                                          <a href="index.php?new_admin_srn=<?php echo $row->id; ?>">
                                              <button class="btn btn-primary">Update</button>
                                          </a>
                                      </td>
                                      <!-- <td>
                                          <a href="index.php?new_admin_srn_d=<?php echo $row->id; ?>">
                                              <button class="btn btn-danger">Delete</button>
                                          </a>
                                      </td> -->
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
    if (isset($_GET["new_admin_srn"])) : ?>

      <div id="new_admin_update_modal" class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Admin User Update</h5>
                      <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="new_admin_closemodal()">
                          <i class="bi bi-x-lg"></i>
                      </button>
                  </div>
                  <form action="insert.php" method="POST" class="row needs-validation mt-2 mb-2 px-4 pb-4">
                      <div class="modal-body">

                          <div class="col-md-12 py-2">
                              <label for="password" class="form-label">current password</label>
                              <input type="password" class="form-control" name="pre_password" placeholder="current password" aria-describedby="inputGroupPrepend" required>

                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                              <div class="invalid-feedback">
                                  Please select a valid state.
                              </div>
                          </div>


                          </style>
                          <div class="col-md-12 py-2">
                              <label for="password" class="form-label">Set New Password</label>
                              <input type="password" class="form-control" name="password" placeholder="set a strong password" required>
                              <div class="invalid-feedback">
                                  Please provide a valid password.
                              </div>
                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                          </div>

                          <div class="col-md-12 py-2">
                              <label for="date" class="form-label">Confirm password</label>
                              <input type="password" class="form-control" name="cpassword" placeholder="confirm password" aria-describedby="inputGroupPrepend" required>

                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                              <div class="invalid-feedback">
                                  Please select a valid state.
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" name="new_admin_update">Update Password</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="new_admin_closemodal()">Close</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>

  <?php
    endif;
    ?>

  <section class="section dashboard dept_password" style="display: none;" id="dept_password">
      <div class="row">

          <div class="col-lg-12">
              <!-- Recent Sales -->
              <div class="card recent-sales overflow-auto">

                  <div class="card-body">
                      <div style="display:flex; align-items:center; justify-content:space-between;">
                          <h5 class="card-title">Department User</h5>
                          <!-- <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#dept_add_modal">
                              Add
                          </button> -->
                      </div>

                      <!-- Modal for timetable add -->
                      <!-- <div class="modal fade" id="dept_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">New Department</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <form class="w-60 p-4" action="insert.php" method="post">
                                          <div class="mb-3">
                                              <label for="name" class="form-label"><strong>Department Name</strong></label>
                                              <input type="text" class="form-control" name="dept" placeholder="Industry Name" required>
                                          </div>

                                          <div class="col-md-12">
                                              <label for="password" class="form-label">Password</label>
                                              <div class="d-flex">

                                                  <input type="password" class="form-control" name="password" placeholder="set a strong password" required>
                                              </div>
                                              <div class="invalid-feedback">
                                                  Please provide a valid password.
                                              </div>
                                              <div class="valid-feedback">
                                                  Looks good!
                                              </div>
                                          </div>

                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-success" name="new_dept">Add</button>
                                  </div>
                                  </form>
                              </div>
                          </div>
                      </div> -->

                      <table class="table table-borderless datatable">
                          <thead>
                              <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Department name</th>
                                  <th scope="col" colspan="2">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                $staff_admin = $conn->query("SELECT * FROM staff_admin WHERE 1");
                                $srn = 0;
                                while ($row = $staff_admin->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                  <tr>
                                      <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                      <td><?php echo $row->dept; ?></td>
                                      <td>
                                          <a href="index.php?dept_srn=<?php echo $row->id; ?>">
                                              <button class="btn btn-primary">Update</button>
                                          </a>
                                      </td>
                                      <!-- <td>
                                          <a href="index.php?dept_srn_d=<?php echo $row->id; ?>">
                                              <button class="btn btn-danger">Delete</button>
                                          </a>
                                      </td> -->
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
    if (isset($_GET["dept_srn"])) : ?>

      <div id="dept_update_modal" class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Department User Update</h5>
                      <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="dept_closemodal()">
                          <i class="bi bi-x-lg"></i>
                      </button>
                  </div>
                  <form action="insert.php" method="POST" class="row needs-validation mt-2 mb-2 px-4 pb-4">
                      <div class="modal-body">

                          <div class="col-md-12 py-2">
                              <label for="password" class="form-label">current password</label>
                              <input type="password" class="form-control" name="pre_password" aria-describedby="inputGroupPrepend" required>

                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                              <div class="invalid-feedback">
                                  Please select a valid state.
                              </div>
                          </div>


                          </style>
                          <div class="col-md-12 py-2">
                              <label for="password" class="form-label">Set New Password</label>
                              <input type="password" class="form-control" name="password" placeholder="set a strong password" required>
                              <div class="invalid-feedback">
                                  Please provide a valid password.
                              </div>
                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                          </div>

                          <div class="col-md-12 py-2">
                              <label for="date" class="form-label">Confirm password</label>
                              <input type="password" class="form-control" name="cpassword" aria-describedby="inputGroupPrepend" required>

                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                              <div class="invalid-feedback">
                                  Please select a valid state.
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" name="dept_update">Update Password</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="dept_closemodal()">Close</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>

  <?php
    endif;
    ?>


  <section class="section dashboard carousel" style="display: none;" id="carousel">

      <div class="row">

          <div class="col-lg-12">
              <!-- Recent Sales -->
              <div class="card recent-sales overflow-auto">

                  <div class="card-body">
                      <div style="display:flex; align-items:center; justify-content:space-between;">
                          <h5 class="card-title">carousel</h5>
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#carousel_add_modal">
                              Add
                          </button>
                      </div>

                      <!-- Modal for timetable add -->
                      <div class="modal fade" id="carousel_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Carousel</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <form class="w-60 p-4" action="insert.php" method="post" enctype="multipart/form-data">
                                          <div class="mb-3">
                                              <label for="name" class="form-label"><strong>image</strong></label>
                                              <input type="file" class="form-control" name="carousel_image" required>
                                              <div class="invalid-feedback">
                                                  Please provide a valid password.
                                              </div>
                                              <div class="valid-feedback">
                                                  Looks good!
                                              </div>
                                          </div>

                                          <div class="col-md-12 my-2">
                                              <label for="password" class="form-label">title</label>
                                              <input type="text" class="form-control" name="title" required>
                                              <div class="invalid-feedback">
                                                  Please provide a valid password.
                                              </div>
                                              <div class="valid-feedback">
                                                  Looks good!
                                              </div>
                                          </div>

                                          <div class="col-md-12 my-2">
                                              <label for="password" class="form-label">description</label>
                                              <input type="text" class="form-control" name="description" required>
                                              <div class="invalid-feedback">
                                                  Please provide a valid password.
                                              </div>
                                              <div class="valid-feedback">
                                                  Looks good!
                                              </div>
                                          </div>



                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-success" name="carousel_add">Add</button>
                                  </div>
                                  </form>
                              </div>
                          </div>
                      </div>

                      <table class="table table-borderless datatable">
                          <thead>
                              <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">image</th>
                                  <th scope="col">Title</th>
                                  <th scope="col">Description</th>
                                  <th scope="col" colspan="2">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                $carousel = $conn->query("SELECT * FROM carousel WHERE 1");
                                $srn = 0;
                                while ($row = $carousel->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                  <tr>
                                      <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                      <td><img src="<?php echo "../" . $row->image; ?>" alt="" style="width:150px"></td>
                                      <td><?php echo $row->title; ?></td>
                                      <td><?php echo $row->description; ?></td>
                                      <td>
                                          <a href="index.php?carousel_srn=<?php echo $row->id; ?>">
                                              <button class="btn btn-primary">Update</button>
                                          </a>
                                      </td>
                                      <td>
                                          <a href="index.php?carousel_srn_d=<?php echo $row->id; ?>">
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
    if (isset($_GET["carousel_srn"])) : ?>

      <div id="carousel_update_modal" class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Carousel Update</h5>
                      <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="carousel_closemodal()">
                          <i class="bi bi-x-lg"></i>
                      </button>
                  </div>
                  <form action="insert.php" method="POST" enctype="multipart/form-data" class="row needs-validation mt-2 mb-2 px-4 pb-4">
                      <div class="modal-body">

                          <?php
                            $srn = $_GET["carousel_srn"];

                            $carousel = $conn->query("SELECT * FROM carousel WHERE id = $srn");
                            $carousel_fetch = $carousel->fetch(PDO::FETCH_OBJ);
                            ?>

                          <div class="col-md-12 py-2">
                              <label for="password" class="form-label">Image</label> <br>
                              <img src="<?php echo "../" . $carousel_fetch->image ?>" frameborder="0" style="width: 300px;"> <br>
                              <input type="file" class="form-control" name="carousel_image" aria-describedby="inputGroupPrepend" required>

                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                              <div class="invalid-feedback">
                                  Please select a valid state.
                              </div>
                          </div>


                          </style>
                          <div class="col-md-12 py-2">
                              <label for="password" class="form-label">Title</label>
                              <input type="text" class="form-control" name="title" value="<?php echo $carousel_fetch->title; ?>" required>
                              <div class="invalid-feedback">
                                  Please provide a valid password.
                              </div>
                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                          </div>

                          <div class="col-md-12 py-2">
                              <label for="date" class="form-label">Description</label>
                              <input type="text" class="form-control" name="description" value="<?php echo $carousel_fetch->description; ?>" aria-describedby="inputGroupPrepend" required>

                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                              <div class="invalid-feedback">
                                  Please select a valid state.
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" name="carousel_update">Update Carousel</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="carousel_closemodal()">Close</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>

  <?php
    endif;
    ?>

  <section class="section dashboard head_section" style="display: none;" id="head_section">

      <div class="row">

          <div class="col-lg-12">
              <!-- Recent Sales -->
              <div class="card recent-sales overflow-auto">

                  <div class="card-body">
                      <div style="display:flex; align-items:center; justify-content:space-between;">
                          <h5 class="card-title">Head Section</h5>
                          <!-- <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#head_add_modal">
                              Add
                          </button> -->
                      </div>

                      <table class="table table-borderless datatable">
                          <thead>
                              <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">image</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Designation</th>
                                  <th scope="col">Description</th>
                                  <th scope="col" colspan="2">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                $head = $conn->query("SELECT * FROM head WHERE 1");
                                $srn = 0;
                                while ($row = $head->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                  <tr>
                                      <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                      <td><img src="<?php echo "../" . $row->image; ?>" alt="" style="width:150px"></td>
                                      <td><?php echo $row->name; ?></td>
                                      <td><?php echo $row->designation; ?></td>
                                      <td><?php echo $row->description; ?></td>
                                      <td>
                                          <a href="index.php?head_srn=<?php echo $row->id; ?>">
                                              <button class="btn btn-primary">Update</button>
                                          </a>
                                      </td>
                                      <!-- <td>
                                          <a href="index.php?head_srn_d=<?php echo $row->id; ?>">
                                              <button class="btn btn-danger">Delete</button>
                                          </a>
                                      </td> -->
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
    if (isset($_GET["head_srn"])) : ?>

      <div id="head_update_modal" class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Head Update</h5>
                      <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="head_closemodal()">
                          <i class="bi bi-x-lg"></i>
                      </button>
                  </div>
                  <form action="insert.php" method="POST" enctype="multipart/form-data" class="row needs-validation mt-2 mb-2 px-4 pb-4">
                      <div class="modal-body">

                          <?php
                            $srn = $_GET["head_srn"];

                            $head = $conn->query("SELECT * FROM head WHERE id = $srn");
                            $head_fetch = $head->fetch(PDO::FETCH_OBJ);
                            ?>

                          <div class="col-md-12 py-2">
                              <label for="password" class="form-label">Head Image</label> <br>
                              <img src="<?php echo "../" . $head_fetch->image ?>" frameborder="0" style="width: 300px;"> <br>
                              <input type="file" class="form-control" name="head_image" aria-describedby="inputGroupPrepend" required>

                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                              <div class="invalid-feedback">
                                  Please select a valid state.
                              </div>
                          </div>


                          </style>
                          <div class="col-md-12 py-2">
                              <label for="password" class="form-label">Name</label>
                              <input type="text" class="form-control" name="name" value="<?php echo $head_fetch->name; ?>" required>
                              <div class="invalid-feedback">
                                  Please provide a valid password.
                              </div>
                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                          </div>

                          <div class="col-md-12 py-2">
                              <label for="date" class="form-label">Designation</label>
                              <input type="text" class="form-control" name="desig" value="<?php echo $head_fetch->designation; ?>" aria-describedby="inputGroupPrepend" required>

                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                              <div class="invalid-feedback">
                                  Please select a valid state.
                              </div>
                          </div>

                          <div class="col-md-12 py-2">
                              <label for="date" class="form-label">Description</label>
                              <input type="text" class="form-control" name="description" value="<?php echo $head_fetch->description; ?>" aria-describedby="inputGroupPrepend" required>

                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                              <div class="invalid-feedback">
                                  Please select a valid state.
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" name="head_update">Update Head</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="head_closemodal()">Close</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>

  <?php
    endif;
    ?>


  <section class="section dashboard principal_desk" style="display: none;" id="principal_desk">

      <div class="row">

          <div class="col-lg-12">
              <!-- Recent Sales -->
              <div class="card recent-sales overflow-auto">

                  <div class="card-body">
                      <div style="display:flex; align-items:center; justify-content:space-between;">
                          <h5 class="card-title">Principal Desk</h5>
                      </div>



                      <table class="table table-borderless datatable">
                          <thead>
                              <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">image</th>
                                  <th scope="col">Name</th>
                                  <!-- <th scope="col">Designation</th> -->
                                  <th scope="col">Description</th>
                                  <th scope="col" colspan="2">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                $head = $conn->query("SELECT * FROM head WHERE principal_desk_desc != ''");
                                $srn = 0;
                                while ($row = $head->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                  <tr>
                                      <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                      <td><img src="<?php echo "../" . $row->image; ?>" alt="" style="width:150px"></td>
                                      <td><?php echo $row->name; ?></td>
                                      <!-- <td><?php echo $row->designation; ?></td> -->
                                      <td><?php echo $row->principal_desk_desc; ?></td>
                                      <td>
                                          <a href="index.php?prn_desk_srn=<?php echo $row->id; ?>">
                                              <button class="btn btn-primary">Update</button>
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
    if (isset($_GET["prn_desk_srn"])) : ?>

      <div id="prn_desk_update_modal" class="modal fade" data-bs-backdrop="static" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Principal Desk Update</h5>
                      <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="prn_desk_closemodal()">
                          <i class="bi bi-x-lg"></i>
                      </button>
                  </div>
                  <form action="insert.php" method="POST" enctype="multipart/form-data" class="row needs-validation mt-2 mb-2 px-4 pb-4">
                      <div class="modal-body">

                          <?php
                            $srn = $_GET["prn_desk_srn"];

                            $head = $conn->query("SELECT * FROM head WHERE id = $srn");
                            $head_fetch = $head->fetch(PDO::FETCH_OBJ);
                            ?>

                          <div class="col-md-12 py-2">
                              <label for="password" class="form-label">Head Image</label> <br>
                              <img src="<?php echo "../" . $head_fetch->image ?>" frameborder="0" style="width: 300px;"> <br>
                              <input type="file" class="form-control" name="head_image" aria-describedby="inputGroupPrepend">

                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                              <div class="invalid-feedback">
                                  Please select a valid state.
                              </div>
                          </div>


                          </style>
                          <div class="col-md-12 py-2">
                              <label for="password" class="form-label">Name</label>
                              <input type="text" class="form-control" name="name" value="<?php echo $head_fetch->name; ?>">
                              <div class="invalid-feedback">
                                  Please provide a valid password.
                              </div>
                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                          </div>

                          <div class="col-md-12 py-2">
                              <label for="date" class="form-label">Principal Desk Description</label>
                              <textarea class="form-control" name="description" cols="10" value="<?php echo $head_fetch->principal_desk_desc; ?>"><?php echo $head_fetch->principal_desk_desc; ?></textarea>

                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                              <div class="invalid-feedback">
                                  Please select a valid state.
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" name="prn_desk_update">Update Principal Desk</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="prn_desk_closemodal()">Close</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>

  <?php
    endif;
    ?>


  <?php
    if (isset($_GET["new_admin_srn_d"]) || isset($_GET["dept_srn_d"]) || isset($_GET["carousel_srn_d"]) || isset($_GET["scholarship_srn_d"]) || isset($_GET["form_srn_d"]) || isset($_GET["head_srn_d"]) ||  isset($_GET["ac_srn_d"]) || isset($_GET["grievances_d"]) || isset($_GET["delete_all_notice"])) : ?>
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

  <section class="section dashboard grievances" style="display: none;" id="grievances">

      <div class="row">

          <div class="col-lg-12">
              <!-- Recent Sales -->
              <div class="card recent-sales overflow-auto">

                  <div class="card-body">
                      <div style="display:flex; align-items:center; justify-content:space-between;">
                          <h5 class="card-title">Grievances</h5>
                          <!-- <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#admin_add_modal">
                              Add
                          </button> -->
                      </div>



                      <table class="table table-borderless datatable">
                          <thead>
                              <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Mobile</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Compliant</th>
                                  <th scope="col">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                $grievances = $conn->query("SELECT * FROM grievances WHERE 1");
                                $srn = 0;
                                while ($row = $grievances->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                  <tr>
                                      <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                      <td><?php echo $row->name; ?></td>
                                      <td><?php echo $row->mobile; ?></td>
                                      <td><?php echo $row->email; ?></td>
                                      <td><?php echo $row->compliant; ?></td>
                                      <td>
                                          <a href="index.php?grievances_d=<?php echo $row->srn; ?>">
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


  <section class="section dashboard ac" style="display: none;" id="ac">

      <div class="row">

          <div class="col-lg-12">
              <!-- Recent Sales -->
              <div class="card recent-sales overflow-auto">

                  <div class="card-body">
                      <div style="display:flex; align-items:center; justify-content:space-between;">
                          <h5 class="card-title">Academic Calender</h5>
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ac_add_modal">
                              Add
                          </button>
                      </div>

                      <!-- Modal for timetable add -->
                      <div class="modal fade" id="ac_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">New Academic Calender</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <form class="w-60 p-4" action="insert.php" method="post">
                                          <div class="mb-3">
                                              <label for="name" class="form-label"><strong>Academic Year</strong></label>
                                              <input type="text" class="form-control" name="year" required>
                                              <div class="invalid-feedback">
                                                  Please provide a valid password.
                                              </div>
                                              <div class="valid-feedback">
                                                  Looks good!
                                              </div>
                                          </div>
                                          <div class="col-md-12 py-2">
                                              <label for="date" class="form-label"><strong>Academic Calender Drive Link</strong></label>
                                              <input type="url" class="form-control" name="link" aria-describedby="inputGroupPrepend" required>

                                              <div class="valid-feedback">
                                                  Looks good!
                                              </div>
                                              <div class="invalid-feedback">
                                                  Please select a valid state.
                                              </div>
                                          </div>

                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-success" name="ac_add">Add</button>
                                  </div>
                                  </form>
                              </div>
                          </div>
                      </div>

                      <table class="table table-borderless datatable">
                          <thead>
                              <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Academic Year</th>
                                  <th scope="col">Academic Calender</th>
                                  <th scope="col" colspan="2">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                $ac = $conn->query("SELECT * FROM academic_calender ORDER BY srn DESC");
                                $srn = 0;
                                while ($row = $ac->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                  <tr>
                                      <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                      <th scope="row"><a href="#"><?php echo $row->year; ?></a></th>
                                      <td>
                                          <a href="<?php echo "../" . $row->calender; ?>" target="_blank">
                                              Academic Calender
                                          </a>
                                      </td>
                                      <td>
                                          <a href="index.php?ac_srn=<?php echo $row->srn; ?>">
                                              <button class="btn btn-primary">update</button>
                                          </a>
                                      </td>
                                      <td>
                                          <a href="index.php?ac_srn_d=<?php echo $row->srn; ?>">
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
    if (isset($_GET["ac_srn"])) : ?>

      <div id="ac_update_modal" class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Academic Calender Update</h5>
                      <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="ac_closemodal()">
                          <i class="bi bi-x-lg"></i>
                      </button>
                  </div>
                  <form action="insert.php" method="POST" enctype="multipart/form-data" class="row needs-validation mt-2 mb-2 px-4 pb-4">
                      <div class="modal-body">


                          <?php
                            $srn = $_GET["ac_srn"];

                            $ac = $conn->query("SELECT * FROM academic_calender WHERE srn = $srn");
                            $ac_fetch = $ac->fetch(PDO::FETCH_OBJ);
                            ?>



                          <div class="mb-3">
                              <label for="name" class="form-label"><strong>Academic Year</strong></label>
                              <input type="text" class="form-control" name="year" value="<?php echo $ac_fetch->year; ?>" required>
                              <div class="invalid-feedback">
                                  Please provide a valid password.
                              </div>
                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                          </div>


                          <div class="col-md-12 py-2">
                              <label for="date" class="form-label">Academic Calender Drive Link</label>
                              <input type="url" class="form-control" name="link" aria-describedby="inputGroupPrepend" value="<?php echo $ac_fetch->calender; ?>" required>

                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                              <div class="invalid-feedback">
                                  Please select a valid state.
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" name="ac_update">Update Calender</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="ac_closemodal()">Close</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>

  <?php
    endif;
    ?>




  <section class="section dashboard program" style="display: none;" id="program">

      <div class="row">

          <div class="col-lg-12">
              <!-- Recent Sales -->
              <div class="card recent-sales overflow-auto">

                  <div class="card-body">
                      <div style="display:flex; align-items:center; justify-content:space-between;">
                          <h5 class="card-title">Program Offered</h5>

                      </div>



                      <table class="table table-borderless datatable">
                          <thead>
                              <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Year of Commencement </th>
                                  <th scope="col">Intake</th>
                                  <th scope="col">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                $program = $conn->query("SELECT * FROM programs WHERE 1");
                                $srn = 0;
                                while ($row = $program->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                  <tr>
                                      <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                      <td><?php echo $row->name; ?></td>
                                      <td><?php echo $row->year; ?></td>
                                      <td><?php echo $row->intake; ?></td>
                                      <td>
                                          <a href="index.php?program_srn=<?php echo $row->srn; ?>">
                                              <button class="btn btn-primary">update</button>
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
    if (isset($_GET["program_srn"])) : ?>

      <div id="program_update_modal" class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Program Offered Update</h5>
                      <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="program_closemodal()">
                          <i class="bi bi-x-lg"></i>
                      </button>
                  </div>
                  <form action="insert.php" method="POST" enctype="multipart/form-data" class="row needs-validation mt-2 mb-2 px-4 pb-4">
                      <div class="modal-body">


                          <?php
                            $id = $_GET["program_srn"];
                            $program = $conn->query("SELECT * FROM programs WHERE srn = '$id'");
                            $srn = 0;
                            while ($row = $program->fetch(PDO::FETCH_OBJ)) :
                                $srn++;
                            ?>
                              <div class="col-md-12 py-2">
                                  <label for="date" class="form-label">Name</label>
                                  <input type="text" class="form-control" name="name" value="<?php echo $row->name; ?>" aria-describedby="inputGroupPrepend" required>

                                  <div class="valid-feedback">
                                      Looks good!
                                  </div>
                                  <div class="invalid-feedback">
                                      Please select a valid state.
                                  </div>
                              </div>
                              <div class="col-md-12 py-2">
                                  <label for="date" class="form-label">year</label>
                                  <input type="text" class="form-control" name="year" value="<?php echo $row->year; ?>" aria-describedby="inputGroupPrepend" required>

                                  <div class="valid-feedback">
                                      Looks good!
                                  </div>
                                  <div class="invalid-feedback">
                                      Please select a valid state.
                                  </div>
                              </div>
                              <div class="col-md-12 py-2">
                                  <label for="date" class="form-label">intake</label>
                                  <input type="text" class="form-control" name="intake" value="<?php echo $row->intake; ?>" aria-describedby="inputGroupPrepend" required>

                                  <div class="valid-feedback">
                                      Looks good!
                                  </div>
                                  <div class="invalid-feedback">
                                      Please select a valid state.
                                  </div>
                              </div>

                          <?php
                            endwhile;
                            ?>

                      </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" name="program_update">Update Program</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="program_closemodal()">Close</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>

  <?php
    endif;
    ?>

  <section class="section dashboard scholarship" style="display: none;" id="scholarship">

      <div class="row">

          <div class="col-lg-12">
              <!-- Recent Sales -->
              <div class="card recent-sales overflow-auto">

                  <div class="card-body">
                      <div style="display:flex; align-items:center; justify-content:space-between;">
                          <h5 class="card-title">Scholarship</h5>
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#scholarship_add_modal">
                              Add
                          </button>
                      </div>

                      <!-- Modal for timetable add -->
                      <div class="modal fade" id="scholarship_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Add Scholarship</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <form class="w-60 p-4" action="insert.php" method="post">

                                          <div class="col-md-12 my-2">
                                              <label for="password" class="form-label">Name of the Scholarship</label>
                                              <input type="text" class="form-control" name="name" required>
                                              <div class="invalid-feedback">
                                                  Please provide a valid password.
                                              </div>
                                              <div class="valid-feedback">
                                                  Looks good!
                                              </div>
                                          </div>

                                          <div class="col-md-12 my-2">
                                              <label for="desc" class="form-label">Detailed Information about Scholarship</label>
                                              <input type="text" class="form-control" name="desc" required>
                                              <div class="invalid-feedback">
                                                  Please provide a valid password.
                                              </div>
                                              <div class="valid-feedback">
                                                  Looks good!
                                              </div>
                                          </div>

                                          <div class="col-md-12 my-2">
                                              <label for="desc" class="form-label">Link to apply for Scholarship</label>
                                              <input type="url" class="form-control" name="link" required>
                                              <div class="invalid-feedback">
                                                  Please provide a valid password.
                                              </div>
                                              <div class="valid-feedback">
                                                  Looks good!
                                              </div>
                                          </div>



                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-success" name="scholarship_add">Add</button>
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
                                  <th scope="col">Details</th>
                                  <th scope="col">Link</th>
                                  <th scope="col" colspan="2">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                $scholarship = $conn->query("SELECT * FROM scholarship WHERE 1");
                                $srn = 0;
                                while ($row = $scholarship->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                  <tr>
                                      <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                      <td><?php echo $row->name; ?></td>
                                      <td><?php echo $row->details; ?></td>
                                      <td><a href="<?php echo $row->link; ?>" target="_blank"><?php echo $row->link; ?></a></td>
                                      <td>
                                          <a href="index.php?scholarship_srn=<?php echo $row->id; ?>">
                                              <button class="btn btn-primary">Update</button>
                                          </a>
                                      </td>
                                      <td>
                                          <a href="index.php?scholarship_srn_d=<?php echo $row->id; ?>">
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
    if (isset($_GET["scholarship_srn"])) : ?>

      <div id="scholarship_update_modal" class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Scholarship Update</h5>
                      <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="scholarship_closemodal()">
                          <i class="bi bi-x-lg"></i>
                      </button>
                  </div>
                  <form action="insert.php" method="POST" enctype="multipart/form-data" class="row needs-validation mt-2 mb-2 px-4 pb-4">
                      <div class="modal-body">


                          <?php
                            $id = $_GET["scholarship_srn"];
                            $scholarship = $conn->query("SELECT * FROM scholarship WHERE id = '$id'");
                            $srn = 0;
                            while ($row = $scholarship->fetch(PDO::FETCH_OBJ)) :
                                $srn++;
                            ?>
                              <div class="col-md-12 py-2">
                                  <label for="date" class="form-label">Name of Scholarship</label>
                                  <input type="text" class="form-control" name="name" value="<?php echo $row->name; ?>" aria-describedby="inputGroupPrepend" required>

                                  <div class="valid-feedback">
                                      Looks good!
                                  </div>
                                  <div class="invalid-feedback">
                                      Please select a valid state.
                                  </div>
                              </div>
                              <div class="col-md-12 py-2">
                                  <label for="date" class="form-label">Detailed Information about Scholarship</label>
                                  <input type="text" class="form-control" name="desc" value="<?php echo $row->details; ?>" aria-describedby="inputGroupPrepend" required>

                                  <div class="valid-feedback">
                                      Looks good!
                                  </div>
                                  <div class="invalid-feedback">
                                      Please select a valid state.
                                  </div>
                              </div>
                              <div class="col-md-12 py-2">
                                  <label for="date" class="form-label">Link to apply for Scholarship</label>
                                  <input type="text" class="form-control" name="link" value="<?php echo $row->link; ?>" aria-describedby="inputGroupPrepend" required>

                                  <div class="valid-feedback">
                                      Looks good!
                                  </div>
                                  <div class="invalid-feedback">
                                      Please select a valid state.
                                  </div>
                              </div>

                          <?php
                            endwhile;
                            ?>

                      </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" name="scholarship_update">Update</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="scholarship_closemodal()">Close</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>

  <?php
    endif;
    ?>

  <section class="section dashboard form" style="display: none;" id="form">

      <div class="row">

          <div class="col-lg-12">
              <!-- Recent Sales -->
              <div class="card recent-sales overflow-auto">

                  <div class="card-body">
                      <div style="display:flex; align-items:center; justify-content:space-between;">
                          <h5 class="card-title">Application Form</h5>
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#form_add_modal">
                              Add
                          </button>
                      </div>

                      <!-- Modal for timetable add -->
                      <div class="modal fade" id="form_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Add Application Form</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <form class="w-60 p-4" action="insert.php" method="post" enctype="multipart/form-data">

                                          <div class="col-md-12 my-2">
                                              <label for="password" class="form-label">Name of the Application</label>
                                              <input type="text" class="form-control" name="name" required>
                                              <div class="invalid-feedback">
                                                  Please provide a valid password.
                                              </div>
                                              <div class="valid-feedback">
                                                  Looks good!
                                              </div>
                                          </div>

                                          <div class="col-md-12 my-2">
                                              <label for="desc" class="form-label">Detailed Information about Application</label>
                                              <input type="text" class="form-control" name="desc" required>
                                              <div class="invalid-feedback">
                                                  Please provide a valid password.
                                              </div>
                                              <div class="valid-feedback">
                                                  Looks good!
                                              </div>
                                          </div>

                                          <div class="col-md-12 my-2">
                                              <label for="desc" class="form-label">Link to download an Application</label>
                                              <input type="url" class="form-control" name="link" required>
                                              <div class="invalid-feedback">
                                                  Please provide a valid password.
                                              </div>
                                              <div class="valid-feedback">
                                                  Looks good!
                                              </div>
                                          </div>



                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-success" name="form_add">Add</button>
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
                                  <th scope="col">Details</th>
                                  <th scope="col">Link</th>
                                  <th scope="col" colspan="2">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                $form = $conn->query("SELECT * FROM form WHERE 1");
                                $srn = 0;
                                while ($row = $form->fetch(PDO::FETCH_OBJ)) :
                                    $srn++;
                                ?>
                                  <tr>
                                      <th scope="row"><a href="#"><?php echo $srn; ?></a></th>
                                      <td><?php echo $row->name; ?></td>
                                      <td><?php echo $row->details; ?></td>
                                      <td><a href="<?php echo $row->link; ?>" target="_blank"><?php echo $row->link; ?></a></td>
                                      <td>
                                          <a href="index.php?form_srn=<?php echo $row->id; ?>">
                                              <button class="btn btn-primary">Update</button>
                                          </a>
                                      </td>
                                      <td>
                                          <a href="index.php?form_srn_d=<?php echo $row->id; ?>">
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
    if (isset($_GET["form_srn"])) : ?>

      <div id="form_update_modal" class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Application Form Update</h5>
                      <button type="button" class="btn" data-dismiss="modal" aria-label="Close" onclick="form_closemodal()">
                          <i class="bi bi-x-lg"></i>
                      </button>
                  </div>
                  <form action="insert.php" method="POST" enctype="multipart/form-data" class="row needs-validation mt-2 mb-2 px-4 pb-4">
                      <div class="modal-body">


                          <?php
                            $id = $_GET["form_srn"];
                            $form = $conn->query("SELECT * FROM form WHERE id = '$id'");
                            $srn = 0;
                            while ($row = $form->fetch(PDO::FETCH_OBJ)) :
                                $srn++;
                            ?>
                              <div class="col-md-12 py-2">
                                  <label for="date" class="form-label">Name of Application Form</label>
                                  <input type="text" class="form-control" name="name" value="<?php echo $row->name; ?>" aria-describedby="inputGroupPrepend" required>

                                  <div class="valid-feedback">
                                      Looks good!
                                  </div>
                                  <div class="invalid-feedback">
                                      Please select a valid state.
                                  </div>
                              </div>
                              <div class="col-md-12 py-2">
                                  <label for="date" class="form-label">Detailed Information about Application</label>
                                  <input type="text" class="form-control" name="desc" value="<?php echo $row->details; ?>" aria-describedby="inputGroupPrepend" required>

                                  <div class="valid-feedback">
                                      Looks good!
                                  </div>
                                  <div class="invalid-feedback">
                                      Please select a valid state.
                                  </div>
                              </div>
                              <div class="col-md-12 py-2">
                                  <label for="date" class="form-label">Link to download for Application</label>
                                  <input type="text" class="form-control" name="link" value="<?php echo $row->link; ?>" aria-describedby="inputGroupPrepend" required>

                                  <div class="valid-feedback">
                                      Looks good!
                                  </div>
                                  <div class="invalid-feedback">
                                      Please select a valid state.
                                  </div>
                              </div>

                          <?php
                            endwhile;
                            ?>

                      </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" name="form_update">Update</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="form_closemodal()">Close</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>

  <?php
    endif;
    ?>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


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

  <script>
      let n = document.querySelector('.a_dept');
      let o = document.querySelector('.new_admin');
      let p = document.querySelector('.dept_password');
      let q = document.querySelector('.carousel');
      let r = document.querySelector('.head_section');
      let s = document.querySelector('.grievances');
      let t = document.querySelector('.ac');
      let u = document.querySelector('.principal_desk');
      let v = document.querySelector('.program');
      let w = document.querySelector('.scholarship');
      let x = document.querySelector('.form');

      function admin_which_to_open() {

          if (n.classList.contains("active")) {
              n.style.display = 'block';
              o.style.display = 'none';
              p.style.display = 'none';
              q.style.display = 'none';
              r.style.display = 'none';
              s.style.display = 'none';
              t.style.display = 'none';
              u.style.display = 'none';
              v.style.display = 'none';
              w.style.display = 'none';
              x.style.display = 'none';
          }

          if (o.classList.contains("active")) {
              o.style.display = 'block';
              n.style.display = 'none';
              p.style.display = 'none';
              q.style.display = 'none';
              r.style.display = 'none';
              s.style.display = 'none';
              t.style.display = 'none';
              u.style.display = 'none';
              v.style.display = 'none';
              w.style.display = 'none';
              x.style.display = 'none';
          }

          if (p.classList.contains("active")) {
              p.style.display = 'block';
              o.style.display = 'none';
              n.style.display = 'none';
              q.style.display = 'none';
              r.style.display = 'none';
              s.style.display = 'none';
              t.style.display = 'none';
              u.style.display = 'none';
              v.style.display = 'none';
              w.style.display = 'none';
              x.style.display = 'none';
          }

          if (q.classList.contains("active")) {
              q.style.display = 'block';
              o.style.display = 'none';
              n.style.display = 'none';
              p.style.display = 'none';
              r.style.display = 'none';
              s.style.display = 'none';
              t.style.display = 'none';
              u.style.display = 'none';
              v.style.display = 'none';
              w.style.display = 'none';
              x.style.display = 'none';
          }

          if (r.classList.contains("active")) {
              r.style.display = 'block';
              o.style.display = 'none';
              n.style.display = 'none';
              p.style.display = 'none';
              q.style.display = 'none';
              s.style.display = 'none';
              t.style.display = 'none';
              u.style.display = 'none';
              v.style.display = 'none';
              w.style.display = 'none';
              x.style.display = 'none';
          }
          if (s.classList.contains("active")) {
              s.style.display = 'block';
              o.style.display = 'none';
              n.style.display = 'none';
              p.style.display = 'none';
              q.style.display = 'none';
              r.style.display = 'none';
              t.style.display = 'none';
              u.style.display = 'none';
              v.style.display = 'none';
              w.style.display = 'none';
              x.style.display = 'none';
          }
          if (t.classList.contains("active")) {
              t.style.display = 'block';
              o.style.display = 'none';
              n.style.display = 'none';
              p.style.display = 'none';
              q.style.display = 'none';
              r.style.display = 'none';
              s.style.display = 'none';
              u.style.display = 'none';
              v.style.display = 'none';
              w.style.display = 'none';
              x.style.display = 'none';
          }
          if (u.classList.contains("active")) {
              u.style.display = 'block';
              o.style.display = 'none';
              n.style.display = 'none';
              p.style.display = 'none';
              q.style.display = 'none';
              r.style.display = 'none';
              t.style.display = 'none';
              s.style.display = 'none';
              v.style.display = 'none';
              w.style.display = 'none';
              x.style.display = 'none';
          }
          if (v.classList.contains("active")) {
              v.style.display = 'block';
              o.style.display = 'none';
              n.style.display = 'none';
              p.style.display = 'none';
              q.style.display = 'none';
              r.style.display = 'none';
              t.style.display = 'none';
              u.style.display = 'none';
              s.style.display = 'none';
              w.style.display = 'none';
              x.style.display = 'none';
          }

          if (w.classList.contains("active")) {
              w.style.display = 'block';
              o.style.display = 'none';
              n.style.display = 'none';
              p.style.display = 'none';
              q.style.display = 'none';
              r.style.display = 'none';
              t.style.display = 'none';
              u.style.display = 'none';
              s.style.display = 'none';
              v.style.display = 'none';
              x.style.display = 'none';
          }

          if (x.classList.contains("active")) {
              x.style.display = 'block';
              o.style.display = 'none';
              n.style.display = 'none';
              p.style.display = 'none';
              q.style.display = 'none';
              r.style.display = 'none';
              t.style.display = 'none';
              u.style.display = 'none';
              s.style.display = 'none';
              w.style.display = 'none';
              v.style.display = 'none';
          }

      }

      function a_dept() {
          n.classList.add('active');
          o.classList.remove('active');
          p.classList.remove('active');
          q.classList.remove('active');
          r.classList.remove('active');
          s.classList.remove('active');
          t.classList.remove('active');
          u.classList.remove('active');
          v.classList.remove('active');
          w.classList.remove('active');
          x.classList.remove('active');
          admin_which_to_open();
      }

      function new_admin() {
          o.classList.add('active');
          n.classList.remove('active');
          p.classList.remove('active');
          q.classList.remove('active');
          r.classList.remove('active');
          s.classList.remove('active');
          t.classList.remove('active');
          u.classList.remove('active');
          v.classList.remove('active');
          w.classList.remove('active');
          x.classList.remove('active');
          admin_which_to_open();
      }

      function dept_password() {
          p.classList.add('active');
          n.classList.remove('active');
          o.classList.remove('active');
          q.classList.remove('active');
          r.classList.remove('active');
          s.classList.remove('active');
          t.classList.remove('active');
          u.classList.remove('active');
          v.classList.remove('active');
          w.classList.remove('active');
          x.classList.remove('active');
          admin_which_to_open();
      }

      function carousel() {
          q.classList.add('active');
          n.classList.remove('active');
          o.classList.remove('active');
          p.classList.remove('active');
          r.classList.remove('active');
          s.classList.remove('active');
          t.classList.remove('active');
          u.classList.remove('active');
          v.classList.remove('active');
          w.classList.remove('active');
          x.classList.remove('active');
          admin_which_to_open();
      }

      function head_section() {
          r.classList.add('active');
          n.classList.remove('active');
          o.classList.remove('active');
          p.classList.remove('active');
          q.classList.remove('active');
          s.classList.remove('active');
          t.classList.remove('active');
          u.classList.remove('active');
          v.classList.remove('active');
          w.classList.remove('active');
          x.classList.remove('active');
          admin_which_to_open();
      }

      function grievances() {
          s.classList.add('active');
          n.classList.remove('active');
          o.classList.remove('active');
          p.classList.remove('active');
          q.classList.remove('active');
          r.classList.remove('active');
          t.classList.remove('active');
          u.classList.remove('active');
          v.classList.remove('active');
          w.classList.remove('active');
          x.classList.remove('active');
          admin_which_to_open();
      }

      function ac() {
          t.classList.add('active');
          n.classList.remove('active');
          o.classList.remove('active');
          p.classList.remove('active');
          q.classList.remove('active');
          r.classList.remove('active');
          s.classList.remove('active');
          u.classList.remove('active');
          v.classList.remove('active');
          w.classList.remove('active');
          x.classList.remove('active');
          admin_which_to_open();
      }

      function principal_desk() {
          u.classList.add('active');
          n.classList.remove('active');
          o.classList.remove('active');
          p.classList.remove('active');
          q.classList.remove('active');
          r.classList.remove('active');
          t.classList.remove('active');
          s.classList.remove('active');
          v.classList.remove('active');
          w.classList.remove('active');
          x.classList.remove('active');
          admin_which_to_open();
      }

      function program() {
          v.classList.add('active');
          n.classList.remove('active');
          o.classList.remove('active');
          p.classList.remove('active');
          q.classList.remove('active');
          r.classList.remove('active');
          t.classList.remove('active');
          u.classList.remove('active');
          s.classList.remove('active');
          w.classList.remove('active');
          x.classList.remove('active');
          admin_which_to_open();
      }

      function scholarship() {
          w.classList.add('active');
          n.classList.remove('active');
          o.classList.remove('active');
          p.classList.remove('active');
          q.classList.remove('active');
          r.classList.remove('active');
          t.classList.remove('active');
          u.classList.remove('active');
          s.classList.remove('active');
          v.classList.remove('active');
          x.classList.remove('active');
          admin_which_to_open();
      }

      function form() {
          x.classList.add('active');
          n.classList.remove('active');
          o.classList.remove('active');
          p.classList.remove('active');
          q.classList.remove('active');
          r.classList.remove('active');
          t.classList.remove('active');
          u.classList.remove('active');
          s.classList.remove('active');
          w.classList.remove('active');
          v.classList.remove('active');
          admin_which_to_open();
      }

      window.onload = function() {
          OpenBootstrapPopup();
      };

      function OpenBootstrapPopup() {
          $("#new_admin_update_modal").modal('show');
          $("#dept_update_modal").modal('show');
          $("#carousel_update_modal").modal('show');
          $("#head_update_modal").modal('show');
          $("#prn_desk_update_modal").modal('show');
          $("#delete_modal").modal('show');
          $("#ac_update_modal").modal('show');
          $("#program_update_modal").modal('show');
          $("#scholarship_update_modal").modal('show');
          $("#form_update_modal").modal('show');
      }

      function new_admin_closemodal() {
          $("#new_admin_update_modal").modal('hide');
          new_admin();
      }

      function dept_closemodal() {
          $("#dept_update_modal").modal('hide');
          dept_password();
      }

      function carousel_closemodal() {
          $("#carousel_update_modal").modal('hide');
          carousel();
      }

      function head_closemodal() {
          $("#head_update_modal").modal('hide');
          head_section();
      }

      function prn_desk_closemodal() {
          $("#prn_desk_update_modal").modal('hide');
          principal_desk();
      }

      function ac_closemodal() {
          $("#ac_update_modal").modal('hide');
          ac();
      }

      function program_closemodal() {
          $("#program_update_modal").modal('hide');
          program();
      }

      function scholarship_closemodal() {
          $("#scholarship_update_modal").modal('hide');
          scholarship();
      }

      function form_closemodal() {
          $("#form_update_modal").modal('hide');
          form();
      }

      function del_closemodal() {
          $("#delete_modal").modal('hide');
      }
  </script>