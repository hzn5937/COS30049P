<?php
    require_once ('../db_connection.php');
    
    // Form data
    $game_id_number = $_POST['gameId'];
    $game_id = 'AI' . $game_id_number;
    $game_name = $_POST['gameName'];
    $price = $_POST['gamePrice'];
    $image_url = $_POST['gameImage'];
    $description = $_POST['gameDescription'];
    $category_name = $_POST['category'];
    $publisher_name = $_POST['publisher'];

    // Fetch category ID
    $category_sql = "SELECT category_id FROM category WHERE category = '$category_name'";
    $category_result = $conn->query($category_sql);
    if ($category_result->num_rows > 0) {
        $category_row = $category_result->fetch_assoc();
        $category_id = $category_row['category_id'];
    }

    // Fetch publisher ID
    $publisher_sql = "SELECT publisher_id FROM publisher WHERE publisher_name = '$publisher_name'";
    $publisher_result = $conn->query($publisher_sql);
    if ($publisher_result->num_rows > 0) {
        $publisher_row = $publisher_result->fetch_assoc();
        $publisher_id = $publisher_row['publisher_id'];
    }

    //sql
    $sql = "INSERT INTO asset (asset_id, name, price, image_path, description, category_id, publisher_id)
    VALUES ('$game_id','$game_name', '$price', '$image_url', '$description', '$category_id', '$publisher_id')";

    if ($conn->query($sql) === TRUE) {
        $success_message = "New game added successfully";
    } 

    $conn->close();

    header("Location: ../test.php");
    exit();


?>