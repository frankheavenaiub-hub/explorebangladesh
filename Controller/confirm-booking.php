<?php
session_start();
require_once '../Model/booking.php';

// Security check: Only allow Sales users to confirm bookings
if (!isset($_SESSION['role']) || strtolower(trim($_SESSION['role'])) != "sales") {
    header("Location: ../View/dashboard.php");
    exit();
}

// Check if an ID was passed in the URL
if (isset($_GET['id'])) {
    $booking_id = intval(trim($_GET['id']));
    
    // Call the function from booking.php to update the status
    updateBookingStatus($booking_id, 'Confirmed');
}

// Instantly redirect back to the Sales Dashboard
header("Location: ../View/sales-dashboard.php");
exit();
?>