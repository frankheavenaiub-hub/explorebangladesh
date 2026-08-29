<?php

if (empty($_POST['username'])) {
    echo "USERNAME IS EMPTY";
}
else {
    echo "User Name: " . $_POST['username'];
}

echo "<br>";

if (empty($_POST['newPassword'])) {
    echo "NEW PASSWORD IS EMPTY";
}
else {
    echo "New Password: " . $_POST['newPassword'];
}

echo "<br>";

if (empty($_POST['confirmPassword'])) {
    echo "CONFIRM PASSWORD IS EMPTY";
}
else if ($_POST['newPassword'] != $_POST['confirmPassword']) {
    echo "PASSWORD DOES NOT MATCH";
}
else {
    echo "PASSWORD MATCHED";
}

?>