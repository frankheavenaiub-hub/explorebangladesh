<?php 
require_once 'dbConnect.php';

// Fetch all bookings with package details (Used in Sales Dashboard)
function getAllBookings() {
    $conn = connect();
    // JOIN the packages table to get the packagename and price
    $sql = "SELECT b.id, b.username, b.travel_date, b.status, p.packagename, p.price 
            FROM booking b
            JOIN packages p ON b.package_id = p.id 
            ORDER BY b.id DESC"; 
    $result = mysqli_query($conn, $sql);
    
    $bookings = [];
    if ($result && mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $bookings[] = $row;
        }
    }
    return $bookings;
}

// Fetch a single booking by its ID (Used for viewing booking details)
function getBookingById($id) {
    $conn = connect();
    $sql = "SELECT b.*, p.packagename, p.price 
            FROM booking b
            JOIN packages p ON b.package_id = p.id 
            WHERE b.id = $id";
    $result = mysqli_query($conn, $sql);
    
    if ($result && mysqli_num_rows($result) === 1) {
        return mysqli_fetch_assoc($result);
    }
    return null;
}

// Update a booking's status (Used when Sales clicks Confirm or Cancel)
function updateBookingStatus($id, $status) {
    $conn = connect();
    $sql = "UPDATE booking SET status = '$status' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    
    return $result === true;
}

// Delete a booking completely (If needed for cleanup)
function deleteBooking($id) {
    $conn = connect();
    $sql = "DELETE FROM booking WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    
    return $result === true;
}

// Get the total number of all bookings
function getTotalBookingsCount() {
    $conn = connect();
    $sql = "SELECT COUNT(*) as total FROM booking";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data['total'] ?? 0;
}

// Get the count of bookings based on their status
function getStatusCount($status) {
    $conn = connect();
    $sql = "SELECT COUNT(*) as total FROM booking WHERE status = '$status'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data['total'] ?? 0;
}

// Get the total revenue by summing the price of confirmed packages
function getTotalRevenue() {
    $conn = connect();
    $sql = "SELECT SUM(p.price) as revenue FROM booking b JOIN packages p ON b.package_id = p.id WHERE b.status = 'Confirmed'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data['revenue'] ?? 0;
}

// Get the total number of packages
function getTotalPackagesCount() {
    $conn = connect();
    $sql = "SELECT COUNT(*) as total FROM packages";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data['total'] ?? 0;
}
// Fetch only packages waiting for admin approval
function getPendingPackages() {
    $conn = connect();
    $sql = "SELECT * FROM packages WHERE approval_status = 'Pending' ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    $packages = [];
    if ($result && mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $packages[] = $row;
        }
    }
    return $packages;
}

// Update the approval status
function setPackageApprovalStatus($id, $status) {
    $conn = connect();
    $sql = "UPDATE packages SET approval_status = '$status' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    return $result === true;
}
?>