<?php 

define("HOST", 'localhost');
define("USERNAME", 'root');
define('PASSWORD', '');
define('DBNAME', 'admin_assistance');

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
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-3 pt-3 ">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
    </div>
    <div class="form-group">
      <label for="pwd">Phone number:</label>
      <input type="phone" class="form-control" id="pwd" placeholder="Enter Phone number" name="phone" required="">
    </div>
    <div class="row">
      <div class="col-xs-6 col-md-6 col-lg-6">
 <button type="submit" class="btn btn-primary" name="submit">Submit</button>
 </div> 

 <div class="col-xs-6 col-md-6 col-lg-6 ">
 <a href="admin.php"><div class="btn btn-primary">goback</div></a>
 </div>

 </div>
  </form>
</div>

</body>
</html>
