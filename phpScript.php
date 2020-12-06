<?php

$Consumer = $_POST['Consumer'];
$username = $_POST['username'];
$Contact = $_POST['Contact'];
$Email = $_POST['Email'];
$Address = $_POST['Address'];
$Password = $_POST['Password'];


$servername = "localhost";
$usernamelogin = "admin";
$password = "agarwal2";
$db = "LPG1";

$conn = new mysqli($servername, $usernamelogin, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "insert into Registrations(Consumer, username, Contact, Email, Address, Password) values('$Consumer','$username','$Contact','$Email','$Address', '".md5($Password)."')";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Datasaved Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<style>

body {
  background-image: url('https://rbcdsai.iitm.ac.in/images/carousel2_bg.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}

h1 {
  font-size:45px;
  color: hsla(11, 67%, 28%, 0.9);
  font-family:Cambria;
  }
  
p1 {
  color: hsla(0, 85%, 55%, 0.9);
  font-family:Cambria;
  font-size:20px;
  }
  
</style>

<body>
<br>
<center>
<h1>Registered Successfully</h1><br>
<h1><?php if ($conn->query($sql) === TRUE) {
	echo "ADDED: ".$Consumer.", ".$username.",".$Contact.",".$Email.", ".$Address.", ".$Password;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
  
} $conn->close();
 ?>
 
</h1>
<form align="center" action="login.php">
    <br><br><input type="submit" value="Return to Login Page"> 
</form><br><br>

</body>
</html>


