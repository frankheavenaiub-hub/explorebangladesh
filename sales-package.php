<?php
include 'session-check.php';

if ($_SESSION['role'] != "Sales") {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sales Package Management</title>

    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="sales-package.css">
</head>

<body>

    <?php include 'header.php'; ?>


    <div class="container">

        <?php include 'sidebar.php'; ?>


        <div class="main">

            

            <div class="package-form">

                <h2>ADD / EDIT PACKAGE</h2>

                <form action="sales-package-php-validation.php" method="POST" enctype="multipart/form-data" onsubmit="return validate(this)">

                <div class="form">

                    <label for ="packagename">Package Name</label>
                    <input type="text" id="packagename" name="packagename" value="Sajek Tour">
                    <span id="packagenameErrMsg" class="error-msg"></span>


                    <label for ="price">Price</label>
                    <input type="text" id ="price" name="price">
                    <span id="priceErrMsg" class="error-msg"></span>


                    <label for="duration">Duration</label>
                    <input type="text" id ="duration" name="duration">
                    <span id="durationErrMsg" class="error-msg"></span>


                    <label for="image">Image</label>
                    <input type="file" id="image" name="image">
                    <span id="imageErrMsg" class="error-msg"></span>


                    <label for="itinerary">Itinerary</label>
                    <textarea id="itinerary" name="itinerary"></textarea>
                    <span id="itineraryErrMsg" class="error-msg"></span>


                    <button type="submit" class="save-btn">
                        SAVE PACKAGE
                    </button>

                </div>

                </form>

            </div>


            

            <div class="existing-packages">

                <h2>EXISTING PACKAGES</h2>

                <table>

                    <tr>
                        <th>Package</th>
                        <th>Price</th>
                        <th>Availability</th>
                        <th>Action</th>
                    </tr>


                    <tr>
                        <td>Sajek Tour</td>
                        <td>7,500</td>
                        <td>Available</td>
                        <td>
                            <button class="edit-btn">
                                Edit / Update
                            </button>
                        </td>
                    </tr>


                    <tr>
                        <td>Cox's Bazar</td>
                        <td>8,000</td>
                        <td>Available</td>
                        <td>
                            <button class="edit-btn">
                                Edit / Update
                            </button>
                        </td>
                    </tr>

                </table>

            </div>

        </div>

    </div>

<?php include 'sales-package-js-validation.php'; ?>

</body>

</html>