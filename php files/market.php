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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <?php
            include "../components/header.inc";
        ?>

        <h1>Top Games</h1>
        <div class="section-title">
            <h4>Trending Now</h4>
                                </div>
    <div class="responsive">
    <div class="gallery">
    <a target="_blank" href="../images/fifa_small.jpg">
      <img src="../images/fifa_small.jpg" alt="Cinque Terre" width="100" height="100">
    </a>
    <div class="button-list">
    <a target="_blank" href="https://www.ea.com/games/fifa/fifa-23" class="button2">Explore</a>
    </div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="../images/gta_small.jpg">
      <img src="../images/gta_small.jpg" alt="Forest" width="100" height="100">
      <a target="_blank" href="https://www.rockstargames.com/gta-v" class="button2">Explore</a>
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="../images/mine_small.jpg">
      <img src="../images/mine_small.jpg" alt="Northern Lights" width="600" height="400">
      <a target="_blank" href="https://www.minecraft.net/en-us" class="button2">Explore</a>
    </a>
  </div>
</div>
<div class="clearfix"></div>  

<div class="responsive2">
  <div class="gallery">
    <a target="_blank" href="../images/red_small.jpg">
      <img src="../images/red_small.jpg" alt="Mountains" width="600" height="400">
      <a target="_blank" href="https://www.rockstargames.com/reddeadredemption2" class="button2">Explore</a>
    </a>
  </div>
</div>


<div class="responsive2">
  <div class="gallery">
    <a target="_blank" href="../images/spider_small.jpg">
      <img src="../images/spider_small.jpg" alt="Cinque Terre" width="100" height="100">
      <a target="_blank" href="https://www.gamingbible.com/news/platform/pc/marvels-spiderman-2-quietly-lands-on-pc-514583-20240117" class="button2">Explore</a>
    </a>
</div>
</div>


<div class="responsive2">
  <div class="gallery">
    <a target="_blank" href="../images/ring_small.jpg">
      <img src="../images/ring_small.jpg" alt="Forest" width="100" height="100">
      <a target="_blank" href="https://store.steampowered.com/app/1245620/ELDEN_RING/" class="button2">Explore</a>
    </a>
  </div>
</div>
<div class="clearfix2"></div>



        





  
        <?php
            include "../components/footer.inc";
        ?>
    </div>
    
</body>
</html>