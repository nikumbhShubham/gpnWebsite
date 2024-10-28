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
ob_start();
session_start();
session_regenerate_id(true);
include 'dbconnect.php';
if (!isset($_SESSION['AdminLoginID'])) {

    header("location: /placement/login/login.php");
}

if (isset($_POST["submit"])) {

    $target_dir = "assets/logo/";
    $target_file = $target_dir . basename($_FILES["logo_upload"]["name"]);
    $file_name = "login/dashboard/dist/assets/logo/" . basename($_FILES["logo_upload"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg") {
        $uploadOk = 1;
    } else {
        $_SESSION["file_format_error"] = true;
        $uploadOk = 0;
        header("location:index.php");
    }

    $title = $_POST["title"];
    $description = $_POST["description"];
    $form_link = $_POST["form_link"];

    if ($uploadOk != 0) {

        if (move_uploaded_file($_FILES["logo_upload"]["tmp_name"], $target_file)) {
        } else {
            $_SESSION["file_move_error"] = true;
            header("location:index.php");
        }

        $post_insert = $conn->prepare("INSERT INTO vaccancy_post (title,description,logo,form_link) VALUES (:title,:description,:logo,:form_link)");
        $post_insert->execute(
            array(
                ":title" => $title,
                ":description" => $description,
                ":logo" => $file_name,
                ":form_link" => $form_link
            )
        );
        if ($post_insert) {
            $_SESSION["post_inserted"] = true;
            header("location:index.php");
        } else {
            $_SESSION["post_error"] = true;
            header("location:index.php");
        }
    } else {
        $_SESSION["file_upload_error"] = true;
        header("location:index.php");
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
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://kit.fontawesome.com/e2d04925cb.js" crossorigin="anonymous"></script>

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
        <!-- <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0 w-8 h-8">
            <i class="fa-regular fa-circle-user " style="color: #bababa; " id="myButton"></i>
        </div>

        <div class="modal fade" id="nModal" tabindex="-1" role="dialog" aria-labelledby="faqModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="faqModalLabel">Logged in as :</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            onclick="closeModal()">
                            <span aria-hidden="true"><i class="fa-sharp fa-solid fa-xmark"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container"> 
                           <h1>Logged in as :</h1>
                            <hr> 
                          <span>TPO</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            onclick="closeModal()">Close</button>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-6">
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li> -->
            <!-- <li><a class="dropdown-item" href="#!">Logout</a></li> -->
            <!-- </ul> -->
            <!-- </li> -->

            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <!-- <button class="btn shadow-none pl-2 btn-primary" type="submit" name="logout">Log Out</button> -->
                <!-- <button type="button" class="btn btn-outline-primary"name="logout">Log out</button> -->
                <button class="btn btn-outline-primary" type="submit" name="logout">Log Out</button>

            </form>

        </ul>


    </nav>

    <?php
    if (isset($_POST['logout'])) {

        session_destroy();
        header("location: /placement/placement.php");
    }
    ob_flush();



    ?>

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
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary border-primary text-white mb-4">
                                <div class="card-body">Applications</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="tables.php">Check Applications</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-secondary text-white mb-4">
                                <div class="card-body">Offer Letter</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="offer.php">View Offer Letter</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class=" mb-3">

                            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Add Vacancy
                            </button>
                        </div>
                        <?php
                        // if (isset($_GET["Sno"])) {
                        //     $_SESSION['SnoEdit'] = $_GET["Sno"];
                        // }
                        // //delete get request value set to the session variable
                        // if (isset($_GET["Sno_d"])) {
                        //     $_SESSION['SnoDelete'] = $_GET["Sno_d"];
                        // }

                        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        //     if (isset($_POST['Editsubmit'])) {
                        //         $title = $_POST["titleEdit"];
                        //         $description = $_POST["descriptionEdit"];

                        //         $post_update = $conn->prepare('UPDATE vaccancy_post SET title = :title, description = :description WHERE srn = :Sno');

                        //         $post_update->bindParam(':Sno', $_SESSION['SnoEdit'], PDO::PARAM_INT, 3);
                        //         $post_update->bindParam(':title', $title, PDO::PARAM_STR, 55);
                        //         $post_update->bindParam(':description', $description, PDO::PARAM_STR, 255);
                        //         echo $_SESSION["SnoEdit"];

                        //         if ($post_update->execute()) {
                        //             unset($_SESSION["SnoEdit"]);

                        //             echo "yess";
                        //         } else {
                        //             echo "noo";
                        //         }
                        //     } else if (isset($_POST['Deletesubmit'])) {
                        //         $post_delete = $conn->prepare('DELETE FROM vaccancy_post WHERE srn = :Sno_d');

                        //         $post_delete->bindParam(':Sno_d', $_SESSION['SnoDelete'], PDO::PARAM_INT, 3);

                        //         if ($post_delete->execute()) {
                        //             unset($_SESSION["SnoDelete"]);
                        //             echo "yess";
                        //         } else {
                        //             echo "noo";
                        //         }
                        //     }
                        // }



                        if (isset($_GET["Sno"])) {
                            $_SESSION['SnoEdit'] = $_GET["Sno"];
                        }

                        if (isset($_GET["Sno_d"])) {
                            $_SESSION['SnoDelete'] = $_GET["Sno_d"];
                        }

                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            if (isset($_POST['Editsubmit'])) {
                                if (isset($_SESSION['SnoEdit'])) {
                                    $title = $_POST["titleEdit"];
                                    $description = $_POST["descriptionEdit"];

                                    try {
                                        $post_update = $conn->prepare('UPDATE vaccancy_post SET title = :title, description = :description WHERE srn = :Sno');

                                        $post_update->bindParam(':Sno', $_SESSION['SnoEdit'], PDO::PARAM_INT);
                                        $post_update->bindParam(':title', $title, PDO::PARAM_STR, 55);
                                        $post_update->bindParam(':description', $description, PDO::PARAM_STR, 255);

                                        if ($post_update->execute()) {
                                            unset($_SESSION["SnoEdit"]);
                                            // echo "Update successful";
                                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Success!</strong> vacancy has been updated successfully.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="closeAlert()"></button>
                                          </div>';
                                        } else {
                                            // echo "Update failed";
                                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Failed!</strong> vacancy has not been updated successfully.contact the team ASAP
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="closeAlert()"></button>
                                          </div>';
                                        }
                                    } catch (PDOException $e) {
                                        echo "Error updating record: " . $e->getMessage();
                                    }
                                } else {
                                    // echo "Session variable 'SnoEdit' not set";
                                }
                            } else if (isset($_POST['Deletesubmit'])) {
                                if (isset($_SESSION['SnoDelete'])) {
                                    try {
                                        $post_delete = $conn->prepare('DELETE FROM vaccancy_post WHERE srn = :Sno_d');
                                        $post_delete->bindParam(':Sno_d', $_SESSION['SnoDelete'], PDO::PARAM_INT);

                                        if ($post_delete->execute()) {
                                            unset($_SESSION["SnoDelete"]);
                                            // echo "Delete successful";
                                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Success!</strong> vacancy has been deleted successfully.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="closeAlert()"></button>
                                          </div>';
                                        } else {
                                            // echo "Delete failed";
                                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Failed!</strong> vacancy has not been deleted successfully.contact the team ASAP
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="closeAlert()"></button>
                                          </div>';
                                        }
                                    } catch (PDOException $e) {
                                        echo "Error deleting record: " . $e->getMessage();
                                    }
                                } else {
                                    // echo "Session variable 'SnoDelete' not set";
                                }
                            }
                        }
                        ?>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Vacancy Post</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="index.php" method="POST" enctype="multipart/form-data">
                                        <div class="modal-body">

                                            <div class="mb-3">
                                                <label for="title" class="form-label">Recruiter's Company Name</label>
                                                <input type="text" class="form-control" name="title" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Recruiter's
                                                    description</label>
                                                <textarea type="text" class="form-control" name="description" required></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="logo" class="form-label">Recruiter's Logo</label>
                                                <input type="file" class="form-control" name="logo_upload" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="form link" class="form-label">Google Form Link</label>
                                                <input type="text" class="form-control" name="form_link">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="submit">Post
                                                Vacancy</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <!-- EDIT MODAL -->
                        <?php
                        if (isset($_SESSION['SnoEdit'])) :
                            $no = $_SESSION["SnoEdit"];
                            $update = $conn->prepare("SELECT * FROM vaccancy_post WHERE srn = :no");
                            $update->bindParam(":no", $no, PDO::PARAM_INT, 3);
                            $update->execute();
                            $update_data = $update->fetch(PDO::FETCH_OBJ);
                        ?>
                            <div class="modal fade" id="editmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="editmodallabel">Edit Vacancy</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="del_edit_modal()"></button>
                                        </div>
                                        <form action="index.php" method="POST" enctype="multipart/form-data">
                                            <div class="modal-body">

                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Recruiter's Company Name</label>
                                                    <input type="text" id="titleEdit" value="<?php echo $update_data->title; ?>" class="form-control" name="titleEdit">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="description" class="form-label">Recruiter's
                                                        description</label>
                                                    <input type="text" id="descriptionEdit" value="<?php echo $update_data->description; ?>" class="form-control" name="descriptionEdit"></input>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary " data-bs-dismiss="modal" onclick="del_edit_modal()">Close</button>

                                                <button type="submit" class="btn btn-primary" name="Editsubmit">Update
                                                    Vacancy
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                    </div>
                <?php

                        endif;

                ?>

                <!-- Delete Modal -->
                <?php
                if (isset($_SESSION['SnoDelete'])) :
                ?>
                    <div class="modal fade" id="deletemodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Vacancy Delete</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="del_delete_modal()"></button>
                                </div>
                                <form action="index.php" method="POST" enctype="multipart/form-data">
                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label for="title" class="form-label">Are you sure you want to delete the
                                                record?</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary " data-bs-dismiss="modal" onclick="del_delete_modal()">Close</button>
                                        <button type="submit" class="btn btn-danger" name="Deletesubmit">Delete</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                <?php
                endif; ?>



                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">Sno</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php


                        $post_retrieve = $conn->prepare("SELECT * FROM vaccancy_post");
                        $post_retrieve->execute();


                        $results = $post_retrieve->fetchAll(PDO::FETCH_ASSOC);

                        // Loop through the results and display them
                        $Sno = 0;
                        foreach ($results as $row) {
                            $Sno++;
                            $srn = $row["srn"];
                            echo " <tr>
                                    <th scope='row'>" . $Sno . "</th>
                                     <td>" . $row['title'] . "</td>
                                     <td>" . $row['description'] . "</td>
                                     <td> <a href='index.php?Sno=" . $srn . "' onclick='openeditmodal()'> <button class='edit btn btn-sm btn-warning m-2'id='$Sno'>Update</button></a>             
                                    <a href='index.php?Sno_d=" . $srn . "' onclick='opendeletemodal()' class='delete btn btn-sm btn-danger m-2'>Delete</a></td>
                                    
                                    </tr>";
                        }


                        ?>
                    </tbody>
                </table>
                <hr>


            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; GPN</div>
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
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

    <script>
        window.onload = function() {
            openeditmodal();
            opendeletemodal();
        };

        function openeditmodal() {
            $('#editmodal').modal('toggle');
        }

        function opendeletemodal() {
            $('#deletemodal').modal('toggle');
        }

        function del_edit_modal() {
            $("#editmodal").modal('hide');
            // window.location = "index.php"; 

        }

        function del_delete_modal() {
            $("#deletemodal").modal('hide');
            // window.location = "index.php";

        }
    </script>
    <script>
        $('#myButton').click(function() {
            $('#nModal').modal('show');
        });

        function closeModal() {
            window.location = "placement.php";
        }
    </script>
    <script>
        $('.alert').alert()

        function closeAlert() {
            // document.getElementById("myAlert").classList.remove("show");
            window.location = "index.php";
        }
    </script>
    <?php
    // unset($_SESSION["SnoEdit"]);
    // unset($_SESSION["SnoDelete"]);
    ?>

</body>

</html>