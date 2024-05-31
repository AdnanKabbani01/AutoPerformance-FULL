<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
    exit;
}

include('../connection.php');
include('../functions.php');

if(isset($_GET['action']) && $_GET['action'] == 'remove' && isset($_GET['cart_id'])) {
    $cart_id = $_GET['cart_id'];
    
    $query = "DELETE FROM user_cart WHERE cart_id = $cart_id AND user_id = " . $_SESSION['user_id'];
    $result = mysqli_query($conn, $query);
    
    if($result) {
      
        header('Location: checkout.php');
        exit;
    } else {
        echo "Error: Unable to remove item from cart.";
    }
}

$query = "SELECT * FROM user_cart WHERE user_id = " . $_SESSION['user_id'];
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['cart'] = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['cart'][] = $row;
    }
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="../assets/img/car.ico" type="image/x-icon">

		<title>Checkout</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		
 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

    </head>
	<body>
		<body>
			<header>
				<div id="header">
					<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
						<div class="container">
							<a class="navbar-brand" href="#"><span class="text-primary">Auto</span>PERFORMANCE</a>
									</a>
								</div>

									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="../dashboard/index.php">Home</a></li>
							<li><a href="../dashboard/index.php#shop-by-parts">Parts</a></li>
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Billing address</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="First Name">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Last Name">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Country">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telephone">
							</div>
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="create-account">
									<label for="create-account">
										<span></span>
										Create Account?
									</label>
									<div class="caption">
										<p>Email</p>
										<input class="input" type="email" name="email" placeholder="Enter Your Email">

										<p>Password</p>
										<input class="input" type="password" name="password" placeholder="Enter Your Password">
									</div>
								</div>
							</div>
						</div>
						<!-- /Billing Details -->

						<!-- Shiping Details -->
						<div class="shiping-details">
							<div class="section-title">
								<h3 class="title">Shiping address</h3>
							</div>
							<div class="input-checkbox">
								<input type="checkbox" id="shiping-address">
								<label for="shiping-address">
									<span></span>
									Ship to a diffrent address?
								</label>
								<div class="caption">
									<div class="form-group">
										<input class="input" type="text" name="first-name" placeholder="First Name">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="last-name" placeholder="Last Name">
									</div>
									<div class="form-group">
										<input class="input" type="email" name="email" placeholder="Email">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="address" placeholder="Address">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="city" placeholder="City">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="country" placeholder="Country">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
									</div>
									<div class="form-group">
										<input class="input" type="tel" name="tel" placeholder="Telephone">
									</div>
								</div>
							</div>
						</div>
						<!-- /Shiping Details -->

						<!-- Order notes -->
						<div class="order-notes">
							<textarea class="input" placeholder="Order Notes"></textarea>
						</div>
						<!-- /Order notes -->
					</div>

					<div class="col-md-5 order-details">
    <div class="section-title text-center">
        <h3 class="title">Your Order</h3>
    </div>
    <div class="order-summary">
        <div class="order-col">
            <div><strong>PRODUCT</strong></div>
            <div><strong>TOTAL</strong></div>
        </div>
        <div class="order-products">
            <?php
            $totalPrice = 0;
            if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $product) {
                    $productName = $product['product_name'];
                    $productPrice = $product['product_price'];
                    $totalPrice += $productPrice;
            ?>
                <div class="order-col">
                    <div><?php echo $productName; ?></div>
                    <div>$<?php echo number_format($productPrice, 2); ?></div>
                    <div><a href="checkout.php?action=remove&cart_id=<?php echo $product['cart_id']; ?>">Remove</a></div>
                </div>
            <?php
                }
            } else {
            ?>
                <div class="order-col">
                    <div>Your Cart is Empty</div>
                    <div><a href="../dashboard/products.php">Check out our products</a></div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="order-col">
            <div>Shipping</div>
            <div><strong>FREE</strong></div>
        </div>
        <div class="order-col">
            <div><strong>TOTAL</strong></div>
            <div><strong class="order-total">$<?php echo number_format($totalPrice, 2); ?></strong></div>
        </div>
    </div>
    <!-- Payment methods and terms checkbox -->
</div>
<!-- /Order Details -->
				
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

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
									<li><i class="fa fa-map-marker"></i>Lebanese American University</a></li>
									<li><i class="fa fa-phone"></i>+961-81658585</li>
									<li> </li>
									<li><a href="mailto:adnan.kabbani01@lau.edu"><i class="fa fa-envelope-o"></i>adnan.kabbani01@lau.edu</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="../dashboard\products\cool.html">Cooling</a></li>
									<li><a href="../dashboard\products\suss.html">Suspension</a></li>
									<li><a href="../dashboard\products\brake.html">Brakes</a></li>
									<li><a href="../dashboard\products\style.html">Styling</a></li>
									<li><a href="../dashboard\products\tune.html">Gauges</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Navigate</h3>
								<ul class="footer-links">
									<li><a href="../dashboard/index.html">Home</a></li>
									
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

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>

<?php
} else {
    echo '
    <div class="order-col">
        <div>Your Cart is Empty</div>
        <div><a href="../dashboard/index.php #shop-by-parts">Check out our products</a></div>
    </div>';
}

// Close the database connection
mysqli_close($conn);
?>