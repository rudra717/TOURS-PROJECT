<?php
include 'connectdb.php';
$eadd=$_POST['eadd'];
$psw=$_POST['psw'];

$query="select * from admindb where eadd='$eadd' AND psw='$psw'";
$res=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($res);

if($result)
{
 session_start();
$_SESSION['eadd']=$eadd;
 header("location: adminpage.php");
}
else
{
   header("location: adminlogin.html");
}
?>