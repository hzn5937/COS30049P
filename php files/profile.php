<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Group 02">
    <meta name="description" content="Assignment 01 - Static Website">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="../styles/signup.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <?php
        session_start();
        include "../components/header.inc";
    ?>
    <button class="button" id="signoutBtn">Signout</button>
    <script>
        var signoutBtn = document.getElementById("signoutBtn");
        signoutBtn.onclick = function() {
            // Use AJAX to call a server-side script to destroy the session
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Redirect to homepage after destroying the session
                    window.location.href = "homepage.php";
                }
            };
            xhr.open("GET", "logout.php", true);
            xhr.send();
        }
    </script>
    <?php
        include "../components/footer.inc";
        include "../components/button_switch.php";
    ?>
</body>
</html>