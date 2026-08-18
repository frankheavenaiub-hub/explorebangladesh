<!DOCTYPE html>
<html>

<head>
    <title>Customer Dashboard</title>

    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>

    <?php include 'header.php'; ?>


    <div class="container">

        <?php include 'sidebar.php'; ?>


        <div class="main">


            <div class="welcome-box">

                <h3>WELCOME</h3>

                <h2>Welcome, Customer!</h2>

            </div>


           

            <div class="dashboard-sections">

                <div class="dashboard-box">

                    <h3>AVAILABLE PACKAGES</h3>

                    <h4>Cox's Bazar Tour</h4>

                    <p>Price: 8,000 | 3 Days</p>

                    <button>VIEW DETAILS</button>

                </div>


                <div class="dashboard-box">

                    <h3>UPCOMING BOOKING</h3>

                    <h4>Sajek Tour</h4>

                    <p>Status: Confirmed</p>

                    <button>VIEW</button>

                </div>

            </div>


           

            <div class="booking-status">

                <h3>BOOKING STATUS</h3>

                <h4>Pending / Confirmed / Cancelled</h4>

                <p>
                    The latest status is synchronized from the central
                    booking database.
                </p>

            </div>

        </div>

    </div>

</body>

</html>