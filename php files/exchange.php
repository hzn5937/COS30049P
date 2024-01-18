<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Group 02">
    <meta name="description" content="Assignment 01 - Static Website">
    <title>Exchange Page</title>
    <link rel="stylesheet" href="../styles/exchange.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <?php
            include "../components/header.inc";
        ?>
        <h1>Exchange for Coins</h1>
        <h3 id="coinCost"></h3>
        <label for="exchange"></label>
        <input type="text" id="exchange" name="exchange" value="" placeholder="$">
        <button id="btn" onclick="checkValue();">Exchange</button><br>
        <p id="coinEarned">Number of coins earned: </p>
        <p id="coin">Total Coins: </p><br>
        <script src="../script/exchange.js"></script>
        <?php
            include "../components/footer.inc";
        ?>
    </div>
</body>
</html>