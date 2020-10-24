<?php 
session_start();
if (!isset($_SESSION['user_id'])) {
	header("Location: login.php");
	exit();
}
 ?>
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
			<h1>Welcome to Aptech </h1>
		</header>

<nav>
	<p><a href="logout.php">Logout</a></p>
</nav>