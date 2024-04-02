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
                    <th>Purchase ID</th>
                    <th>Purchased Date</th>
                    <th>Price</th>
                    <th>User ID</th>
                </tr>
                <?php
                // Include the database connection file
                require_once "db_connection.php";

                // Query to fetch transaction history from the database
                $sql = "SELECT * FROM purchase_history";
                $result = $conn->query($sql);

                // Check if there are results
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["purchase_id"] . "</td>";
                        echo "<td>" . $row["purchased_date"] . "</td>";
                        echo "<td>" . $row["price"] . "</td>";
                        echo "<td>" . $row["user_id"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No transactions found.</td></tr>";
                }
                ?>
            </table>
        </div>

        <?php
            include "components/footer.inc";
        ?>
    </div>
</body>
</html>
