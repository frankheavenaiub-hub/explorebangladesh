<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'login-php-validation.php';

    if ($valid) {

        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        $_SESSION['username'] = $username;

        if ($username == "admin") {
            $_SESSION['role'] = "Admin";
        }
        else if ($username == "sales") {
            $_SESSION['role'] = "Sales";
        }
        else {
            $_SESSION['role'] = "Customer";
        }

        if (isset($_POST['remember'])) {
            setcookie("user_login", $username, time() + (86400 * 30), "/");
            setcookie("user_role", $_SESSION['role'], time() + (86400 * 30), "/");
        }

        if ($_SESSION['role'] == "Admin") {
            header("Location: admin-dashboard.php");
        }
        else if ($_SESSION['role'] == "Sales") {
            header("Location: sales-dashboard.php");
        }
        else {
            header("Location: dashboard.php");
        }

        exit();
    }
}
?>