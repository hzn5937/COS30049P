<?php

    session_start();
    require_once "../db_connection.php";

    $json_data = file_get_contents('php://input');
    $data = json_decode($json_data, true);

    $full_name = $data['full_name'];
    $age = $data['age'];
    $number = $data['phone_number'];
    $interest = $data['interest'];
    $address = $data['user_address'];

    $sql = "UPDATE users SET full_name = '$full_name', age = '$age', phone_number = '$number', interest = '$interest', user_address = '$address' WHERE user_id = '$_SESSION[user_id]'";
    $result = $conn->query($sql);

    if ($result) {
        echo "Profile updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>