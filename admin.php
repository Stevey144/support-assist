<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<header>
			<h1>Welcome to support assistance Admin Page </h1>
		</header>
		<section>
			<article>
			<h1>plese login to see the list of student regitered on the platform</h1>
			<p>Enter your login details to enjoy full access to our  aids and facilities.</article>
			<aside>
				<h1>Login Form</h1>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<input type="email" name="email" placeholder="Email Address" required>
					<input type="password" name="password" placeholder="Enter Password" required><br>
					<input type="submit" name="submit">
					<p>Don't have an account? <a href="register.php">Register here.</a></p>
					
				</form>
			</aside>
		</section>
	</div>

</body>
</html>
<?php
define("HOST", 'localhost');
define("USERNAME", 'root');
define('PASSWORD', '');
define('DBNAME', 'admin_assistance');

$link = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME); 


if(isset($_POST['submit'])) {

$email = $_POST['email'];
$password = $_POST['password'];
if (($email=="stephenogechi455@gmail.com") && ($password=="123")){
  header('Location:myuserdetails.php');

// $sql = "select * from medical";
// if($result = mysqli_query($link, $sql)){
//     if(mysqli_num_rows($result) > 0){
//         echo "<table>";
//             echo "<tr>";
//                 echo "<th>id</th>";
//                 echo "<th>value</th>";
//             echo "</tr>";
//         while($row = mysqli_fetch_array($result)){
//             echo "<tr>";
//                 echo "<td>" . $row['id'] . "</td>";
//                 echo "<td>" . $row['value'] . "</td>";
//             echo "</tr>";
//         }
//         echo "</table>";
//         // Free result set
//         mysqli_free_result($result);
//     } else{
//         echo "No records matching your query were found.";
//     }
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }


}



	

}

 ?>


 

