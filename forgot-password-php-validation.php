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

if (empty($_POST['newPassword'])) {
    echo "NEW PASSWORD IS EMPTY";
    $valid = false;
}
else {
    echo "New Password: " . $_POST['newPassword'];
}

echo "<br>";

if (empty($_POST['confirmPassword'])) {
    echo "CONFIRM PASSWORD IS EMPTY";
    $valid = false;
}
else if ($_POST['newPassword'] != $_POST['confirmPassword']) {
    echo "PASSWORD DOES NOT MATCH";
    $valid = false;
}
else {
    echo "PASSWORD MATCHED";
}

?>