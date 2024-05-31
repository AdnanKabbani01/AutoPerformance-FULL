<?php

   session_start();
   
   if (!isset($_SESSION['user_id'])) {
       header('Location: ../index.php');
       exit;
   }
   
   include('../functions.php');
   include('../connection.php');
   ?>
 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/car.ico" type="image/x-icon">
    <title title="AutoParts Dash">AutoParts Dash</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Local Styles -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" title="Navigation Menu">
        <div class="container">
            <a class="navbar-brand" href="#" title="AutoPerformance Website"><span class="text-primary">Auto</span>PERFORMANCE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#carouselExampleIndicators" title="Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" title="About Us">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services" title="Our Services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#shop-by-parts" title="Shop By Parts">Parts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio" title="Our Packages">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" title="Contact Us">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php" title="Logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" title="Image Carousel">
        <!-- Carousel indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" title="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" title="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" title="Slide 3"></button>
        </div>
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/car1.jpg" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption">
                    <h5>Your Dream Car</h5>
                    <p>Explore endless possibilities for your dream ride – where quality meets performance, and every part tells a story.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/car2.jpeg" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption">
                    <h5>Always Dedicated</h5>
                    <p> Providing top-notch car parts and accessories to fuel your passion for performance and style.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/car4.jpeg" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption">
                    <h5>Revolutionize Your Ride</h5>
                    <p>Unleash the Power of Performance with Our Premier Car Parts and Accessories</p>
                </div>
            </div>
        </div>
        <!-- Carousel controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" title="Previous">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" title="Next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- About Section -->
    <section id="about" class="about section-padding" title="About Section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="img/turbo.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>We Provide the Best Quality <br/> Services Ever</h2>
                        <p>Excellence in Every Detail: Redefining Automotive Standards. Discover unparalleled service and premium quality car parts that bring out the best in your vehicle. Your journey, elevated.</p>
                        <a href="#" class="btn btn-primary" title="Learn More">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services section-padding" id="services" title="Services Section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Services</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4" title="Precision Overall Car Tuning">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-laptop"></i>
                            <h3 class="card-title">Precision Overall Car Tuning</h3>
                            <p class="lead">Unlock the full potential of your vehicle with our expert tuning services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4" title="Custom Carbon Fiber Fittings">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-journal"></i>
                            <h3 class="card-title">Custom Carbon Fiber Fittings</h3>
                            <p class="lead"> Elevate your ride's style and performance with bespoke carbon fiber enhancements.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4" title="Performance Parts Expertise">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-intersect"></i>
                            <h3 class="card-title">Performance Parts Expertise</h3>
                            <p class="lead"> Explore a curated selection of high-performance parts for a thrilling driving experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Shop by Parts Section -->
