<?php
    require_once ('../db_connection.php');

    $sql = "SELECT name, image_path FROM asset LIMIT 6";
    $result = $conn->query($sql);

    $response = array();
    if ($result)
    {
        $x = 0;
        while ($row = mysqli_fetch_assoc($result))
        {
            $response[$x]['name'] = $row['name'];
            $response[$x]['image_path'] = $row['image_path'];
            $x++;
        }
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
?>