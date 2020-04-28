<?php

session_start();

if(!isset($_SESSION['eadd']))
{
header("location: home.html");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin User Report</title>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body{
			background: url("images/photo1.jpg");
			background-repeat: no-repeat;
			background-size: cover;  
		}
		* {
		    box-sizing: border-box;
		}

		body {
		    font-family: Arial;
		    margin: 0 auto; /* Center website */
		    max-width: 800px; /* Max width */
		    padding: 20px;
		    /*color: white;*/
		}

		.heading {
		    font-size: 25px;
		    margin-right: 25px;
		    margin-top: 70px;
		}

		.fa {
		    font-size: 25px;
		}

		.checked {
		    color: orange;
		}

		/* Three column layout */
		.side {
		    float: left;
		    width: 15%;
		    margin-top: 10px;
		}

		.middle {
		    float: left;
		    width: 70%;
		    margin-top: 10px;
		}

		/* Place text to the right */
		.right {
		    text-align: right;
		}

		/* Clear floats after the columns */
		.row:after {
		    content: "";
		    display: table;
		    clear: both;
		}

		/* The bar container */
		.bar-container {
		    width: 100%;
		    background-color: #f1f1f1;
		    text-align: center;
		    color: white;
		}

		/* Individual bars */
		.bar-5 {width: 59%; height: 18px; background-color: #4CAF50;}
		.bar-4 {width: 25%; height: 18px; background-color: #2196F3;}
		.bar-3 {width: 6%; height: 18px; background-color: #00bcd4;}
		.bar-2 {width: 2%; height: 18px; background-color: #ff9800;}
		.bar-1 {width: 8%; height: 18px; background-color: #f44336;}

		/* Responsive layout - make the columns stack on top of each other instead of next to each other */
		@media (max-width: 400px) {
		    .side, .middle {
		        width: 100%;
		    }
		    /* Hide the right column on small screens */
		    .right {
		        display: none;
		    }
		}
		#m1{
			margin-top: 70px; 
		}
		#m2{
			color: white;
		}
		.row{
			margin-left: 0px;
			margin-right: 0px;
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
					<li><a href="adminpage.php">Admin's Dashboard</a></li>
					<li><a href="admin_add_tour.php">Add Tour</a></li>
					<li><a href="admin_update.php">Update Tour</a></li>
					<li><a href="admin_delete.php">Delete Tour</a></li>
					<!-- <li><a href="#">User's View Details</a></li> -->
					<li class="active"><a href="admin_user_report.php">User's Report</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="alogout.php"><img src="icons\icons8-shutdown-26.png"> Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="m2">
	<p id="m1"></p>
	<span class="heading">User Rating</span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star"></span>
	<p>4.2 average based on 254 reviews.</p>
	<hr style="border:3px solid #f1f1f1">

	<div class="row">
	  <div class="side">
	    <div>5 star</div>
	  </div>
	  <div class="middle">
	    <div class="bar-container">
	      <div class="bar-5"></div>
	    </div>
	  </div>
	  <div class="side right">
	    <div>150</div>
	  </div>
	  <div class="side">
	    <div>4 star</div>
	  </div>
	  <div class="middle">
	    <div class="bar-container">
	      <div class="bar-4"></div>
	    </div>
	  </div>
	  <div class="side right">
	    <div>63</div>
	  </div>
	  <div class="side">
	    <div>3 star</div>
	  </div>
	  <div class="middle">
	    <div class="bar-container">
	      <div class="bar-3"></div>
	    </div>
	  </div>
	  <div class="side right">
	    <div>15</div>
	  </div>
	  <div class="side">
	    <div>2 star</div>
	  </div>
	  <div class="middle">
	    <div class="bar-container">
	      <div class="bar-2"></div>
	    </div>
	  </div>
	  <div class="side right">
	    <div>6</div>
	  </div>
	  <div class="side">
	    <div>1 star</div>
	  </div>
	  <div class="middle">
	    <div class="bar-container">
	      <div class="bar-1"></div>
	    </div>
	  </div>
	  <div class="side right">
	    <div>20</div>
	  </div>
	</div>
	</div>
<script src="js\jquery-2.1.4.js"></script>
<script src="js\bootstrap.min.js"></script>
</body>
</html>