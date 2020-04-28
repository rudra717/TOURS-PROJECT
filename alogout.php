<?php

session_start();

if(isset($_SESSION['eadd']))
{
	session_destroy();
header("location: home.html");
}
else
{
	header("location: home.html");
}
?>