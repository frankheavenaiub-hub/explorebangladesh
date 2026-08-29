<?php
include 'session-check.php';

if ($_SESSION['role'] != "Customer") {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Customer Booking & History</title>

    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="booking-history.css">
</head>

<body>

    <?php include 'header.php'; ?>


    <div class="container">

        <?php include 'sidebar.php'; ?>


        <div class="right-side">


           

            <div class="panel new-booking">

                <h3>NEW BOOKING</h3>

                <div class="booking-form">

                    <div class="field">

                        <label for="travelDate">
                            Travel Date
                        </label>

                        <input
                            id="travelDate"
                            type="text"
                            value=""
                        >

                    </div>


                    <div class="field">

                        <label for="travelerName">
                            Traveler Name
                        </label>

                        <input
                            id="travelerName"
                            type="text"
                            value=""
                        >

                    </div>


                    <button class="btn-confirm">
                        CONFIRM
                    </button>

                </div>

            </div>


          

            <div class="panel my-bookings">

                <h3>MY BOOKINGS</h3>

                <table>

                    <thead>

                        <tr>
                            <th>Package</th>
                            <th>Travel Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                    </thead>


                    <tbody>

                        <tr>

                            <td>Cox's Bazar</td>

                            <td>20 Aug</td>

                            <td>
                                <span class="status confirmed">
                                    Confirmed
                                </span>
                            </td>

                            <td>
                                <a href="#" class="action-link">
                                    View
                                </a>
                            </td>

                        </tr>


                        <tr>

                            <td>Sajek</td>

                            <td>25 Aug</td>

                            <td>
                                <span class="status pending">
                                    Pending
                                </span>
                            </td>

                            <td>
                                <a href="#" class="action-link cancel">
                                    Cancel
                                </a>
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>


            

            <button class="btn-receipt">
                DOWNLOAD RECEIPT
            </button>


        </div>

    </div>

</body>

</html>