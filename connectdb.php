<?php
$server="localhost";
$username="root";
$password="";
$dbname="RDN tour";

$conn=mysqli_connect($server,$username,$password,$dbname);

if(!$conn) { 
    die("connection failed: ".mysqli_connect_error());
}
?>