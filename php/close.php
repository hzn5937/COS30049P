<?php
    session_start();
    if ($_SESSION['remember'] === false)
    {
        session_destroy();
    }
?>