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
$star=$_POST['star'];

$query="INSERT INTO userfeedback(tourname,fname,lname,email,rate) VALUES('$tourname','$fname','$lname','$mail','$star')";

if(mysqli_query($conn,$query))
{
include 'user_reg_tour.php';
}
else
{
echo "data not-insrted";
}
?>