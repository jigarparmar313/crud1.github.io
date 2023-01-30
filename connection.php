<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "responsiveform1";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    // echo "Connection ok";
}
else
{
    echo "Connection failed";
}
?>