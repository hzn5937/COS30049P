<nav>
    <a href="index.php"><img src="images/weblogo.png" alt="WebsiteLogo" class="logo"></a>

    <ul>
        <li><a href="index.php" <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') { echo 'class="active"'; } ?>>Home</a></li>
        <li><a href="market.php" <?php if(basename($_SERVER['PHP_SELF']) == 'market.php') { echo 'class="active"'; } ?>>Our Product</a></li>
        <li><a href="exchange.php" <?php if(basename($_SERVER['PHP_SELF']) == 'exchange.php') { echo 'class="active"'; } ?>>Exchange</a></li>
        <li><a href="about.php" <?php if(basename($_SERVER['PHP_SELF']) == 'about.php') { echo 'class="active"'; } ?>>About Us</a></li>
        <li><a href="add_game.php" <?php if(basename($_SERVER['PHP_SELF']) == 'add_game.php') { echo 'class="active"'; } ?>>Add</a></li>
    </ul>

    <span id="totalCoin"></span>
    <a href="exchange.php"><img src="images/coin.png" class="coinIcon" alt="coin icon"></a>

    <a href="login.php" class="button" id="loginBtn">Log In / Sign Up</a>

    <a href="profile.php" class="profileButton" id="profileBtn"><i class="fas fa-user-alt"></i></a>
</nav>