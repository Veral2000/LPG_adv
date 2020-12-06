<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register Page</title>
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

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img href="#" src="https://cdn4.iconfinder.com/data/icons/summer-and-holidays-9/90/433-512.png" alt="logo" style="width:40px;">
  </a>
  
  <ul class="nav nav-pills">
   <li class="nav-item">
     <a class="nav-link active" href="#">Register</a>
    </li>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Live Status</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Bookings</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">My Account</a>
    </li>
  </ul>
</nav>
<br>


<div class="container">

  <center><h1><b>Advance LPG System</h2></b></center>
  <br> 
  <br>
  <form action="phpScript.php" onsubmit="return validateForm()" method="post"> 
    <div class="form-group" style>
      <p1><label for="Consumer">Consumer No:</label></p1>
      <input type="Consumer" class="form-control" id="Consumer" placeholder="Enter Consumer No." name="Consumer">
    </div>
    <div class="form-group">
      <p1><label for="Name">Name:</label></p1>
      <input type="username" class="form-control" id="username" placeholder="Enter Name" name="username">
    </div>
    <div class="form-group">
      <p1><label for="Email">Email ID:</label></p1>
      <input type="Email" class="form-control" id="Email" placeholder="Enter Email ID" name="Email">
    </div> 
    <div class="form-group">
      <p1><label for="Contact">Contact No:</label></p1>
      <input type="Contact" class="form-control" id="Contact" placeholder="Enter Contact" name="Contact">
    </div>
    <div class="form-group">
      <p1><label for="Password">Password:</label></p1>
      <input type="Password" class="form-control" id="Password" placeholder="Enter Password" name="Password">
    </div>
    <div class="form-group">
      <p1><label for="Address">Address:</label></p1>
      <input type="Address" class="form-control" id="Address" placeholder="Enter Address" name="Address">
    </div> 
    <div class="form-group form-check">
      <label class="form-check-label">
        <p1><sub><input class="form-check-input" type="checkbox" name="remember">Accept The Policy/Aggrement</sub></p1>
      </label>
    </div>
    <button type="submit" onsubmit="return validateForm()" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>

<script>

function validateForm(){
var ConsumerV = document.forms["Consumer"]; 
var EmailV = document.forms["Email"];
var NameV = document.forms["username"]; 
var ContactV = document.forms["Contact"];
var PasswordV = document.form["Password"]; 
var AddressV = document.forms["Address"]; 
if(ConsumerV.value == "" || EmailV.value == "" || NameV.value == "" || ContactV.value == "" || PasswordV.value == "" || AddressV.value == "" ){window.alert("Enter valid data");return false;}     else {
}                      
return true;
}
</script>
