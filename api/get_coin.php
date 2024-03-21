<?php
session_start();
require_once ('../db_connection.php');

if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $sql = "SELECT coin FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    $response = array();
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $response['coin'] = $row['coin'];
        echo json_encode($response, JSON_PRETTY_PRINT);
    } else {
        $response['error'] = 'User not found';
    }
} else {
    $response['error'] = 'User not logged in';
}

?>
