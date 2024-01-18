<nav>
    <a href="homepage.php"><img src="../images/weblogo.png" alt="WebsiteLogo" class="logo"></a>

    <ul>
        <li><a href="homepage.php" <?php if(basename($_SERVER['PHP_SELF']) == 'homepage.php') { echo 'class="active"'; } ?>>Home</a></li>
        <li><a href="market.php" <?php if(basename($_SERVER['PHP_SELF']) == 'market.php') { echo 'class="active"'; } ?>>Our Product</a></li>
        <li><a href="exchange.php" <?php if(basename($_SERVER['PHP_SELF']) == 'exchange.php') { echo 'class="active"'; } ?>>Exchange</a></li>
        <li><a href="about.php" <?php if(basename($_SERVER['PHP_SELF']) == 'about.php') { echo 'class="active"'; } ?>>About Us</a></li>
    </ul>

    <a href="login.php" class="button">Log In / Sign Up</a>
</nav>