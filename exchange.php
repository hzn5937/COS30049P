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
        ?>
        
        <div class="main_content">
            <h1>Exchange For Coin</h1>
            <h3 id="coinCost"></h3>
            <h4>Enter Number Of Coin:</h4>
            <label for="exchange"></label>
            <input type="text" id="exchange" name="exchange" value="" placeholder="$" oninput="totalCostCheck();">
            <button id="btn" onclick="checkValue();">Pay</button>
            <a href="smart_contracts/index.html">Pay</a><br>
            <p id="totalCost">Total Cost: </p>

            <h1>Transactions History</h1>
            <table id="history">
                <tr>
                    <th>ID</th>
                    <th>Balance</th>
                    <th>Date</th>
                    <th>Contract</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>125234</td>
                    <td>2024-03-20</td>
                    <td>1h2u3hytu2341u324u</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>125234</td>
                    <td>2024-03-20</td>
                    <td>1h2u3hytu2341u324u</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>125234</td>
                    <td>2024-03-20</td>
                    <td>1h2u3hytu2341u324u</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>125234</td>
                    <td>2024-03-20</td>
                    <td>1h2u3hytu2341u324u</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>125234</td>
                    <td>2024-03-20</td>
                    <td>1h2u3hytu2341u324u</td>
                </tr>
            </table>

        </div>

        <?php
            include "components/footer.inc";
            include "php/button_switch.php";
        ?>
    </div>
    
    <script src="script/script.js"></script>
    <script src="script/exchange.js"></script>
</body>
</html>