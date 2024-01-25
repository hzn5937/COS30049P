<nav>
    <a href="homepage.php"><img src="../images/weblogo.png" alt="WebsiteLogo" class="logo"></a>

    <ul>
        <li><a href="homepage.php" <?php if(basename($_SERVER['PHP_SELF']) == 'homepage.php') { echo 'class="active"'; } ?>>Home</a></li>
        <li><a href="market.php" <?php if(basename($_SERVER['PHP_SELF']) == 'market.php') { echo 'class="active"'; } ?>>Our Product</a></li>
        <li><a href="exchange.php" <?php if(basename($_SERVER['PHP_SELF']) == 'exchange.php') { echo 'class="active"'; } ?>>Exchange</a></li>
        <li><a href="about.php" <?php if(basename($_SERVER['PHP_SELF']) == 'about.php') { echo 'class="active"'; } ?>>About Us</a></li>
    </ul>

    <div class="searchBox">
        <form action="/search" method="get">
            <button type="submit"><i class="fa fa-search"></i></button>
            <input type="text" name="q" placeholder="Search..." required>
        </form>
    </div>

    <span id="totalCoin">0</span><img src="../images/coin.png" class="coinIcon">

    <a href="login.php" class="button" id="loginBtn">Log In / Sign Up</a>

    <a href="profile.php" class="profileButton" id="profileBtn"><i class="fas fa-user-alt"></i></a>
</nav>