<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Group 02">
    <meta name="description" content="Assignment 01 - Static Website">
    <title>Profile Page</title>
    <link rel="stylesheet" href="../styles/profile.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <?php
        session_start();
        include "../components/header.inc";
        ?>

        <div class="card">
            <div class="left-container">
                <img src="../images/hbach.jpg" alt="profile image">
                <h2>Ha Bach</h2>
            </div>

            <div class="right-container">
                <h3>Profile Details</h3>
                <table>
                    <tr>
                        <td>Name :</td>
                        <td contenteditable='true'>Ha Bach</td>
                    </tr>
                    <tr>
                        <td>Age :</td>
                        <td contenteditable='true'>69</td>
                    </tr>
                    <tr>
                        <td>Number :</td>
                        <td contenteditable='true'>0936071506</td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td contenteditable='true'>habach05032003@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Address :</td>
                        <td contenteditable='true'>12345, Duy Tan, Ha Noi, Viet Nam </td>
                    </tr>
                </table>

                <div class="button">
                    <button class="button1" id="signoutBtn">Signout</button>
                    <button class="button2">Edit</button>
                </div>
            </div>

        </div>
        

    <button class="button" id="signoutBtn">Signout</button>
    
    <?php
        include "../components/footer.inc";
        include "../components/button_switch.php";
    ?>
    <script src="../script/logout.js"></script>
</body>

</html>