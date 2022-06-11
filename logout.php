<?php
    session_start();
    $_SESSION['logout'] = true;
    header("location:login.php")
?>