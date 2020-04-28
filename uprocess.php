<?php
include 'connectdb.php';
$email=$_POST['email'];
$psw=$_POST['psw'];

$query="select * from users where email='$email' AND psw='$psw'";
$res=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($res);

if($result)
{
 session_start();
 $_SESSION['email']=$email;
 header("location: user_dash.php");
}
else
{
   header("location: userlogin.html");
}
?>