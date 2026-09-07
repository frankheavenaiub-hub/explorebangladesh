<?php

$valid = true;

if (empty($_POST['username'])) {
    echo "USERNAME IS EMPTY";
    $valid = false;
}
else {
    echo "User Name: " . $_POST['username'];
}

echo "<br>";

if (empty($_POST['password'])) {
    echo "PASSWORD IS EMPTY";
    $valid = false;
}
else {
    echo "Password: " . $_POST['password'];
}

?>