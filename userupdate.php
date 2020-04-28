<?php

session_start();
$mail = $_SESSION['email'];
if(!isset($_SESSION['email']))
{
header("location: home.html");
}

include 'connectdb.php';

$tourname=$_POST['tour'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$nperson=$_POST['persons'];
$query="delete from uregistration where email='$mail'";
if(mysqli_query($conn,$query))
{
// include "user_reg_tour.php";
$query1="INSERT INTO uregistration(tourname,fname,lname,email,nperson) VALUES('$tourname','$fname','$lname','$mail','$nperson')";
if(mysqli_query($conn,$query1))
{
include "user_reg_tour.php";
}
}
else
{
echo "data not updated";
}
?>
 

