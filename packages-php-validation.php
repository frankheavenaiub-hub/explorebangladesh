<?php

$valid = true;

if (empty($_POST['travelDate'])) {
    echo "TRAVEL DATE IS EMPTY";
    $valid = false;
}
else {
    echo "Travel Date: " . $_POST['travelDate'];
}

echo "<br>";

if (empty($_POST['travelerDetails'])) {
    echo "TRAVELER DETAILS IS EMPTY";
    $valid = false;
}
else {
    echo "Traveler Details: " . $_POST['travelerDetails'];
}

?>