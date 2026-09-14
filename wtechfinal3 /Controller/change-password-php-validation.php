<?php
session_start();
require '../Model/user.php';

$_SESSION['currentPwdErr'] = "";
$_SESSION['newPwdErr'] = "";
$_SESSION['confirmPwdErr'] = "";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    
    $username = $_SESSION['username'] ?? '';
    $current = trim($_POST['current_password']);
    $new = trim($_POST['new_password']);
    $confirm = trim($_POST['confirm_password']);

    $flag = true;

    if (empty($current)) { $flag = false; $_SESSION['currentPwdErr'] = "Required"; }
    if (empty($new)) { $flag = false; $_SESSION['newPwdErr'] = "Required"; }
    if (empty($confirm)) { $flag = false; $_SESSION['confirmPwdErr'] = "Required"; }
    
    if (!empty($new) && !empty($confirm) && $new !== $confirm) {
        $flag = false;
        $_SESSION['confirmPwdErr'] = "New passwords do not match.";
    }

    if ($flag) {
        // Fetch the user's current data to check their existing password
        $userData = getUserProfile($username);
        
        if ($userData && $userData['password'] === $current) {
            
            // Passwords match, update to the new one
            if (updatePassword($userData['id'], $new)) {
                $_SESSION['pwdSuccess'] = "Password updated successfully!";
                header("Location: ../View/change-password.php");
                exit();
            } else {
                $_SESSION['currentPwdErr'] = "Database error. Could not update.";
            }
            
        } else {
            $flag = false;
            $_SESSION['currentPwdErr'] = "Incorrect current password.";
        }
    }
    
    // Redirect back to the form if validation failed
    header("Location: ../View/change-password.php");
    exit();
    
} else {
    header("Location: ../View/change-password.php");
    exit();
}
?>