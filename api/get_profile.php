<?php
session_start();
require_once ('../db_connection.php');
$username = $_SESSION['username'];
$sql = "SELECT full_name, age, phone_number, interest, user_address FROM users WHERE username = '$username'";
$result = $conn->query($sql);

$response = array();
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $response['full_name'] = $row['full_name'];
    $response['age'] = $row['age'];
    $response['phone_number'] = $row['phone_number'];
    $response['interest'] = $row['interest'];
    $response['user_address'] = $row['user_address'];
    echo json_encode($response, JSON_PRETTY_PRINT);
} else {
    // Handle case when no user profile is found
    echo json_encode(array('error' => 'User profile not found'));
}
?>
