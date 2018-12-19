<?php
    
    session_start();
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['rol']);
    header("location:login.php");
    
?>