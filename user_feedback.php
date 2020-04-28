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
	<title>User Feedback</title>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
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
		p{
			color: white;
			font-size: 15px;
		}
		label{
			color: white;
		}
		div.stars {
		  width: 270px;
		  display: inline-block;
		}
		input.star { display: none; }
		label.star {
		  float: right;
		  padding: 10px;
		  font-size: 36px;
		  color: #444;
		  transition: all .2s;
		}
		input.star:checked ~ label.star:before {
		  content: '\f005';
		  color: #FD4;
		  transition: all .25s;
		}
		input.star-5:checked ~ label.star:before {
		  color: #FE7;
		  text-shadow: 0 0 20px #952;
		}
		input.star-1:checked ~ label.star:before { color: #F62; }
		label.star:hover { transform: rotate(-15deg) scale(1.3); }
		label.star:before {
		  content: '\f006';
		  font-family: FontAwesome;
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
					<li><a href="user_reg.php">Registration</a></li>
					<li><a href="user_reg_tour.php">Registered Tour</a></li>
					<li><a href="user_update.php">Update</a></li>
					<li><a href="user_cancel.php">Cancellation</a></li>
					<li class="active"><a href="user_feedback.php">Feedback</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="ulogout.php"><img src="icons\icons8-shutdown-26.png"> Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<h1>User Feedback</h1>
		<form action="ufeedback.php" method="POST">
		  	<div class="form-group">
			    <label for="exampleInputTour">Tour Name</label>
			    <input type="text" class="form-control" name="tour" id="exampleInputTour" placeholder="Tour Name" required>
		 	</div>
			<div class="form-group">
			    <label for="exampleInputfirst">First Name</label>
			    <input type="text" class="form-control" name="fname" id="exampleInputfirst" placeholder="First Name" required>
		 	</div>
		 	<div class="form-group">
			    <label for="exampleInputlast">Last Name</label>
			    <input type="text" class="form-control" id="exampleInputlast" name="lname" placeholder="Last Name" required>
		 	</div>
		  	<!-- <div class="form-group">
			    <label for="exampleInputEmail1">Email Address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" required>
		  	</div>-->
		  	<div class="stars">
		  	<div class="form-group">
		  		<p><strong>Rate The Tour Experience</strong></p>			   
		  		<input class="star star-5" id="star-5" type="radio" value="5" name="star"/>
			    <label class="star star-5" for="star-5"></label>
			    <input class="star star-4" id="star-4" type="radio" value="4" name="star"/>
			    <label class="star star-4" for="star-4"></label>
			    <input class="star star-3" id="star-3" type="radio" value="3" name="star"/>
			    <label class="star star-3" for="star-3"></label>
			    <input class="star star-2" id="star-2" type="radio" value="2" name="star"/>
			    <label class="star star-2" for="star-2"></label>
			    <input class="star star-1" id="star-1" type="radio" value="1" name="star"/>
			    <label class="star star-1" for="star-1"></label>
		  		</div>
		  	</div>
		  	<!-- <div class="form-group">
			    <label for="exampleInputImprove">What we need to improve?</label>
			    <input type="text" class="form-control" name="improve" id="exampleInputImprove" placeholder="Text Input">
		 	</div> -->
		  	<div>
		  		<button type="submit" class="btn btn-success btn-lg">Submit</button>
		  	</div>
		</form>

	</div>
<script src="js\jquery-2.1.4.js"></script>
<script src="js\bootstrap.min.js"></script>
</body>
</html>