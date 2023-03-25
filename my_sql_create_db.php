<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "myTESTDB";
$conn= mysqli_connect($hostName,$userName,$password, $dbName);

//check if the connection set successfully
if($conn){
    echo"connection was successfull";
}

//create database

// $sql = "CREATE DATABASE myTESTDB";
// mysqli_query($conn,$sql)


//create table inside the databse






?>