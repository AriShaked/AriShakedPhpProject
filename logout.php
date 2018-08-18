<?php 
    session_start();
    
    if (isset($_COOKIE['PHPSESSID'])) {
        unset($_COOKIE['PHPSESSID']);
        setcookie('PHPSESSID', '', time() - 3600, '/'); // empty value and old timestamp
    }
    session_destroy();
    header("Location: login22.php");
    die();
?>