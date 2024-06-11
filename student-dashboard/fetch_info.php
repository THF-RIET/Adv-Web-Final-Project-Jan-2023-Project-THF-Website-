<?php
include "../database/db.php";
global $conn;
// Retrieve the selected value from the query string
$selectedValue = isset($_GET['selectedValue']) ? $_GET['selectedValue'] : null;


// Execute your SQL query based on the selected value
// Replace this with your actual database connection and query logic
// Make sure to properly sanitize the input to prevent SQL injection vulnerabilities

// Example SQL query
$query = "SELECT * FROM courses WHERE courseName = '$selectedValue'";

// Execute the query and fetch results
$result = mysqli_query($conn, $query);
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

// Return the data as JSON
echo json_encode($data);
?>
