<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Group 02">
    <meta name="description" content="Assignment 01 - Static Website">
    <title>Payment Page</title>
    <link rel="stylesheet" href="../styles/payment.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
        <?php
            include "../components/header.inc";
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
                                    <img src="../images/mine_small.jpg">
                                    <div>
                                        <p>Minecraft</p>
                                        <small>Java Edition</small>
                                    </div>
                                </div>
                            </td>
                            <td><input type="number" value="1"></td>
                            <td>
                                <div class="price-info">
                                    <img src="../images/coin.png">
                                    <p>30</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product-info">
                                    <img src="../images/fifa_small.jpg">
                                    <div>
                                        <p>Fifa 23</p>
                                        <small>Standard Edition</small>
                                    </div>
                                </div>
                            </td>
                            <td><input type="number" value="1"></td>
                            <td>
                                <div class="price-info">
                                    <img src="../images/coin.png">
                                    <p>30</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product-info">
                                    <img src="../images/gta_small.jpg">
                                    <div>
                                        <p>Grand Thief Auto V</p>
                                        <small>Premium Edition</small>
                                    </div>
                                </div>
                            </td>
                            <td><input type="number" value="1"></td>
                            <td>
                                <div class="price-info">
                                    <img src="../images/coin.png">
                                    <p>30</p>
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
                                <img src="../images/coin.png">
                                <p>90</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Discount</td>
                        <td>
                            <div class="price-info">
                                <img src="../images/coin.png">
                                <p>0</p>
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
                                <img src="../images/coin.png">
                                <p>90</p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

        </div>

        <?php
            include "../components/footer.inc";
        ?>
    </div>
</body>
</html>