<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Group 02">
  <meta name="description" content="Assignment 01 - Static Website">
  <title>Market Page</title>
  <link rel="stylesheet" href="../styles/market.css">
  <link rel="stylesheet" href="../styles/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container">
    <?php
      session_start();
      include "../components/header.inc";
    ?>

    <h1>Top Games</h1>
    <div class="section-title">
      <h2>Trending Now</h2>
    </div>


    <div class="responsive">
      <div class="gallery">
        <a href="../images/fifa_small.jpg">
          <img src="../images/fifa_small.jpg" class="window" width="100" height="100">
        </a>
        <!-- Your cashless with button2 and price -->
        <div class="cashless">
          <span>20</span><img src="../images/coin.png" alt="Your Coin" class="coin-image">
          <a href="payment.php" class="button2">Buy</a>
        </div>
      </div>
    </div>


    <div class="responsive">
      <div class="gallery">
        <a href="../images/gta_small.jpg">
          <img src="../images/gta_small.jpg" width="100" class="window" height="100">
        </a>
        <div class="cashless">
          <span>25</span><img src="../images/coin.png" alt="Your Coin" class="coin-image">
          <a href="payment.php" class="button2">Buy</a>
        </div>

      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a href="../images/mine_small.jpg">
          <img src="../images/mine_small.jpg" width="600" class="window" height="400">

        </a>
        <div class="cashless">
          <span>30</span><img src="../images/coin.png" alt="Your Coin" class="coin-image">
          <a href="payment.php" class="button2">Buy</a>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="responsive2">
      <div class="gallery">
        <a href="../images/red_small.jpg">
          <img src="../images/red_small.jpg" width="600" class="window" height="400">
        </a>
        <div class="cashless">
          <span> 25</span><img src="../images/coin.png" alt="Your Coin" class="coin-image">
          <a href="payment.php" class="button2">Buy</a>
        </div>
      </div>
    </div>


    <div class="responsive2">
      <div class="gallery">
        <a href="../images/spider_small.jpg">
          <img src="../images/spider_small.jpg" width="100" class="window" height="100">
        </a>
        <div class="cashless">
          <span>28</span><img src="../images/coin.png" alt="Your Coin" class="coin-image">
          <a href="payment.php" class="button2">Buy</a>
        </div>
      </div>
    </div>


    <div class="responsive2">
      <div class="gallery">
        <a href="../images/ring_small.jpg">
          <img src="../images/ring_small.jpg" width="100" class="window" height="100">
        </a>
        <div class="cashless">
          <span>30</span><img src="../images/coin.png" alt="Your Coin" class="coin-image">
          <a href="payment.php" class="button2">Buy</a>
        </div>
      </div>
    </div>

    <?php
      include "../components/footer.inc";
      include "../components/button_switch.php";
    ?>
  </div>

</body>

</html>