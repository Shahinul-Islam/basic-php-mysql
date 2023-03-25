<?php
echo "this is for creating table in php mysql";
echo '<br>';

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "myTESTDB";
$conn= mysqli_connect($hostName,$userName,$password, $dbName);

//check if the connection set successfully
if($conn){
    echo"connection was successfull";
}
// $sql = "
// CREATE TABLE `varatia data php` (`sn` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `title` VARCHAR(12) NOT NULL , `joining year` DATE NOT NULL , `bill paid` BOOLEAN NOT NULL , PRIMARY KEY (`sn`));

// ";

// insert data into table

$sql = "INSERT INTO `varatia data php` (`sn`, `name`, `title`, `joining year`, `bill paid`) VALUES (NULL, 'rejeya', 'coder', '2023-02-05', 'false')";
$result = mysqli_query($conn, $sql);
?>