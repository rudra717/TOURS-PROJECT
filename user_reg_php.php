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
$nperson=$_POST['person'];

$query="INSERT INTO uregistration(tourname,fname,lname,email,nperson) VALUES('$tourname','$fname','$lname','$mail','$nperson')";
$aa=mysqli_query($conn,$query);

 echo $aa=true;

if($aa) 
{
 include "user_reg_tour.php";
}
else
{
echo "data not-inserted";
}
?>