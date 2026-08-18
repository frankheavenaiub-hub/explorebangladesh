<!DOCTYPE html>
<html lang="en">

<head>
    <title>Explore Bangladesh - Registration</title>

    <link rel="stylesheet" href="registration.css">
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

            <fieldset class="registration-info">

                <legend>Registration</legend>

                <h2>Create Your Account</h2>

                <p class="registration-text">
                    Please fill in the information below to register
                </p>

                <br>

                <fieldset class="personal-info">

                    <legend>Personal Information</legend>

                    <label for="firstName">First Name</label>
                    : <input type="text" id="firstName" name="firstName">

                    <br><br>

                    <label for="lastName">Last Name</label>
                    : <input type="text" id="lastName" name="lastName">

                    <br><br>

                    <label>Gender</label>
                    :

                    <input type="radio" id="male" name="Gender" value="male">
                    <label for="male">Male</label>

                    <input type="radio" id="female" name="Gender" value="female">
                    <label for="female">Female</label>

                    <br><br>

                    <label for="email">Email</label>
                    : <input type="text" id="email" name="email">

                    <br><br>

                    <label for="phone">Phone</label>
                    : <input type="text" id="phone" name="phone">

                    <br><br>

                    <label for="country">Country</label>
                    :

                    <select name="country" id="country">
                        <option>select country</option>
                        <option>Bangladesh</option>
                        <option>Nepal</option>
                    </select>

                    <br><br>

                    <label for="division">Division</label>
                    :

                    <select name="division" id="division">
                        <option>select devision</option>
                        <option>Dhaka</option>
                        <option>Rangpur</option>
                        <option>Chattogram</option>
                        <option>Rajshahi</option>
                    </select>

                    <br><br>

                    <label for="road">Road / Street</label>
                    :

                    <textarea id="road"
                              name="road"
                              placeholder="Road / Street / City"></textarea>

                    <br><br>

                    <label for="postcode">Post Code</label>
                    : <input type="text"
                             id="postcode"
                             name="postcode">

                </fieldset>

                <br>

                <fieldset class="account-info">

                    <legend>Account Information</legend>

                    <label for="userName">User Name</label>
                    : <input type="text"
                             id="userName"
                             name="userName">

                    <br><br>

                    <label for="password">Password</label>
                    : <input type="password"
                             id="password"
                             name="password">

                    <br><br>

                    <label for="confirmPassword">Confirm Password</label>
                    : <input type="password"
                             id="confirmPassword"
                             name="confirmPassword">

                    <br><br>

                </fieldset>

                <br>

                <input type="submit"
                       value="REGISTER"
                       class="register-btn">

                <br>
                <a href="login.php" class="back-btn">BACK </a>     

            </fieldset>

        </td>

    </tr>

</table>

</form>

</body>

</html>