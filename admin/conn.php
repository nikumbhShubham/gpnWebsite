<?php

$host = "sql310.infinityfree.com";
$user = "if0_34738297";
$password = "cHNSobVRksEcYq";
$dbname = "if0_34738297_gpnweb";


$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
// $conn_result = new PDO("mysql:host=$host;dbname=result_2022_2023",$user,$password);
// $conn_new = new PDO("mysql:host=$host;",$user,$password);

if (!$conn) {
    echo "DB is not connected";
}

$con = mysqli_connect("sql310.infinityfree.com", "if0_34738297", "cHNSobVRksEcYq", "if0_34738297_gpnweb");


if (mysqli_connect_error()) {

    echo "cannot connect to database";
    exit();
} else {
    // echo"connected";
}
