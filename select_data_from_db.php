<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "form data";
$conn= mysqli_connect($hostName,$userName,$password, $dbName);
//get data from table
$sql = "SELECT * FROM `contact from form`";
$result = mysqli_query($conn, $sql);
//find the number of records
$num =  mysqli_num_rows($result);
//  echo $num;
if($num>0){
    while($row = mysqli_fetch_assoc($result)){
        // $row = mysqli_fetch_assoc($result);
    // var_dump($row);
    echo $row['sl']." ".$row['name']." ".$row["email"];
    echo "<br>";

    };
}
?>