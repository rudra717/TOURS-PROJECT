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
	<title>Admin Delete Tour</title>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<style type="text/css">
		body{
			background: url("images/photo1.jpg");
			background-repeat: no-repeat;
			background-size: cover; 
			font-size: ; 
		}
		#m1{
			margin-top: 70px;
		}
		.dmy{
			width: 100px;
			margin-left: 13px;
		}
		.ft{
			width: 100px;

		}
		label{
			font-size: 1.2em;
			color: white;
		}
		h1{
			color: white;
			text-align: center;
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
					<li class="active"><a href="admin_delete.php">Delete Tour</a></li>
					<!-- <li><a href="#">User's View Details</a></li> -->
					<li><a href="admin_user_report.php">User's Report</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="alogout.php"><img src="icons\icons8-shutdown-26.png"> Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container" id="m1">
		<h1>Enter the Tour Name to be deleted:</h1>
		<form action="deletetour.php" method="POST">
			<div class="form-group">
			    <label for="exampleInputTourName">Tour Name</label>
			    <input type="text" class="form-control" name="tourname" id="exampleInputTourName" placeholder="Tour Name" required>
		 	</div>
		  <button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-ok"></span> Confirm</button>
		</form>
	</div>
<script src="js\jquery-2.1.4.js"></script>
<script src="js\bootstrap.min.js"></script>
</body>
</html>