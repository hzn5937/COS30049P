<?php
    if(isset($_SESSION["username"]))
    {
        echo "<script>
            document.getElementById('loginBtn').classList.remove('active');
            document.getElementById('profileBtn').classList.add('active');
        </script>";
    }
    else 
    {
        echo "<script>
            document.getElementById('loginBtn').classList.add('active');
            document.getElementById('profileBtn').classList.remove('active');
        </script>";
    }
?>  