<?php

session_start();
$mail = $_SESSION['email'];
if(!isset($_SESSION['email']))
{
header("location: home.html");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration Page</title>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<style type="text/css">
		body{
			background: url("images/photo1.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
		h1{
			margin-top: 70px;
			color: white;
			text-align: center;
		}
		label{
			color: white;
		}
		output{
			color: white;
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
					<li><a href="user_dash.php">User's Dashboard</a></li>
					<li class="active"><a href="user_reg.php">Registration</a></li>
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
	<div class="container">
		<h1>Registration for Tour</h1>
		<form action="user_reg_php.php" method="POST">
			<div class="form-group">
			    <label for="InputTour">Select Tour:</label>
			    <select id="InputTour" class="form-control" name="tour">
			    	<option>TOUR</option>
			    	<option value="GOA">GOA</option>
			    	<option value="LADAKH">LADAKH</option>
			    	<option value="RAJASTHAN">RAJASTHAN</option>
			    	<option value="DARJEELING">DARJEELING</option>
			    	<option value="DUBAI">DUBAI</option>
			    	<option value="BALI">BALI</option>
			    	<option value="ANDAMAN">ANDAMAN</option>
			    	<option value="HONG KONG">HONG KONG</option>
			    </select>
		  	</div>
			<div class="form-group">
			    <label for="exampleInputfirst">First Name</label>
			    <input type="text" class="form-control" name="fname" id="exampleInputfirst" placeholder="First Name" required>
		 	</div>
		 	<div class="form-group">
			    <label for="exampleInputlast">Last Name</label>
			    <input type="text" class="form-control" id="exampleInputlast" name="lname" placeholder="Last Name" required>
		 	</div>
		  	<div class="form-group">
			    <label for="InputPersons">Number of Persons</label>
			    <select id="InputPersons" class="form-control" name="person">
			    	<option>No. of Persons</option>
			    	<option value="1">1</option>       
				    <option value="2">2</option>       
				    <option value="3">3</option>       
				    <option value="4">4</option>       
				    <option value="5">5</option>       
				    <option value="6">6</option>       
				    <option value="7">7</option>       
				    <option value="8">8</option>       
				    <option value="9">9</option>      
				    <option value="10">10</option>
			    </select>
		  	</div>
		  	<script type="text/javascript" src="js\price_cal.js"></script>
		  	<div class="form-group">
		  		<button id="but">Calculate Price</button>
		  		<output>&#x20B9; <span id="t1"></span> x <span id="t2"></span> = &#x20B9; <span id="t3"></span></output>
		  	</div>
		  	<div class="form-group">
			    <label for="exampleInputTerms">I agree to the Terms and Condition: </label>
			    <input type="checkbox" id="exampleInputTerms" required>
		  	</div>
		  <button type="submit" class="btn btn-success btn-lg">Register</button>
		</form>
	</div>
<script src="js\jquery-2.1.4.js"></script>
<script src="js\bootstrap.min.js"></script>
<script type="text/javascript" src="js\price_cal.js"></script>
</body>
</html>