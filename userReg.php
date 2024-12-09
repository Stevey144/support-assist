<?php 

define("HOST", 'localhost');
define("USERNAME", 'root');
define('PASSWORD', '');
define('DBNAME', 'admin_assistance');

$url = "http://ipinfo.io/json"; // Replace 'json' with 'YOUR_TOKEN/json' for more detailed info if you have an API token.

// Fetch data from the IPInfo API
$response = file_get_contents($url);
$details = json_decode($response);

// Extract details
$ip = $details->ip;          // User's IP address
$city = $details->city;      // User's city
$region = $details->region;  // User's state/region
$country = $details->country; // User's country
$postal = isset($details->postal) ? $details->postal : 'Not Available'; // Postal code
$loc = $details->loc;        // Latitude and Longitude


$link = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$phonenumber = $_POST['phone'];

	$sql = "insert into user_details (email,phonenumber,ip,city,region,country,postal,loc) values ('$email','$phonenumber','$ip','$city','$region','$country','$postal','$loc')";

 $myquery = mysqli_query($link, $sql);
 if ($myquery) {
header('Location:success.php');
 }
 else{
 	echo "Error processing request - possibly data connection error";
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
