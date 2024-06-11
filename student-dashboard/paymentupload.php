<?php
include "../database/db.php";
global $conn;
$getCNIC = isset($_GET['cnic']) ? intval($_GET['cnic']) : null;


// $filename = $_FILES["uploadfile"]["name"];
// $tempname = $_FILES["uploadfile"]["tmp_name"];
// $foder = "uploadfile/" . $filename;
// move_uploaded_file($tempname, $foder);

$filename = $_FILES["uploadfile2"]["name"];
$tempname = $_FILES["uploadfile2"]["tmp_name"];
$foder2 = "uploadfile/" . $filename;
move_uploaded_file($tempname, $foder);

if ($filename != "") {
    $query = "Update student_enrollments SET `paidVoucher`= '" . $foder . "' WHERE stdCNIC='" . $getCNIC . "'";
    $count = mysqli_query($conn, $query);
    if ($count) {
        header("Location: payment.php?cnic=<?php echo $getCNIC?>&error=Receipt Submitted Successfully");
        exit();
    }
} else {
    header("Location:payment.php?cnic=<?php echo $getCNIC?>&error=Unable to Upload");
    exit();
}

?>