<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="admin-dashboard.css">
</head>

<body>

    <?php include 'header.php'; ?>


    <div class="container">

        <?php include 'sidebar.php'; ?>


        <div class="main">

            <h1>ADMIN DASHBOARD</h1>

            <h2>Welcome, Admin!</h2>


          

            <div class="summary-boxes">

                <div class="summary-box">
                    <h3>TOTAL USERS</h3>
                    <p>120</p>
                </div>


                <div class="summary-box">
                    <h3>TOTAL PACKAGES</h3>
                    <p>32</p>
                </div>


                <div class="summary-box">
                    <h3>TOTAL BOOKINGS</h3>
                    <p>86</p>
                </div>


                <div class="summary-box">
                    <h3>TOTAL REVENUE</h3>
                    <p>620,000 BDT</p>
                </div>

            </div>


           

            <div class="analytics">

                <h2>SYSTEM ANALYTICS</h2>


                <div class="analytics-boxes">

                    <div class="analytics-box">

                        <h3>SALES STATISTICS</h3>

                        <p>Total Packages Sold</p>
                        <p>Revenue: 620,000 BDT</p>

                    </div>


                    <div class="analytics-box">

                        <h3>BOOKING STATISTICS</h3>

                        <p>Pending: 12</p>
                        <p>Confirmed: 65</p>
                        <p>Cancelled: 9</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>