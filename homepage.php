<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Group 02">
    <meta name="description" content="Assignment 01 - Static Website">
    <title>Home Page</title>
    <link rel="stylesheet" href="../styles/homepage.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script/slide.js"></script>
</head>

<body>
    <div class="container">

        <nav>
            <a href="homepage.html"><img src="../images/weblogo.png" alt="WebsiteLogo" class="logo"></a>

            <ul>
                <li><a href="homepage.html" class="active">Home</a></li>
                <li><a href="market.html">Our Product</a></li>
                <li><a href="exchange.html">Exchange</a></li>
                <li><a href="about.html">About Us</a></li>
            </ul>

            <a href="signup.html" class="button">Log In / Sign Up</a>
        </nav>

        <div class="main_content">
            <h1>Welcome To <span>GameDex Store</span></h1>
            <h2>World's First <span>Cryptocurrency Game Store</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Impedit minima veritatis cupiditate hic.</p>
            <a href="market.html" class="button">Explore Now</a>
            <a href="exchange.html" class="button">Buy Now</a>
        </div>

        <div class="sale">
            <h1><span>Holiday</span> Sale Off !</h1>

            <div class="mySlides">
                <div class="numbertext">1 / 6</div>
                <img src="../images/gta_big.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 6</div>
                <img src="../images/mine_big.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 6</div>
                <img src="/images/fifa_big.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">4 / 6</div>
                <img src="../images/red_big.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">5 / 6</div>
                <img src="../images/spider_big.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">6 / 6</div>
                <img src="../images/ring_big.jpg" style="width:100%">
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
                <div class="column">
                    <img class="demo cursor" src="../images/gta_small.jpg" style="width:100%" onclick="currentSlide(1)"
                        alt="GTA 5 - Premium Edition">
                </div>

                <div class="column">
                    <img class="demo cursor" src="../images/mine_small.jpg" style="width:100%" onclick="currentSlide(2)"
                        alt="Minecraft">
                </div>

                <div class="column">
                    <img class="demo cursor" src="../images/fifa_small.jpg" style="width:100%" onclick="currentSlide(3)"
                        alt="Fifa 23 - Standard Edition">
                </div>

                <div class="column">
                    <img class="demo cursor" src="../images/red_small.jpg" style="width:100%" onclick="currentSlide(4)"
                        alt="Red Dead Redemption II">
                </div>

                <div class="column">
                    <img class="demo cursor" src="../images/spider_small.jpg" style="width:100%" onclick="currentSlide(5)"
                        alt="Spiderman 2">
                </div>

                <div class="column">
                    <img class="demo cursor" src="../images/ring_small.jpg" style="width:100%" onclick="currentSlide(6)"
                        alt="Elden Ring">
                </div>

            </div>
        </div>

        <footer>
            <div class="main-footer">
                <hr class="hr-footer">
                    
                <div class="icon-footer">
                    <a href="https://www.facebook.com/"><i class="fa fa-facebook-official"></i></a>
                    <a href="https://twitter.com/"><i class="fa fa-twitter-square"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                    <a href="mailto:bachnhswh00470@fpt.edu.vn"><i class="fa fa-google-plus-circle"></i></a>
                </div>
            
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="homepage.html">Home</a></li>
                    <li class="list-inline-item"><a href="market.html">Our Product</a></li>
                    <li class="list-inline-item"><a href="exchange.html">Exchange</a></li>
                    <li class="list-inline-item"><a href="about.html">About Us</a></li>
                </ul>
                <p>&copy; GameDex, Ltd. All Rights Reserved.</p>
            </div>
        </footer>

    </div>

</body>

</html>