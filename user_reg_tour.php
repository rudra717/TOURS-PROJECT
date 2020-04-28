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
	<title>User Registered Tour</title>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<style type="text/css">
		body{
			background: url("images/photo1.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		} 
		table{
			color: white;
			margin-bottom: 20px;
			margin-top: 20px;
		}
		h1{
			margin-top: 70px;
			color: white;
			text-align: center;
			text-decoration: underline;
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
					<li class="active"><a href="user_reg_tour.php">Registered Tour</a></li>
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
	<?php
 include "connectdb.php";

 mysql_select_db('connectdb.php');

$sql="select * from uregistration where email = '$mail'";

$record=mysqli_query($conn,$sql);


?>


	<div class="container">
		<h1>The Registered Tour</h1>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Tour name</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email address</th>
					<th>No. of Persons</th>
				</tr>
			</thead>
			
<?php

while($uregistration=mysqli_fetch_assoc($record))
{
 echo "<tr>";
 echo "<td>".$uregistration['tourname']."</td>";
 echo "<td>".$uregistration['fname']."</td>";
 echo "<td>".$uregistration['lname']."</td>";
 echo "<td>".$uregistration['email']."</td>";
 echo "<td>".$uregistration['nperson']."</td>";
 echo "</tr>";
}

?>
 
		</table>
		<a href="user_update.php" class="btn btn-success">Update</a>
		<a href="user_cancel.php" class="btn btn-danger">Cancel</a>
	</div>
<script src="js\jquery-2.1.4.js"></script>
<script src="js\bootstrap.min.js"></script>
</body>
</html>