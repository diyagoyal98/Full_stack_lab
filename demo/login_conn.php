<?php
$host="localhost";
$user="root";
$pass="";
$db="php_form_login";

$conn=mysqli_connect($host,$user,$pass,$db);
if($conn)
{
    echo "connection established";
}
else
echo "connection not established";

?>
