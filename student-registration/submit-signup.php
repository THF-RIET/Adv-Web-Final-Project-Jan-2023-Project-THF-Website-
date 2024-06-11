<?php

include  "../database/db.php";
global $conn;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullname = $_POST["fullname"];
  $cnic = $_POST["cnic"];
  $email = $_POST["email"];
  $contact = $_POST["phone"];
  $password = $_POST["password"];
  $location = $_POST["location"];

$sql = "SELECT stdCNIC FROM student WHERE stdCNIC = '" . $cnic . "'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
$result->free();
$isProfileComplete="No";
$stdStatus="Not Active";

if ($count >= 1) {
  header("Location: login.php?error= User Already Registered");
  exit();
} else {
    $insert = "INSERT INTO `student`(`stdFullName`, `stdCNIC`, `stdEmail`, `stdContact`, `stdAddress`, isProfileComplete, stdStatus) VALUES ('" . $fullname . "','" . $cnic . "',
    '" . $email . "','" . $contact . "','" . $location . "', '" . $isProfileComplete . "', '" . $stdStatus . "')";
	$query = mysqli_query($conn, $insert);
	if ($query) {
        $insertLoginInfo = "INSERT INTO `login`(`CNIC`, `loginPassword`, `userType`) VALUES ('" . $cnic . "','" . $password . "',
        'student')";
	    $loginQuery = mysqli_query($conn, $insertLoginInfo);
        if($loginQuery){
            echo 'Successful Signup';
            header("Location: login.php");

        }else{
          header("Location: sign-up.php?error= Signup Failed");
          exit();
        }
        
    }else{
      header("Location: sign-up.php?error=Incorrect User name or password");

      exit();

        }
}
  exit();
}
?>
