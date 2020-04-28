<?php

include 'connectdb.php';

$name=$_POST['name'];
$time=$_POST['time'];
$start=$_POST['from'];
$end=$_POST['to'];
$through=$_POST['through'];

$query="INSERT INTO tour(name,time,start,end,through) VALUES('$name','$time','$start','$end','$through')";

if(mysqli_query($conn,$query))
{
include 'adminpage.php';
}
else
{
echo "data not-insrted";
}

?>