<?php
function connect() {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bdtour";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}

	return $conn;
}

// Query files — include only once to avoid redeclaration errors
require_once __DIR__ . '/user.php';
require_once __DIR__ . '/customer.php';
