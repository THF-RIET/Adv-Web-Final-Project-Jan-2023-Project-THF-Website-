<?php
include "../database/db.php";
global $conn;

// Fetch questions and options from the database based on the selected section
$section = $_GET['section'];
$query = "SELECT * FROM admission_test_questions WHERE section = '$section'";
$result = mysqli_query($conn, $query);

// Store the fetched data in an array
$questions = array();
while ($row = mysqli_fetch_assoc($result)) {
    $questions[] = $row;
}

// Return the questions as JSON response
header('Content-Type: application/json');
echo json_encode($questions);
?>
