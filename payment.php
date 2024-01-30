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
                    <table>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="product-info">
                                    <img src="images/mine_small.jpg">
                                    <div>
                                        <p>Minecraft</p>
                                        <small>Java Edition</small>
                                    </div>
                                </div>
                            </td>
                            <td><input class="quantityBox" id="quantityBox1" type="number" value="1"><i
                                    class="fa fa-plus" id="plus1"></i><i class="fa fa-minus" id="minus1"></i></td>
                            <td>
                                <div class="price-info">
                                    <p id="price1">30</p>
                                    <img src="images/coin.png">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product-info">
                                    <img src="images/fifa_small.jpg">
                                    <div>
                                        <p>Fifa 23</p>
                                        <small>Standard Edition</small>
                                    </div>
                                </div>
                            </td>
                            <td><input class="quantityBox" id="quantityBox2" type="number" value="1"><i
                                    class="fa fa-plus" id="plus2"></i><i class="fa fa-minus" id="minus2"></i></td>
                            <td>
                                <div class="price-info">
                                    <p id="price2">30</p>
                                    <img src="images/coin.png">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product-info">
                                    <img src="images/gta_small.jpg">
                                    <div>
                                        <p>Grand Thief Auto V</p>
                                        <small>Premium Edition</small>
                                    </div>
                                </div>
                            </td>
                            <td><input class="quantityBox" id="quantityBox3" type="number" value="1"><i
                                    class="fa fa-plus" id="plus3"></i><i class="fa fa-minus" id="minus3"></i></td>
                            <td>
                                <div class="price-info">
                                    <p id="price3">30</p>
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
                                <p id="subTotalPrice">90</p>
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
                                <p id="totalPrice">90</p>
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
    <script src="script/quantity.js"></script>
    <script src="script/script.js"></script>
</body>

</html>