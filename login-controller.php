<?php
session_start();

include 'login-php-validation.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($password)) {

        $_SESSION['username'] = $username;

        if ($username == "admin") {
            $_SESSION['role'] = "Admin";
        } elseif ($username == "sales") {
            $_SESSION['role'] = "Sales";
        } else {
            $_SESSION['role'] = "Customer";
        }

        if (isset($_POST['remember'])) {
            setcookie("user_login", $username, time() + (86400 * 30), "/");
            setcookie("user_role", $_SESSION['role'], time() + (86400 * 30), "/");
        } else {
            if (isset($_COOKIE["user_login"])) {
                setcookie("user_login", "", time() - 3600, "/");
            }

            if (isset($_COOKIE["user_role"])) {
                setcookie("user_role", "", time() - 3600, "/");
            }
        }

        if ($_SESSION['role'] == "Admin") {
            header("Location: admin-dashboard.php");
        } elseif ($_SESSION['role'] == "Sales") {
            header("Location: sales-dashboard.php");
        } else {
            header("Location: dashboard.php");
        }

        exit();
    }
}
?>