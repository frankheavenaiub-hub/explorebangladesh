<!DOCTYPE html>
<html>

<head>
    <title>Package Browsing</title>

    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="packages.css">
</head>

<body>

    <?php include 'header.php'; ?>


    <div class="container">

        

        <div class="search-area">

            <input type="text" placeholder="Search package...">

            <select>
                <option>Cox's Bazar</option>
                <option>Sajek</option>
                <option>Bandarban</option>
                <option>Rajshahi</option>
            </select>

            <button>SEARCH</button>

            <button>FILTER</button>

        </div>


       

        <div class="details">

            <h2>PACKAGE DETAILS</h2>

            <div class="package-box">

                <div class="image">

                    <img src="Exploring-Coxs-Bazar.jpg"
                         alt="Cox's Bazar Beach">

                </div>


                <div class="info">

                    <h2>Cox's Bazar Tour</h2>

                    <p>
                        <b>Price:</b> ৳8,000
                    </p>

                    <p>
                        <b>Duration:</b> 3 Days
                    </p>

                    <p>
                        <b>Schedule:</b> Available dates
                    </p>

                    <p>
                        <b>Itinerary:</b> Day-wise tour plan
                    </p>

                    <button class="book">
                        BOOK NOW
                    </button>

                </div>

            </div>

        </div>


       

        <div class="booking-info">

            <h2>BOOKING INFORMATION</h2>

            <div class="form">

                <label>Travel Date</label>

                <input type="date">


                <label>Traveler Details</label>

                <input
                    type="text"
                    placeholder="Enter traveler name"
                >

            </div>

        </div>

    </div>

</body>

</html>