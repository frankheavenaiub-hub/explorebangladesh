<!DOCTYPE html>
<html>

<head>
    <title>Sales Dashboard</title>

    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="sales-dashboard.css">
</head>

<body>

    <?php include 'header.php'; ?>


    <div class="container">

        <?php include 'sidebar.php'; ?>


        <div class="main">

            <h1>SALES DASHBOARD</h1>

            <h2>Welcome, Sales!</h2>


            <div class="dashboard-boxes">

                <div class="dashboard-box">
                    <h3>TOTAL BOOKINGS</h3>
                    <p>25</p>
                </div>


                <div class="dashboard-box">
                    <h3>CONFIRMED</h3>
                    <p>18</p>
                </div>


                <div class="dashboard-box">
                    <h3>CANCELLED</h3>
                    <p>3</p>
                </div>


                <div class="dashboard-box">
                    <h3>REVENUE</h3>
                    <p>150,000 BDT</p>
                </div>

            </div>


            <div class="recent-bookings">

                <h3>RECENT CUSTOMER BOOKINGS</h3>

                <table>

                    <tr>
                        <th>Customer</th>
                        <th>Package</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>


                    <tr>
                        <td>Rejowan</td>
                        <td>Cox's Bazar</td>
                        <td>Pending</td>
                        <td>
                            <button class="confirm">Confirm</button>
                            <button class="cancel">Cancel</button>
                        </td>
                    </tr>


                    <tr>
                        <td>Shadid</td>
                        <td>Sajek</td>
                        <td>Confirmed</td>
                        <td>
                            <button class="view">View</button>
                        </td>
                    </tr>


                    <tr>
                        <td>Shahaf</td>
                        <td>Saint Martin</td>
                        <td>Pending</td>
                        <td>
                            <button class="confirm">Confirm</button>
                            <button class="cancel">Cancel</button>
                        </td>
                    </tr>


                    <tr>
                        <td>Frank</td>
                        <td>Rangamati</td>
                        <td>Confirmed</td>
                        <td>
                            <button class="view">View</button>
                        </td>
                    </tr>

                </table>

            </div>

        </div>

    </div>

</body>

</html>