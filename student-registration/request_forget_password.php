<?php
include  "../database/db.php";
global $conn;
$cnic = "";
$user_type = "student";
$user_email = "";
$error = "Error";
date_default_timezone_set('Asia/Karachi');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $_POST = json_decode(file_get_contents('php://input'), true);
    $cnic = (isset($_POST['cnic']) ? $_POST['cnic'] : '');

    $sql = "SELECT * FROM login WHERE CNIC = '" . $cnic . "' 
     AND userType = '" . $user_type . "'";

    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $selectStmt = "SELECT * FROM student WHERE stdCNIC = '" . $cnic . "'";
        if ($result2 = $conn->query($selectStmt)) {
            while ($row = $result2->fetch_assoc()) {
                $user_email = $row["stdEmail"];
            }
        }
        // Generate a password reset token and expiration date
        $token = bin2hex(random_bytes(16));
        $expiration_date = date('Y-m-d H:i:s', strtotime('+1 day'));

        // Update the user's password reset token and expiration date in the database
        $stmt = $conn->prepare("UPDATE login SET reset_token = ?, reset_expiration = ? WHERE cnic = ?");
        $stmt->bind_param("sss", $token, $expiration_date, $cnic);
        $stmt->execute();

        // Send the password reset email
        $to = $user_email;
        $subject = 'Reset Password Request - The Hunar Foundation Student Portal';
        //$headers = "Reset Password Request - tempQ by tecRoam";
        // $headers .= "MIME-Version: 1.0\r\n";
        // $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $message = 'We received a request to reset your password. If you did not make this request, you can ignore this email.';
        $message .= 'To reset your password, click the following link:';
        $message .= 'reset_form.php?token=' . $token . ' Reset password';
        $message .= 'This link will expire in 24 hours.';
        if (mail($to, $subject, $message)) {
            echo json_encode("Success");
        } else {
            echo json_encode($error);
        }
        // Redirect the user to the password reset confirmation page
        // header('Location: http://tempq.tecroam.com/reset-confirm.php');
        exit;
    } else {
        echo json_encode("Email is not valid");
    }
}
$conn->close();
?>