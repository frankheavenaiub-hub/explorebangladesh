<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'registration-php-validation.php';

    if ($valid) {

        $username = trim($_POST['userName']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if (!empty($username) && !empty($email) && !empty($password)) {

            $_SESSION['username'] = $username;
            $_SESSION['role'] = "Customer";

            if (isset($_POST['remember'])) {
                setcookie("user_login", $username, time() + (86400 * 30), "/");
                setcookie("user_role", $_SESSION['role'], time() + (86400 * 30), "/");
            }

            header("Location: dashboard.php");
            exit();
        }
    }
}
?>