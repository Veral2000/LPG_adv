<?php 

session_start();
if(!isset($_SESSION['username'])){
	header('Location:login.php')

?>

<html>
<head>
	<title>Home Page</title>
</head>

<Body>
	<a href="logout.php"> LOGOUT </a>
	<h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
	
</Body>
</html>
