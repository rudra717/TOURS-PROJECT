<?php

session_start();

if(isset($_SESSION['email']))
{
	session_destroy();
header("location: home.html");
}
else
{
	header("location: home.html");
}
?>