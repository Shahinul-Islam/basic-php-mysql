<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "form data";
$conn= mysqli_connect($hostName,$userName,$password, $dbName);
//get data from form
if(isset($_POST)){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
}
$sql = "INSERT INTO `contact from form` (`sl`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$password')";
$result = mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Thank You</title>
  </head>
  <body>
  <div class="alert alert-success" role="alert">
  Thank you for contacting with us
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