<section id="shop-by-parts" class="section-padding" title="Shop By Parts Section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Shop By Parts</h2>
                </div>
            </div>

            <!-- Product 1 -->
            <div class="col-lg-3 col-md-6 mb-4" title="Exhaust">
                <div class="product-item">
                    <img src="img/prod/e.png" alt="Product 1" class="img-fluid">
                    <h4>Exhaust</h4>
                   <a href="products/details/turbos.php?product=exhaustsystems" class="btn btn-primary" title="View Exhaust Products">View</a>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-lg-3 col-md-6 mb-4" title="Engine">
                <div class="product-item">
                    <img src="img/prod/en.webp" alt="Product 2" class="img-fluid">
                    <h4>Engine</h4>
                   <a href="products/details/turbos.php?product=engine" class="btn btn-primary" title="View Engine Products">View</a>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-lg-3 col-md-6 mb-4" title="Styling">
                <div class="product-item">
                    <img src="img/prod/h.png" alt="Product 3" class="img-fluid">
                    <h4>Styling</h4>
                   <a href="products/details/turbos.php?product=styling" class="btn btn-primary" title="View Styling Products">View</a>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="col-lg-3 col-md-6 mb-4" title="Forced Induction">
                <div class="product-item">
                    <img src="img/prod/t.webp" alt="Product 4" class="img-fluid">
                    <h4>Forced Induction</h4>
                   <a href="products/details/turbos.php?product=turbo" class="btn btn-primary" title="View Forced Induction Products">View</a>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="col-lg-3 col-md-6 mb-4" title="Suspension">
                <div class="product-item">
                    <img src="img/prod/sus.avif" alt="Product 5" class="img-fluid">
                    <h4>Suspension</h4>
                   <a href="products/details/turbos.php?product=suspension" class="btn btn-primary" title="View Suspension Products">View</a>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="col-lg-3 col-md-6 mb-4" title="Cooling">
                <div class="product-item">
                    <img src="img/prod/cr2.jpg" alt="Product 6" class="img-fluid">
                    <h4>Cooling</h4>
                   <a href="products/details/turbos.php?product=cooling" class="btn btn-primary" title="View Cooling Products">View</a>
                </div>
            </div>

            <!-- Product 7 -->
            <div class="col-lg-3 col-md-6 mb-4" title="Brakes">
                <div class="product-item">
                    <img src="img/prod/b.avif" alt="Product 7" class="img-fluid">
                    <h4>Brakes</h4>
                  <a href="products/details/turbos.php?product=brakes" class="btn btn-primary" title="View Brake Products">View</a>
                </div>
            </div>

            <!-- Product 8 -->
            <div class="col-lg-3 col-md-6 mb-4" title="Performance Gauges">
                <div class="product-item">
                    <img src="img/prod/tune.avif" alt="Product 8" class="img-fluid">
                    <h4>Performance Gauges</h4>
                   <a href="products/details/turbos.php?product=gauges" class="btn btn-primary" title="View Performance Gauges">View</a>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section-padding" title="Portfolio Section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Our Packages</h2>
                    <p>Your passion, our expertise – turning dreams into reality on the road.</p>
                </div>
            </div>
        </div>
        <div class="wrapper" title="Package Options">
            <div class="services">
                <span class="single-img img-one">
                    <span class="img-text">
                        <h4>Performance Kit</h4>
                        <p> <ul>
                            <li>Increase horsepower and torque with improved airflow to the engine.</li>
                            <li>Achieve a deeper and more aggressive exhaust note.</li>
                            <li>Enhance throttle response for a more spirited driving experience.</li>
                        </ul></p>
                    </span>
                </span>
                <span class="single-img img-two"> 
                    <span class="img-text">
                        <h4>Exterior Enhancement</h4>
                        <p> <ul>
                            <li>Comprehensive makeover for your vehicle's appearance.</li>
                            <li>Includes bodywork, paint, and detailing enhancements.</li>
                            <li>Upgrades to both interior and exterior features for a refreshed look.</li>
                        </ul></p>
                    </span>
                </span>
                <span class="single-img img-three">
                    <span class="img-text">
                        <h4>Full Car Facelift</h4>
                        <p> <ul>
                            <li>Comprehensive makeover for your vehicle's appearance.</li>
                            <li>Includes bodywork, paint, and detailing enhancements.</li>
                            <li>Upgrades to both interior and exterior features for a refreshed look.</li>
                        </ul></p>
                    </span>
                </span>
            </div>
            <div class="services" style="margin-top: 20px;"> 
                <span class="single-img img-four">
                    <span class="img-text">
                        <h4>Track Day</h4>
                        <p> <ul>
                            <li>Install harnesses for secure and supportive seating during high-G maneuvers.</li>
                            <li>Improve handling and responsiveness with track-focused suspension components.</li>
                            <li>Optimize brake performance to withstand the demands of high-speed track driving</li>
                        </ul></p>
                    </span>
                </span>
                <span class="single-img img-five">
                    <span class="img-text">
                        <h4>Full Car Tuning</h4>
                        <p><ul>
                            <li>Unlock the full potential of your vehicle with our expert tuning services.</li>
                            <li>Customize your vehicle's performance to your exact specifications.</li>
                            <li>Optimize fuel delivery, ignition timing, and more for maximum power and efficiency.</li>
                        </ul></p>
                    </span>
                </span>
                <span class="single-img img-six">
                    <span class="img-text">
                        <h4>Custom Packages</h4>
                        <p> <ul>
                            <li>Create a personalized package tailored to your unique driving needs and preferences.</li>
                            <li>Combine various performance, styling, and convenience upgrades for a truly bespoke experience.</li>
                            <li>Consult with our experts to design the perfect.</li>
                        </ul></p>
                    </span>
                </span>
            </div>
        </div>
    </div>
</section>

    <!-- Contact Section -->
    <section id="contact" class="contact section-padding" title="Contact Section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Contact Us</h2>
                        <p>Let's connect! Reach out to us for inquiries, quotes, or just to say hello.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 mb-4">
                    <div class="contact-info">
                        <h4>Contact Information</h4>
                        <ul> 
                            <li><a href="https://www.lau.edu.lb"><i class="bi bi-geo-alt-fill"></i>Lebanese American University</a></li>
                            <li><a href="tel:96181658585"><i class="bi bi-telephone-fill"></i>+961-81658585</a></li>
                            <li><a href="mailto:adnan.kabbani01@lau.edu"><i class="bi bi-envelope-fill"></i>adnan.kabbani01@lau.edu</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 mb-4">
    <div class="contact-form">
        <form action="../emailsending.php" method="post">
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="mb-3">
                <textarea name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center py-5" title="Footer Section">
        <div class="container">
            <ul class="list-inline mb-5">
                <li class="list-inline-item"><i class="bi bi-facebook"></i></li>
                <li class="list-inline-item"><i class="bi bi-instagram"></i></li>
            </ul>
            <span id="copyright" class="copyright">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                All rights reserved | AutoPerformance
            </span>
            
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>