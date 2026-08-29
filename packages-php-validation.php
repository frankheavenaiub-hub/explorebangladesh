<?php

if (empty($_POST['travelDate'])) {
    echo "TRAVEL DATE IS EMPTY";
}
else {
    echo "Travel Date: " . $_POST['travelDate'];
}

echo "<br>";

if (empty($_POST['travelerDetails'])) {
    echo "TRAVELER DETAILS IS EMPTY";
}
else {
    echo "Traveler Details: " . $_POST['travelerDetails'];
}

?>