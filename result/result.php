<?php


include '../admin/conn.php';
error_reporting(0);
session_start();


function ip_filter($data)
{

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if (isset($_POST["result"])) {
    $rollno = ip_filter($_POST["rollno"]);
    if (strlen($rollno) >= 6) {
        $result = $conn->query("SELECT * FROM test WHERE REGNO = $rollno");
        // $rollno_fetch = $result->fetch(PDO::FETCH_OBJ);

        if ($result->rowCount() >= 1) {
            $name_fetch = $conn->query("SELECT s_name,s_program FROM studmast WHERE regno = $rollno");
            while ($rows = $name_fetch->fetch(PDO::FETCH_OBJ)) {
                $name = $rows->s_name;
                $department = $rows->s_program;
            };
            $dept = $conn->query("SELECT * FROM departments WHERE short = '$department'");
            $dept_fetch = $dept->fetch(PDO::FETCH_OBJ);
            $department_name = $dept_fetch->name . " Engineering";
        } else {
            $_SESSION["result_not_found"] = true;
            header("location:index.php");
        }
    } else {
        $_SESSION["invalid_rollno"] = true;
        header("location:index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result | GPN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    @media(max-width: 772px) {
        body {
            width: 233%;
            /* margin: 0 100px; */
        }
    }

    @media print {
        #_hide * {
            display: none;
        }
    }
</style>

<body class="my-5">
    <section id="fullResult">
        <div class="container">


            <center class="my-5 ">
                <h1>Result </h1>
                <h4>(Result of I, II & III Year-Regular+Backlog Students)</h4>
            </center>


            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="color: blue">
                            <center>
                                <?php
                                $exam_year = $conn->query("SELECT * FROM test WHERE REGNO = $rollno");
                                $exam_year_fetch = $exam_year->fetch(PDO::FETCH_OBJ);

                                $year = $exam_year_fetch->EX_REG_DAT;
                                ?>

                                <h2>Result of <?php echo $year; ?> Examination</h2>
                            </center>
                        </th>
                    </tr>
                </thead>
            </table>

            <div style="display: flex;">
                <h4>Seat No: <?php echo $rollno; ?></h4>
                <h4 style="margin-left:20%">Name: <?php echo $name; ?></h4>
            </div>
            <h4 class="my-4">Diploma Programme in <?php echo $department_name; ?></h4>
            <table class="table table-borderless" style="font-weight: bold;">
                <thead>
                    <tr style="color:red;">
                        <th scope="col">Course Code</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">TH</th>
                        <th scope="col">PT</th>
                        <th scope="col">TOTAL</th>
                        <th scope="col">TW</th>
                        <th scope="col">PR</th>
                        <th scope="col">OR</th>
                    </tr>
                </thead>
                <tbody style="color: blue">
                    <?php
                    $total_marks_obtained = 0;
                    $total_marks = 0;
                    $result = $conn->query("SELECT * FROM test WHERE REGNO = $rollno");
                    while ($rows = $result->fetch(PDO::FETCH_ASSOC)) :
                        $course_code = $rows["COU_CODE"];
                        $c_name = $conn->query("SELECT * FROM coursema WHERE cou_code = '$course_code'");
                        while ($c_rows = $c_name->fetch(PDO::FETCH_ASSOC)) {
                            $course_code = $c_rows["cou_code"];
                            $course_name = $c_rows["cou_name"];
                            $course_total = $c_rows["cou_th_max"] + $c_rows["cou_pt_max"] + $c_rows["cou_tw_max"] + $c_rows["cou_or_max"] + $c_rows["cou_pr_max"];
                        }

                        $ccredit = $rows["CCREDIT"];
                        $pcredit = $rows["PCREDIT"];
                        $rcredit = $rows["EX_DET"];
                        $total_backlog = $rows["class"];
                        $total = $rows["GRTOTAL"];
                        $outof = $rows["OUTOF"];
                        $result_status = $rows["RESULT"];

                    ?>
                        <tr>
                            <?php
                            if ($rows["backlog"] == "TRUE" && $rows["GR"] >= "1") :
                            ?>
                                <th scope="row"><?php echo  "#" . $course_code . "@"; ?></th>
                            <?php
                            elseif ($rows["GR"] >= "1") :
                            ?>
                                <th scope="row"><?php echo $course_code  . "@"; ?></th>
                            <?php
                            else :
                            ?>
                                <th scope="row"><?php echo $course_code; ?></th>
                            <?php
                            endif;
                            ?>

                            <td><?php echo $course_name; ?></td>

                            <td><?php
                                if ($rows["EX_TH"] == "EX") {
                                    echo $rows["EX_TH"];
                                } else if ($rows["EX_TH"] != 0) {
                                    echo $rows["EX_TH"];
                                } else {
                                    echo "-";
                                } ?></td>

                            <td><?php if ($rows["EX_PT"] != 0) {
                                    echo $rows["EX_PT"];
                                } else {
                                    echo "-";
                                } ?>
                            </td>
                            <?php
                            if ($rows["EX_PASS"] == "N") :
                            ?>
                                <td style="color: red"><?php echo "* " . $rows["TOTAL"]; ?>
                                </td>
                            <?php
                            else :
                            ?>
                                <td><?php
                                    echo $rows["TOTAL"];
                                    ?>
                                </td>
                            <?php
                            endif;
                            ?>

                            <td><?php if ($rows["EX_TW"] == "Y") {
                                    echo "CC";
                                } else if ($rows["EX_TW"] >= 0) {
                                    echo $rows["EX_TW"];
                                }
                                ?> </td>

                            <td><?php if ($rows["EX_PR"] != 0) {
                                    echo $rows["EX_PR"];
                                } else {
                                    echo "-";
                                } ?> </td>

                            <td><?php if ($rows["EX_OR"] != 0) {
                                    echo $rows["EX_OR"];
                                } else {
                                    echo "-";
                                } ?> </td>
                            <?php
                            $total_marks = $total_marks + $course_total;
                            ?>
                        </tr>

                    <?php
                    endwhile;
                    ?>


                </tbody>
            </table>

            <table class="table table-bordered">
                <thead>
                    <tr style="color:red;">
                        <th scope="col">Current Credits</th>
                        <th scope="col">Previous Credits</th>
                        <th scope="col">Total Credits</th>
                        <th scope="col">Requisite Credits</th>
                        <th scope="col">Total Backlog</th>
                        <th scope="col">Grand Total</th>
                        <th scope="col">Out Of</th>
                        <th scope="col">Result</th>
                    </tr>
                </thead>
                <tbody style="color: blue; font-weight: bold;">
                    <tr>
                        <td><?php echo $ccredit; ?></td>
                        <td><?php echo $pcredit; ?></td>
                        <td><?php echo $ccredit + $pcredit; ?></td>
                        <td><?php echo $rcredit; ?></td>
                        <td><?php echo $total_backlog; ?></td>
                        <td><?php echo $total; ?></td>
                        <td><?php echo $outof; ?></td>
                        <td><?php echo $result_status; ?></td>
                    </tr>
                </tbody>
            </table>

            <table class="table table-borderless" style="color: red; font-weight: bold;">
                <tbody>
                    <tr>
                        <td>TH = Theory</td>
                        <td>MAX = Maximum</td>
                        <td>DTRNC = Disallowed to Register for new courses</td>
                    </tr>
                    <tr>
                        <td>PT = Periodic test</td>
                        <td>MN = Minimum</td>
                        <td>ATRNC = Allowed to Register for new courses</td>
                    </tr>
                    <tr>
                        <td>TW = Term Work</td>
                        <td>OBT = Obtained</td>
                        <td># = Backlog Courses</td>
                    </tr>
                    <tr>
                        <td>PR = Practical</td>
                        <td>EX = Exemption</td>
                        <td>* = Fail</td>
                    </tr>
                    <tr>
                        <td>OR = Oral</td>
                        <td>PC = Pending Courses</td>
                        <td>@ = Pass With Grace Marks</td>
                    </tr>
                    <tr>
                        <td>CR = Credis</td>
                        <td>COND = Condonation</td>
                        <td>Reg.Credits = Further Requisite Credits</td>
                    </tr>
                    <tr>
                        <td>$ = Marks Condoned</td>
                        <td>BL = Backlog Course Pending</td>
                        <td>CC = Non Exam Credits Course Completed</td>
                    </tr>
                    <tr>
                        <td>~ = Shifted to Curriculum 2016</td>
                        <td> - </td>
                        <td>& = Grace Marks for Dyslexia</td>
                    </tr>
                </tbody>
            </table>
            <p style="color: red; font-weight: bold;">Instruction for Result published on net of website<br>https://www.gpnashik.ac.in, Government Polytechnic is not responsible for any inadvertent error that may have crept in the result being published on net. The result published on net are of immediate information only. This cannot be treated as original statement of marks, Contact Examination Cell of Government Polytechnic Nashik for any queries related to result.</p>
        </div>
    </section>

    <div class="container" id="_hide">
        <br>
        <button type="button" id="print" class="btn btn-primary btn-lg">Print</button>
        <a href="../index.php">

            <button type="button" class="btn btn-outline-primary btn-lg">Home</button>
        </a>
    </div>

</body>

<script>
    const printBtn = document.getElementById('print');

    printBtn.addEventListener('click', function() {
        print();
    })
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</html>