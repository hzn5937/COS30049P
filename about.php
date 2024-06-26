<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Group 02">
    <meta name="description" content="Assignment 01 - Static Website">
    <title>About Page</title>
    <link rel="icon" href="./images/weblogo.png">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <?php
            session_start();
            include "components/header.inc";
        ?>

        <div class="content">
            <h1>GameDex Project Team Member</h1>

            <div class="info_card">
                <img src="images/hbach.jpg" alt="Member 1">
                <h2>Nguyen Ha Bach</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolore, eaque nihil recusandae
                    voluptatum fugit explicabo est, illum iure suscipit rerum tempora numquam, sapiente a molestiae!
                    Error officiis consequatur expedita?
                </p>
            </div>

            <div class="info_card">
                <img src="images/thanhbach.jpg" alt="Member 2">
                <h2>Phan Thanh Bach</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolore, eaque nihil recusandae
                    voluptatum fugit explicabo est, illum iure suscipit rerum tempora numquam, sapiente a molestiae!
                    Error officiis consequatur expedita?
                </p>
            </div>

            <div class="info_card">
                <img src="images/son.jpg" alt="Member 3">
                <h2>Nguyen Thai Son</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolore, eaque nihil recusandae
                    voluptatum fugit explicabo est, illum iure suscipit rerum tempora numquam, sapiente a molestiae!
                    Error officiis consequatur expedita?
                </p>
            </div>

            <div class="info_card">
                <img src="images/ducnahh.jpg" alt="Member 4">
                <h2>Nguyen Duc Anh</h2>
                <p>
                        <!-- 21 years old excited and enthusiastic about programming and video games. Still figuring out life as it goes. -->
                       
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolore, eaque nihil recusandae
                    voluptatum fugit explicabo est, illum iure suscipit rerum tempora numquam, sapiente a molestiae!
                    Error officiis consequatur expedita?
                </p>
                
            </div>

            <div class="info_card">
                <img src="images/hbach.jpg" alt="Member 5">
                <h2>Nguyen Ha Bach</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolore, eaque nihil recusandae
                    voluptatum fugit explicabo est, illum iure suscipit rerum tempora numquam, sapiente a molestiae!
                    Error officiis consequatur expedita?
                </p>
            </div>

            <div class="info_card">
                <img src="images/hbach.jpg" alt="Member 6">
                <h2>Nguyen Ha Bach</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolore, eaque nihil recusandae
                    voluptatum fugit explicabo est, illum iure suscipit rerum tempora numquam, sapiente a molestiae!
                    Error officiis consequatur expedita?
                </p>
            </div>
        </div>

        <?php
            include "components/footer.inc";
            include "php/button_switch.php";
        ?>
    </div>

    <script src="script/script.js"></script>
</body>

</html>