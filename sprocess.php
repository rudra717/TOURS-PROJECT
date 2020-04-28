<?php

include 'connectdb.php';

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$psw=$_POST['psw'];
$query="INSERT INTO `users`(`fname`, `lname`, `email`, `psw`) VALUES ('$fname','$lname','$email','$psw')";
mysqli_query($conn,$query);
include 'userlogin.html';

?>