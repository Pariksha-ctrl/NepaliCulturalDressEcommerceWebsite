<?php

require "configuration/constants.php";

// STARTING SESSION HERE
session_start();

if(!isset($_SESSION["uid"])){
	header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Nepali Cultural Dress</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
	<style>
	@media screen and (max-width:480px){
		#search{width:80%;}
		#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
	}
</style>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only"> navigation toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Nepali Cultural Dress</a>
			</div>
			<div class="collapse navbar-collapse" id="collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>HOME</a></li>
					<li><a href="about.php">ABOUT US</a></li>
					<li><a href="contact.php">CONTACT US</a></li>
					<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>PRODUCT</a></li>
					<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
					<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
						<div class="dropdown-menu" style="width:400px;">
							<div class="panel panel-success">
								<div class="panel-heading">
									<div class="row">
										<div class="col-md-3">Sl.NO</div>
										<div class="col-md-3">IMAGE</div>
										<div class="col-md-3">NAME</div>
										<div class="col-md-3">PRICE in <?php echo CURRENCY; ?></div>
									</div>
								</div>
								<div class="panel-body">
									<div id="cart_product">
										<!-- DISPLAYING THE PRODUCTS OF CART HERE -->
									</div>
								</div>
								<div class="panel-footer"></div>
							</div>
						</div>
					</li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["name"]; ?></a>
						<ul class="dropdown-menu">
							<li><a href="cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
								<li class="divider"></li>
								<li><a href="customer_order.php" style="text-decoration:none; color:blue;">Order Detail</a></li>
								<li class="divider"></li>
								<!-- <li><a href="" style="text-decoration:none; color:blue;">Change Password</a></li>
								<li class="divider"></li> -->
								<li><a href="customer_logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
							</ul>
						</li>

					</ul>
				</div>
			</div>
		</div>
		<p><br/></p>
		<p><br/></p>
		<p><br/></p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-2">
					<div id="get_category">
						<!-- HERE WE GET CATEGORY JQUERY AJAX REQUEST -->
					</div>
				</div>
				<div class="col-md-8">	
					<div class="row">
						<div class="col-md-12 col-xs-12" id="product_msg">
						</div>
					</div>
					<div class="panel panel-info" id="scroll">
						<div class="panel-heading">Products</div>
						<div class="panel-body">
							<div id="get_product">
								<!-- HERE WE GET PRODUCT JQUERY AJAX REQUEST -->
							</div>
						</div>
						<div class="panel-footer">&copy; 2016</div>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<center>
						<ul class="pagination" id="pageno">
							<li><a href="#">1</a></li>
						</ul>
					</center>
				</div>
			</div>
		</div>
	</body>
	</html>
















































