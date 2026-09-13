<?php
include 'session-check.php';

if ($_SESSION['role'] != "Customer") {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Package Browsing</title>

    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="packages.css">
</head>

<body>

    <?php include 'header.php'; ?>


    <div class="container">

        

        <div class="search-area">

            <input type="text" placeholder="Search package...">

            <select>
                <option>Cox's Bazar</option>
                <option>Sajek</option>
                <option>Bandarban</option>
                <option>Rajshahi</option>
            </select>

            <button>SEARCH</button>

            <button>FILTER</button>

        </div>


       

        <div class="details">

            <h2>PACKAGE DETAILS</h2>

            <div class="package-box">

                <div class="image">

                    <img src="Exploring-Coxs-Bazar.jpg"
                         alt="Cox's Bazar Beach">

                </div>


                <div class="info">

                    <h2>Cox's Bazar Tour</h2>

                    <p>
                        <b>Price:</b> ৳8,000
                    </p>

                    <p>
                        <b>Duration:</b> 3 Days
                    </p>

                    <p>
                        <b>Schedule:</b> Available dates
                    </p>

                    <p>
                        <b>Itinerary:</b> Day-wise tour plan
                    </p>

                    <button class="book">
                        BOOK NOW
                    </button>

                </div>

            </div>

        </div>


       

        <form action="packages-php-validation.php" method="POST" onsubmit="return validate(this)">

        <div class="booking-info">

            <h2>BOOKING INFORMATION</h2>

            <div class="form">

                <label>Travel Date</label>

                <input type="date" id="travelDate" name="travelDate">
                <span id="travelDateErrMsg" class="error-msg"></span>


                <label>Traveler Details</label>

                <input
                    type="text"
                    id="travelerDetails"
                    name="travelerDetails"
                    placeholder="Enter traveler name"
                >
                <span id="travelerDetailsErrMsg" class="error-msg"></span>

            </div>

        </div>

        </form>

    </div>

<?php include 'packages-js-validation.php'; ?>

</body>

</html>