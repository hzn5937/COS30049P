<?php
    session_start();
    require_once ('db_connection.php');

    $query = "SELECT user_id, username, password FROM users";
    $result = $conn->query($query);

    $data = array();
    if ($result)
    {
        $x = 0;
        while ($row = mysqli_fetch_assoc($result))
        {
            $data[$x]['user_id'] = $row['user_id'];
            $data[$x]['username'] = $row['username'];
            $data[$x]['password'] = $row['password'];
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
    <title>Log In Page</title>
    <link rel="icon" href="./images/weblogo.png">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <?php
        $validateUsername = "admin";
        $validatePassword = "admin";

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            for ($i = 0; $i < count($data); $i++)
            {
                if ($username === $data[$i]['username'] && $password === $data[$i]['password'])
                {
                    session_start();
                    $_SESSION['user_id'] = $data[$i]['user_id'];
                    $_SESSION['username'] = $username;
                    if (isset($_POST["remember"]))
                    {
                        $_SESSION["remember"] = true;
                    }
                    else
                    {
                        $_SESSION["remember"] = false;
                    }
                    header("Location: index.php");
                }
            }
            echo "<script>alert('Invalid username or password!')</script>";
        }
    ?>

    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close" class="closebtn"></ion-icon>  
        </span>

        <div class="form-box login">
            <h2>Login</h2>
            <form action="login.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="username" id="username" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" id="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" name="remember" id="remember">Remember me</label>
                    <a href="#">Forgot Password</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="php/register.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" id="username" name="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" id="email" name="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="password" name="password" required>
                    <label for="password">Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>
                
            </form>
        </div>
    </div>

    <aside>
        <?php
            if (isset($_SESSION['errMsg']))
            {
                echo $_SESSION['errMsg'];   
            }
        ?>
    </aside>

    <script src="script/login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="script/script.js"></script>
</body>
</html>