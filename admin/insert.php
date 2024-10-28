<?php
error_reporting(0);
include 'conn.php';
session_start();

// Aditya ////////////////////////////////////////////////////////////////////////////////////////////////-->


if (isset($_POST["hod"])) {

    $dept = $_POST["department"];
    $name = $_POST["name"];

    $hod_insert = $conn->query("INSERT INTO users (mode,name,dept) VALUES ('1', '$name','$dept')");
    if ($hod_insert) {
        $_SESSION["hod_inserted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["hod_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["hod_desk_update"])) {
    $target_dir = "../departments/navbar-assets/img/hod/";
    $target_file = $target_dir . basename($_FILES["hod_image"]["name"]);
    $file_name = "departments/navbar-assets/img/hod/" . basename($_FILES["hod_image"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") {
        $uploadOk = 1;
    } else {
        $_SESSION["hod_file_format_error"] = true;
        $uploadOk = 0;
        header("location:index.php");
    }

    $name = $_POST["name"];
    $date = $_POST["appointment_date"];
    $qualification = $_POST["qualification"];
    $experience = $_POST["experience"];

    $id = $_SESSION["dept_id"];
    if ($uploadOk != 0) {

        if (move_uploaded_file($_FILES["hod_image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["hod_image"]["name"])) . " has been uploaded.";
        } else {
            $_SESSION["file_move_error"] = true;
            header("location:index.php");
        }

        $hod_insert = $conn->query("UPDATE hod_desk SET name = '$name', appointment_date = '$date', qualification = '$qualification', experience = '$experience', image = '$file_name' WHERE dept_id = $id ");
        if ($hod_insert) {
            $_SESSION["hod_desk_updated"] = true;
            header("location:index.php");
        } else {
            $_SESSION["hod_desk_error"] = true;
            header("location:index.php");
        }
    } else {
        $_SESSION["file_upload_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["timetable_update"])) {

    $target_dir = "../departments/navbar-assets/timetable/";
    $target_file = $target_dir . basename($_FILES["timetable_upload"]["name"]);
    $file_name = "departments/navbar-assets/timetable/" . basename($_FILES["timetable_upload"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($imageFileType == "pdf") {
        $uploadOk = 1;
    } else {
        $_SESSION["timetable_file_format_error"] = true;
        $uploadOk = 0;
        unset($_SESSION["timetable_srn"]);
        header("location:index.php");
    }

    $title = $_POST["title"];

    if ($uploadOk != 0) {

        if (move_uploaded_file($_FILES["timetable_upload"]["tmp_name"], $target_file)) {
        } else {
            $_SESSION["file_move_error"] = true;
            unset($_SESSION["timetable_srn"]);
            header("location:index.php");
        }
        $srn = $_SESSION["timetable_srn"];
        $tt_insert = $conn->query("UPDATE timetable SET title = '$title', timetable = '$file_name' WHERE id = $srn ");
        if ($tt_insert) {
            $_SESSION["timetable_updated"] = true;
            unset($_SESSION["timetable_srn"]);
            header("location:index.php");
        } else {
            $_SESSION["timetable_error"] = true;
            unset($_SESSION["timetable_srn"]);
            header("location:index.php");
        }
    } else {
        $_SESSION["file_upload_error"] = true;
        unset($_SESSION["timetable_srn"]);
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["timetable_add"])) {

    $target_dir = "../departments/navbar-assets/timetable/";
    $target_file = $target_dir . basename($_FILES["timetable_add_upload"]["name"]);
    $file_name = "departments/navbar-assets/timetable/" . basename($_FILES["timetable_add_upload"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($imageFileType == "pdf") {
        $uploadOk = 1;
    } else {
        $_SESSION["timetable_file_format_error"] = true;
        $uploadOk = 0;
        header("location:index.php");
    }

    $title = $_POST["title"];
    $dept_id = $_SESSION["dept_id"];

    if ($uploadOk != 0) {

        if (move_uploaded_file($_FILES["timetable_add_upload"]["tmp_name"], $target_file)) {
        } else {
            $_SESSION["file_move_error"] = true;
            header("location:index.php");
        }
        $tt_insert = $conn->prepare("INSERT INTO timetable(dept_id,title,timetable) VALUES (:dept_id,:title,:file)");
        $tt_insert->execute(array(
            ":dept_id" => $dept_id,
            ":title" => $title,
            ":file" => $file_name
        ));
        if ($tt_insert) {
            $_SESSION["timetable_inserted"] = true;
            header("location:index.php");
        } else {
            $_SESSION["timetable_error"] = true;
            header("location:index.php");
        }
    } else {
        $_SESSION["file_upload_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["ind_visit_add"])) {

    $dept_id = $_SESSION["dept_id"];
    $name = $_POST["name"];
    $date = $_POST["date"];
    $class = $_POST["class"];
    $stud = $_POST["student"];

    $ind_insert = $conn->prepare("INSERT INTO industrial_visit(dept_id,industry_name,date,class,total_stud) VALUES (:dept_id,:name,:date,:class,:stud)");
    $ind_insert->execute(array(
        ":dept_id" => $dept_id,
        ":name" => $name,
        ":date" => $date,
        ":class" => $class,
        ":stud" => $stud
    ));
    if ($ind_insert) {
        $_SESSION["ind_inserted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["ind_error"] = true;
        header("location:index.php");
    }
}

if (isset($_POST["ind_visit_update"])) {

    $dept_id = $_SESSION["dept_id"];
    $name = $_POST["name"];
    $date = $_POST["date"];
    $class = $_POST["class"];
    $stud = $_POST["student"];
    $srn = $_SESSION["ind_srn"];

    $ind_update = $conn->prepare("UPDATE industrial_visit SET dept_id = :dept_id,industry_name = :name,date = :date,class = :class,total_stud = :stud WHERE id = :srn");
    $ind_update->execute(array(
        ":dept_id" => $dept_id,
        ":name" => $name,
        ":date" => $date,
        ":class" => $class,
        ":stud" => $stud,
        ":srn" => $srn
    ));
    if ($ind_update) {
        $_SESSION["ind_updated"] = true;
        header("location:index.php");
    } else {
        $_SESSION["ind_update_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["result_analysis_add"])) {

    $dept_id = $_SESSION["dept_id"];
    $entry = $_POST["name"];
    $stud = $_POST["student"];
    $y1 = $_POST["y1"];
    $y2 = $_POST["y2"];
    $y3 = $_POST["y3"];

    $result_analysis_insert = $conn->prepare("INSERT INTO result_analysis(dept_id,entry,total_stud,first_year,second_year,third_year) VALUES (:dept_id,:entry,:stud,:y1,:y2,:y3)");
    $result_analysis_insert->execute(array(
        ":dept_id" => $dept_id,
        ":entry" => $entry,
        ":stud" => $stud,
        ":y1" => $y1,
        ":y2" => $y2,
        ":y3" => $y3
    ));
    if ($result_analysis_insert) {
        $_SESSION["result_analysis_inserted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["result_analysis_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["academic_performance_add"])) {

    $dept_id = $_SESSION["dept_id"];
    $title = $_POST["name"];
    $cay = $_POST["cay"];
    $m1 = $_POST["m1"];
    $m2 = $_POST["m2"];

    $academic_performance_insert = $conn->prepare("INSERT INTO result_analysis2 (dept_id,academic_perform,cay,caym1,caym2) VALUES (:dept_id,:title,:cay,:caym1,:caym2)");
    $academic_performance_insert->execute(array(
        ":dept_id" => $dept_id,
        ":title" => $title,
        ":cay" => $cay,
        ":caym1" => $m1,
        ":caym2" => $m2
    ));
    if ($academic_performance_insert) {
        $_SESSION["academic_performance_inserted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["academic_performance_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["result_analysis_update"])) {

    $dept_id = $_SESSION["dept_id"];
    $entry = $_POST["name"];
    $stud = $_POST["student"];
    $y1 = $_POST["y1"];
    $y2 = $_POST["y2"];
    $y3 = $_POST["y3"];
    $srn = $_SESSION["result_analysis_srn"];

    $result_analysis_update = $conn->prepare("UPDATE result_analysis SET dept_id = :dept_id,entry = :entry,total_stud = :stud,first_year = :y1,second_year = :y2, third_year = :y3 WHERE id = :srn");
    $result_analysis_update->execute(array(
        ":dept_id" => $dept_id,
        ":entry" => $entry,
        ":stud" => $stud,
        ":y1" => $y1,
        ":y2" => $y2,
        ":y3" => $y3,
        ":srn" => $srn
    ));
    if ($result_analysis_update) {
        $_SESSION["result_analysis_updated"] = true;
        header("location:index.php");
    } else {
        $_SESSION["result_analysis_update_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}

if (isset($_POST["notes_update"])) {

    $dept_id = $_SESSION["dept_id"];
    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $link = $_POST["link"];
    $srn = $_SESSION["notes_srn"];

    $notes_update = $conn->prepare("UPDATE notes SET dept_id = :dept_id,subject = :name,description = :desc,link = :link WHERE id = :srn");
    $notes_update->execute(array(
        ":dept_id" => $dept_id,
        ":name" => $name,
        ":desc" => $desc,
        ":link" => $link,
        ":srn" => $srn
    ));
    if ($notes_update) {
        $_SESSION["notes_updated"] = true;
        header("location:index.php");
    } else {
        $_SESSION["notes_update_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["paper_update"])) {

    $dept_id = $_SESSION["dept_id"];
    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $link = $_POST["link"];
    $srn = $_SESSION["paper_srn"];

    $paper_update = $conn->prepare("UPDATE question_papers SET dept_id = :dept_id,subject = :name,description = :desc,link = :link WHERE id = :srn");
    $paper_update->execute(array(
        ":dept_id" => $dept_id,
        ":name" => $name,
        ":desc" => $desc,
        ":link" => $link,
        ":srn" => $srn
    ));
    if ($paper_update) {
        $_SESSION["paper_updated"] = true;
        header("location:index.php");
    } else {
        $_SESSION["paper_update_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["video_update"])) {

    $dept_id = $_SESSION["dept_id"];
    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $link = $_POST["link"];
    $srn = $_SESSION["video_srn"];

    $video_update = $conn->prepare("UPDATE video_lectures SET dept_id = :dept_id,subject = :name,description = :desc,link = :link WHERE id = :srn");
    $video_update->execute(array(
        ":dept_id" => $dept_id,
        ":name" => $name,
        ":desc" => $desc,
        ":link" => $link,
        ":srn" => $srn
    ));
    if ($video_update) {
        $_SESSION["video_updated"] = true;
        header("location:index.php");
    } else {
        $_SESSION["video_update_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["academic_performance_update"])) {

    $dept_id = $_SESSION["dept_id"];
    $title = $_POST["name"];
    $cay = $_POST["cay"];
    $m1 = $_POST["m1"];
    $m2 = $_POST["m2"];
    $srn = $_SESSION["academic_performance_srn"];

    $academic_performance_update = $conn->prepare("UPDATE result_analysis2 SET dept_id = :dept_id,academic_perform = :title,cay = :cay,caym1 = :m1,caym2 = :m2 WHERE id = :srn");
    $academic_performance_update->execute(array(
        ":dept_id" => $dept_id,
        ":title" => $title,
        ":cay" => $cay,
        ":m1" => $m1,
        ":m2" => $m2,
        ":srn" => $srn
    ));
    if ($academic_performance_update) {
        $_SESSION["academic_performance_updated"] = true;
        header("location:index.php");
    } else {
        $_SESSION["academic_performance_update_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["notice_add"]) && is_uploaded_file($_FILES['notice_upload']['tmp_name'])) {

    $target_dir = "../framework-assets/upload/";
    $target_file = $target_dir . basename($_FILES["notice_upload"]["name"]);
    $file_name = "framework-assets/upload/" . basename($_FILES["notice_upload"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($imageFileType == "pdf") {
        $uploadOk = 1;
    } else {
        $_SESSION["timetable_file_format_error"] = true;
        $uploadOk = 0;
        header("location:index.php");
    }

    $news = $_POST["name"];
    $current_date = date("Y-m-d");
    $date = $_POST["date"];
    if ($uploadOk != 0) {

        if (move_uploaded_file($_FILES["notice_upload"]["tmp_name"], $target_file)) {
        } else {
            $_SESSION["file_move_error"] = true;
            header("location:index.php");
        }
        $notice_insert = $conn->prepare("INSERT INTO news(news_name,date,file_link) VALUES (:news,:date,:file)");
        $notice_insert->execute(array(
            ":news" => $news,
            ":date" => $date,
            ":file" => $file_name
        ));
        if ($notice_insert) {
            $_SESSION["notice_inserted"] = true;
            header("location:index.php");
        } else {
            $_SESSION["notice_error"] = true;
            header("location:index.php");
        }
    } else {
        $_SESSION["file_upload_error"] = true;
        header("location:index.php");
    }
} else if (isset($_POST["notice_add"]) && isset($_POST["notice_link"])) {

    $news = $_POST["name"];
    $date = $_POST["date"];
    $url = $_POST["notice_link"];

    $notice_insert = $conn->prepare("INSERT INTO news(news_name,date,file_link) VALUES (:news,:date,:file)");
    $notice_insert->execute(array(
        ":news" => $news,
        ":date" => $date,
        ":file" => $url
    ));
    if ($notice_insert) {
        $_SESSION["notice_inserted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["notice_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}

if (isset($_POST["notice_update"]) &&  is_uploaded_file($_FILES['notice_upload']['tmp_name'])) {

    $target_dir = "../framework-assets/upload/";
    $target_file = $target_dir . basename($_FILES["notice_upload"]["name"]);
    $file_name = "upload/" . basename($_FILES["notice_upload"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($imageFileType == "pdf") {
        $uploadOk = 1;
    } else {
        $_SESSION["timetable_file_format_error"] = true;
        $uploadOk = 0;
        unset($_SESSION["notice_srn"]);
        header("location:index.php");
    }

    $name = $_POST["name"];
    $date = $_POST["date"];

    if ($uploadOk != 0) {

        if (move_uploaded_file($_FILES["notice_upload"]["tmp_name"], $target_file)) {
        } else {
            $_SESSION["file_move_error"] = true;
            unset($_SESSION["notice_srn"]);
            header("location:index.php");
        }
        $srn = $_SESSION["notice_srn"];

        $notice_insert = $conn->query("UPDATE news SET news_name = '$name', date = '$date', file_link = '$file_name' WHERE id = $srn ");
        if ($notice_insert) {
            $_SESSION["notice_updated"] = true;
            unset($_SESSION["notice_srn"]);
            header("location:index.php");
        } else {
            $_SESSION["notice_error"] = true;
            unset($_SESSION["notice_srn"]);
            header("location:index.php");
        }
    } else {
        $_SESSION["file_upload_error"] = true;
        unset($_SESSION["notice_srn"]);
        header("location:index.php");
    }
} else if (isset($_POST["notice_update"]) && isset($_POST["notice_link"])) {
    $name = $_POST["name"];
    $date = $_POST["date"];
    $url = $_POST["notice_link"];

    $srn = $_SESSION["notice_srn"];

    $notice_insert = $conn->query("UPDATE news SET news_name = '$name', date = '$date', file_link = '$url' WHERE id = $srn ");
    if ($notice_insert) {
        $_SESSION["notice_updated"] = true;
        unset($_SESSION["notice_srn"]);
        header("location:index.php");
    } else {
        $_SESSION["notice_error"] = true;
        unset($_SESSION["notice_srn"]);
        header("location:index.php");
    }
} else {
    header("location:index.php");
}

if (isset($_POST["AddDepartment"])) {

    $dept = $_POST["name"];

    $user_insert = $conn->query("INSERT INTO departments (name) VALUES ( '$dept')");

    header("location:index.php");
} else {
    header("location:index.php");
}


if (isset($_POST["passwordbtn"])) {
    session_start();
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $id = $_SESSION["user_id"];
    if ($password == $cpassword) {
        $password = $conn->prepare("UPDATE users SET password = '$password' WHERE id = '$id'");
        $password->execute();
        header("location:index.php?pass_inserted=true");
        //   $password_inserted = true;
    } else {
        //   $password_not_matched = true;
        header("location:index.php?pass_not_matched=true");
    }
} else {
    header("location:index.php");
}



if (isset($_POST["notes_add"])) {

    $dept_id = $_SESSION["dept_id"];
    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $link = $_POST["link"];


    $notes_insert = $conn->prepare("INSERT INTO notes(dept_id,subject,description,link) VALUES (:dept_id,:name,:desc,:link)");
    $notes_insert->execute(array(
        ":dept_id" => $dept_id,
        ":name" => $name,
        ":desc" => $desc,
        ":link" => $link
    ));
    if ($notes_insert) {
        $_SESSION["notes_inserted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["notes_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["paper_add"])) {

    $dept_id = $_SESSION["dept_id"];
    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $link = $_POST["link"];


    $paper_insert = $conn->prepare("INSERT INTO question_papers(dept_id,subject,description,link) VALUES (:dept_id,:name,:desc,:link)");
    $paper_insert->execute(array(
        ":dept_id" => $dept_id,
        ":name" => $name,
        ":desc" => $desc,
        ":link" => $link
    ));
    if ($paper_insert) {
        $_SESSION["paper_inserted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["paper_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["video_add"])) {

    $dept_id = $_SESSION["dept_id"];
    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $link = $_POST["link"];


    $video_insert = $conn->prepare("INSERT INTO video_lectures(dept_id,subject,description,link) VALUES (:dept_id,:name,:desc,:link)");
    $video_insert->execute(array(
        ":dept_id" => $dept_id,
        ":name" => $name,
        ":desc" => $desc,
        ":link" => $link
    ));
    if ($video_insert) {
        $_SESSION["video_inserted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["video_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}







?>
<!-- end of aditya ////////////////////////////////////////////////////////////////////////////////////////////////-->


<!-- Krishna ////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php
if (isset($_POST['staff_ach_sub'])) {
    $staff_ach_name = $_POST['name'];
    $dept_id = $_SESSION["dept_id"];
    $staff_ach_conference = $_POST['conference'];
    $staff_ach_training = $_POST['training'];
    $insert = $conn->prepare("INSERT INTO staff_achievements(name,dept_id,conference,training) values (:name,:dept_id,:conference,:training)");

    $insert->execute(array(
        ':name' => $staff_ach_name,
        ':dept_id' => $dept_id,
        ':conference' => $staff_ach_conference,
        ':training' => $staff_ach_training
    ));

    if ($insert) {
        $_SESSION['staff_ach_add_success'] = true;
        header("location:index.php");
    } else {
        $_SESSION['staff_ach_add_success'] = false;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST['staff_ach_update'])) {
    $dept_id = $_SESSION["dept_id"];
    $staff_ach_name = $_POST['name'];
    $staff_ach_conference = $_POST['conference'];
    $staff_ach_training = $_POST['training'];
    $srn = $_SESSION["staff_ach_srn"];


    $update = $conn->prepare("UPDATE staff_achievements SET dept_id = :dept_id,name = :name,conference = :conference,training = :training WHERE id = :srn");

    $update->execute(array(
        ':dept_id' => $dept_id,
        ':name' => $staff_ach_name,
        ':conference' => $staff_ach_conference,
        ':training' => $staff_ach_training,
        ":srn" => $srn
    ));

    if ($update) {
        $_SESSION['staff_ach_update_success'] = true;
        header("location:index.php");
    } else {
        $_SESSION['staff_ach_update_success'] = false;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST['mou_sub'])) {
    $mou_title = $_POST['title'];
    $dept_id = $_SESSION["dept_id"];
    $insert = $conn->prepare("INSERT INTO mou(title,dept_id) values (:title,:dept_id)");

    $insert->execute(array(
        ':title' => $mou_title,
        ':dept_id' => $dept_id
    ));
    if ($insert) {
        $_SESSION['mou_add_success'] = true;
        header("location:index.php");
    } else {
        $_SESSION['mou_add_success'] = false;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST['mou_update'])) {
    $mou_title = $_POST['title'];
    $dept_id = $_SESSION["dept_id"];
    $srn = $_SESSION['mou_srn'];
    $insert = $conn->prepare("UPDATE mou SET dept_id=:dept_id, title = :title WHERE id=:srn");

    $insert->execute(array(
        ':dept_id' => $dept_id,
        ':title' => $mou_title,
        ':srn' => $srn
    ));
    if ($insert) {
        $_SESSION['mou_update_success'] = true;
        header("location:index.php");
    } else {
        $_SESSION['mou_update_success'] = false;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST['achad_ach_sub'])) {
    $achad_ach_name = $_POST['name'];
    $dept_id = $_SESSION["dept_id"];
    $achad_ach_year = $_POST['year'];
    $achad_ach_status = $_POST['status'];
    $insert = $conn->prepare("INSERT INTO stud_achievement(name,dept_id,year,status) values (:name,:dept_id,:year,:status)");

    $insert->execute(array(
        ':name' => $achad_ach_name,
        ':dept_id' => $dept_id,
        ':year' => $achad_ach_year,
        ':status' => $achad_ach_status
    ));

    if ($insert) {
        $_SESSION['achad_ach_add_success'] = true;
        header("location:index.php");
    } else {
        $_SESSION['achad_ach_add_success'] = false;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST['achad_ach_update'])) {
    $dept_id = $_SESSION["dept_id"];
    $achad_ach_name = $_POST['name'];
    $achad_ach_year = $_POST['year'];
    $achad_ach_status = $_POST['status'];
    $srn = $_SESSION['achad_ach_srn'];
    $insert = $conn->prepare("UPDATE stud_achievement SET dept_id = :dept_id, name = :name, year = :year, status = :status WHERE id = :srn");

    $insert->execute(array(
        ':dept_id' => $dept_id,
        ':name' => $achad_ach_name,
        ':year' => $achad_ach_year,
        ':status' => $achad_ach_status,
        ':srn' => $srn
    ));

    if ($insert) {
        $_SESSION['achad_ach_update_success'] = true;
        header("location:index.php");
    } else {
        $_SESSION['achad_ach_update_success'] = false;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST['other_ach_sub'])) {
    $other_ach_name = $_POST['name'];
    $dept_id = $_SESSION["dept_id"];
    $other_ach_competition = $_POST['competition'];
    $other_ach_year = $_POST['year'];
    $other_ach_status = $_POST['status'];
    $insert = $conn->prepare("INSERT INTO other_achievement(name,dept_id,competition,year,status) values (:name,:dept_id,:competition,:year,:status)");

    $insert->execute(array(
        ':name' => $other_ach_name,
        ':dept_id' => $dept_id,
        ':competition' => $other_ach_competition,
        ':year' => $other_ach_year,
        ':status' => $other_ach_status
    ));

    if ($insert) {
        $_SESSION['other_ach_add_success'] = true;
        header("location:index.php");
    } else {
        $_SESSION['other_ach_add_success'] = false;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST['other_ach_update'])) {
    $dept_id = $_SESSION["dept_id"];
    $other_ach_name = $_POST['name'];
    $other_ach_competition = $_POST['competition'];
    $other_ach_year = $_POST['year'];
    $other_ach_status = $_POST['status'];
    $srn = $_SESSION['other_ach_srn'];
    $insert = $conn->prepare("UPDATE other_achievement SET dept_id = :dept_id, name = :name, competition = :competition, year = :year, status = :status WHERE id = :srn");

    $insert->execute(array(
        ':dept_id' => $dept_id,
        ':name' => $other_ach_name,
        ':competition' => $other_ach_competition,
        ':year' => $other_ach_year,
        ':status' => $other_ach_status,
        ':srn' => $srn
    ));

    if ($insert) {
        $_SESSION['other_ach_update_success'] = true;
        header("location:index.php");
    } else {
        $_SESSION['other_ach_update_success'] = false;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["faculty_sub"])) {
    $target_dir = "../departments/uploads/faculty/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $file_name = "uploads/faculty/" . basename($_FILES["image"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // echo $imageFileType;
    // echo $file_name;

    if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") {
        $uploadOk = 1;
    } else {
        $_SESSION["faculty_file_format_error"] = true;
        $uploadOk = 0;
        header("location:index.php");
    }
    // echo $uploadOk;

    if ($uploadOk != 0) {
        $target_dir_p = "../departments/uploads/faculty/";
        $target_file_p = $target_dir_p . basename($_FILES["resume"]["name"]);
        $file_name_p = "uploads/faculty/" . basename($_FILES["resume"]["name"]);

        $uploadOk = 1;
        $imageFileType_p = strtolower(pathinfo($target_file_p, PATHINFO_EXTENSION));

        if ($imageFileType_p == "pdf" || $imageFileType_p == 'docx' || $imageFileType_p == '') {
            $uploadOk = 1;
        } else {
            $_SESSION["faculty_file_format_error_p"] = true;
            $uploadOk = 0;
            header("location:index.php");
        }
    }

    $name = $_POST["name"];
    $dept_id = $_SESSION["dept_id"];
    $designation = $_POST["designation"];
    $qualification = $_POST["qualification"];
    $experience = $_POST["experience"];

    $id = $_SESSION["dept_id"];
    if ($uploadOk != 0) {

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
        } else {
            $_SESSION["file_move_error"] = true;
            header("location:index.php");
        }

        if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file_p)) {
            echo "The file " . htmlspecialchars(basename($_FILES["resume"]["name"])) . " has been uploaded.";
        } else {
            $_SESSION["faculty_file_format_error_p"] = true;
            header("location:index.php");
        }


        $insert = $conn->prepare("INSERT INTO faculty(dept_id,name,image,resume,designation,qualification,experience) values (:dept_id,:name,:image,:resume,:designation,:qualification,:experience)");

        $insert->execute(array(
            ':dept_id' => $dept_id,
            ':name' => $name,
            ':image' => $file_name,
            ':resume' => $file_name_p,
            ':designation' => $designation,
            ':qualification' => $qualification,
            ':experience' => $experience
        ));

        if ($insert) {
            $_SESSION["faculty_add_success"] = true;
            header("location:index.php");
        } else {
            $_SESSION["faculty_add_error"] = true;
            header("location:index.php");
        }
    } else {
        $_SESSION["file_upload_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["faculty_update"])) {
    $target_dir = "../departments/uploads/faculty/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $file_name = "uploads/faculty/" . basename($_FILES["image"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // echo $imageFileType;
    // echo $file_name;

    if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") {
        $uploadOk = 1;
    } else {
        $_SESSION["faculty_file_format_error"] = true;
        $uploadOk = 0;
        header("location:index.php");
    }
    // echo $uploadOk;

    if ($uploadOk != 0) {
        $target_dir_p = "../departments/uploads/faculty/";
        $target_file_p = $target_dir_p . basename($_FILES["resume"]["name"]);
        $file_name_p = "uploads/faculty/" . basename($_FILES["resume"]["name"]);

        $uploadOk = 1;
        $imageFileType_p = strtolower(pathinfo($target_file_p, PATHINFO_EXTENSION));

        if ($imageFileType_p == "pdf" || $imageFileType_p == 'docx' || $imageFileType_p == '') {
            $uploadOk = 1;
        } else {
            $_SESSION["faculty_file_format_error_p"] = true;
            $uploadOk = 0;
            header("location:index.php");
        }
    }

    $name = $_POST["name"];
    $dept_id = $_SESSION["dept_id"];
    $designation = $_POST["designation"];
    $qualification = $_POST["qualification"];
    $experience = $_POST["experience"];
    $srn = $_SESSION['faculty_srn'];


    $id = $_SESSION["dept_id"];
    if ($uploadOk != 0) {

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
        } else {
            $_SESSION["file_move_error"] = true;
            header("location:index.php");
        }

        if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file_p)) {
            echo "The file " . htmlspecialchars(basename($_FILES["resume"]["name"])) . " has been uploaded.";
        } else {
            $_SESSION["faculty_file_format_error_p"] = true;
            header("location:index.php");
        }

        $insert = $conn->prepare("UPDATE faculty SET dept_id = :dept_id, name = :name, image = :image, resume = :resume, designation = :designation, qualification=:qualification, experience = :experience WHERE id = :srn");

        $insert->execute(array(
            ':dept_id' => $dept_id,
            ':name' => $name,
            ':image' => $file_name,
            ':resume' => $file_name_p,
            ':designation' => $designation,
            ':qualification' => $qualification,
            ':experience' => $experience,
            ':srn' => $srn
        ));

        if ($insert) {
            $_SESSION["faculty_update_success"] = true;
            header("location:index.php");
        } else {
            $_SESSION["faculty_update_error"] = true;
            header("location:index.php");
        }
    } else {
        $_SESSION["file_upload_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


// end of Krishna ////////////////////////////////////////////////////////////////////////////////////////////////-->



//admin dashboard

if (isset($_POST["new_admin"])) {

    $name = $_POST["name"];
    $password = $_POST["password"];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $check_user = $conn->query("SELECT username FROM admin WHERE username = '$name'");
    $check_user->fetch(PDO::FETCH_OBJ);


    if ($check_user->rowCount() > 0) {
        $_SESSION["admin_exist"] = true;
        header("location:index.php");
    } else {

        $admin_create = $conn->prepare("INSERT INTO admin(username,password) VALUES (:name,:password)");
        $admin_create->execute(array(
            ":name" => $name,
            ":password" => $hash
        ));
        if ($admin_create) {
            $_SESSION["admin_created"] = true;
            header("location:index.php");
        } else {
            $_SESSION["admin_create_error"] = true;
            header("location:index.php");
        }
    }
} else {
    header("location:index.php");
}


if (isset($_POST["new_admin_update"])) {


    $pre_password = $_POST["pre_password"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $id = $_SESSION["new_admin_srn"];

    $check_user = $conn->query("SELECT * FROM admin WHERE id = '$id'");
    $row = $check_user->fetch(PDO::FETCH_OBJ);

    if (password_verify($pre_password, $row->password)) {

        if ($password == $cpassword) {

            $update = $conn->prepare("UPDATE admin SET password = :password WHERE id = :srn");

            $update->execute(array(
                ':password' => $hash,
                ':srn' => $id
            ));

            if ($update) {
                $_SESSION["admin_updated"] = true;
                header("location:index.php");
            } else {
                $_SESSION["admin_update_error"] = true;
                header("location:index.php");
            }
        } else {
            $_SESSION["admin_password_match_error"] = true;
            header("location:index.php");
        }
    } else {
        $_SESSION["admin_password_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["new_dept"])) {

    $dept = $_POST["dept"];
    $password = $_POST["password"];

    $dept_create = $conn->prepare("INSERT INTO staff_admin(dept,password) VALUES (:dept,:password)");
    $dept_create->execute(array(
        ":dept" => $dept,
        ":password" => $password
    ));
    if ($dept_create) {
        $_SESSION["dept_created"] = true;
        header("location:index.php");
    } else {
        $_SESSION["dept_create_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["dept_update"])) {


    $pre_password = $_POST["pre_password"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $id = $_SESSION["dept_srn"];

    $check_user = $conn->query("SELECT * FROM staff_admin WHERE id = '$id'");

    $row = $check_user->fetch(PDO::FETCH_OBJ);

    if ($row->password == $pre_password) {

        if ($password == $cpassword) {

            $update = $conn->prepare("UPDATE staff_admin SET password = :password WHERE id = :srn");

            $update->execute(array(
                ':password' => $password,
                ':srn' => $id
            ));

            if ($update) {
                $_SESSION["dept_updated"] = true;
                header("location:index.php");
            } else {
                $_SESSION["dept_update_error"] = true;
                header("location:index.php");
            }
        } else {
            $_SESSION["dept_password_match_error"] = true;
            header("location:index.php");
        }
    } else {
        $_SESSION["dept_password_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["carousel_add"])) {
    $target_dir = "../framework-assets/img/";
    $target_file = $target_dir . basename($_FILES["carousel_image"]["name"]);
    $file_name = "framework-assets/img/" . basename($_FILES["carousel_image"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") {
        $uploadOk = 1;
    } else {
        $_SESSION["hod_file_format_error"] = true;
        $uploadOk = 0;
        header("location:index.php");
    }

    $title = $_POST["title"];
    $description = $_POST["description"];

    // $id = $_SESSION["dept_id"];
    if ($uploadOk != 0) {

        if (move_uploaded_file($_FILES["carousel_image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["carousel_image"]["name"])) . " has been uploaded.";
        } else {
            $_SESSION["file_move_error"] = true;
            header("location:index.php");
        }

        $carousel_insert = $conn->query("INSERT INTO carousel (image,title,description) VALUES('$file_name','$title','$description') ");
        if ($carousel_insert) {
            $_SESSION["carousel_inserted"] = true;
            header("location:index.php");
        } else {
            $_SESSION["carousel_error"] = true;
            header("location:index.php");
        }
    } else {
        $_SESSION["file_upload_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["carousel_update"])) {
    $target_dir = "../framework-assets/img/";
    $target_file = $target_dir . basename($_FILES["carousel_image"]["name"]);
    $file_name = "framework-assets/img/" . basename($_FILES["carousel_image"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") {
        $uploadOk = 1;
    } else {
        $_SESSION["hod_file_format_error"] = true;
        $uploadOk = 0;
        header("location:index.php");
    }

    $title = $_POST["title"];
    $description = $_POST["description"];

    // $id = $_SESSION["dept_id"];
    if ($uploadOk != 0) {

        if (move_uploaded_file($_FILES["carousel_image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["carousel_image"]["name"])) . " has been uploaded.";
        } else {
            $_SESSION["file_move_error"] = true;
            header("location:index.php");
        }
        $id = $_SESSION["carousel_srn"];
        $carousel_update = $conn->query("UPDATE carousel SET image = '$file_name', title = '$title', description = '$description' WHERE id = '$id' ");
        if ($carousel_update) {
            $_SESSION["carousel_updated"] = true;
            header("location:index.php");
        } else {
            $_SESSION["carousel_update_error"] = true;
            header("location:index.php");
        }
    } else {
        $_SESSION["file_upload_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["head_add"])) {
    $target_dir = "../framework-assets/img/";
    $target_file = $target_dir . basename($_FILES["head_image"]["name"]);
    $file_name = "framework-assets/img/" . basename($_FILES["head_image"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") {
        $uploadOk = 1;
    } else {
        $_SESSION["hod_file_format_error"] = true;
        $uploadOk = 0;
        header("location:index.php");
    }

    $name = $_POST["name"];
    $desig = $_POST["desig"];
    $description = $_POST["description"];

    // $id = $_SESSION["dept_id"];
    if ($uploadOk != 0) {

        if (move_uploaded_file($_FILES["head_image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["head_image"]["name"])) . " has been uploaded.";
        } else {
            $_SESSION["file_move_error"] = true;
            header("location:index.php");
        }

        $head_insert = $conn->prepare("INSERT INTO head (image,name,designation,description) VALUES(:file,:name,:desig,:description) ");
        $head_insert->execute(array(
            ":file" => $file_name,
            ":name" => $name,
            ":desig" => $desig,
            ":description" => $description
        ));
        if ($head_insert) {
            $_SESSION["head_inserted"] = true;
            header("location:index.php");
        } else {
            $_SESSION["head_error"] = true;
            header("location:index.php");
        }
    } else {
        $_SESSION["file_upload_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["head_update"])) {
    $target_dir = "../framework-assets/img/";
    $target_file = $target_dir . basename($_FILES["head_image"]["name"]);
    $file_name = "framework-assets/img/" . basename($_FILES["head_image"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") {
        $uploadOk = 1;
    } else {
        $_SESSION["hod_file_format_error"] = true;
        $uploadOk = 0;
        header("location:index.php");
    }

    $name = $_POST["name"];
    $desig = $_POST["desig"];
    $description = $_POST["description"];

    // $id = $_SESSION["dept_id"];
    if ($uploadOk != 0) {

        if (move_uploaded_file($_FILES["head_image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["head_image"]["name"])) . " has been uploaded.";
        } else {
            $_SESSION["file_move_error"] = true;
            header("location:index.php");
        }
        $id = $_SESSION["head_srn"];
        $head_update = $conn->prepare("UPDATE head SET image = :file, name = :name, designation = :desig , description = :description WHERE id = :id ");
        $head_update->execute(array(
            ":file" => $file_name,
            ":name" => $name,
            ":desig" => $desig,
            ":description" => $description,
            ":id" => $id
        ));
        if ($head_update) {
            $_SESSION["head_updated"] = true;
            header("location:index.php");
        } else {
            $_SESSION["head_update_error"] = true;
            header("location:index.php");
        }
    } else {
        $_SESSION["file_upload_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["prn_desk_update"])) {
    if (isset($_FILES["head_image"])) {
        $target_dir = "../framework-assets/img/";
        $target_file = $target_dir . basename($_FILES["head_image"]["name"]);
        $file_name = "framework-assets/img/" . basename($_FILES["head_image"]["name"]);
        $uploadOk = 1;

        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") {
            $uploadOk = 1;
        } else {
            $_SESSION["hod_file_format_error"] = true;
            $uploadOk = 0;
            header("location:index.php");
        }

        $name = $_POST["name"];
        $description = $_POST["description"];

        if ($uploadOk != 0) {

            if (move_uploaded_file($_FILES["head_image"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["head_image"]["name"])) . " has been uploaded.";
            } else {
                $_SESSION["file_move_error"] = true;
                header("location:index.php");
            }
            $id = $_SESSION["prn_desk_srn"];
            $head_update = $conn->prepare("UPDATE head SET image = :file, name = :name, principal_desk_desc = :desc WHERE id = :id ");
            $head_update->execute(array(
                ":file" => $file_name,
                ":name" => $name,
                ":desc" => $description,
                ":id" => $id
            ));
            if ($head_update) {
                $_SESSION["prn_desk_updated"] = true;
                header("location:index.php");
            } else {
                $_SESSION["prn_update_error"] = true;
                header("location:index.php");
            }
        } else {
            $_SESSION["file_upload_error"] = true;
            header("location:index.php");
        }
    } else {

        $name = $_POST["name"];
        $description = $_POST["description"];

        if ($uploadOk != 0) {


            $id = $_SESSION["prn_desk_srn"];
            $head_update = $conn->prepare("UPDATE head SET name = :name, principal_desk_desc = :desc WHERE id = :id ");
            $head_update->execute(array(
                ":name" => $name,
                ":desc" => $description,
                ":id" => $id
            ));
            if ($head_update) {
                $_SESSION["prn_desk_updated"] = true;
                header("location:index.php");
            } else {
                $_SESSION["prn_desk_update_error"] = true;
                header("location:index.php");
            }
        }
    }
} else {
    header("location:index.php");
}


if (isset($_POST["ac_update"])) {


    $id = $_SESSION["ac_id"];
    $year = $_POST["year"];
    $link = $_POST["link"];


    $ac_update = $conn->query("UPDATE academic_calender SET year = '$year', calender = '$link' WHERE srn = $id ");
    if ($ac_update) {
        $_SESSION["ac_updated"] = true;
        header("location:index.php");
    } else {
        $_SESSION["ac_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}

if (isset($_POST["program_update"])) {


    $id = $_SESSION["program_id"];
    $name = $_POST["name"];
    $year = $_POST["year"];
    $intake = $_POST["intake"];

    $program_update = $conn->query("UPDATE programs SET name = '$name', year = '$year', intake = '$intake' WHERE srn = $id ");
    if ($program_update) {
        $_SESSION["program_updated"] = true;
        header("location:index.php");
    } else {
        $_SESSION["program_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}

if (isset($_POST["scholarship_add"])) {

    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $link = $_POST["link"];


    $scholarship_insert = $conn->query("INSERT INTO scholarship (name,details,link) VALUES('$name','$desc','$link') ");
    if ($scholarship_insert) {
        $_SESSION["scholarship_inserted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["scholarship_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}

if (isset($_POST["form_add"])) {

    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $link = $_POST["link"];


    $form_insert = $conn->query("INSERT INTO form (name,details,link) VALUES('$name','$desc','$link') ");
    if ($form_insert) {
        $_SESSION["form_inserted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["form_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}

if (isset($_POST["ac_add"])) {

    $year = $_POST["year"];
    $link = $_POST["link"];


    $ac_insert = $conn->query("INSERT INTO academic_calender (year,calender) VALUES('$year','$link') ");
    if ($ac_insert) {
        $_SESSION["ac_inserted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["ac_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["scholarship_update"])) {


    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $link = $_POST["link"];

    $id = $_SESSION["scholarship_srn"];
    $scholarship_update = $conn->query("UPDATE scholarship SET name = '$name', details = '$desc', link = '$link' WHERE id = '$id' ");
    if ($scholarship_update) {
        $_SESSION["scholarship_updated"] = true;
        header("location:index.php");
    } else {
        $_SESSION["scholarship_update_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_POST["form_update"])) {

    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $link = $_POST["link"];

    $id = $_SESSION["form_srn"];
    $form_update = $conn->query("UPDATE form SET name = '$name', details = '$desc', link = '$link' WHERE id = '$id' ");
    if ($form_update) {
        $_SESSION["form_updated"] = true;
        header("location:index.php");
    } else {
        $_SESSION["form_update_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


?>