<?php
// isset is used to watch if the method id post or not 
if(isset($_POST)){
    $email = $_POST["email"];
    $password = $_POST["password"];
}

// submit this to a database 
echo "{$email} {$password}";
?>