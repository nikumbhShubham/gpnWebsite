<?php
// error_reporting(0);
include 'conn.php';
session_start();


//  Krishna ////////////////////////////////////////////////////////////////////////////////////////////////-->

if (isset($_SESSION['mou_id']) && isset($_GET["delete_confirm"])) {
    $mou_id = $_SESSION['mou_id'];

    $delete = $conn->prepare("DELETE FROM mou WHERE id = :id");
    $delete->execute(array(
        ':id' => $mou_id
    ));

    if ($delete) {
        $_SESSION['mou_delete_success'] = true;
        header("location:index.php");
    } else {
        $_SESSION['mou_delete_success'] = false;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_SESSION['staff_ach_id']) && isset($_GET["delete_confirm"])) {
    $staff_ach_id = $_SESSION['staff_ach_id'];

    $delete = $conn->prepare("DELETE FROM staff_achievements WHERE id = :id");
    $delete->execute(array(
        ':id' => $staff_ach_id
    ));

    if ($delete) {
        $_SESSION['staff_ach_delete_success'] = true;
        header("location:index.php");
    } else {
        $_SESSION['staff_ach_delete_success'] = false;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_SESSION['achad_ach_id']) && isset($_GET["delete_confirm"])) {
    $achad_ach_id = $_SESSION['achad_ach_id'];

    $delete = $conn->prepare("DELETE FROM stud_achievement WHERE id = :id");
    $delete->execute(array(
        ':id' => $achad_ach_id
    ));

    if ($delete) {
        $_SESSION['achad_ach_delete_success'] = true;
        header("location:index.php");
    } else {
        $_SESSION['achad_ach_delete_success'] = false;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_SESSION['other_ach_id']) && isset($_GET["delete_confirm"])) {
    $other_ach_id = $_SESSION['other_ach_id'];

    $delete = $conn->prepare("DELETE FROM other_achievement WHERE id = :id");
    $delete->execute(array(
        ':id' => $other_ach_id
    ));

    if ($delete) {
        $_SESSION['other_ach_delete_success'] = true;
        header("location:index.php");
    } else {
        $_SESSION['other_ach_delete_success'] = false;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_SESSION['faculty_id']) && isset($_GET["delete_confirm"])) {
    $faculty_id = $_SESSION['faculty_id'];

    $delete = $conn->prepare("DELETE FROM faculty WHERE id = :id");
    $delete->execute(array(
        ':id' => $faculty_id
    ));

    if ($delete) {
        $_SESSION['faculty_delete_success'] = true;
        header("location:index.php");
    } else {
        $_SESSION['faculty_delete_success'] = false;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


// END OF Krishna ////////////////////////////////////////////////////////////////////////////////////////////////-->

// Aditya ////////////////////////////////////////////////////////////////////////////////////////////////-->

if (isset($_SESSION["timetable_srn_d"]) && isset($_GET["delete_confirm"])) {
    $id = $_SESSION["timetable_srn_d"];
    $tt_delete = $conn->query("DELETE FROM timetable WHERE id = $id ");
    if ($tt_delete) {
        $_SESSION["timetable_deleted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["timetable_delete_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_SESSION["ind_srn_d"]) && isset($_GET["delete_confirm"])) {
    $id = $_SESSION["ind_srn_d"];
    $ind_delete = $conn->query("DELETE FROM industrial_visit WHERE id = $id ");
    if ($ind_delete) {
        $_SESSION["ind_deleted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["ind_delete_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_SESSION["result_analysis_srn_d"]) && isset($_GET["delete_confirm"])) {
    $id = $_SESSION["result_analysis_srn_d"];
    $result_analysis_delete = $conn->query("DELETE FROM result_analysis WHERE id = $id ");
    if ($result_analysis_delete) {
        $_SESSION["result_analysis_deleted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["inresult_analysis_delete_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_SESSION["notes_srn_d"]) && isset($_GET["delete_confirm"])) {
    $id = $_SESSION["notes_srn_d"];
    $notes_delete = $conn->query("DELETE FROM notes WHERE id = $id ");
    if ($notes_delete) {
        $_SESSION["notes_deleted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["notes_delete_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}

if (isset($_SESSION["paper_srn_d"]) && isset($_GET["delete_confirm"])) {
    $id = $_SESSION["paper_srn_d"];
    $paper_delete = $conn->query("DELETE FROM question_papers WHERE id = $id ");
    if ($paper_delete) {
        $_SESSION["paper_deleted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["paper_delete_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}

if (isset($_SESSION["video_srn_d"]) && isset($_GET["delete_confirm"])) {
    $id = $_SESSION["video_srn_d"];
    $video_delete = $conn->query("DELETE FROM video_lectures WHERE id = $id ");
    if ($video_delete) {
        $_SESSION["video_deleted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["video_delete_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_SESSION["academic_performance_srn_d"]) && isset($_GET["delete_confirm"])) {
    $id = $_SESSION["academic_performance_srn_d"];
    $academic_performance_delete = $conn->query("DELETE FROM result_analysis2 WHERE id = $id ");
    if ($academic_performance_delete) {
        $_SESSION["academic_performance_deleted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["academic_performance_delete_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_SESSION["notice_srn_d"]) && isset($_GET["delete_confirm"])) {
    $id = $_SESSION["notice_srn_d"];
    $ind_delete = $conn->query("DELETE FROM news WHERE id = $id ");
    if ($ind_delete) {
        $_SESSION["notice_deleted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["notice_delete_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}

if (isset($_SESSION["delete_all_notice"]) && isset($_GET["delete_confirm"])) {
    $current_date = date("Y-m-d");
    $ind_delete = $conn->query("DELETE FROM news WHERE date > $current_date");
    if ($ind_delete) {
        $_SESSION["notice_deleted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["notice_delete_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


// END OF Aditya ////////////////////////////////////////////////////////////////////////////////////////////////-->

// Admin Dashboard ////////////////////////////////////////////////////////////////////////////////////////////////-->

if (isset($_SESSION["new_admin_srn_d"]) && isset($_GET["delete_confirm"])) {
    $id = $_SESSION["new_admin_srn_d"];
    $admin_delete = $conn->query("DELETE FROM admin WHERE id = $id ");
    if ($admin_delete) {
        $_SESSION["admin_deleted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["admin_delete_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_SESSION["dept_srn_d"]) && isset($_GET["delete_confirm"])) {
    $id = $_SESSION["dept_srn_d"];
    $dept_delete = $conn->query("DELETE FROM staff_admin WHERE id = $id ");
    if ($dept_delete) {
        $_SESSION["dept_deleted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["dept_delete_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}


if (isset($_SESSION["carousel_srn_d"]) && isset($_GET["delete_confirm"])) {
    $id = $_SESSION["carousel_srn_d"];
    $carousel_delete = $conn->query("DELETE FROM carousel WHERE id = $id ");
    if ($carousel_delete) {
        $_SESSION["carousel_deleted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["carousel_delete_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}

if (isset($_SESSION["scholarship_srn_d"]) && isset($_GET["delete_confirm"])) {
    $id = $_SESSION["scholarship_srn_d"];
    $scholarship_delete = $conn->query("DELETE FROM scholarship WHERE id = $id ");
    if ($scholarship_delete) {
        $_SESSION["scholarship_deleted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["scholarship_delete_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}

if (isset($_SESSION["form_srn_d"]) && isset($_GET["delete_confirm"])) {
    $id = $_SESSION["form_srn_d"];
    $form_delete = $conn->query("DELETE FROM form WHERE id = $id ");
    if ($form_delete) {
        $_SESSION["form_deleted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["form_delete_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}

if (isset($_SESSION["ac_srn_d"]) && isset($_GET["delete_confirm"])) {
    $id = $_SESSION["ac_srn_d"];
    $ac_delete = $conn->query("DELETE FROM academic_calender WHERE srn = $id ");
    if ($ac_delete) {
        $_SESSION["ac_deleted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["ac_delete_error"] = true;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}



if (isset($_SESSION["head_srn_d"]) && isset($_GET["delete_confirm"])) {

    // if ($_SESSION["head_srn_d"] == 1) {
    $id = $_SESSION["head_srn_d"];
    $head_delete = $conn->query("DELETE FROM head WHERE id = $id ");
    if ($head_delete) {
        $_SESSION["head_deleted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["head_delete_error"] = true;
        header("location:index.php");
    }
    // }
} else {
    header("location:index.php");
}

if (isset($_SESSION["grievances_d"]) && isset($_GET["delete_confirm"])) {

    // if ($_SESSION["head_srn_d"] == 1) {
    $id = $_SESSION["grievances_d"];
    $grievances_delete = $conn->query("DELETE FROM grievances WHERE srn = $id ");
    if ($grievances_delete) {
        $_SESSION["grievances_deleted"] = true;
        header("location:index.php");
    } else {
        $_SESSION["grievances_delete_error"] = true;
        header("location:index.php");
    }
    // }
} else {
    header("location:index.php");
}


if (isset($_GET["delete_confirm"])) {

    unset($_SESSION["srn_d"]);
    unset($_SESSION["ind_srn_d"]);
    unset($_SESSION["result_analysis_srn_d"]);
    unset($_SESSION["academic_performance_srn_d"]);
    unset($_SESSION["notice_srn_d"]);
    unset($_SESSION["staff_ach_id"]);
    unset($_SESSION["mou_id"]);
    unset($_SESSION["achad_ach_id"]);
    unset($_SESSION["other_ach_id"]);
    unset($_SESSION["faculty_id"]);

    unset($_SESSION["new_admin_srn_d"]);
    unset($_SESSION["dept_srn_d"]);
    unset($_SESSION["carousel_srn_d"]);
    unset($_SESSION["scholarship_srn_d"]);
    unset($_SESSION["form_srn_d"]);
    unset($_SESSION["head_srn_d"]);
    unset($_SESSION["grievances_d"]);
    unset($_SESSION["delete_all_notice"]);
} else {
    header("location:index.php");
}
