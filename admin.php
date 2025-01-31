<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<style>
		*{
			font-family:Roboto !important;
			font-size:14px !important;
		}
		.home-link{
			color:white !important;
		}



		</style>

</head>
<body>
	<div class="container">
		<header>
			<h1>Welcome to Village Voice Admin Page </h1>
		</header>
		<section>
			<article>
			<h1 class="intro-text padding">Welcome Admin</h1>
			<p  class="intro-text">Please Login with super Admin Credentials to see the list of aid and support requested by rural communities inhabitants</article>
			<aside>
				<h1>Login Form</h1>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<input type="text" name="username" placeholder="Enter Username" required>
					<input type="password" name="password" placeholder="Enter Password" required><br>
					<input type="submit" name="submit">
					<p>Back to Home <a href="index.php" class="home-link">Click here.</a></p>
				</form>
			</aside>
		</section>
	</div>

</body>
</html>
<?php
session_start();
include("includes/db-config.php");

$link = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME); 


if(isset($_POST['submit'])) {

$username = $_POST['username'];
$password = $_POST['password'];
if (($username=="staff-Admin") && ($password=="12372")){
$_SESSION['admin_logged_in'] = true;
  header('Location:myuserdetails.php');
  exit();
}
else{

$message = "Invalid Credentials entered, please verify details!"; // Your alert message

echo "<script type='text/javascript'>
    alert('$message');
</script>";
exit; // Stop further script execution
}

}

 ?>


 

