<?php

$valid = true;

if (empty($_POST['firstName'])) {
    echo "FIRST NAME FIELD IS EMPTY";
    $valid = false;
}
else {
    echo "First Name: " . $_POST['firstName'];
}

echo "<br>";

if (empty($_POST['lastName'])) {
    echo "LAST NAME IS EMPTY";
    $valid = false;
}
else {
    echo "Last Name: " . $_POST['lastName'];
}

echo "<br>";

if (empty($_POST['Gender'])) {
    echo "GENDER IS EMPTY";
    $valid = false;
}
else {
    echo "Gender: " . $_POST['Gender'];
}

echo "<br>";

if (empty($_POST['email'])) {
    echo "EMAIL IS EMPTY";
    $valid = false;
}
else {
    echo "Email: " . $_POST['email'];
}

echo "<br>";

if (empty($_POST['phone'])) {
    echo "PHONE NUMBER IS EMPTY";
    $valid = false;
}
else {
    echo "Phone: " . $_POST['phone'];
}

echo "<br>";

if (empty($_POST['country']) || $_POST['country'] == "select country") {
    echo "COUNTRY IS EMPTY";
    $valid = false;
}
else {
    echo "Country: " . $_POST['country'];
}

echo "<br>";

if (empty($_POST['division']) || $_POST['division'] == "select devision") {
    echo "DIVISION IS EMPTY";
    $valid = false;
}
else {
    echo "Division: " . $_POST['division'];
}

echo "<br>";

if (empty($_POST['road'])) {
    echo "ROAD/STREET IS EMPTY";
    $valid = false;
}
else {
    echo "Road/Street: " . $_POST['road'];
}

echo "<br>";

if (empty($_POST['postcode'])) {
    echo "POST CODE IS EMPTY";
    $valid = false;
}
else {
    echo "Post Code: " . $_POST['postcode'];
}

echo "<br>";

if (empty($_POST['userName'])) {
    echo "USERNAME IS EMPTY";
    $valid = false;
}
else {
    echo "User Name: " . $_POST['userName'];
}

echo "<br>";

if (empty($_POST['password'])) {
    echo "PASSWORD IS EMPTY";
    $valid = false;
}
else {
    echo "Password: " . $_POST['password'];
}

echo "<br>";

if (empty($_POST['confirmPassword'])) {
    echo "CONFIRM PASSWORD IS EMPTY";
    $valid = false;
}
else if ($_POST['password'] != $_POST['confirmPassword']) {
    echo "PASSWORD DOES NOT MATCH";
    $valid = false;
}
else {
    echo "PASSWORD MATCHED";
}

?>