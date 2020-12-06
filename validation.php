<?php
session_start();

// initializing variables
$username = "";
$Password = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'admin', 'agarwal2', 'LPG1');


// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = $_POST['username']);
  $Password = $_POST['Password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($Password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$Password = md5($Password);
  	$query = "SELECT * FROM Registrations WHERE username='$username' AND Password='$Password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: home.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
