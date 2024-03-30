<?php
    require_once ('../db_connection.php');
    session_start();
    $id = $_GET['id'];


    $sql = "SELECT price  
    FROM asset 
    WHERE asset_id = '$id'";

    $result = $conn->query($sql);

    if ($result)
    {
        $row = mysqli_fetch_assoc($result);
        $asset['price'] = $row['price'];
    }

    $user_id = $_SESSION['user_id'];
    
    $sql = "SELECT coin 
    FROM users 
    WHERE user_id = '$user_id'";
    
    $result = $conn->query($sql);

    if ($result)
    {
        $row = mysqli_fetch_assoc($result);
        $user['coin'] = $row['coin'];
    }

    if ($user['coin'] >= $asset['price'])
    {
        $new_balance = $user['coin'] - $asset['price'];
        $time = date('Y-m-d');
        $price = $asset['price'];

        $sql = "UPDATE users 
        SET coin = '$new_balance' 
        WHERE user_id = '$user_id'";
        $conn->query($sql);

        $sql = "INSERT INTO purchase_history
        (purchased_date, price, user_id, game_id) 
        VALUES ('$time', '$price', '$user_id', '$id')";
        $conn->query($sql);

        $response['message'] = 'Transaction successful';
    }
    else
    {
        $response['message'] = 'Insufficient coin';
    }

    $_SESSION['msg'] = $response['message'];
    header('Location: ../payment.php?id='.$id);
?>