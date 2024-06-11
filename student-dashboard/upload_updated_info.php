<?php

include "../database/db.php";
global $conn;

$getCNIC = isset($_GET['cnic']) ? intval($_GET['cnic']) : null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullname = $_POST["fullname"];
  $fatherName = $_POST["fathername"];
  $email = $_POST["stdemail"];
  $contact = $_POST["contact"];
  $fatherCNIC = $_POST["fCNIC"];
  $age = $_POST["age"];
  $gender = $_POST["gender"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $education = $_POST["education"];
  $trade = $_POST["trade"];
  $institute = $_POST["institute"];

  $isProfileComplete = "Yes";
  $stdStatus = "Not Active";

  $update = "UPDATE student SET 
  stdFullName = '" . $fullname . "',
  stdEmail = '" . $email . "',
  stdContact = '" . $contact . "',
  stdAddress = '" . $address . "',
  isProfileComplete = '" . $isProfileComplete . "',
  stdFatherName = '" . $fatherName . "',
  stdCity = '" . $city . "',
  stdFatherCNIC = '" . $fatherCNIC . "',
  stdAge = '" . $age . "',
  stdGender = '" . $gender . "' 
  WHERE stdCNIC = '" . $getCNIC . "' ";
  $updateQuery = mysqli_query($conn, $update);
  if ($updateQuery) {

    $select = "SELECT stdCNIC FROM student_education WHERE stdCNIC = '" . $getCNIC . "'";
    $result = mysqli_query($conn, $select);
    $count = mysqli_num_rows($result);
    $result->free();
    if ($count == 1) {
      $update2 = "UPDATE student_education SET 
      qualification = '" . $education . "',
      trade = '" . $trade . "',
      instituteName = '" . $institute . "'
      WHERE stdCNIC = '" . $getCNIC . "' ";
      $updateQuery2 = mysqli_query($conn, $update2);
      if ($updateQuery2) {
        echo '<script>alert("Profile Updated Successfully!")</script>';
        header("Location: user_profile.php?cnic=$getCNIC&userName=$fullname");

      } else {
        echo '<script>alert("Update Failed")</script>';
      }

    } else {
      $insert = "INSERT INTO `student_education`(`stdCNIC`, `qualification`, `trade`, `instituteName`) 
      VALUES ('" . $getCNIC . "','" . $education . "',
    '" . $trade . "','" . $institute . "')";
      $query = mysqli_query($conn, $insert);
      if ($query) {
        echo '<script>alert("Profile Updated Successfully!")</script>';
        header("Location: user_profile.php?cnic=$getCNIC&userName=$fullname");

      } else {
        echo '<script>alert("Update Failed")</script>';

      }
    }

  } else {
    echo '<script>alert("Update Failed")</script>';
  }
  exit();
}
exit();
?>