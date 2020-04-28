<?php

include 'connectdb.php';

$name=$_POST['tourname'];
$time=$_POST['time'];
$from=$_POST['from'];
$to=$_POST['to'];
$through=$_POST['through'];


$query="delete from tour where name='$name'";
if(mysqli_query($conn,$query))
{
$query1="INSERT INTO tour(name,time,start,end,through) VALUES('$name','$time','$from','$to','$through')";

if(mysqli_query($conn,$query1))
{
include 'adminpage.php';
}
}
else
{
echo "data not updated";
}
?>
 
