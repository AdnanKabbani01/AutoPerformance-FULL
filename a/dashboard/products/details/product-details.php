<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
    exit;
}

include('../../../functions.php');
include('../../../connection.php');

$userId = $_SESSION['user_id']; 

if(isset($_GET['product']) && isset($_GET['name'])) {
    $product = $_GET['product'];
    $name = $_GET['name'];

    $query = "SELECT * FROM `$product` WHERE name = '$name'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $price = $row['price'];
        $image_url = $row['image_url'];
        $description = $row['description'];

        if(isset($_POST['add_to_cart'])) {
            $query = "INSERT INTO user_cart (user_id, product_name, product_price) VALUES ('$userId', '$name', '$price')";
            mysqli_query($conn, $query); 
            mysqli_close($conn);
            echo "Product added to cart successfully.";
        }
    } else {
        echo "Product not found.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../../assets/img/car.ico" type="image/x-icon">

    <title><?php echo $name; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="../css/slick.css" />
    <link type="text/css" rel="stylesheet" href="../css/slick-theme.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="../css/style.css" />

</head>
<body>
<header>
    <div id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><span class="text-primary">Auto</span>PERFORMANCE</a>
            </div>
			<ul class="navbar-nav ml-auto" style="position: absolute; right: 0; margin-right: 100px; top: 37px;">
    <li class="nav-item">
        <a class="nav-link" href="../../../Checkout/checkout.php"><i class="fa fa-shopping-cart"></i> Cart</a>
    </li>
</ul>
        </nav>
		
    </div>
</header>

    <div id="breadcrumb" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="../../index.php">Home</a></li>
                        <li><a href="../../index.php #shop-by-parts">Parts</a></li>
                        <li><?php echo $product; ?></li>
                        <li class="active"><?php echo $name; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">

			<!-- Product main img -->
<div class="col-md-5 col-md-push-2">
    <div id="product-main-img">
        <div class="product-preview">
            <img src="<?php echo $image_url; ?>" alt="">
        </div>
    </div>
</div>
<!-- /Product main img -->

<!-- Product thumb imgs -->
<div class="col-md-2  col-md-pull-5">
    <div id="product-imgs">
        <div class="product-preview">
            <img src="<?php echo $image_url; ?>" alt="">
        </div>
    </div>
</div>
<!-- /Product thumb imgs -->

                <div class="col-md-5">
                    <div class="product-details">
                        <!-- Display product name, price, and description -->
                        <h2 class="product-name"><?php echo $name; ?></h2>
                        <div>
                            <h3 class="product-price"><?php echo $price; ?></h3>
                            <span class="product-available">In Stock</span>
                        </div>
                        <p><?php echo $description; ?></p>
                        <div class="add-to-cart">
    <form method="post">
        <input type="hidden" name="product" value="<?php echo urlencode($name); ?>">
        <input type="hidden" name="price" value="<?php echo $price; ?>">
        <button type="submit" name ="add_to_cart" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to Cart</button>
    </form>
</div>

							</ul>
							<ul class="product-links">
								<li>Share:</li>
								<li><i class="fa fa-facebook"></i></li>
								<li><i class="fa fa-twitter"></i></li>
								<li><i class="fa fa-google-plus"></i></li>
								<li><i class="fa fa-envelope"></i></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>

							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p>Carbon ceramic offers substantial benefits in terms of performance - in both wet and dry conditions - weight, comfort, corrosion resistance, durability and high-tech appeal.</p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p>In June 2009, Brembo forged the equal share joint venture Brembo SGL Carbon Ceramic Brakes together with SGL Carbon, with the objective of developing carbon ceramic braking systems, and manufacturing and commercialising carbon ceramic discs exclusively for the passenger car and commercial vehicle original equipment markets.
											</p>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
										
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
						</div>
					</div>
					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="../img/sus/bsl-48-251570_1_1.webp" alt="">
								<div class="product-label">
								
								</div>
							</div>
							<div class="product-body">
								<p class="product-category">Suspension</p>
								<h3 class="product-name"><a href="suss.html">Bilstein B16 PSS10</a></h3>
								<h4 class="product-price">$1980.00</del></h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
									
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn" onclick="window.location.href='../../index.php #shop-by-parts'"><i class="fa fa-shopping-cart"></i>View more</button>
							</div>
						</div>
					</div>
					<!-- /product -->
					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="../img/brakes/PORSCHE-PINZA-+-DISCO-3-4.jpg" alt="">
								<div class="product-label">
									
								</div>
							</div>
							<div class="product-body">
								<p class="product-category">Brakes</p>
								<h3 class="product-name"><a href="brake.html">Brembo Brakes</a></h3>
								<h4 class="product-price">$5990.00</del></h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn" onclick="window.location.href='../../index.php #shop-by-parts'"><i class="fa fa-shopping-cart"></i>View more</button>
							</div>
						</div>
					</div>
					<!-- /product -->

					<div class="clearfix visible-sm visible-xs"></div>

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="../img/tune/995253c1a36bd0b25476a54f2d8fed13a30138e2.jpg" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Gauges</p>
								<h3 class="product-name"><a href="../../index.php #shop-by-parts">AEM CLASSIC BOOST DISPLAY GAUGE KIT</a></h3>
								<h4 class="product-price">$174.99 </del> </h4>
								<div class="product-rating">
									
								</div>
								<div class="product-btns">
									
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn" onclick="window.location.href='../../index.php #shop-by-parts'"><i class="fa fa-shopping-cart"></i>View more</button>
							</div>
						</div>
					</div>
					<!-- /product -->
					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="../img/eng/50462161-912-Lunati-18-degree-632-Block-Rotating-As.jpg" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Engine</p>
								<h3 class="product-name"><a href="../../index.php #shop-by-parts">Lunati 18 degree 632 Block</a></h3>
								<h4 class="product-price">$5329.00 </del> </h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn" onclick="window.location.href='../../index.php #shop-by-parts'"><i class="fa fa-shopping-cart"></i>View more</button>
							</div>
						</div>
					</div>
					<!-- /product -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->


		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md- col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Excellence in Every Detail: Redefining Automotive Standards. Discover unparalleled service and premium quality car parts that bring out the best in your vehicle. Your journey, elevated.</p>
								<ul class="footer-links">
									<li><a href="https://www.lau.edu.lb"><i class="fa fa-map-marker"></i>Lebanese American University</a></li>

									<li><a href="tel:96181658585"><i class="fa fa-phone"></i>+961-81658585</li>
										
									<li><a href="mailto:adnan.kabbani01@lau.edu"><i class="fa fa-envelope-o"></i>adnan.kabbani01@lau.edu</a></li>
									</ul>
								</div>
							</div>
	
							<div class="col-md-3 col-xs-6">
								<div class="footer">
									<h3 class="footer-title">Categories</h3>
									<ul class="footer-links">
										<li><a href="../../index.php #shop-by-parts">Cooling</a></li>
										<li><a href="../../index.php #shop-by-parts">Suspension</a></li>
										<li><a href="../../index.php #shop-by-parts">Brakes</a></li>
										<li><a href="../../index.php #shop-by-parts">Styling</a></li>
										<li><a href="../../index.php #shop-by-parts">Gauges</a></li>
									</ul>
								</div>
							</div>
	
							<div class="col-md-3 col-xs-6">
								<div class="footer">
									<h3 class="footer-title">Navigate</h3>
									<ul class="footer-links">
										<li><a href="../../index.php">Home</a></li>
										
									</ul>
								</div>
							</div>
						</div>
						<!-- /row -->
					</div>
					<!-- /container -->
				</div>

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><i class="fa fa-cc-visa"></i></li>
								<li><i class="fa fa-credit-card"></i></li>	
								<li><i class="fa fa-cc-mastercard"></i></li>
							</ul>
							<span class="copyright">
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | AutoPerformance</a>
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->


	<!-- img Plugins -->
	<script src="../js/jquery.min.js"></script>
	<script src="../js/jquery.zoom.min.js"></script>
	<script src="../js/slick.min.js"></script>
	<!-- Js -->
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/main.js"></script> 

	</body>
</html>

<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
    exit;
}

