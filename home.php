<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">



</head>
<body>

    <section class="header">

        <a href="home.php" class=logo>Sky Bright Travels</a>
        <nav class="navbar">
            <a href="home.php"> Home </a>
            <a href="about.php"> About </a>
            <a href="package.php"> Package </a>
            <a href="book.php"> Book </a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    
    <section class="home-container">

        <div class="swiper home-box">

            <div class="swiper-wrapper">
                
                <div class="swiper-slide slide" style="background: url(../TravelBooking/images/Travel222.jpg) no-repeat">  
                    <div class="content">
                        <span>Discover New Places</span>
                        <h3>Explore Around The World</h3>
                        <a href="book.php" class="btn">Book Now!</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(../TravelBooking/images/Travel333.jpg) no-repeat">
                    <div class="content">
                        <span>Trust and Reliability</span>
                        <h3>Cheap and Promo Flights</h3>
                        <a href="book.php" class="btn">Book Now!</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(../TravelBooking/images/Travel111.jpg) no-repeat">
                    <div class="content">
                        <span>Fast and Responsive</span>
                        <h3>Customer Support Service</h3>
                        <a href="book.php" class="btn">Book Now!</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>



    <section class="services">

        <h1 class="services-tittle">Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="/TravelBooking/images/hotelBooking.png">
                <h3>Hotel Booking</h3>
            </div>

            <div class="box">
                <img src="/TravelBooking/images/Carrental.png">
                <h3>Car Rental</h3>
            </div>

            <div class="box">
                <img src="/TravelBooking/images/Touristguide.png">
                <h3>Tourist Guide</h3>
            </div>

            <div class="box">
                <img src="/TravelBooking/images/Flights.png">
                <h3>Flights</h3>
            </div>

            <div class="box">
                <img src="/TravelBooking/images/Activities.png">
                <h3>Activities</h3>
            </div>

        </div>


    </section>


    <section class="footer">
        <div class="box-container">

            <div class="box">
                <h3>Website Sections</h3>
                <a href="home.php"> <i class="fas fa-angle-right"> </i> Home </a>
                <a href="about.php"> <i class="fas fa-angle-right"> </i> About </a>
                <a href="package.php"> <i class="fas fa-angle-right"> </i> Package </a>
                <a href="book.php"> <i class="fas fa-angle-right"> </i> Book </a>
            </div>

            <div class="box">
                <h3>FAQs</h3>
                <a href="#"> <i class="fas fa-angle-right"> </i> Ask questions </a>
                <a href="#"> <i class="fas fa-angle-right"> </i> About us </a>
                <a href="#"> <i class="fas fa-angle-right"> </i> Privacy policy </a>
                <a href="#"> <i class="fas fa-angle-right"> </i> Terms of use </a>
            </div>

            <div class="box">
                <h3>Contact Developer</h3>
                <a href="#"> <i class="fas fa-phone"> </i> +63 967 3101 309 </a>
                <a href="#"> <i class="fas fa-phone"> </i> 858-48116 </a>
                <a href="#"> <i class="fas fa-envelope"> </i> matthewgolo@gmail.com </a>
                <a href="#"> <i class="fas fa-map"> </i> Las Piñas City, Talon Singko </a>
                
            </div>

            <div class="box">
                <h3>Socials</h3>
                <a href="#"> <i class="fab fa-facebook-f"> </i> Facebook </a>
                <a href="#"> <i class="fab fa-twitter"> </i> Twitter </a>
                <a href="#"> <i class="fab fa-instagram"> </i> Instagram </a>
                <a href="#"> <i class="fab fa-linkedin"> </i> Linkedin </a>
            </div>
        </div>

        <div class=credit> © 2024 All rights reserved</div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script.js"></script>
    
</body>
</html>