<?php
    require_once ('../db_connection.php');

    if (isset($_GET['search']))
    {
        $search = $_GET['search'];
    }
    if (isset($_GET['category']))
    {
        $category = $_GET['category'];
    }

    $sql = "SELECT * FROM asset";

    if (!empty($search) && empty($category)) {
        $sql .= " WHERE name LIKE '%$search%'";
    }
    else if (empty($search) && !empty($category)) {
        $sql .= " WHERE category_id = '$category'";
    }
    else if (!empty($search) && !empty($category)) {
        $sql .= " WHERE name LIKE '%$search%' AND category_id = '$category'";
    }
    


    $result = $conn->query($sql);

    $response = array();
    if ($result)
    {
        $x = 0;
        while ($row = mysqli_fetch_assoc($result))
        {
            $response[$x]['name'] = $row['name'];
            $response[$x]['price'] = $row['price'];
            $response[$x]['image_path'] = $row['image_path'];
            $x++;
        }
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
?>