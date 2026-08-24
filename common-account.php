<!DOCTYPE html>
<html>

<head>
    <title>Profile Page</title>

    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="common-account.css">
</head>

<body>

    <?php include 'header.php'; ?>

    <div class="container">

        <?php include 'sidebar.php'; ?>

        <div class="main">
            <div class="profile-card">
                <h2>PROFILE</h2>

                <form id="profileForm" action="#" method="POST">
                    <div class="form-grid">
                        <div class="input-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" id="fullName" name="fullname" value=" ">
                        </div>

                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="example@email.com">
                        </div>

                        <div class="input-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" value="01XXXXXXXXX">
                        </div>

                        <div class="input-group">
                            <label for="role">Role</label>
                            <input type="text" id="role" name="role" value="Customer / Sales / Admin" >
                        </div>
                    </div>

                    <div class="button-group">
                        <button type="submit" id="editBtn" name="action " value="action" class="btn btn-blue">EDIT PROFILE</button>
                        <button type="button" id="changePasswordBtn" name="action" value="change_password" class="btn btn-green">CHANGE PASSWORD</button>
                        <button type="submit" id="deleteBtn" name="action" value="delete" class="btn btn-red">DELETE</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

   
    <script src="#"></script>
</body>
</html>