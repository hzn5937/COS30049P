<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Group 02">
  <meta name="description" content="Assignment 01 - Static Website">
  <title>Market Page</title>
  <link rel="icon" href="./images/weblogo.png">
  <link rel="stylesheet" href="styles/market.css">
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="script/render.js"></script>
</head>

<body>
  <div class="container">
    <?php
      session_start();
      include "components/header.inc";
      include_once 'db_connection.php';
    ?>

    <h1>Top Games</h1>
    <div class="section-title">
      <h2>Trending Now</h2>
    </div>

    <div class="searchBox">
        <form id="searchForm" action="market.php" method="get">
            <button type="submit"><i class="fa fa-search"></i></button>
            <input type="text" id="searchBar" name="search" placeholder="Search games..." required>
        </form>
    </div>

    <div class='games'>
      <script>render("api/get_data.php")</script>
    </div>

    <?php
      include "components/footer.inc";
      include "php/button_switch.php";
    ?>
  </div>
  <!-- <script src="script/script.js"></script> -->
  <!-- <script src="script/render.js"></script> -->
</body>

</html>