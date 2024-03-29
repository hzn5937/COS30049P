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
            
        ?>
        
        <div class="main_content">
           

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
                    <td>65</td>
                    <td>2024-03-07</td>
                    <td>0x9d83e140330758a8fFD07F8Bd73e86ebcA8a5692</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>158</td>
                    <td>2024-03-09</td>
                    <td>0x9d83e140330758a8fFD07F8Bd73e86ebcA8a5692</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>1256</td>
                    <td>2024-03-17</td>
                    <td>0x5FD6eB55D12E759a21C09eF703fe0CBa1DC9d88D</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>48</td>
                    <td>2024-03-20</td>
                    <td>0x7b96aF9Bd211cBf6BA5b0dd53aa61Dc5806b6AcE</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>379</td>
                    <td>2024-03-23</td>
                    <td>0x3328358128832A260C76A4141e19E2A943CD4B6D</td>
                </tr>
            </table>

        </div>

        <?php
            include "components/footer.inc";
        ?>
    </div>
</body>
</html>