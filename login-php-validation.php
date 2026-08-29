<?php

if (empty($_POST['username'])) {
    echo "USERNAME / EMAIL IS EMPTY";
}
else {
    echo "Username: " . $_POST['username'];
}

echo "<br>";

if (empty($_POST['password'])) {
    echo "PASSWORD IS EMPTY";
}
else {
    echo "Password: " . $_POST['password'];
}

?>