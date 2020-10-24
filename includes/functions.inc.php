<?php
require_once 'db-config.php';

function sanitize_email($email)
{
	global $link;
	$email = htmlentities(trim($email));
	$email = filter_var($email, FILTER_VALIDATE_EMAIL);  //filter is use to validate email, url, web address

	if ($email) {
		$email = mysqli_real_escape_string($link, $email);
		return $email;
	} return false;
}

function sanitize($input)
{
	global $link;
	$input = htmlentities(strip_tags(trim($input)));
	$input = mysqli_real_escape_string($link, $input);
	return $input;
}

function check_duplicate($email)
{
	global $link;
	$sql = "SELECT email FROM students WHERE email = '$email'";
	$query = mysqli_query($link, $sql);
	if ($query) {
		if (mysqli_num_rows($query) > 0) {
			return true;
		} else {
			return false;
		}
	}
}

function register_student($post)
{
	global $link;
	$err_flag = false;
	$errors = [];

	if (!empty($post['name'])) {
		$name = sanitize($post['name']);
	} else {
		$err_flag = true;
		$errors[] = "Please enter your fullname";
	}

	if (!empty($post['email'])) {
		$tmp = sanitize_email($post['email']);
		if ($tmp) {
			if (!check_duplicate($tmp)) {
				$email = $tmp;
			} else {
				$err_flag = true;
				$errors[] = "Sorry, this email has already used to register";
			}
		} else {
			$err_flag = true;
			$errors[] = "Please enter a valid email address";
		}
	} else {
		$err_flag = true;
		$errors[] = "Please enter your email";
	}

	if (!empty($post['password1'])) {
		$password1 = sanitize($post['password1']);
	} else {
		$err_flag = true;
		$errors[] = "Please enter your password";
	}

	if (!empty($post['password2'])) {
		$password2 = sanitize($post['password2']);
	} else {
		$err_flag = true;
		$errors[] = "Please re-enter your password";
	}

	if (isset($password1) && isset($password2)) {
		if ($password1 === $password2) {
			$password = sha1('2#%&.!'.$password2);  //we can use password_hash('2#%&.!'.PASSWORD_DEFAULT);
		} else {
			$err_flag = true;
			$errors[] = "Sorry, passwords do not match";
		}
	}

	if (!empty($post['address'])) {
		$address = sanitize($post['address']);
	} else {
		$err_flag = true;
		$errors[] = "Please enter your address";
	}
	if(sanitize_image($file, $errors)===false)

	if ($err_flag === false) {
		# insert into database
		$sql = "INSERT INTO students (fullname, email, password, address) VALUES ('$name', '$email', '$password', '$address')";
		$query = mysqli_query($link, $sql);
		if ($query) {
			return true;
		} else {
			$errors[] = "Oops, something went wrong!";
			return $errors;
		}
	} else {
		return $errors;
	}
}

function login_student($post)
{
	global $link;
	$errors = array();
	$err_flag = false;

	if (!empty($post['email'])) {
		if (sanitize_email($post['email'])) { //$tmp can be used here to perform the same task
			# code...
		$email = $post['email'];
		} else {
			$err_flag = true;
			$errors[] = "Please enter a valid email";
		} 
		} else {
			$err_flag = true;
			$errors[] = "Please enter your email address";
			}

	if (!empty($post['password'])) {
		$password = sanitize($post['password']);
		$password = sha1("2#%&.!".$password);
	} else {
		$err_flag = true;
		$errors[] = "Please enter your password";
	}

	if ($err_flag === false) {
		$sql = "SELECT * FROM students WHERE email = '$email' AND password = '$password'";
		$query = mysqli_query($link, $sql);
		if ($query) {
			if (mysqli_num_rows($query) > 0) {
			$row = mysqli_fetch_array($query);
			$_SEESION['user_id'] = $row['id'];			
				return true;
			} else {
				$errors[] = "Invalid login details";
				return $errors;
			}
		}
	} return $errors;
}


