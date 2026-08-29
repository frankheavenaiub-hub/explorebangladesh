<?php

if (empty($_POST['firstName'])) {
    echo "FIRST NAME FIELD IS EMPTY";
}
else {
    echo "First Name: " . $_POST['firstName'];
}

echo "<br>";

if (empty($_POST['lastName'])) {
    echo "LAST NAME IS EMPTY";
}
else {
    echo "Last Name: " . $_POST['lastName'];
}

echo "<br>";

if (empty($_POST['Gender'])) {
    echo "GENDER IS EMPTY";
}
else {
    echo "Gender: " . $_POST['Gender'];
}

echo "<br>";

if (empty($_POST['email'])) {
    echo "EMAIL IS EMPTY";
}
else {
    echo "Email: " . $_POST['email'];
}

echo "<br>";

if (empty($_POST['phone'])) {
    echo "PHONE NUMBER IS EMPTY";
}
else {
    echo "Phone: " . $_POST['phone'];
}

echo "<br>";

if (empty($_POST['country']) || $_POST['country'] == "select country") {
    echo "COUNTRY IS EMPTY";
}
else {
    echo "Country: " . $_POST['country'];
}

echo "<br>";

if (empty($_POST['division']) || $_POST['division'] == "select devision") {
    echo "DIVISION IS EMPTY";
}
else {
    echo "Division: " . $_POST['division'];
}

echo "<br>";

if (empty($_POST['road'])) {
    echo "ROAD/STREET IS EMPTY";
}
else {
    echo "Road/Street: " . $_POST['road'];
}

echo "<br>";

if (empty($_POST['postcode'])) {
    echo "POST CODE IS EMPTY";
}
else {
    echo "Post Code: " . $_POST['postcode'];
}

echo "<br>";

if (empty($_POST['userName'])) {
    echo "USERNAME IS EMPTY";
}
else {
    echo "User Name: " . $_POST['userName'];
}

echo "<br>";

if (empty($_POST['password'])) {
    echo "PASSWORD IS EMPTY";
}
else {
    echo "Password: " . $_POST['password'];
}

echo "<br>";

if (empty($_POST['confirmPassword'])) {
    echo "CONFIRM PASSWORD IS EMPTY";
}
else if ($_POST['password'] != $_POST['confirmPassword']) {
    echo "PASSWORD DOES NOT MATCH";
}
else {
    echo "PASSWORD MATCHED";
}

?>