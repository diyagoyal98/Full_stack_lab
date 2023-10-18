<?php

$host="localhost";
$user="root";
$pass="";
$db="deom_php";

$conn=mysqli_connect($host,$user,$pass,$db);

if($conn)
{
    echo "Conection established";
}
else
echo "databas not connected";
?>