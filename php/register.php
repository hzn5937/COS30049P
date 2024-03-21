<?php
    session_start();
    require_once ('../db_connection.php');

    $_SESSION['errMsg'] = "";

    $query = "SELECT username, email from users";

    $result = $conn->query($query);

    $array = array();
    if ($result)
    {
        $x = 0;
        while ($row = mysqli_fetch_assoc($result))
        {
            $array[$x]['username'] = $row['username'];
            $array[$x]['email'] = $row['email'];
            $x++;
        }
    }

    if (isset($_POST['username']))
    {
        $username = $_POST['username'];
    }
    if (isset($_POST['email']))
    {
        $email = $_POST['email'];
    }
    if (isset($_POST['password']))
    {
        $password = $_POST['password'];
    }


    for ($i = 0; $i < count($array); $i++)
    {
        if ($username === $array[$i]['username'])
        {
            $_SESSION['errMsg'] .= "<p>Username already exists!</p>";
        }
        if ($email === $array[$i]['email'])
        {
            $_SESSION['errMsg'] .= "<p>Email already exists!</p>";
        }
    }

    if (!empty($_SESSION['errMsg']))
    {
        header("Location: ../login.php");
    }
    else
    {
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        $result = $conn->query($query);
        if ($result)
        {
            $_SESSION['errMsg'] = "<p>Registration successful!</p>";
            header("Location: ../login.php");
        }
    }
    mysqli_close($conn);
?>