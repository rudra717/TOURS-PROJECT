<?php
session_start();
$mail = $_SESSION['email'];
if(!isset($_SESSION['email']))
{
header("location: home.html");
}
include 'connectdb.php';

$name=$_POST['tour'];


$query="delete from uregistration where tourname='$name' AND email='$mail'";

if(mysqli_query($conn,$query))
{
include "user_reg_tour.php";
}
else
{
echo "data not deleted";
}
?>