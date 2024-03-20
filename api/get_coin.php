<?php
    require_once ('../db_connection.php');

    $sql = "SELECT coin, username FROM users LIMIT";
    $result = $conn->query($sql);

    $response = array();
    if ($result)
    {
        $x = 0;
        while ($row = mysqli_fetch_assoc($result))
        {
            $response[$x]['coin'] = $row['coin'];
            $response[$x]['username'] = $row['username'];
            $x++;
        }
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
?>