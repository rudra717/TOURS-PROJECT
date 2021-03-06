<?php

session_start();

if(!isset($_SESSION['email']))
{
header("location: home.html");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<style type="text/css">
		body{
			background: url("images/photo1.jpg");
			background-repeat: no-repeat;
			background-size: cover;  
		}
		.m1{
			text-align: center;
		}
		#m2{
			margin-top: 70px;
		}
		.m3{
			margin: 0 0 0 10px;
		}
		.m4{
			font-size: 15px;
			margin: 0;
		}
		h1{
			color: white;
		}
		p{
			font-size: 20px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
				<a href="" class="navbar-brand"><span class="glyphicon glyphicon-road"></span> RDN TOUR</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-nav-demo">
				<ul class="nav navbar-nav">
					<li  class="active"><a href="user_dash.php">User's Dashboard</a></li>
					<li><a href="user_reg.php">Registration</a></li>
					<li><a href="user_reg_tour.php">Registered Tour</a></li>
					<li><a href="user_update.php">Update</a></li>
					<li><a href="user_cancel.php">Cancellation</a></li>
					<li><a href="user_feedback.php">Feedback</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="ulogout.php"><img src="icons\icons8-shutdown-26.png"> Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container" id="m2">
		<h1 class="m1">Tours Available At <strong>RDN TOURS</strong></h1>

		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="thumbnail">
					<img src="images/goa.jpg">
					<h3 class="m1"><strong><u>GOA</u></strong></h3>
					<p>Travelling: Vadodara --- Goa</p>
					<p>Date: </p>
					<p>Hotel: Ginger Hotel</p>
					<p>Stay: 4 Days/3 Night</p>
					<a href="user_reg.html" class="btn btn-success">Price: &#x20B9; 11,999<p class="m4">Register</p></a>
					<hr>
					<p>Inclusions</p>
					<ul class="list-group list-inline m3">
						<li class="list-group-item"><img src="icons/icons8-bus-26.png">Travel(Bus)</li>
						<li class="list-group-item"><img src="icons/icons8-hotel-bed-26.png">Hotel Stay</li>
						<li class="list-group-item"><img src="icons/icons8-restaurant-26.png">Meals</li>
						<li class="list-group-item"><img src="icons/icons8-opera-glasses-26.png">Sightseeing</li>
						<li class="list-group-item"><img src="icons/icons8-night-26.png">3-Nights</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="thumbnail">
					<img src="images/ladakh.jpg">
					<h3 class="m1"><strong><u>LADAKH</u></strong></h3>
					<p>Travelling: Vadodara --- Leh --- Nubra --- Pangong</p>
					<p>Date: </p>
					<p>Hotel: Hotel Lumbini, Hotel Imperial, Pangong Sarai</p>
					<p>Stay: 7 Days/6 Night</p>
					<a href="user_reg.html" class="btn btn-success">Price: &#x20B9; 46,999<p class="m4">Register</p></a>
					<hr>
					<p>Inclusions</p>	
					<ul class="list-group list-inline m3">
						<li class="list-group-item"><img src="icons/icons8-train-26.png">Travel(Train)</li>
						<li class="list-group-item"><img src="icons/icons8-hotel-bed-26.png">Hotel Stay</li>
						<li class="list-group-item"><img src="icons/icons8-restaurant-26.png">Meals</li>
						<li class="list-group-item"><img src="icons/icons8-opera-glasses-26.png">Sightseeing</li>
						<li class="list-group-item"><img src="icons/icons8-night-26.png">6-Nights</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="thumbnail">
					<img src="images/jaisalmer.jpg">
					<h3 class="m1"><strong><u>RAJASTHAN</u></strong></h3>
					<p>Travelling: Vadodara --- Jaipur --- Jodhpur --- Jaisalmer</p>
					<p>Date: </p>
					<p>Hotel: Kapish Smart, Chandra Inn, Rojani Resort</p>
					<p>Stay: 9 Days/8 Night</p>
					<a href="user_reg.html" class="btn btn-success">Price: &#x20B9; 24,999<p class="m4">Register</p></a>
					<hr>
					<p>Inclusions</p>	
					<ul class="list-group list-inline m3">
						<li class="list-group-item"><img src="icons/icons8-bus-26.png">Travel(Bus)</li>
						<li class="list-group-item"><img src="icons/icons8-hotel-bed-26.png">Hotel Stay</li>
						<li class="list-group-item"><img src="icons/icons8-restaurant-26.png">Meals</li>
						<li class="list-group-item"><img src="icons/icons8-opera-glasses-26.png">Sightseeing</li>
						<li class="list-group-item"><img src="icons/icons8-night-26.png">8-Nights</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="thumbnail">
					<img src="images/darjeeling.jpg">
					<h3 class="m1"><strong><u>DARJEELING</u></strong></h3>
					<p>Travelling: Vadodara --- Darjeeling --- Kalimpong --- Gangtok</p>
					<p>Date: </p>
					<p>Hotel: Heritage Resort, Sinclairs Hotel, Hotel Golden Crest</p>
					<p>Stay: 7 Days/6 Night</p>
					<a href="user_reg.html" class="btn btn-success">Price: &#x20B9; 27,999<p class="m4">Register</p></a>
					<hr>
					<p>Inclusions</p>	
					<ul class="list-group list-inline m3">
						<li class="list-group-item"><img src="icons/icons8-train-26.png">Travel(Train)</li>
						<li class="list-group-item"><img src="icons/icons8-hotel-bed-26.png">Hotel Stay</li>
						<li class="list-group-item"><img src="icons/icons8-restaurant-26.png">Meals</li>
						<li class="list-group-item"><img src="icons/icons8-opera-glasses-26.png">Sightseeing</li>
						<li class="list-group-item"><img src="icons/icons8-night-26.png">6-Nights</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="thumbnail">
					<img src="images/dubai.jpg">
					<h3 class="m1"><strong><u>DUBAI</u></strong></h3>
					<p>Travelling: Vadodara --- Dubai</p>
					<p>Date: </p>
					<p>Hotel: Fortune Pearl</p>
					<p>Stay: 5 Days/4 Night</p>
					<a href="user_reg.html" class="btn btn-success">Price: &#x20B9; 43,990<p class="m4">Register</p></a>
					<hr>
					<p>Inclusions</p>	
					<ul class="list-group list-inline m3">
						<li class="list-group-item"><img src="icons/icons8-airport-26.png">Travel(Airplane)</li>
						<li class="list-group-item"><img src="icons/icons8-hotel-bed-26.png">Hotel Stay</li>
						<li class="list-group-item"><img src="icons/icons8-restaurant-26.png">Meals</li>
						<li class="list-group-item"><img src="icons/icons8-opera-glasses-26.png">Sightseeing</li>
						<li class="list-group-item"><img src="icons/icons8-night-26.png">4-Nights</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="thumbnail">
					<img src="images/bali.jpg">
					<h3 class="m1"><strong><u>BALI</u></strong></h3>
					<p>Travelling: Vadodara --- Bali --- Kuta --- Seminyak</p>
					<p>Date: </p>
					<p>Hotel: Kuta Central Hotel, Marbella Pool Suites Seminyak</p>
					<p>Stay: 6 Days/5 Night</p>
					<a href="user_reg.html" class="btn btn-success">Price: &#x20B9; 41,999<p class="m4">Register</p></a>
					<hr>
					<p>Inclusions</p>	
					<ul class="list-group list-inline m3">
						<li class="list-group-item"><img src="icons/icons8-airport-26.png">Travel(Airplane)</li>
						<li class="list-group-item"><img src="icons/icons8-hotel-bed-26.png">Hotel Stay</li>
						<li class="list-group-item"><img src="icons/icons8-restaurant-26.png">Meals</li>
						<li class="list-group-item"><img src="icons/icons8-opera-glasses-26.png">Sightseeing</li>
						<li class="list-group-item"><img src="icons/icons8-night-26.png">5-Nights</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="thumbnail">
					<img src="images/andaman.jpg">
					<h3 class="m1"><strong><u>ANDAMAN</u></strong></h3>
					<p>Travelling: Vadodara --- Portblair --- Havelock</p>
					<p>Date: </p>
					<p>Hotel: Hotel Haywizz, The Kingdom</p>
					<p>Stay: 6 Days/5 Night</p>
					<a href="user_reg.html" class="btn btn-success">Price: &#x20B9; 34,800<p class="m4">Register</p></a>
					<hr>
					<p>Inclusions</p>	
					<ul class="list-group list-inline m3">
						<li class="list-group-item"><img src="icons/icons8-airport-26.png">Travel(Airplane)</li>
						<li class="list-group-item"><img src="icons/icons8-hotel-bed-26.png">Hotel Stay</li>
						<li class="list-group-item"><img src="icons/icons8-restaurant-26.png">Meals</li>
						<li class="list-group-item"><img src="icons/icons8-opera-glasses-26.png">Sightseeing</li>
						<li class="list-group-item"><img src="icons/icons8-night-26.png">5-Nights</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="thumbnail">
					<img src="images/hong-kong.jpg">
					<h3 class="m1"><strong><u>HONG-KONG</u></strong></h3>
					<p>Travelling: Vadodara --- Macau --- Hong Kong</p>
					<p>Date: </p>
					<p>Hotel: Hotel Inn Macao, Regal Oriental</p>
					<p>Stay: 6 Days/5 Night</p>
					<a href="user_reg.html" class="btn btn-success">Price: &#x20B9; 85,990<p class="m4">Register</p></a>
					<hr>
					<p>Inclusions</p>	
					<ul class="list-group list-inline m3">
						<li class="list-group-item"><img src="icons/icons8-airport-26.png">Travel(Airplane)</li>
						<li class="list-group-item"><img src="icons/icons8-hotel-bed-26.png">Hotel Stay</li>
						<li class="list-group-item"><img src="icons/icons8-restaurant-26.png">Meals</li>
						<li class="list-group-item"><img src="icons/icons8-opera-glasses-26.png">Sightseeing</li>
						<li class="list-group-item"><img src="icons/icons8-night-26.png">5-Nights</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<script src="js\jquery-2.1.4.js"></script>
<script src="js\bootstrap.min.js"></script>
</body>
</html>