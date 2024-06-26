<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Group 02">
    <meta name="description" content="Assignment 01 - Static Website">
    <title>Exchange Page</title>
    <link rel="icon" href="./images/weblogo.png">
    <link rel="stylesheet" href="styles/exchange.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <?php
            session_start();
            include "components/header.inc";
            if (!isset($_SESSION["username"]))
            {
                header("Location: login.php");
            }
            else {
                $name = $_SESSION["username"];
            }
        ?>
        
        <div class="main_content">
            <h1>Exchange For Coin</h1>
            <h3 id="coinCost"></h3>
            <h4>Enter Number Of Coin:</h4>
            <form action="" method="post">
            <label for="exchange"></label>
            <input type="text" id="exchange" name="exchange" value="" placeholder="$" oninput="totalCostCheck();">
            <!-- onclick="checkValue();" -->
            <button id="btn" type="submit" >Pay</button>  
            </form>
            <a id="smart" href="smart.html">Ether</a><br>
            <p id="totalCost">Total Cost: </p>
        </div>
        <?php
            require_once "db_connection.php";
            if (isset($_POST["exchange"])) {
                $coin = $_POST["exchange"];
                $query = "UPDATE users SET coin = coin + $coin WHERE username = '$name';";
                $conn->query($query);
                $conn->close();
            }
            else if (isset($_POST["exchange"]) === null)  {
              echo "Wrong amount of coins";
            }
        ?>
        <?php
            include "components/footer.inc";
            include "php/button_switch.php";
        ?>
    </div>
    
    <script src="script/script.js"></script>
    <script src="script/exchange.js"></script>
</body>
</html>