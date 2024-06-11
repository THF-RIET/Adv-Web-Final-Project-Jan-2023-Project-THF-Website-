<?php
include  "../database/db.php";
global $conn;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cnic = $_POST["cnic"];
    $password = $_POST["password"];
    $userType = "student";

    $sql = "SELECT CNIC FROM login WHERE CNIC = '" . $cnic . "' AND loginPassword='" . $password . "' AND userType = '" . $userType . "'  ";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    $result->free();

    if ($count == 1) {
        header("Location:../student-dashboard/index.php?cnic=$cnic");
        exit();
    } else {
        header("Location: login.php?error= Incorrect user name and password");
        exit();
    }
}
?>