include('../../../functions.php');
include('../../../connection.php');

$userId = $_SESSION['user_id']; 

if(isset($_GET['product'])) {
    $product = $_GET['product'];
}

if(isset($_GET['name'])) {
    $name = $_GET['name'];
}

if(isset($_POST['add_to_cart'])) {
    $query = "SELECT * FROM `$product` WHERE name = '$name'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $price = $row['price'];
        $image_url = $row['image_url'];
        $description = $row['description'];

        $query = "INSERT INTO user_cart (user_id, product_name, product_price) VALUES ('$userId', '$name', '$price')";
        mysqli_query($conn, $query); 
        mysqli_close($conn);
        echo "Product added to cart successfully.";
    } else {
        echo "Product not found.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../../assets/img/car.ico" type="image/x-icon">

    <title><?php echo $name; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="../css/slick.css" />
    <link type="text/css" rel="stylesheet" href="../css/slick-theme.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="../css/style.css" />

</head>
<body>
<header>
    <div id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><span class="text-primary">Auto</span>PERFORMANCE</a>
            </div>
			<ul class="navbar-nav ml-auto" style="position: absolute; right: 0; margin-right: 100px; top: 37px;">
    <li class="nav-item">
        <a class="nav-link" href="../../../Checkout/checkout.php"><i class="fa fa-shopping-cart"></i> Cart</a>
    </li>
</ul>
        </nav>
		
    </div>
</header>

    <div id="breadcrumb" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="../../index.php">Home</a></li>
                        <li><a href="../../index.php #shop-by-parts">Parts</a></li>
                        <li><?php echo $product; ?></li>
                        <li class="active"><?php echo $name; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">

			<!-- Product main img -->
<div class="col-md-5 col-md-push-2">
    <div id="product-main-img">
        <div class="product-preview">
            <img src="<?php echo $image_url; ?>" alt="">
        </div>
    </div>
</div>
<!-- /Product main img -->

<!-- Product thumb imgs -->
<div class="col-md-2  col-md-pull-5">
    <div id="product-imgs">
        <div class="product-preview">
            <img src="<?php echo $image_url; ?>" alt="">
        </div>
    </div>
</div>
<!-- /Product thumb imgs -->

                <div class="col-md-5">
                    <div class="product-details">
                        <!-- Display product name, price, and description -->
                        <h2 class="product-name"><?php echo $name; ?></h2>
                        <div>
                            <h3 class="product-price"><?php echo $price; ?></h3>
                            <span class="product-available">In Stock</span>
                        </div>
                        <p><?php echo $description; ?></p>
                        <div class="add-to-cart">
						<form method="post">
        <input type="hidden" name="product" value="<?php echo urlencode($name); ?>">
        <input type="hidden" name="price" value="<?php echo $price; ?>">
        <button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to Cart</button>
    </form>
</div>
							</ul>
							<ul class="product-links">
								<li>Share:</li>
								<li><i class="fa fa-facebook"></i></li>
								<li><i class="fa fa-twitter"></i></li>
								<li><i class="fa fa-google-plus"></i></li>
								<li><i class="fa fa-envelope"></i></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>

							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p>Carbon ceramic offers substantial benefits in terms of performance - in both wet and dry conditions - weight, comfort, corrosion resistance, durability and high-tech appeal.</p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p>In June 2009, Brembo forged the equal share joint venture Brembo SGL Carbon Ceramic Brakes together with SGL Carbon, with the objective of developing carbon ceramic braking systems, and manufacturing and commercialising carbon ceramic discs exclusively for the passenger car and commercial vehicle original equipment markets.
											</p>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
										
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
						</div>
					</div>
					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="../img/sus/bsl-48-251570_1_1.webp" alt="">
								<div class="product-label">
								
								</div>
							</div>
							<div class="product-body">
								<p class="product-category">Suspension</p>
								<h3 class="product-name"><a href="suss.html">Bilstein B16 PSS10</a></h3>
								<h4 class="product-price">$1980.00</del></h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
									
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn" onclick="window.location.href='../../index.php #shop-by-parts'"><i class="fa fa-shopping-cart"></i>View more</button>
							</div>
						</div>
					</div>
					<!-- /product -->
					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="../img/brakes/PORSCHE-PINZA-+-DISCO-3-4.jpg" alt="">
								<div class="product-label">
									
								</div>
							</div>
							<div class="product-body">
								<p class="product-category">Brakes</p>
								<h3 class="product-name"><a href="brake.html">Brembo Brakes</a></h3>
								<h4 class="product-price">$5990.00</del></h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn" onclick="window.location.href='../../index.php #shop-by-parts'"><i class="fa fa-shopping-cart"></i>View more</button>
							</div>
						</div>
					</div>
					<!-- /product -->

					<div class="clearfix visible-sm visible-xs"></div>

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="../img/tune/995253c1a36bd0b25476a54f2d8fed13a30138e2.jpg" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Gauges</p>
								<h3 class="product-name"><a href="../../index.php #shop-by-parts">AEM CLASSIC BOOST DISPLAY GAUGE KIT</a></h3>
								<h4 class="product-price">$174.99 </del> </h4>
								<div class="product-rating">
									
								</div>
								<div class="product-btns">
									
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn" onclick="window.location.href='../../index.php #shop-by-parts'"><i class="fa fa-shopping-cart"></i>View more</button>
							</div>
						</div>
					</div>
					<!-- /product -->
					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="../img/eng/50462161-912-Lunati-18-degree-632-Block-Rotating-As.jpg" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Engine</p>
								<h3 class="product-name"><a href="../../index.php #shop-by-parts">Lunati 18 degree 632 Block</a></h3>
								<h4 class="product-price">$5329.00 </del> </h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn" onclick="window.location.href='../../index.php #shop-by-parts'"><i class="fa fa-shopping-cart"></i>View more</button>
							</div>
						</div>
					</div>
					<!-- /product -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->


		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md- col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Excellence in Every Detail: Redefining Automotive Standards. Discover unparalleled service and premium quality car parts that bring out the best in your vehicle. Your journey, elevated.</p>
								<ul class="footer-links">
									<li><a href="https://www.lau.edu.lb"><i class="fa fa-map-marker"></i>Lebanese American University</a></li>

									<li><a href="tel:96181658585"><i class="fa fa-phone"></i>+961-81658585</li>
										
									<li><a href="mailto:adnan.kabbani01@lau.edu"><i class="fa fa-envelope-o"></i>adnan.kabbani01@lau.edu</a></li>
									</ul>
								</div>
							</div>
	
							<div class="col-md-3 col-xs-6">
								<div class="footer">
									<h3 class="footer-title">Categories</h3>
									<ul class="footer-links">
										<li><a href="../../index.php #shop-by-parts">Cooling</a></li>
										<li><a href="../../index.php #shop-by-parts">Suspension</a></li>
										<li><a href="../../index.php #shop-by-parts">Brakes</a></li>
										<li><a href="../../index.php #shop-by-parts">Styling</a></li>
										<li><a href="../../index.php #shop-by-parts">Gauges</a></li>
									</ul>
								</div>
							</div>
	
							<div class="col-md-3 col-xs-6">
								<div class="footer">
									<h3 class="footer-title">Navigate</h3>
									<ul class="footer-links">
										<li><a href="../../index.php">Home</a></li>
										
									</ul>
								</div>
							</div>
						</div>
						<!-- /row -->
					</div>
					<!-- /container -->
				</div>

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><i class="fa fa-cc-visa"></i></li>
								<li><i class="fa fa-credit-card"></i></li>	
								<li><i class="fa fa-cc-mastercard"></i></li>
							</ul>
							<span class="copyright">
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | AutoPerformance</a>
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->


	<!-- img Plugins -->
	<script src="../js/jquery.min.js"></script>
	<script src="../js/jquery.zoom.min.js"></script>
	<script src="../js/slick.min.js"></script>
	<!-- Js -->
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/main.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
    $(document).ready(function() {
        $('#addToCartForm').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '../../../Checkout/checkout.php',
                data: $(this).serialize(),
                success: function(response) {  
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

	</body>
</html>
