<?php
// echo "this is to show sql database connection";
//ways to connect to a mysql database
// 1. MySqli extension
// 2. PDO
// connecting to database


$servername = "localhost";
$username = "root";
$password = "";

//create a connection object

$conn = mysqli_connect($servername, $username, $password);

if(!$conn)
    {die ("Sorry failed to connect".mysqli_connect_error());}

else {
    echo "connection was successfull";
}
?>