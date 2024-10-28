<?php
error_reporting(0);
ob_start();
session_start();
include 'formConn2.php';

// if (!isset($_SESSION['AdminLoginID']) && isset($_POST['logout'])) {
//     header("location: /placement/login/login.php");
// }

if (isset($_POST['logout'])) {
    session_destroy();
    header("location: /placement/placement.php");
    exit;
}

if (isset($_POST['confirm_delete']) && $_POST['confirm_delete'] == 'on') {
    // Delete all records from the database
    $query = "DELETE FROM `offerletter`";
    $res = mysqli_query($con, $query);

    if ($res) {
        // Deletion successful
        header("Location: offer.php");
        exit;
    } else {
        // Deletion failed, display an error message
        echo "Error deleting records: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - GPNAdmin</title>
    <a href="../../loginbackend.php"></a>

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
    <!-- Favicons -->
    <link href="../navbar-assets/img/logofav.png" rel="icon">
    <link href="../navbar-assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">Admin Panel</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 mt-3 mb-3">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <!-- <button type="button" class="btn btn-outline-primary" name="logout">Log Out</button> -->
                <button class="btn btn-outline-primary" type="submit" name="logout">Log Out</button>


            </form>
        </ul>

    </nav>

    <style>
        /* Style the delete button */
        /* .delbtn{
            background-color: #ff0000;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        } */

        /* Style the confirmation checkbox label */
        label[for="confirm_delete"] {
            font-size: 24px;
            margin-right: 8px;
        }

        .form-check-input {
            margin-top: 15px;
            margin-right: 15px;
            size: 25px;
        }
    </style>



    <!-- <?php
            // if (isset($_POST['logout'])) {

            //     session_destroy();
            //     header("location: /placement/placement.php");
            // }
            // ob_flush();
            ?> -->




    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <div class="sb-sidenav-menu-heading">Addons</div>

                        <a class="nav-link" href="tables.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Applications
                        </a>
                        <a class="nav-link" href="offer.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Offer Letter
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    TPO
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Offer Letters</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Offer Letters</li>
                    </ol>
                    <div class="row">

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Dashboard</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="index.php">Add Vacancy</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-secondary border-primary text-white mb-4">
                                <div class="card-body">Applications</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="tables.php">Check Applications</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>





                        <?php
                        // if ((isset($_POST['confirm_delete']) && $_POST['confirm_delete'] == 'on')) {
                        //     // Delete all records from the database
                        //     $query = " DELETE FROM `offerletter` ";
                        //     $res=mysqli_query($con, $query);


                        //     // Redirect to the previous page
                        //     header("Location: offer.php");
                        //     // exit;
                        // } else {
                        //     // Display an error message if the confirmation checkbox is not checked
                        //     // echo "Please confirm the deletion of all records.";

                        // }

                        ?>


                        <!-- applied table -->
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Middle</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">RollNo</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM `offerletter` ";
                                $res = mysqli_query($con, $sql);

                                $Sno = 0;
                                while ($row = mysqli_fetch_assoc($res)) {
                                    $Sno++;
                                    $srn = $row["srn"];
                                    echo " <tr>
                                        <th scope='row'>" . $Sno . "</th>
                                        <td>" . $row['firstname'] . "</td>
                                        <td>" . $row['middlename'] . "</td>
                                        <td>" . $row['lastname'] . "</td>
                                        <td>" . $row['roll'] . "</td>
                                        <td>" . $row['company'] . "</td>    
                                        <td>" . $row['department'] . "</td>
                                        <td>" . $row['mno'] . "</td>
                                        <td>" . $row['email'] . "</td>
                                        <td><a href='../../../" . $row['offerletter'] . " 'class='btn btn-primary target='blank'>Download OfferLetter  </a></td>

                                        </tr>";
                                }

                                ?>


                                <!-- <td><a href='index.php?Sno_d=" . $srn . " class='delete btn btn-sm btn-danger'>Delete</a></td> -->
                            </tbody>
                        </table>
                        <!-- <a href=" . $row['offerletters'] . " class='btn btn-primary  ' download>Download OfferLetter  </a> -->
                        <!-- <button onclick="openPDF()">Open PDF</button> -->

                        <script>
                            function openPDF() {
                                window.open(' "offerletter/" . $filename', '_blank');
                            }
                        </script>


                        <!-- ?php
                        echo $form;
                        ?> -->

                        <form action="offer.php" method="POST">
                            <label for="confirm_delete">Confirm deletion of all records:</label>

                            <input class="form-check-input" type="checkbox" name="confirm_delete" id="flexCheckIndeterminate">



                            <button type="submit" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure you want to delete all records?')">Delete All
                                Records</button>

                        </form>



                        <!-- <input type="checkbox" id="confirm_delete" name="confirm_delete" required> -->

            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Shubham</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


    <script>
        let table = new DataTable('#myTable');
    </script>








</body>

</html>