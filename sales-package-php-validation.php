<?php

if (empty($_POST['packagename'])) {
    echo "PACKAGE NAME IS EMPTY";
}
else {
    echo "Package Name: " . $_POST['packagename'];
}

echo "<br>";

if (empty($_POST['price'])) {
    echo "PRICE IS EMPTY";
}
else {
    echo "Price: " . $_POST['price'];
}

echo "<br>";

if (empty($_POST['duration'])) {
    echo "DURATION IS EMPTY";
}
else {
    echo "Duration: " . $_POST['duration'];
}

echo "<br>";

if (empty($_FILES['image']['name'])) {
    echo "IMAGE IS NOT SELECTED";
}
else {
    echo "Image: " . $_FILES['image']['name'];
}

echo "<br>";

if (empty($_POST['itinerary'])) {
    echo "ITINERARY IS EMPTY";
}
else {
    echo "Itinerary: " . $_POST['itinerary'];
}

?>