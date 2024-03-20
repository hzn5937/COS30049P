<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Group 02">
    <meta name="description" content="Assignment 01 - Static Website">
    <title>Home Page</title>
    <link rel="icon" href="./images/weblogo.png">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">


        <?php
            session_start();
            include "components/header.inc"; 
            include_once "db_connection.php";
        ?>
        

        <div class="main_content">
            <h1>Welcome To <span>GameDex Store</span></h1>
            <h2>World's First <span>Cryptocurrency Game Store</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Impedit minima veritatis cupiditate hic.</p>
            <a href="market.php" class="button">Explore Now</a>
            <a href="exchange.php" class="button">Buy Now</a>
        </div>

        <div class="sale">
            <h1><span>Holiday</span> Sale Off !</h1>

            <div class='slider'>

            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>

            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- Image text -->
            <div class="caption-container">
                <p id="caption"></p>
            </div>

            <!-- Thumbnail images -->
            <div class="row">
                

            </div>
        </div>

        <?php
            include "components/footer.inc";
            include "php/button_switch.php";
        ?>
    </div>  
    <script src="script/slide.js"></script>    
    <script src="script/script.js"></script>
    <script src="script/index.js"></script>
</body>

</html>