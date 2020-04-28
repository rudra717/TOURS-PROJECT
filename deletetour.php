<?php

include 'connectdb.php';

$name=$_POST['tourname'];


$query="delete from tour where name='$name'";

if(mysqli_query($conn,$query))
{
include "adminpage.php";
}
else
{
echo "data not deleted";
}
?>