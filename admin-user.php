<!DOCTYPE html>
<html>

<head>
    <title>Admin User Management</title>

    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="admin-user.css">
</head>

<body>

    <?php include 'header.php'; ?>


    <div class="container">

        <?php include 'sidebar.php'; ?>


        <div class="main">

           

            <button class="create-btn">
                CREATE USER
            </button>


           

            <div class="user-management">

                <h2>USER MANAGEMENT</h2>

                <table>

                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>


                    <tr>
                        <td>Rejowan</td>
                        <td>Customer</td>
                        <td>Active</td>
                        <td>Edit / Suspend</td>
                    </tr>


                    <tr>
                        <td>Frank</td>
                        <td>Sales</td>
                        <td>Active</td>
                        <td>Edit / Suspend</td>
                    </tr>


                    <tr>
                        <td>Shahaf</td>
                        <td>Customer</td>
                        <td>Active</td>
                        <td>Edit / Suspend</td>
                    </tr>

                </table>

            </div>


            <!-- Bottom Buttons -->

            <div class="bottom-buttons">

                <button class="update-btn">
                    UPDATE USER
                </button>

                <button class="suspend-btn">
                    SUSPEND / DELETE
                </button>

            </div>

        </div>

    </div>

</body>

</html>