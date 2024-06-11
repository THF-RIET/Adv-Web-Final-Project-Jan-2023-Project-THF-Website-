<?php
include  "../database/db.php";
global $conn;
$user_name = $user_password = "";
$user_type = "user";
$error =  "Error";
date_default_timezone_set('Asia/Karachi');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //$_POST = json_decode(file_get_contents('php://input'), true);
    // Get the password reset token and new password from the form submission
    $token = (isset($_POST['token']) ? $_POST['token'] : '');
    $password = (isset($_POST['password']) ? $_POST['password'] : '');

// Validate the password reset token
    $stmt = $conn->prepare("SELECT * FROM login WHERE reset_token = ? ");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();
 

    if ($result->num_rows > 0) {
    // The password reset token is valid

        // Get the user's ID
        $user = $result->fetch_assoc();
        $cnic = $user['CNIC'];

        // Hash the new password for security
       // $password_hash = md5($password);

        // Update the user's password in the database
        $stmt = $conn->prepare("UPDATE login SET password = ?, reset_token = NULL, reset_expiration = NULL WHERE CNIC = ?");
        $stmt->bind_param("si", $password, $cnic);
        $stmt->execute();
        echo 'Your password has been changed successfully!';

        // Redirect the user to the login screen
        //header('Location: http://example.com/login.php');
        exit;

        } else {
            // The password reset token is invalid or has expired
            header('Location: reset_error.php');
            exit;
    }

}
else {
  echo 'Error';
}

?>

