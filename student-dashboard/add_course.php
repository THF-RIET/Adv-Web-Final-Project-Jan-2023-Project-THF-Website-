<?php
include "../database/db.php";
global $conn;

$getCNIC = isset($_GET['cnic']) ? intval($_GET['cnic']) : null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $program = $_POST['program'];
    $campus = $_POST['campus'];
    $profileCompletionStatus = "Completed";
    $admissionFeeStatus = "Unpaid";

    $sql = "SELECT stdCNIC FROM student_enrollments WHERE stdCNIC = '" . $getCNIC . "'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    $result->free();
    if ($count >= 1) {
        header("Location: course.php?error= You are already Enrolled&cnic=$getCNIC");
        exit();
    } else {

        // checking your variable from database table 
        $courdatainsert = " INSERT INTO  student_enrollments
             (`courseName`,`Institute`, stdCNIC, profileCompletionStatus,
            admissionFeeStatus) 
            VALUE ('" . $program . "', '" . $campus . "', '" . $getCNIC . "'
            , '" . $profileCompletionStatus . "', '" . $admissionFeeStatus . "')";
        $collect = mysqli_query($conn, $courdatainsert);

        if ($collect) {
            echo '<script>alert("Enrolled Successfully!")</script>';
            header("Location: course.php?cnic=$getCNIC");
        } else {
            echo '<script>alert("Cannot Enrolled at this moment")</script>';
        }
    }
}
?>