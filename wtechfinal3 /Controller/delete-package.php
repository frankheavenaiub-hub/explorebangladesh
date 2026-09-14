<?php
session_start();
require_once '../Model/package.php';

// Security check
if (!isset($_SESSION['role']) || strtolower(trim($_SESSION['role'])) != "sales") {
    header("Location: ../View/dashboard.php");
    exit();
}

// Check if an ID was passed in the URL
if (isset($_GET['id'])) {
    $id = htmlspecialchars(trim($_GET['id']));
    deletePackage($id);
}

// Redirect back to the main page
header("Location: ../View/sales-package.php");
exit();
?>