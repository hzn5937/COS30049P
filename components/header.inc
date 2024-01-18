<nav>
    <a href="homepage.php"><img src="../images/weblogo.png" alt="WebsiteLogo" class="logo"></a>

    <ul>
        <li><a href="homepage.php" <?php if(basename($_SERVER['PHP_SELF']) == 'homepage.php') { echo 'id="active"'; } ?>>Home</a></li>
        <li><a href="market.php" <?php if(basename($_SERVER['PHP_SELF']) == 'market.php') { echo 'id="active"'; } ?>>Our Product</a></li>
        <li><a href="exchange.php" <?php if(basename($_SERVER['PHP_SELF']) == 'exchange.php') { echo 'id="active"'; } ?>>Exchange</a></li>
        <li><a href="about.php" <?php if(basename($_SERVER['PHP_SELF']) == 'about.php') { echo 'id="active"'; } ?>>About Us</a></li>
    </ul>

    <a href="signup.php" class="button">Log In / Sign Up</a>
</nav>