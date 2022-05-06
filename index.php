<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Home - Brand Store</title> 
	<!-- add icon link -->
	<link rel="icon" href="images/47.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<nav class="navbar navbar-default">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">DNK</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Store</a></li>
					<li><a href="#">Men</a></li>
					<li><a href="#">Women</a></li>
					<li><a href="account.php">Account</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="contact.html">Contact Us</a></li>
					<li><a href="cart.html"><img src="images/10.png" height="30px"></a></li>

				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>


	<div class="parallax">
		<div class="container">

			<div class="header">
				<p>Raining Offers For Hot Summer!</p>
			</div>
			<?php
			if (isset($_SESSION['username'])) {
				
				$mess = "hey! ".$_SESSION['username'];
			}
			else{
				$mess = "plese log in..";
			}
			?>
				<div class="title">
					<p>hey!
					<?php
					echo $mess;
					?> </p>
				</div>
			<div class="title">
				<p>25% Off On All Products</p>
			</div>
			<div class="buttons">
				<button class="btn">Shop Now</button>
				<button class="btn">Find More</button>
			</div>
		</div>
	</div>


	<div class="head-space"></div>

	<div class="container">

		<div class="col-md-4">
			<div class="box-1">
				<div class="header-1">
					<p>20% Off On Tank Tops</p>
				</div>
				<div class="title-1">
					<p>Lorem ipsum dolor sit amet consec tetur.</p>
				</div>
				<div class="button">
					<button class="btn1">Shop Now</button>
				</div>
			</div>
		</div>


		<div class="col-md-4">
			<div class="box-2">
				<div class="header-1">
					<p>Latest Eyewear For You</p>
				</div>
				<div class="title-1">
					<p>Lorem ipsum dolor sit amet consec tetur.</p>
				</div>
				<div class="button">
					<button class="btn1">Shop Now</button>
				</div>
			</div>
		</div>


		<div class="col-md-4">
			<div class="box-3">
				<div class="header-1">
					<p>Let's Lorem Suit Up!</p>
				</div>
				<div class="title-1">
					<p>Lorem ipsum dolor sit amet consec tetur.</p>
				</div>
				<div class="button">
					<button class="btn1">Shop Now</button>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="head-space"></div>

		<div class="header-2">
			<p>Featured Products</p>
		</div>
		<div class="title-2">
			<p>____________</p>
		</div>
	</div>

	<div class="container">
		<div class="space"></div>

		<div class="col-md-3">
			<div class="Image">
				<img src="images/11.jpg" width="200px">
			</div>
			<div class="header-3">
				<p>DNK Yellow Shoes</p>
			</div>
			<div class="title-3">
				<p>Men</p>
			</div>
			<div class="price">
				<p>$120.00</p>
			</div>
			<div class="rating">
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
			</div>
		</div>

		<div class="col-md-3">
			<div class="Image">
				<img src="images/12.jpg" width="200px">
			</div>
			<div class="header-3">
				<p>DNK Blue Shoes</p>
			</div>
			<div class="title-3">
				<p>Men</p>
			</div>
			<div class="price">
				<p>$120.00</p>
			</div>
			<div class="rating">
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
			</div>
		</div>

		<div class="col-md-3">
			<div class="Image">
				<img src="images/13.jpg" width="200px">
			</div>
			<div class="header-3">
				<p>Dark Brown Jeans</p>
			</div>
			<div class="title-3">
				<p>Men</p>
			</div>
			<div class="price">
				<p>$150.00</p>
			</div>
			<div class="rating">
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
			</div>
		</div>

		<div class="col-md-3">
			<div class="Image">
				<img src="images/14.jpg" width="200px">
			</div>
			<div class="header-3">
				<p>Blue Denim Jeans</p>
			</div>
			<div class="title-3">
				<p>Women</p>
			</div>
			<div class="price">
				<p>$150.00</p>
			</div>
			<div class="rating">
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
			</div>
		</div>
	</div>

	<div class="space"></div>

	<div class="container">
		<div class="col-md-3">
			<div class="Image">
				<img src="images/15.jpg" width="200px">
			</div>
			<div class="header-3">
				<p>Basic Grey Jeans</p>
			</div>
			<div class="title-3">
				<p>Women</p>
			</div>
			<div class="price">
				<p>$150.00</p>
			</div>
			<div class="rating">
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
			</div>
		</div>

		<div class="col-md-3">
			<div class="Image">
				<img src="images/16.jpg" width="200px">
			</div>
			<div class="header-3">
				<p>Blue Denim Shorts</p>
			</div>
			<div class="title-3">
				<p>Women</p>
			</div>
			<div class="price">
				<p>$130.00</p>
			</div>
			<div class="rating">
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
			</div>
		</div>

		<div class="col-md-3">
			<div class="Image">
				<img src="images/17.jpg" width="200px">
			</div>
			<div class="header-3">
				<p>Anchor Bracelet</p>
			</div>
			<div class="title-3">
				<p>Women</p>
			</div>
			<div class="price">
				<p>$150.00</p>
			</div>
			<div class="rating">
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
			</div>
		</div>

		<div class="col-md-3">
			<div class="Image">
				<img src="images/18.jpg" width="200px">
			</div>
			<div class="header-3">
				<p>Boho Bangle Bracelet</p>
			</div>
			<div class="title-3">
				<p>Women</p>
			</div>
			<div class="price">
				<p>$150.00</p>
			</div>
			<div class="rating">
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
			</div>
		</div>
	</div>

	<div class="head-space"></div>

	<div class="parallax1">
		<div class="container">
			<div class="title-4">
				<p>Limited Time Offer</p>
			</div>
			<div class="header-4">
				<p>Special Edition</p>
			</div>
			<div class="paragraph">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec pulvinar dapibus leo.</p>
			</div>
			<div class="discount">
				<p>Buy This T-shirt At 20% Discount, Use Code Off20</p>
			</div>
			<div class="button-1">
				<button class="btn">Buy Now</button>
			</div>
		</div>
	</div>

	<div class="head-space"></div>

	<div class="container">
		<div class="col-md-3">
			<div class="icon">
				<img src="images/21.png" height="50px;">
			</div>
			<div class="header-5">
				<p>Worldwide Shipping</p>
			</div>
			<div class="title-5">
				<p>It elit tellus, luctus nec ullamcorper</p>
				<p>mattis, pulvinar dapibus leo.</p>
			</div>
		</div>

		<div class="col-md-3">
			<div class="icon">
				<img src="images/22.png" height="50px;">
			</div>
			<div class="header-5">
				<p>Best Quality</p>
			</div>
			<div class="title-5">
				<p>It elit tellus, luctus nec ullamcorper</p>
				<p>mattis, pulvinar dapibus leo.</p>
			</div>
		</div>

		<div class="col-md-3">
			<div class="icon">
				<img src="images/23.png" height="50px;">
			</div>
			<div class="header-5">
				<p>Best Offers</p>
			</div>
			<div class="title-5">
				<p>It elit tellus, luctus nec ullamcorper</p>
				<p>mattis, pulvinar dapibus leo.</p>
			</div>
		</div>

		<div class="col-md-3">
			<div class="icon">
				<img src="images/24.png" height="50px;">
			</div>
			<div class="header-5">
				<p>Secure Payments</p>
			</div>
			<div class="title-5">
				<p>It elit tellus, luctus nec ullamcorper</p>
				<p>mattis, pulvinar dapibus leo.</p>
			</div>
		</div>
	</div>


	<div class="foot-space"></div>

	<div class="footer">
		<div class="container">
			<div class="col-md-3">
				<div class="header-6">
					<p>Quick Links</p>
				</div>

				<ul>
					<li>Home</li>
					<li>About Us</li>
					<li>My Account</li>
					<li>Cart</li>
					<li>Contact</li>
				</ul>
			</div>

			<div class="col-md-3">
				<div class="header-6">
					<p>For Her</p>
				</div>
				<ul>
					<li>Women Jeans</li>
					<li>Tops And Shirts</li>
					<li>Women Jackets</li>
					<li>Heels And Flats</li>
					<li>Women Accessories</li>
				</ul>
			</div>

			<div class="col-md-3">
				<div class="header-6">
					<p>For Him</p>
				</div>
				<ul>
					<li>Men Jeans</li>
					<li>Men Shirts</li>
					<li>Men Jackets</li>
					<li>Men Shoes</li>
					<li>Men Accessories</li>
				</ul>
			</div>

			<div class="col-md-3">
				<div class="header-6">
					<p>Download Our Application</p>
				</div>
				<ul>
					<li><button class="btn2"><img src="images/26.png" height="25px"> App Store</button></li>
					<li><button class="btn2"><img src="images/27.png" height="25px"> Google Play</button></li>
				</ul>
			</div>
		</div>
	</div>






	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>

</html>