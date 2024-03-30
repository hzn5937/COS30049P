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
    <link rel="stylesheet" href="styles/history.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <?php
            session_start();
        include "components/header.inc";
            
        ?>
        
        <div class="main_content">
           

            <h1>Transactions History</h1>
            <table id="history">
                <tr>
                    <th>ID</th>
                    <th>Balance</th>
                    <th>Date</th>
                    <th>Price</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>65</td>
                    <td>2024-03-07</td>
                    <td>10.2</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>158</td>
                    <td>2024-03-09</td>
                    <td>10.2</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>1256</td>
                    <td>2024-03-17</td>
                    <td>20.5</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>48</td>
                    <td>2024-03-20</td>
                    <td>10.5</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>379</td>
                    <td>2024-03-23</td>
                    <td>30</td>
                </tr>
            </table>

        </div>

        <?php
            include "components/footer.inc";
        ?>
    </div>
</body>
</html>