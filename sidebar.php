<div class="sidebar">

    <h3>MENU</h3>

    <?php if ($_SESSION['role'] == "Customer") { ?>

        <a href="dashboard.php">Dashboard</a>
        <a href="packages.php">Packages</a>
        <a href="booking-history.php">My Bookings</a>
        <a href="common-account.php">Profile</a>

    <?php } elseif ($_SESSION['role'] == "Sales") { ?>

        <a href="sales-dashboard.php">Dashboard</a>
        <a href="sales-package.php">Sales Overview</a>
        <a href="common-account.php">Profile</a>

    <?php } elseif ($_SESSION['role'] == "Admin") { ?>

        <a href="admin-dashboard.php">Dashboard</a>
        <a href="admin-user.php">User Management</a>
        <a href="common-account.php">Profile</a>

    <?php } ?>

    <a href="logout.php">Logout</a>

</div>