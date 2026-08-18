<!DOCTYPE html>
<html lang="en">

<head>
    <title>Explore Bangladesh - Forgot Password</title>

    <link rel="stylesheet" href="forgot-password.css">
</head>

<body>

<h1 style="text-align: center;">
    <span class="explore">Explore</span>
    <span class="bangladesh">Bangladesh</span>
</h1>

<form>

<table align="center">

    <tr>
        <td>

            <fieldset class="forgot-info">

                <legend>Reset Password</legend>

                <h2>Reset Your Password</h2>

                <p class="forgot-text">
                    Enter your username and create a new password
                </p>

                <br>

                <label for="username">User Name</label>
                : <input type="text"
                         id="username"
                         name="username">

                <br><br><br>

                <label for="newPassword">New Password</label>
                : <input type="password"
                         id="newPassword"
                         name="newPassword">

                <br><br><br>

                <label for="confirmPassword">Confirm Password</label>
                : <input type="password"
                         id="confirmPassword"
                         name="confirmPassword">

                <br><br><br>

                <input type="submit"
                       value="RESET PASSWORD"
                       class="reset-btn">

                <br><br>

                <a href="login.php" class="back-btn">BACK</a>

            </fieldset>

        </td>
    </tr>

</table>

</form>

</body>

</html>