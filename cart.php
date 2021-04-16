<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Katti Mitho</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/style.css">
</head>

<body>
	<div class="navbar navbar-default " id="navbar">
		<!-- navbar starts-->
		<div class="container " id="logo">

			<div class="navbar-header">
				<a class="navbar-brand home" href="index.php">
					<img src="images/logo.jpg" alt="Katti Mitho" class="hidden-xs">
					<img src="images/logo-sm.jpg" alt="Katti Mitho" class="visible-xs">
				</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-align-justify"></i>
				</button>
				<button type="button" class="navbar-toggle" data-toggle="navbar-toggle" data-target="#search">
					<span class="sr-only"></span>
					<i class="fa fa-search"></i>

				</button>
			</div>


		</div>
		<div class="navbar-collapse" id="navigation">
			<!-- navbar-collapse collapse start -->
			<div class="padding-nav">
				<!-- padding nav start -->
				<ul class="nav navbar-nav navbar-left">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="food.php">Food</a>
					</li>
					<li>
						<a href="customer/my_account.php">My Account</a>
					</li>
					<li class="active">
						<a href="cart.php">Shopping Cart</a>
					</li>

					<li>
						<a href="contact.php">Contact Us</a>
					</li>
					<li class="dropdown">
						<a href="login.php">Login/Reg.</a>
						<div class="dropdown-content">
							<a href="login.php">Login</a><br><br>
							<a href="customer_registration.php">Register</a>
						</div>
					</li>
				</ul>

			</div>
		</div>
		<!-- padding nav stop -->
		<div class="cart-search">
			<a href="cart.php" class="btn btn-primary navbar-btn right"> <i class="fa fa-shopping-cart"></i> <span>4</span>
			</a>

			<div class="navbar-collapse collapse right">
				<button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
					<span class="sr-only">Toggle Search</span> <i class="fa fa-search"></i>
				</button>
			</div>
			<div class="collapse clearfix" id="search">
				<form class="navbar-form" method="get" action="result.php">
					<div class="input-group">
						<input type="text" name="user_query" placeholder="Search" class="form-control" required=""> <span class="input-group-btn">
							<button type="submit" value="Search" name="search" class="btn btn-primary">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</form>

			</div>
		</div>
	</div>
	<!-- navbar navbar default ends -->

	<div id="content">
		<div class="container">
			<!--Container Starts-->
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="home.php">Home</a></li>
					<li>Cart</li>
				</ul>
			</div>
			<div class="col-md-9" id="cart">
				<form action="cart.php" method="post" enctype="multipart-form-data">
					<h1>Shopping Cart</h1>
					<p class="text-muted">Currently you have 3 item(s) in your cart.
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Product</th>
									<th>Quantity</th>
									<th>Unit Price</th>
									<th>Size</th>
									<th colspan="1">Delete</th>
									<th colspan="1">Sub Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><img src="admin_area/product_images/product.jpg"></td>
									<td>Burger Special</td>
									<td>2</td>
									<td>Nrs 199</td>
									<td>Large</td>
									<td><input type="checkbox" name="remove[]"></td>
								</tr>
								<tr>
									<td><img src="admin_area/product_images/product.jpg"></td>
									<td>Burger Special</td>
									<td>2</td>
									<td>Nrs 199</td>
									<td>Large</td>
									<td><input type="checkbox" name="remove[]"></td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th colspan="5">Total</th>
									<th colspan="2">Nrs 199</th>
							</tfoot>
						</table>
					</div>
					<div class="box-footer">
						<div class="pull-left">
							<a href="index.php" class="btn btn-default">
								<i class="fa fa-chevron-left"></i>Continue Shopping
							</a>
						</div>
						<div class="pull-right">
							<button class="btn btn-default" type="submit" name="update" value="Update Cart">
								<i class="fa fa-refresh">Update Cart</i>
							</button>
							<a href="checkout.php" class="btn btn-primary">
								Proceed to checkout<i class="fa fa-chevron-right"></i>
							</a>
						</div>
					</div>
					<div id="row same-height-row">
						<div class="col-md-3 col-sm-6">
							<div class="box same-height headline">
								<h3 class="text-center">You also may like these items</h3>

							</div>

						</div>
						<div class="center-responsive col-md-3">
							<div class="product same-height">
								<a href="">
									<div class="text">
										<h3> <a href="details.php">Burger Special</a></h3>
										<p class="price">Nrs 200</p>
									</div>
								</a>
							</div>
						</div>
						<div class="center-responsive col-md-3">
							<div class="product same-height">
								<a href="">
									<div class="text">
										<h3> <a href="details.php">Burger Special</a></h3>
										<p class="price">Nrs 200</p>
									</div>
								</a>
							</div>
						</div>
						<div class="center-responsive col-md-3">
							<div class="product same-height">
								<a href="">
									<div class="text">
										<h3> <a href="details.php">Burger Special</a></h3>
										<p class="price">Nrs 200</p>
									</div>
								</a>
							</div>
						</div>

					</div>
				</form>
			</div>
			<div class="col-md-3">
				<div class="box" id="order-summary">
					<div class="box-header">
						<h3>Order Summary</h3>
					</div>
					<p class="text-muted">
						Shipping and additional costs are calculated based on the values you have entered</p>
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>Order Subtotal</td>
									<th>Nrs 299</th>
								</tr>
								<tr>
									<td>Shipping and handling</td>
									<td>Nrs 0</td>

								</tr>
								<tr class="total">
									<td>Total</td>
									<th>Nrs 299</th>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
			</div>

		</div>
	</div>

	<!-- 	Footer start -->
	<?php
	include("includes/footer.php") ?>
	<!-- Footer End -->
</body>

</html>