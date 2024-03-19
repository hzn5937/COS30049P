<?php
include_once 'db_connection.php';
session_start(); // Starting the session
?>

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
</head>

<body>
  <div class="container">
    <?php
    include "components/header.inc";
    ?>

    <h1>Top Games</h1>
    <div class="section-title">
      <h2>Trending Now</h2>
    </div>

    <?php
    // Fetch data from database
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);

    // Check if there are any results
    if ($result->num_rows > 0) {
      // Output data of each row
      while ($row = $result->fetch_assoc()) {
    ?>
        <div class="responsive">
          <div class="gallery">
            <a href="<?php echo $row['image_path']; ?>">
              <img src="<?php echo $row['image_path']; ?>" alt="<?php echo $row['name']; ?>" class="window" width="100" height="100">
            </a>
            <div class="cashless">
              <span><?php echo $row['price']; ?></span><img src="images/coin.png" alt="Your Coin" class="coin-image">
              <a href="payment.php" class="button2">Buy</a>
            </div>
          </div>
        </div>
    <?php
      }
    } else {
      echo "0 results";
    }

    // Include footer and other PHP scripts
    include "components/footer.inc";
    include "php/button_switch.php";
    ?>

  </div>
  <script src="script/script.js"></script>
</body>

</html>
