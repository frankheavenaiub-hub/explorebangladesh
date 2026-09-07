<?php

$valid = true;

if (empty($_POST['packagename'])) {
    echo "PACKAGE NAME IS EMPTY";
    $valid = false;
}
else {
    echo "Package Name: " . $_POST['packagename'];
}

echo "<br>";

if (empty($_POST['price'])) {
    echo "PRICE IS EMPTY";
    $valid = false;
}
else {
    echo "Price: " . $_POST['price'];
}

echo "<br>";

if (empty($_POST['duration'])) {
    echo "DURATION IS EMPTY";
    $valid = false;
}
else {
    echo "Duration: " . $_POST['duration'];
}

echo "<br>";

if (empty($_FILES['image']['name'])) {
    echo "IMAGE IS NOT SELECTED";
    $valid = false;
}
else {
    echo "Image: " . $_FILES['image']['name'];
}

echo "<br>";

if (empty($_POST['itinerary'])) {
    echo "ITINERARY IS EMPTY";
    $valid = false;
}
else {
    echo "Itinerary: " . $_POST['itinerary'];
}

?>