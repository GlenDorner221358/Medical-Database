<?php
    session_start();

    unset($_SESSION['usermail']);
    unset($_SESSION['userrank']);
    
    header("location: login.php");
?>