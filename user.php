<?php

include 'connectdb.php';

$tourname=$_POST['tourname'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$eadd=$_POST['eadd'];

$nperson=$_POST['nperson'];
$query="select * from uregistration where eadd='$eadd'";
$res=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($res);

if($result)
{
 echo"success";
 include "adminpage.html";
}
else
{
 echo"error";
}
?>