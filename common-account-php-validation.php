<?php

if (empty($_POST['fullname'])) {
    echo "FULL NAME IS EMPTY";
}
else {
    echo "Full Name: " . $_POST['fullname'];
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
    echo "PHONE IS EMPTY";
}
else {
    echo "Phone: " . $_POST['phone'];
}

echo "<br>";

if (empty($_POST['role'])) {
    echo "ROLE IS EMPTY";
}
else {
    echo "Role: " . $_POST['role'];
}

?>