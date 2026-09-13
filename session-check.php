<?php
session_start();

if (!isset($_SESSION['username']) && isset($_COOKIE['user_login'])) {
    $_SESSION['username'] = $_COOKIE['user_login'];
    $_SESSION['role'] = $_COOKIE['user_role'];
}

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>