<?php 

include("includes/db-config.php");

$link = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$phonenumber = $_POST['phone'];

	$sql = "insert into user_details (email,phonenumber) values ('$email','$phonenumber')";

 $myquery = mysqli_query($link, $sql);
 if ($myquery) {
header('Location:success.php');
 }
 else{
 	echo "please fill out the fields they are required";
 }

}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Village Voice</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-3 pt-3">
  <div class="jumbotron">

  <h4>Your details have been successfully entered, a representative will get back to you as soon as possible</h4>
  
  <div class="text-center">
  <a href="index.php"><div class="btn btn-primary center">Go back</div></a>
  </div>
  </div>
  
  

</div>

</body>
</html>
