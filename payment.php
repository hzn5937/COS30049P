<?php
    require_once ('db_connection.php');

    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
    }

    $sql = "SELECT name, price, image_path FROM asset WHERE asset_id = '$id'";

    $result = $conn->query($sql);

    $response = array();

    if ($result)
    {
        $x = 0;
        while ($row = mysqli_fetch_assoc($result))
        {
            $response[$x]['name'] = $row['name'];
            $response[$x]['price'] = $row['price'];
            $response[$x]['image_path'] = $row['image_path'];
            $x++;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Group 02">
    <meta name="description" content="Assignment 01 - Static Website">
    <title>Payment Page</title>
    <link rel="icon" href="./images/weblogo.png">
    <link rel="stylesheet" href="styles/payment.css">
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

        <div class="shopping-container">
            <fieldset class="cart-table">
                <legend>
                    <h1>Shopping Cart</h1>
                </legend>

                <div class="shopping-cart">
                    <table id="shopping-table">
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="product-info">
                                    <img src="<?php echo $response[0]['image_path'] ?>">
                                    <div>
                                        <p><?php echo $response[0]['name']; ?></p>
                                    </div>
                                </div>
                            </td>
                            <td><input class="quantityBox" id="quantityBox1" type="number" value="1" disabled></td>
                            <td>
                                <div class="price-info">
                                    <p id="price1"><?php echo $response[0]['price']; ?></p>
                                    <img src="images/coin.png">
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </fieldset>

            <div class="subtotal-price">
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td>
                            <div class="price-info">
                                <p id="subTotalPrice"><?php echo $response[0]['price'] ?></p>
                                <img src="images/coin.png">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Discount</td>
                        <td>
                            <div class="price-info">
                                <p id="discount">0</p>
                                <img src="images/coin.png">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="total-price">
                <table>
                    <tr>
                        <td>Total</td>
                        <td>
                            <div class="total-price-info">
                                <p id="totalPrice"><?php echo $response[0]['price'] ?></p>
                                <img src="images/coin.png">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

        </div>

        <?php
        include "components/footer.inc";
        include "php/button_switch.php";
        ?>
    </div>
    <script src="script/payment.js"></script>
    <script src="script/script.js"></script>
</body>

</html>